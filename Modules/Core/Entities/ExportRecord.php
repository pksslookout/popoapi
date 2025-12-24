<?php

namespace Modules\Core\Entities;

use Modules\Core\Entities\BaseEntity as Model;

class ExportRecord extends Model
{
    protected $guarded = [];
    protected $table = 'core_export_records';

    protected $casts = [
        'options' => 'json',
    ];

    protected $appends = ['type_text'];

    static public $resourceName = '导出记录';

    public function getTypeTextAttribute()
    {
        $map = [
            'order' => '订单导出',
            'user_stats' => '用户消费统计'
        ];

        return @$map[$this->type] ?: '未知类型';
    }

    public function run()
    {
        $map = [
            'order' => '\Modules\Order\Exports\OrderExport',
            'user_stats' => '\Modules\Stats\Exports\UserStatsExport'
        ];

        $class = $map[$this->type];

        $fileName = $this->title;

        ini_set('memory_limit', '4080M');
        
        $path = '/export/' . uniqid() . '/' . $fileName . '.xlsx';

        list($total, $url) = $class::exportAll($this->options, $path);

        $this->update([
            'record_total' => $total,
            'url' => $url,
            'status' => 3
        ]);

        // \Log::error($url);
    }
}
