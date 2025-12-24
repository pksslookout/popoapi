<?php

// use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->comment = '缓存数据表';
            
            $table->increments('id');
            $table->uuid('uuid')->index();

            $table->integer('admin_id')->unsigned()->index()->nullable()->comment('管理员id');  // 管理员id

            $table->string('name', 32)->index()->comment('设置key');  // 

            $table->boolean('content_type')->default(0)->comment('设置的内容 // 0array   1string  2 integer');;  // 设置的内容 // 0array   1string  2 integer
            $table->text('content')->nullable()->comment('设置的内容');  // 设置的内容

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
        Schema::dropIfExists('settings');
    }
    
}
