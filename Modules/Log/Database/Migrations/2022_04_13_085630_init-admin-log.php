<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitAdminLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_admin_logs', function (Blueprint $table) {
            $table->comment = '日志表';

            $table->increments('id');
            $table->uuid('uuid')->index() ;

            $table->integer('admin_id')->nullable()->index()->comment('操作管理员id');

            $table->integer('action_type')->index()->default(1)->comment('见entity中注释');

            $table->string('describe')->nullable()->comment('短描述');

            $table->integer('user_id')->nullable()->index()->comment('受影响的用户id');
            $table->integer('order_id')->nullable()->index()->comment('受影响的订单id');
            $table->char('asset_type', 20)->nullable()->index()->comment('受影响的资产类型');

            $table->json('options')->nullable()->comment('受影响的资产类型');

            $table->softDeletes();
            $table->timestamps();

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
