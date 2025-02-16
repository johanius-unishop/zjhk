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
        Schema::table('products', function (Blueprint $table) {
            // Изменяем значение по умолчанию для столбца 'composite_product'
            $table->boolean('composite_product')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Возвращаем значение по умолчанию к NULL
            $table->boolean('composite_product')->nullable()->change();
        });
    }
};
