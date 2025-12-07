<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documentation', function (Blueprint $table) {
            // Добавляем поле для порядка сортировки
            $table->integer('order_column')->nullable()->after('type_id');

            // Добавляем поле для отметки отображения на главной
            $table->boolean('homepage_visible')->default(false)->after('order_column');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documentation', function (Blueprint $table) {
            $table->dropColumn('order_column');
            $table->dropColumn('homepage_visible');
        });
    }
};
