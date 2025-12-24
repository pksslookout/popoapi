<?php

namespace Modules\Core\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // 订单支付事件
        'Modules\Order\Events\OrderPaidEvent' => [
            'Modules\Order\Listeners\OrderPaidListener',
            'Modules\Stats\Listeners\OrderPaidListenerAsync',
        ],
        // 订单完成事件
        'Modules\Order\Events\OrderCompletedEvent' => [
            'Modules\Asset\Listeners\OrderCompletedListenerAsync',
            'Modules\Stats\Listeners\OrderCompletedListenerAsync',
        ],
        // 资产变动事件
        'Modules\Asset\Events\AssetChangedEvent' => [
            'Modules\Asset\Listeners\AssetChangedListener',
        ],
        // 开盒成功事件
        'Modules\Activity\Events\DepotSkuCreatedEvent' => [
            'Modules\Stats\Listeners\DepotSkuCreatedListenerAsync',
        ],
        // 触发随机掉落的事件
        'Modules\Activity\Events\RandomRewardCreatedEvent' => [
            'Modules\Stats\Listeners\RandomRewardCreatedListenerAsync',
        ],
    ];
}
