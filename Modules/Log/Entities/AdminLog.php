<?php

namespace Modules\Log\Entities;

use Modules\Core\Entities\BaseEntity as Model;
use ThrowException;

// use Modules\Core\Traits\Likeable;

class AdminLog extends Model
{
	// use Likeable;

    protected $guarded = [];
    protected $table = 'log_admin_logs';

    protected $appends = ['action_type_key', 'node_type_text'];

    static public $resourceName = '管理后台关键操作的日志记录';

    static public $actionTypeTextMap = [
        'update_fudai_lucky_score' => '更新福袋欧气值',
        'update_lucky_score' => '更新总欧气值',
        'delete_code' => '删除兑换码',
        'delete_sku' => '删除奖品',
        'update_sku' => '编辑奖品',
        'update_inviter' => '更新邀请上级'
    ];

    static public $actionTypeMap = [
        1 => 'update_fudai_lucky_score',      // 更新福袋欧气值
        2 => 'update_lucky_score', 
        3 => 'delete_code',
        4 => 'delete_sku',
        5 => 'update_sku',
        6 => 'update_inviter'
    ];

    protected $casts = [
        'options' => 'json',
        'before' => 'json',
        'after' => 'json'
    ];

    public function admin()
    {
        return $this->belongsTo('\Modules\Admin\Entities\Admin', 'admin_id');
    }

    public function user()
    {
        return $this->belongsTo('\Modules\User\Entities\User', 'user_id');
    }

    // 记录日志
    static public function log($info) 
    {
        return self::create($info);
    }

    // 
    public function getActionTypeKeyAttribute()
    {
        $map = self::$actionTypeMap;
        
        return @v($map[$this->action_type], 'unknow');
    }


    static public function beforeGetList($options)
    {
        if (@$options['action_type']) {
            $options['where']['action_type'] = $options['action_type'];
        }

        if (@$options['admin_id']) {
            $options['where']['admin_id'] = $options['admin_id'];
        }

        return $options;
    }
}
