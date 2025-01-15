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
        // Изменяем внешний ключ, чтобы он ссылался на id в таблице product_type_properties
        Schema::table('product_property_values', function (Blueprint $table) {
            $table->dropForeign('product_property_values_product_type_property_id_foreign');
            $table->foreign('product_type_property_id')
                ->references('id')
                ->on('product_type_properties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('product_property_values', function (Blueprint $table) {
            $table->dropForeign('product_type_property_id');
            $table->foreign('product_type_property_id')
                ->references('product_type_id')
                ->on('product_type_properties');
        });
    }
};
