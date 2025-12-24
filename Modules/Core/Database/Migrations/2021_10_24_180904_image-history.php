<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImageHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_images', function (Blueprint $table) {
            $table->comment = '图片上传历史';
            
            $table->increments('id');
            $table->uuid('uuid')->nullable();

            $table->string('url')->comment('图片url');

            $table->integer('category_id')->nullable()->comment('分类id'); //

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
        Schema::dropIfExists('history_images');
    }
}
