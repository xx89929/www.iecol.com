<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class De1Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('de1_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_en_name',255);
            $table->string('product_ch_name',255)->nullable();
            $table->string('product_param',9999)->nullable();
            $table->integer('product_classify');
            $table->string('pic_path',255)->nullable()->default('storage/icon_logo.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('de1_product');
    }
}
