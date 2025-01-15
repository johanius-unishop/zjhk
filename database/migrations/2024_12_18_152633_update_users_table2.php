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
        Schema::table('users', function (Blueprint $table) {
            // Добавляем новый столбец profile_id
            $table->unsignedBigInteger('profile_id')->after('user_type'); // after('user_type') указывает, после какого столбца разместить новый
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Удаляем столбец при откате миграции
            $table->dropColumn('profile_id');
        });
    }
};
