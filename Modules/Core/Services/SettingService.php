<?php

namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Redis as Redis;
// use Redis ;
use Cache;
use ThrowException;

use \Modules\Core\Entities\Setting;


class SettingService
{
    // 积分别名
    public function scoreAlias()
    {
        return @$this->get('sys_score')['alias'] ?: '积分';
    }

    // 余额别名
    public function redpackAlias()
    {
        return @$this->get('sys_redpack')['alias'] ?: '余额';
    }

    // 挂售折价率
    public function resaleRatio()
    {
        return @$this->get('sys_market')['ratio'] ?: 1;
    }

    // 折价率
    public function returnSaleRatio()
    {
        return @$this->get('sys_depot.cover')['ratio'] ?: 0.7;
    }

    // 人民币返售渠道
    public function returnSaleTypeForMoney()
    {
        return @$this->get('sys_depot.cover')['type'] ?: 'money';
    }

    // 返售时人民币兑积分比例(每1人民币兑换的积分数量)
    public function returnMoneyToScoreRatio()
    {
        return @$this->get('sys_depot.cover')['money_to_score_ratio'] ?: 1;
    }

    // 人民币对积分比率 1:n
    public function getMoneyToScoreRatio()
    {
        $rate = @$this->get('sys_score')['money_to_score_ratio'] ?: 10000;
        return $rate / 100;
    }

    // 积分换算成人民
    public function coverScoreToMoney($score)
    {
        // \Log::error($score);
        return floor($score / $this->getMoneyToScoreRatio());
    }

    // 人民币换算成积分
    public function coverMoneyToScore($money)
    {
        // \Log::error($score);
        return floor($money * $this->getMoneyToScoreRatio());
    }

    public function set($key, $value, $options = [])
    {
        if (is_array($value))
            $contentType = 0;
        elseif (is_int($value))
            $contentType = 2;
        else
            $contentType = 1;

        $adminId = @v($options['admin_id']);

        $setting = Setting::getEntity([
            'name' => $key,
            'admin_id' => $adminId
        ], false);

        if (is_null($setting)) {
            Setting::create([
                'name' => $key,
                'content' => $value,
                'admin_id' => $adminId,
                'content_type' => $contentType
            ]);
        }
        else {
            $setting->update([
                'content' => $value,
                'content_type' => $contentType
            ]);
        }

        // 更新缓存层
        $minute = 6000;
        $cachedKey = $key . ($adminId ?: '');
        $cached = $value;
        Cache::put($cachedKey, $cached, $minute);

        return true;
    }

    public function get($key, $options = [])
    {
        $adminId = @v($options['admin_id']);

        // 尝试从缓存中读取数据
        $cachedKey = $key . ($adminId ?: '');
        $content = Cache::get($key);

        // 无缓存,尝试数据库中取
        if (is_null($content)) {

            $setting = Setting::getEntity([
                'name' => $key,
                'admin_id' => $adminId
            ], false);

            if (!is_null($setting)) {
                $content = $setting->content;

                // 数据库中有,缓存到cached中
                $minute = 6000;
                Cache::put($cachedKey, $content, $minute);
            }
            else {
                $content = config($key);
            }

        }

        return $content;
    }

    public function delete($key, $options = [])
    {

        $adminId = @v($options['admin_id']);
        $default = @v($options['default']);

        // 尝试从缓存中读取数据
        $cachedKey = $key . ($adminId ?: '');
        Cache::forget($key);

        $setting = Setting::getEntity([
                'name' => $key,
                'admin_id' => $adminId
            ], false);

        if ($setting) {
            $setting->delete();
        }
    }
}
