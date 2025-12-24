<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitDevice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->comment = '客户端设备记录表';
            
            $table->increments('id');
            $table->uuid('uuid')->nullable();

            $table->string('platform_type', 20)->index()->nullable()->comment('wechat腾讯系 ali阿里系 byte_dance字节跳动系');
            $table->string('platform_sub_type', 20)->index()->nullable()->comment('douyin为抖音 tmail为天猫  taobao为淘宝 ...'); //

            $table->string('client_type', 20)->index()->nullable()->comment('minapp为小程序 app h5');
            $table->string('os_type', 20)->index()->nullable()->comment('ios  android  windows  mac');

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
        Schema::dropIfExists('devices');
    }
}
