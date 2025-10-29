<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopularProductsTable extends Migration
{
    public function up()
    {
        Schema::create('popular_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id'); // Внешний ключ
            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('popular_products');
    }
}
