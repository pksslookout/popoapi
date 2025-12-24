<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Schema;

use \Modules\Admin\Entities\Admin;
use \Modules\Role\Entities\Role;

use \Modules\User\Entities\User;
use \Modules\Depot\Entities\PackageSku;
// use \Modules\De\Entities\BaseOrder;

use DB;
use Setting;
use Cache;

class CleanDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cleanDB-x';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '清空测试数据数据库';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param  \App\DripEmailer  $drip
     * @return mixed
     */
    public function handle()
    {
        $list = [
            // 'activity_join_stat',
            'actions',
            'aftersales',
            'agent_pay_records',
            'asset_level_score_records',
            'asset_manual_send_records',
            'asset_redpack_records',
            'asset_redpack_withdraw_records',
            'asset_score_transfer_records',
            'asset_score_records',
            'anger_reward_records',
            'box_records',
            'box_pool_records',
            'brokerage_records',
            'card_asset_records',
            'card_assets',
            'chip_asset_records',
            'chip_assets',
            'chip_merge_records',
            'chip_transfer_records',
            'code_records',
            'code_scan_codes',
            'core_export_records',
            'coupon_user',
            'chouka_records',
            'danmus',
            'deliver_records',
            'depot_package_skus',
            'depot_packages',
            'depot_transfer_records',
            'duiduipeng_game_records',
            'duiduipeng_records',
            'exchange_records',
            'failed_jobs',
            'fudai_records',
            'grid_box_records',
            'infinite_shang_jubaopen_records',
            'infinite_shang_luck_hold_records',
            'infinite_shang_records',
            'invite_records',
            'jika_swap_records',
            'jobs',
            'jinjie_merge_records',
            'failed_jobs',
            'log_admin_logs',
            'like_relations',
            'lottery_invite_records',
            'lottery_records',
            'lottery_tickets',
            'number_box_records',
            'order_address',
            'order_code_records',
            'order_skus',
            'orders',
            'pay_records',
            'random_reward_records',
            'rebate_records',
            'refund_records',
            'resale_package_sku',
            'resale_records',
            'score_product_records',
            'share_bag_records',
            'share_bag_support_records',
            'shop_carts',
            'stage_game_records',
            'stage_game_stage_user_relations',
            'stats_invitee',
            'stats_agent',
            'stats_channel',
            'stats_node',
            'stats_platform',
            'stats_user',
            'stats_user_sync',
            'subscribe_records',
            'topics',
            'union_orders',
            'user_address',
            'user_ip_map',
            'user_level_daily_reward_records',
            // 'user_level_daily_reward_records',
            'user_message',
            'user_sign_in_records',
            'user_social_accounts',
            'user_tag_with_user',
            'user_task_records',
            'user_update_records',
            'user_whitelist',
            'users',
            'vip_daily_reward_records',
            'vip_records',
            'visitors',
            'yfs_records',
            'zhuli_launch_records',
            'zhuli_support_records',
            'chouka_records',
            'jinjie_merge_records',
            'asset_score_transfer_records',
            'infinite_shang_jubaopen_records',
        ];   

        Schema::disableForeignKeyConstraints();

        foreach ($list as $item) {
            DB::table($item)->truncate();
        }

        \Modules\Activity\Entities\RandomReward\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\RandomReward\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\AngerReward\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\AngerReward\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Product\Entities\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Product\Entities\Product::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\ScoreProduct\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\YiFanShang\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\YiFanShang\Room::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0,
            'open_index' => 0,
            'sku_sales' => json_encode([])
        ]);
        \Modules\Activity\Entities\YiFanShang\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0,
            'free_order_total' => 0,
            'random_reward_total' => 0,
            'anger_reward_total' => 0
        ]);

        \Modules\Activity\Entities\GridBox\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\GridBox\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0,
            'free_order_total' => 0,
            'random_reward_total' => 0,
            'anger_reward_total' => 0,
            'session_num' => 0
        ]);
        \Modules\Activity\Entities\GridBox\Session::where('id', '>', 0)->delete();
        foreach (\Modules\Activity\Entities\GridBox\Activity::where('id', '>', 0)->get() as $item) {
            $item->tryOpenNewSession();
        }


        \Modules\Activity\Entities\JinjieMerge\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\ChouKa\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\ChouKa\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0,
            'free_order_total' => 0,
            'random_reward_total' => 0,
            'luck_holder_total' => 0,
            'promise_level_emit_count' => 0
            // 'anger_reward_total' => 0
        ]);
        \Modules\Activity\Entities\ChouKa\SkuLevel::where('id', '>', 0)->update([
            // 'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\StageGame\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\StageGame\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\StageGame\Activity::where('id', '>', 0)->update([
            'stock' => 0,
            'sales' => 0,
        ]);

        \Modules\Activity\Entities\StageGame\Stage::where('id', '>', 0)->update([
            'stock' => 0,
            'sales' => 0,
            'pass_total' => 0
        ]);


        \Modules\Activity\Entities\InfiniteShang\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\InfiniteShang\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0,
            'free_order_total' => 0,
            'random_reward_total' => 0,
            'luck_holder_total' => 0,
            'anger_reward_total' => 0,
            'jubaopen_balance' => 0,
            'jubaopen_total' => 0
        ]);
        \Modules\Activity\Entities\InfiniteShang\SkuLevel::where('id', '>', 0)->update([
            // 'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\Fudai\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\Fudai\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0,
            'random_reward_total' => 0,
            'anger_reward_total' => 0
        ]);

        \Modules\Activity\Entities\EggLottery\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\EggLottery\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\RotateLottery\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\RotateLottery\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Activity\Entities\ChipMerge\Sku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);
        \Modules\Activity\Entities\ChipMerge\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Asset\Entities\RedpackSku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Asset\Entities\ScoreSku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\User\Entities\VipSku::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\User\Entities\SignInSku::where('id', '>', 0)->update([
            // 'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Coupon\Entities\Coupon::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0,
            'used_total' => 0
        ]);

        \Modules\Chip\Entities\Chip::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);

        \Modules\Card\Entities\Card::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);


        \Modules\Activity\Entities\Duiduipeng\Activity::where('id', '>', 0)->update([
            'stock' => DB::raw('stock + sales'),
            'sales' => 0
        ]);




        DB::beginTransaction();
        User::create([
            'id' => 5000,
            'name' => 'a'
        ]);

        PackageSku::create([
            'id' => 5000,
            'title' => 'a',
            'sku_uuid' => '99999',
            'sku_type' => 3,
        ]);

        DB::rollback();

        Cache::flush();

    }
}