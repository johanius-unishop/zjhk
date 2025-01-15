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
        Schema::table('users', function (Blueprint $table) {
            // Удаляем существующие столбцы
            $table->dropColumn(['delegate', 'birth_date', 'sex', 'company_id']);
            
            // Добавляем новый столбец user_type с ограничением ENUM
            $table->enum('user_type', ['personal', 'company'])->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Удаляем добавленный столбец user_type
            $table->dropColumn('user_type');
        });
    }
};
