<?php

namespace Modules\Log\Services;

use ThrowException;

// use Modules\Core\Traits\Likeable;

class LogService
{
	// 获取管理员操作日志
	static public function log($logType, $options) {

        if ($logType === 'AdminLog' && env('IS_ADMIN_ACTION_LOG_DISABLE')) {
            return false;
        }

		$class = "\\Modules\\Log\\Entities\\" . $logType;

		return $class::log($options);
	}

	// 删除某个sku
	static public function logDeleteSku($admin, $sku) {

		$node = $sku->activity ?: $sku->product;

		self::log('AdminLog', [
            'admin_id' => $admin->id,
            // 'user_id' => $item->id,
            // 'asset_type' => 'lucky_score',
            'action_type' => 4,
            'describe' => '删除奖品',
            'before' => [
                'sku_title' => $sku->title,
                'sales' => $sku->sales,
                'odds' => $sku->odds . '%',
                'stock' => $sku->stock
                // 'lucky_score' => $before
            ],
            'after' => [
                'sku_title' => '已删除'
                // 'lucky_score' => $after
            ],
            'node_id' => @$node->id,
            'node_uuid' => @$node->uuid,
            'node_title' => @$node->title,
            'node_type' => $node ? @$node->getType('node_type') : null
        ]);
	}

    // 更新某个sku
    static public function logUpdateSku($admin, $old, $new)
    {
        $node = $old->activity ?: $old->product;

        $before = [];
        $after = [];

        $keyMap = [
            'sales',
            'odds',
            'stock',
            'money_price',
            'score_price',
            'probability'
        ];

        foreach ($keyMap as $key) {
            if ($old->$key != $new->$key) {
                if ($key == 'money_price') {
                    $before[$key] = $old->$key / 100;
                    $after[$key] = $new->$key / 100;
                }
                elseif ($key == 'odds') {
                    $before[$key] = $old->$key . '%';
                    $after[$key] = $new->$key . '%';
                }
                else {
                    $before[$key] = $old->$key;
                    $after[$key] = $new->$key;
                }
            }
        }

        if (count($before) == 0) {
            return false;
        }

        $before['sku_title'] = $old->title;
        $after['sku_title'] = $new->title;

        self::log('AdminLog', [
            'admin_id' => $admin->id,
            // 'user_id' => $item->id,
            // 'asset_type' => 'lucky_score',
            'action_type' => 5,
            'describe' => '更新奖品',
            'before' => $before,
            'after' => $after,
            'node_id' => @$node->id,
            'node_uuid' => @$node->uuid,
            'node_title' => @$node->title,
            'node_type' => $node ? @$node->getType('node_type') : null
        ]);
    }

}
