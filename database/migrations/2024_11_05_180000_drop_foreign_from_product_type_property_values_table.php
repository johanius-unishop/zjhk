<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{

    Schema::table('product_type_property_values', function (Blueprint $table) {
        $table->dropForeign(['product_type_property_id']);
    
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('product_type_property_values', function (Blueprint $table) {
        
        $table->foreign('product_type_property_id')
              ->references('product_type_id') // Имя внешнего ключа
              ->on('product_type_properties') // Название таблицы, на которую ссылается внешний ключ
              ->onDelete('cascade'); // Опция каскадного удаления
        
    });
}
};
