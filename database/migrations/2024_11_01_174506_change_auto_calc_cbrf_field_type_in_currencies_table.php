<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('currencies', function (Blueprint $table) {
            // Изменяем тип поля с tinyint на boolean
            $table->boolean('auto_calc_cbrf')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('currencies', function (Blueprint $table) {
            // Возвращаем обратно тип поля к tinyint
            $table->tinyInteger('auto_calc_cbrf')->change();
        });
    }
};
