<<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeInternalRateColumnOnCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->float('internal_rate')->change(); // Изменяем тип поля на float
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Обратная миграция должна вернуть поле к исходному типу
        Schema::table('currencies', function (Blueprint $table) {
            // Предполагая, что изначально поле было целым числом
            $table->integer('internal_rate')->change();
        });
    }
}