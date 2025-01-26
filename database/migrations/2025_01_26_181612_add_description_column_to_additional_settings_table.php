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
        Schema::table('additional_settings', function (Blueprint $table) {
            // Добавляем новый столбец 'description' типа text
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('additional_settings', function (Blueprint $table) {
            // Удаляем столбец 'description'
            $table->dropColumn('description');
        });
    }
};
