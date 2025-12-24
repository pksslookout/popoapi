<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;



class NodeService
{
    // 根据nodeType获取对应的class位置
    public function getClass($nodeType)
    {
        $map = config('map')['node_type'];

        return $map[$nodeType];
    }
}
