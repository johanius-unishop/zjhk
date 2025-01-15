<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Добавляем новый булевый столбец auto_price_calc
            $table->boolean('auto_price_calc')->default(false);
            
            // Добавляем новый числовой столбец с плавающей точкой price_multiplier
            $table->float('price_multiplier')->nullable();
            
            // Добавляем внешний ключ country_id
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            
            // Удаляем старый столбец sorting
            $table->dropColumn('sorting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Восстанавливаем удаленный столбец sorting
            $table->integer('sorting')->nullable();
            
            // Убираем внешний ключ и сам столбец country_id
            $table->dropForeign(['country_id']);
            $table->dropColumn('country_id');
            
            // Убираем столбцы auto_price_calc и price_multiplier
            $table->dropColumn('auto_price_calc');
            $table->dropColumn('price_multiplier');
        });
    }
}
