<?php

// use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitLikeRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_relations', function (Blueprint $table) {
            $table->comment = '点赞记录表';
            
            $table->increments('id');

            $table->integer('user_id')->unsigned()->index()->comment('用户id');
            $table->integer('target_id')->unsigned()->index()->comment('点赞的目标表中记录的id');
            $table->string('type', 30)->index()->comment('点赞的目标表类型'); //

            $table->integer('group_id')->unsigned()->nullable()->index()->comment('收藏夹id');
            $table->integer('weight')->unsigned()->default(0)->index()->comment('权重');

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
        Schema::dropIfExists('like_relations');
    }
}
