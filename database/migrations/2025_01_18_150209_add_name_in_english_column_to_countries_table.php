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
        Schema::table('countries', function (Blueprint $table) {
            // Добавляем новый столбец name_in_english
            $table->string('name_in_english')->after('name'); // after() указывает после какого поля добавить новое
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            // Удаляем столбец при откате миграции
            $table->dropColumn('name_in_english');
        });
    }
};
