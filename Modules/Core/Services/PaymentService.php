<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;
use Auth;

use Modules\Payment\Entities\WechatPay;
use Modules\Payment\Entities\AliPay;
use Modules\Payment\Entities\AdaPay;
use Modules\Payment\Entities\YuyanPay;
use Modules\Payment\Entities\EasyWechatPay;
use Modules\Payment\Entities\ByteDancePay;
use Modules\Payment\Entities\KuaishouPay;
use Modules\Payment\Entities\ZhongjinPay;


class PaymentService
{
	public function EasyWechatPay($clientName = 'default', $paySubType = 'miniapp')
    {
        return new EasyWechatPay($clientName, $paySubType);
    }

    public function yuyanPay($clientType, $paySubType)
    {
        return new YuyanPay($clientType, $paySubType);
    }

    // 汇付
    public function adaPay($clientType, $paySubType, $options = [])
    {
        return new AdaPay($clientType, $paySubType, $options);
    }

    public function aliPay($clientName, $paySubType)
    {
        return new AliPay($clientName, $paySubType);
    }

    public function wechatPay($clientName, $paySubType, $options = [])
    {
        return new WechatPay($clientName, $paySubType, $options);
    }

    public function byteDancePay($clientName, $paySubType)
    {
        return new ByteDancePay($clientName, $paySubType);
    }

    public function kuaishouPay($clientName, $paySubType)
    {
        return new KuaishouPay($clientName, $paySubType);
    }

    // 中金支付
    public function zhongjinPay($clientName, $paySubType)
    {
        return new ZhongjinPay($clientName, $paySubType);
    }
}
