<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;
use Setting;

use  Modules\Card\Entities\Card;

use Modules\Asset\Entities\AllAsset;
use Modules\Asset\Entities\SingleAsset;

// 在线资产处理
class AssetService
{
    public function initMultiAsset($assets)
    {
        return new AllAsset($assets);
    }

    public function initSingleAsset($assets)
    {
        return new SingleAsset($assets);
    }

    // v5.0后，此处作为唯一发放资产的入口
    public function sendTo($assetArray, $user, $options) 
    {
        return $this->initSingleAsset($assetArray)->sendTo($user, $options);
    }

    // 发送单体奖励
    public function sendSingleReward($singleReward, $user, $options)
    {
        return $this->initSingleAsset($singleReward)->sendTo($user, $options);
    }

    // 获取资产标题
    public function getTitle($asset)
    {
        return $this->initSingleAsset($asset)->toString();
    }

    // 创建标准资产
    public function createAssetArray($array)
    {
    }
}
