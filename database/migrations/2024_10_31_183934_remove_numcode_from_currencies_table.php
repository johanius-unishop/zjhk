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
            // Удаление поля numcode
            $table->dropColumn('numcode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // При откате миграции восстанавливаем поле numcode
        Schema::table('currencies', function (Blueprint $table) {
            $table->srting('numcode')->nullable(); 
        });
    }
};
