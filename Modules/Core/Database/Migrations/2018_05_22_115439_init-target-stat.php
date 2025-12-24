<?php

// use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitTargetStat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target_stats', function (Blueprint $table) {
            $table->comment = '统计表';
            
            $table->increments('id');
            $table->uuid('uuid');

            // 目标相关字段
            $table->string('target_type', '30')->index()->comment('统计的目标表');
            $table->integer('target_id')->index()->comment('统计的目标表中的记录id');

            // 统计数据
            $table->text('data')->nullable()->comment('统计数据');

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
         Schema::dropIfExists('target_stats');
    }
}
