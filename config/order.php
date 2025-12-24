<?php

return [
    'map' => [
        'product' => '\Modules\Order\Entities\ProductOrder',
        'box' => '\Modules\Box\Entities\BoxOrder',
        'activity' => '\Modules\Activity\Entities\ActivityOrder',
        'vip' => '\Modules\User\Entities\VipOrder',
        // 'deliver' => 'Modules\Box\Entities\DeliverOrder',
        'agent' => 'Modules\Order\Entities\AgentOrder',
        'deliver' => 'Modules\Depot\Entities\DeliverOrder',
        'deposit' => 'Modules\Asset\Entities\DepositOrder',
        'resale' => 'Modules\Asset\Entities\ResaleOrder'
    ],
    'auto_closed_timeout' => 30,  // 未支付自动关闭订单, 默认时间 (分钟)
];
