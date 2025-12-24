<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\Relations;
use Modules\User\Entities\User;
use Modules\Order\Entities\BaseOrder;
use DB;
use Auth;

use ThrowException;

class BaseEntity extends Model
{
    // use SoftDeletes;
    static public $resourceName = '资源';
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    protected $isUseListWeightSort = false;   // 是否使用list_weight字段排序
    protected $currentPage = 1;
    protected $perPage = 100;
    protected $itemTotal = 0;
    protected $only = false;
    public $builder = null;
    public $list = false;

    // protected $appends = ['node_type_text'];

    // 是否展示
    public function scopeListed($query)
    {
        return $query->where('is_listed', 1);
    }

    public function scopeOnStock($query)
    {
        return $query->where('status', 1);
    }

    public function scopeOffStock($query)
    {
        return $query->where('status', 0);
    }

    // public function scopeCreDate($query)

    // 筛选渠道
    public function scopeByChannel($query, $channel)
    {
        return $query->where('channel_id', $channel->id);
    }

    // 通过手机号来搜索user_id
    public function scopeUserPhone($query, $phone)
    {
        $user = User::where('phone', $phone)->first();

        return $query->where('user_id', @$user->id ?: 0);
    }

    // 通过订单编号来搜索order_id
    public function scopeOrderNumber($query, $number, $idKey = 'order_id')
    {
        $item = BaseOrder::where('number', $number)->first();

        return $query->where($idKey, @$item->id ?: 0);
    }

    // 旧，后续删除
    public  function scopeBelongUser($query, $user)
    {
        return $query->where('user_id', $user->id);
    }

    // 新
    public  function scopeBelongsUser($query, $user)
    {
        return $query->where('user_id', $user->id);
    }

    //
    public function scopeClientDisplayFilter($query)
    {
        $clientType = Auth::clientType();

        if ($clientType === 'miniapp') {
            return $query->whereIn('display_client_type', [1, 2]);
        }
        elseif ($clientType === 'app') {
            return $query->whereIn('display_client_type', [1, 3]);
        }
        else {
            return $query->where('display_client_type', 1);
        }
    }

    // 搜索
    public function scopeSearch($query, $key)
    {
        return $query->where('title', 'like', '%' . $key . '%');
    }

    // 按id筛选并排序
    public function scopeIds($query, $ids)
    {
        $ids = $ids ?: [];
        return $query->whereIn('id', $ids)->orderByRaw("FIELD(id, " . implode(", ", $ids) . ")");
        return $query->whereIn('id', $ids);
    }

    public function getNodeTypeTextAttribute()
    {
        $map = config('map.node_type_text');

        return @$map[$this->node_type];
    }

    public function getActivityTypeTextAttribute()
    {
        $map = config('map.activity_type_text');

        return @v($map[$this->activity_type], '');
    }

    // 所属渠道
    public function channel()
    {
        return $this->belongsTo('\Modules\Agent\Entities\Channel', 'channel_id');
    }

    // 所属node
    public function node()
    {
        return $this->morphTo(__FUNCTION__, 'node_type', 'node_id');
    }

    // 统计
    public function stats()
    {
        return $this->hasOne('\Modules\Stats\Entities\NodeStats', 'node_uuid', 'uuid')->whereNull('day')->whereNull('user_id');
    }

    // 所属活动
    public function activity()
    {
        return $this->morphTo(__FUNCTION__, 'activity_type', 'activity_id');
    }

    // 对JsonField进行更新
    public function incrementJsonField($field, $propertyName, $total)
    {
        $sql = "UPDATE " . $this->table . " SET " . $field . " = JSON_SET(COALESCE(" . $field . ", JSON_OBJECT()), '$.\"" . $propertyName . "\"', COALESCE(JSON_EXTRACT(" . $field . ", '$.\"" . $propertyName . "\"'), 0) + " . $total . ") WHERE id = " . $this->id;

        // \Log::error($sql);

        DB::statement($sql);
    }

    // 获取营销活动
    static public function getNode($nodeType, $where)
    {
        $class = config('map.node_type')[$nodeType];

        return $class::getEntity($where, false);
    }

    // 获取统计item
    public function getStats()
    {
        return \Modules\Stats\Entities\NodeStats::findOrCreate([
            'user_id' => NULL,
            'node_type' => $this->nodeType,
            'node_id' => $this->id,
            'node_uuid' => $this->uuid,
            'day' => NULL
        ]);
    }

    //
    public function getArray($filter = null)
    {
        $builder = $this->builder ?: $this;
        $list = $this->list->toArray();
        // 屏蔽字段
        if ($this->only)
            $list = arrayFilter($list, ['*' => $this->only]);

        if ($filter)
            $list = arrayFilter($list, ['*' => $filter]);

        return $list;
    }

    //
    public function getInfo($filter = [])
    {
        return arrayFilter($this->toArray(), $filter);
    }

    public function initList()
    {
        $builder = $this->builder ?: $this;

        $this->itemTotal = $builder->count();

        // 排序字段
        $sortByField = $this->isUseListWeightSort ? 'list_weight' : 'id';

        $this->list = $this->list ?: $builder->skip(($this->currentPage - 1) * $this->perPage)->take($this->perPage)->orderBy($this->table . '.' . $sortByField, 'desc')->get();
    }

    // 是否处于下架状态
    public function isOffStock()
    {
        return $this->status == 0;
    }

    // 是否处于上架状态
    public function isOnStock()
    {
        return $this->status == 1;
    }

    public function pluck($field)
    {
        return $this->list->pluck($field);
    }

    public function generateListResponse()
    {
        $builder = $this->builder ?: $this;

        $perPage = $this->perPage ?: 10;
    	$pageTotal = ceil($this->itemTotal / $perPage);

        $list = $this->list->toArray();
        // 屏蔽字段
        if ($this->only) {
            $list = arrayFilter($list, ['*' => $this->only]);
        }

    	return [
    		'list' => $list,
    		'current_page' => $this->currentPage,
    		'item_total' => $this->itemTotal,
    		'page_total' => $pageTotal
    	];
    }

    public function each($fun)
    {
        $this->list = $this->list->each(function ($item, $key) use($fun) {
            $fun($item, $key);
        });
    }

    static public function getEntity(Array $options, $throwException = true)
    {
    	$class = get_called_class();

        $where = array_except($options, ['has', 'with', 'with_count', 'builder']);

        if (@$options['builder']) {
            $entity = $options['builder']->where($where);
        }
        else {
            $entity = $class::where($where);
        }

        if (@v($options['has']))
            $entity = $entity->has($options['has']);

        if (@v($options['with']))
            $entity = $entity->with($options['with']);

        if (@v($options['with_count']))
            $entity = $entity->withCount($options['with_count']);

        $entity = $entity->first();

    	$entity || ($throwException && ThrowException::NotFound($class::$resourceName.'不存在'));

    	return $entity;
    }

    static public function getList($options = [], $shouldInit = true)
    {
    	$class = get_called_class();
    	$item = new $class();

        $options = $class::beforeGetList($options);

        if (@$options['ip_id']) {
            $options['where']['ip_id'] = intVal($options['ip_id']);
            $options['or_where'] = [
                ['category_ids', 'REGEXP', '(^|,| |[)'.$options['ip_id'].'(,| |]|$)']  
            ];
        }

        if (@$options['is_public']) {
            $options['where']['is_public'] = intVal($options['is_public']);
        }

        if (@$options['category_id']) {
            $options['scopes']['category'] = intVal($options['category_id']);
        }

        if (@$options['category_ids']) {
            if (!is_array($options['category_ids'])) {
                $options['category_ids'] = json_decode($options['category_ids']);
            }
            $options['scopes']['categories'] = $options['category_ids'];
        }

        if (isset($options['sort'])) {
            if ($options['sort'] == 'price_desc')
                $options['order_by'] = ['money_price' => 'desc'];
            elseif ($options['sort'] == 'price_asc')
                $options['order_by'] = ['money_price' => 'asc'];
            elseif ($options['sort'] == 'time_desc')
                $options['order_by'] = ['created_at' => 'desc'];
            elseif ($options['sort'] == 'time_asc')
                $options['order_by'] = ['created_at' => 'asc'];
            elseif ($options['sort'] == 'sale_desc')
                $options['order_by'] = ['sales' => 'desc'];
            elseif ($options['sort'] == 'sale_asc')
                $options['order_by'] = ['sales' => 'asc'];
        }

    	$item->currentPage = intVal(@v($options['page'], $item->currentPage));
        $item->perPage = intVal(@v($options['per_page'], $item->perPage));

        $item->only = @v($options['only']);

        $item->builder = @v($options['builder'], $item->newQuery());



        // if (isset($options['sort_by'])) {
        //     $item->builder->sortBy($options['sort_by']);
        // }

        if (isset($options['key'])) {
            $options['scopes'] = @v($options['scopes'], []);
            $options['scopes']['search'] = $options['key'];
        }

        if (isset($options['left_join'])) {
            $item->builder->leftJoin($options['left_join'][0], $options['left_join'][1], $options['left_join'][2], $options['left_join'][3]);
        }

        if (isset($options['inner_join'])) {
            $item->builder->join($options['inner_join'][0], $options['inner_join'][1], $options['inner_join'][2], $options['inner_join'][3]);
        }

    	if (isset($options['where'])) {
    		$item->builder->where($options['where']);
    	}

        if (@$options['created_start_at']) {
            $time = $options['created_start_at'];
            if (strlen($time) === 10) {
                $time .= ' 00:00:00';
            }
            $item->builder->where('created_at', '>', $time);
        }

        if (@$options['created_end_at']) {
            $time = $options['created_end_at'];
            if (strlen($time) === 10) {
                $time .= ' 23:59:59';
            }
            $item->builder->where('created_at', '<', $time);
        }

        if (isset($options['with'])) {
            $item->builder->with($options['with']);
        }

        if (isset($options['with_count'])) {
            $item->builder->withCount($options['with_count']);
        }

        if (isset($options['user_phone'])) {
            $options['scopes']['userPhone'] = $options['user_phone'];
        }

        if (isset($options['scopes'])) {
            foreach ($options['scopes'] as $key => $scope) {
                if (is_integer($key)) {
                    $item->builder->$scope();
                }
                else {
                    $item->builder->$key($scope);
                }
            }
        }

        if (isset($options['where_has'])) {
            if (is_array($options['where_has']))
                $item->builder->whereHas($options['where_has'][0], $options['where_has'][1]);
            else
                $item->builder->whereHas($options['where_has']);
        }


        if (isset($options['has'])) {
            foreach ($options['has'] as $has) {
                $item->builder->has($has);
            }
        }

        if (isset($options['advanced_where'])) {
            if (is_array($options['advanced_where'])) {
                foreach ($options['advanced_where'] as $where) {
                    $item->builder->where($where);
                }
            } else {
                $item->builder->where($options['advanced_where']);
            }
        }

        // \Log::error($options);
        if (@$options['ids']) {

            if (!is_array($options['ids']))
                $options['ids'] = json_decode($options['ids'], true);


            if (@count($options['ids']) > 0) {
                $item->builder->whereIn('id', $options['ids']);

                // 取消使用id顺序排序
                $item->builder->orderByRaw("FIELD(id, " . implode(", ", $options['ids']) . ")");
            }
        }

        // 统一使用sort_by作为自定义搜索的key
        if (isset($options['sort_by'])) {
            $arr = explode('-', $options['sort_by']);
            // \Log::error($arr);
            if (@$arr[1]) {
                $item->builder->orderBy($arr[0], $arr[1]);
            }
        }


        if (isset($options['order_by'])) {
            foreach ($options['order_by'] as $key => $value) {
                $item->builder->orderBy($key, $value);
            }
        }


        if (isset($options['where_in'])) {
            foreach ($options['where_in'] as $key => $in) {
                $item->builder->whereIn($key, $in);
            }
        }

        if (isset($options['where_not_in'])) {
            foreach ($options['where_not_in'] as $key => $in) {
                $item->builder->whereNotIn($key, $in);
            }
        }

        if (isset($options['where_null'])) {
            foreach ($options['where_null'] as $v) {
                $item->builder->whereNull($v);
            }
        }

        if (@$options['min_score_price']) {
            $item->builder->where('score_price', '>=', $options['min_score_price']);
        }

        if (@$options['max_score_price']) {
            $item->builder->where('score_price', '<=', $options['max_score_price']);
        }

        if (@$options['min_money_price']) {
            $item->builder->where('money_price', '>=', $options['min_money_price']);
        }

        if (@$options['max_money_price']) {
            $item->builder->where('money_price', '<=', $options['max_money_price']);
        }


        $shouldInit && $item->initList();

    	return $item;
    }


    // 获取builder
    static public function getBuilder($options)
    {
        // \Log::error(self::getList($options, false)->builder->toSql());
        return self::getList($options, false)->builder;
    }

    static public function beforeGetList($options)
    {
        return $options;
    }

    static public function beforeCreated($info)
    {
        return $info;
    }

    static public function create($info)
    {
        $class = get_called_class();

        $info = $class::beforeCreated($info);

        try{
            $info['uuid'] = @v($info['uuid'], uniqid());
            $item = new $class($info);
            $item->save();
        }
        catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e->getMessage());
            ThrowException::Conflict('保存失败，请检查是否填写完整及格式是否正确');
        }

        return $item;
    }

    static public function existOrCreate($where, $info = null)
    {
        $class = get_called_class();

        return $class::isExisting($where) ?: $class::create($info ?: $where) ;
    }

    static public function isExisting($where)
    {
        $class = get_called_class();

        return $class::where($where)->first();
    }

    // 增加访问量
    public function addVisit($total)
    {
        $this->update([
            'visit_total' => $this->visit_total + $total
        ]);
    }

    public function show()
    {
        $this->is_listed = 1;
        $this->save();
    }

    public function hide()
    {
        $this->is_listed = 0;
        $this->save();
    }

    // 更新options字段
    public function setOptions($updateOptions)
    {
        $options = $this->options ?: [];

        $options = array_merge($options, $updateOptions);

        $this->update([
            'options' => $options
        ]);
    }
}

