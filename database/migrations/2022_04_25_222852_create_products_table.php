<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img_path')->nullable()->products('商品圖片');
            $table->string('name')->nullable()->products('商品名稱');
            $table->string('price')->nullable()->products('商品價格');
            $table->string('quantity')->nullable()->products('商品數量');
            $table->string('introduction')->nullable()->products('商品介紹');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
