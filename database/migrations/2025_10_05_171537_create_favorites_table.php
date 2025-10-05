<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->increments('id');                  // id столбец
            $table->unsignedBigInteger('user_id');        // user_id столбец
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Внешний ключ к таблице users
            $table->unsignedBigInteger('product_id');    // product_id столбец
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');// Внешний ключ к таблице products
            $table->timestamps();                     // Столбцы created_at и updated_at
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
