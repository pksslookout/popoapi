<?php

namespace Modules\Core;

use \Modules\Core\Entities\SubscribeRecord;

use Modules\Depot\Entities\PackageSku;
use Modules\Depot\Entities\Package;
use Modules\Asset\Entities\RedpackRecord;
use Modules\Asset\Entities\ScoreRecord;
use Modules\Asset\Entities\LevelScoreRecord;
use Modules\UI\Entities\Danmu;
use Modules\Order\Entities\BaseOrder;

use Setting;

class Cron
{
	public function handle($schedule)
	{
		$that = $this;
		$schedule->call(function() use ($that) {
			try {
				$that->cleanData();
				$that->cleanDeletedData();
			}
			catch (\Throwable $e) {
                \Log::error('core cron任务异常');
                \Log::error($e->getMessage());
            }
		})->dailyAt('3:30');
		// 每30分钟执行一次

		$schedule->call(function() use ($that) {
			try {
				
			}
			catch (\Throwable $e) {
                \Log::error('core cron任务异常');
                \Log::error($e->getMessage());
            }
		})->daily();
	}

	public function cleanData()
	{
		 
		// 开始自动清理任务
		\Log::error('开始自动清理任务');

		$setting = @Setting::get('sys_data_clear') ?: [];

		// 有开启自动清理
		if (@$setting['is_auto_clear_enabled']) {

			// 盒柜
			$day = @$setting['depot_days'];
			if ($day >= 10) {
				\Log::error('开始清理'.$day.'天前的已处理物品');
				$time = date('Y-m-d H:i:s', strtotime('-' . $day . ' days'));
				PackageSku::whereIn('status', [2, 3, 4])->where('created_at', '<', $time)->limit(300)->forceDelete();

				// 清理package
				Package::where('created_at', '<', $time)->limit(300)->forceDelete();
			}

			// 已完成的活动订单
			$day = @$setting['order_days'];
			if ($day >= 10) {
				\Log::error('开始清理'.$day.'天前的已完成的活动订单');
				$time = date('Y-m-d H:i:s', strtotime('-' . $day . ' days'));
				BaseOrder::where('type', 'activity')->where('pay_type', '<>', 'kuaishou')->status('completed')->where('created_at', '<', $time)->limit(300)->forceDelete();
			}

			// 红包记录
			$day = @$setting['redpack_record_days'];
			if ($day >= 10) {
				\Log::error('开始清理'.$day.'天前的红包记录');
				$time = date('Y-m-d H:i:s', strtotime('-' . $day . ' days'));
				RedpackRecord::whereNull('admin_id')->where('created_at', '<', $time)->limit(300)->forceDelete();
			}

			// 积分记录
			$day = @$setting['score_record_days'];
			if ($day >= 10) {
				\Log::error('开始清理'.$day.'天前的积分记录');
				$time = date('Y-m-d H:i:s', strtotime('-' . $day . ' days'));
				ScoreRecord::whereNull('admin_id')->where('created_at', '<', $time)->limit(300)->forceDelete();
			}

			// 成长值记录
			$day = @$setting['level_score_record_days'];
			if ($day >= 10) {
				\Log::error('开始清理'.$day.'天前的成长值记录');
				$time = date('Y-m-d H:i:s', strtotime('-' . $day . ' days'));
				LevelScoreRecord::whereNull('admin_id')->where('created_at', '<', $time)->limit(300)->forceDelete();
			}

			// 弹幕记录
			$day = @$setting['danmu_days'];
			if ($day >= 3) {
				\Log::error('开始清理'.$day.'天前的弹幕记录');
				$time = date('Y-m-d H:i:s', strtotime('-' . $day . ' days'));
				Danmu::where('created_at', '<', $time)->limit(300)->forceDelete();
			}

		}

	}

	// 每天清空
	public function cleanDeletedData()
	{
		\Log::error('清除无活动主体的数据');
		\Modules\Activity\Entities\YiFanShang\Record::doesntHave('activity')->delete();
		\Modules\Activity\Entities\YiFanShang\Room::doesntHave('activity')->delete();
		\Modules\Activity\Entities\YiFanShang\Sku::doesntHave('activity')->delete();

		\Modules\Activity\Entities\InfiniteShang\Record::doesntHave('activity')->delete();
		\Modules\Activity\Entities\InfiniteShang\Sku::doesntHave('activity')->delete();

		\Modules\Box\Entities\BoxRecord::doesntHave('activity')->delete();
		\Modules\Box\Entities\BoxRoom::doesntHave('box')->delete();
		\Modules\Box\Entities\BoxSku::doesntHave('box')->delete();
		
		\Log::error('清除完成');
	}
}