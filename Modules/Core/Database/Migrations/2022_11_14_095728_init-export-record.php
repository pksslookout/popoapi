<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitExportRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_export_records', function (Blueprint $table) {
            $table->comment = '导出记录';
            
            $table->increments('id');
            $table->uuid('uuid')->nullable();

            $table->integer('admin_id')->index()->comment('管理员id'); //

            $table->char('type', 20)->index()->comment('导出类型');

            $table->json('options')->nullable()->comment('导入参数选项'); //

            $table->integer('record_total')->nullable()->comment('导出的记录总条数');

            $table->timestamp('submited_at')->nullable()->comment('提交时间');

            $table->integer('status')->default(1)->index()->comment('状态 1为待导出 2为已导出中  3为已导出  4为导出失败');

            $table->string('url')->nullable()->comment('excel下载链接');

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
