<?php

// use Illuminate\Support\Facades\Schema;
use Jialeo\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->comment = '管理员表';
            
            $table->increments('id');
            $table->uuid('uuid')->index();
            $table->string('name', 100)->index()->comment('');

            $table->string('unionid', 35)->index()->nullable()->comment('unionid');
            $table->string('openid', 35)->index()->nullable()->comment('openid');
            $table->string('wechat_headimg', 255)->nullable()->comment('微信头像');
            $table->string('wechat_name', 255)->nullable()->comment('微信名');

            $table->string('number', 50)->index()->nullable()->comment('编号');
            $table->string('phone', 20)->index()->nullable()->comment('手机号');
            $table->string('password')->nullable()->comment('密码');

            $table->string('email', 50)->index()->nullable()->comment('email');
            $table->char('gender', 2)->nullable()->comment('性别');
            $table->string('headimg')->nullable()->comment('头像');
            $table->date('birthday')->nullable()->comment('生日');
            $table->integer('score')->default(0)->comment('积分');

            $table->string('city', 100)->nullable()->comment('城市');
            $table->string('description', 10000)->nullable()->comment('描述');
            $table->tinyInteger('status')->index()->default(1)->comment('状态，1为正常状态  0为禁用');

            $table->boolean('is_hidden')->index()->default(0)->comment('是否隐藏');
            $table->boolean('is_readonly')->index()->default(0)->comment('是否只读帐号');

            $table->string('type', 20)->index()->nullable()->comment('类型');

            $table->timestamp('last_active_at')->nullable()->comment('最后活跃');

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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('admins');
    }
}
