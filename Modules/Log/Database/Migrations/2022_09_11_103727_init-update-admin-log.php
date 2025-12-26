<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use \Modules\Log\Entities\AdminLog;

class InitUpdateAdminLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('log_admin_logs', function (Blueprint $table) {
            
            $table->json('before')->nullable()->comment('变更前的属性');
            $table->json('after')->nullable()->comment('变更后的属性');

        });

        AdminLog::where('asset_type', 'lucky_score')->update([
            'action_type' => 2
        ]);

        $logs = AdminLog::get();

        foreach ($logs as $log) {

            $options = $log->options;

            $before = [
                $log->asset_type => $options['before']
            ];

            $after = [
                $log->asset_type => $options['after']
            ];

            $log->update([
                'before' => $before,
                'after' => $after
            ]);
        }


        Schema::table('log_admin_logs', function (Blueprint $table) {
            
            $table->dropColumn('asset_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
