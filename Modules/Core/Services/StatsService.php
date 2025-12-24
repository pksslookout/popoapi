<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;

// use Modules\Core\Entities\FormId;
// use \EasyWeChat;
use Auth;
use Setting;
use Cache;
use DB;

use Modules\Stats\Entities\UserStatsSync;

class StatsService
{

    public function getUserStatsSync($user, $day = NULL)
    {
        $day = $day ?: date('Y-m-d');

        $stats = UserStatsSync::findOrCreate([
            'user_id' => $user->id,
            'day' => $day
        ]);

        return $stats;
    }

    // 更新当天实付金额
    // public function updatePayMoneyTotal($user, $payType, $moneyTotal)
    // {
    //     $day = date('Y-m-d');
        
    //     $stats = UserStats::where('user_id', $user->id)->where('day', $day)->first();

    //     // 如果没有统计实例，则创建
    //     if (!$stats) {
    //         $stats = UserStats::create([
    //             'user_id' => $user->id,
    //             'day' => $day
    //         ]);
    //     }

    //     $field = $payType . '_pay_money';

    //     $stats->update([
    //         $field => DB::raw($field . ' + ' . $moneyTotal)
    //     ]);

    // }
}
