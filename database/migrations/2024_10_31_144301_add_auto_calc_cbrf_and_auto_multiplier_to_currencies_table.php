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
            // Добавляем логическое поле auto_calc_cbrf
            $table->boolean('auto_calc_cbrf')->default(false);
            
            // Добавляем поле auto_multiplier с типом float
            $table->float('auto_multiplier', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->dropColumn(['auto_calc_cbrf', 'auto_multiplier']);
        });
    }
};
