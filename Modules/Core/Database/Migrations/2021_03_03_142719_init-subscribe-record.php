<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitSubscribeRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribe_records', function (Blueprint $table) {
            $table->comment = '订阅记录表';
            
            $table->increments('id');
            $table->uuid('uuid')->nullable();

            $table->integer('user_id')->unsigned()->index()->comment('用户id');

            $table->tinyInteger('app_type')->default(1)->comment('端类型 1为小程序端  2为公众号端'); //

            $table->string('message_type', 30)->index()->comment('消息类型'); //
            $table->uuid('target_uuid')->nullable()->index()->comment('商品uuid或其它uuid'); //
            $table->json('options')->nullable()->comment('消息内容'); //

            $table->timestamp('handle_at')->nullable()->comment('处理时间');

            $table->tinyInteger('status')->unsigned()->default(0)->index()->comment('状态：0为未发送、1为成功发送、2为发送失败');

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
        Schema::dropIfExists('subscribe_records');
    }
}
