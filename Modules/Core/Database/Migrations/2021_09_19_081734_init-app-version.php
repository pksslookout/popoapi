<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitAppVersion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_versions', function (Blueprint $table) {
            $table->comment = 'App版本管理';
            
            $table->increments('id');
            $table->uuid('uuid')->nullable();

            $table->string('os_type', 20)->index()->nullable()->comment('ios 或 android');

            $table->string('package_url')->nullable()->comment('下载url'); //

            $table->string('version', 20)->nullable()->comment('版本号');

            $table->text('desc')->nullable()->comment('更新描述');

            $table->string('package_type', 20)->nullable()->comment('comment为普通安装包  wgt为wgt包');

            $table->boolean('is_silently')->default(0)->comment('1为静默模式');

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
        Schema::dropIfExists('app_versions');
    }
}
