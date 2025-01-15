<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnInProductPdfTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_pdf_types', function (Blueprint $table) {
            // Переименовываем столбец pdf_type в name
            $table->renameColumn('pdf_type', 'name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_pdf_types', function (Blueprint $table) {
            // Возвращаем старое имя столбцу, если потребуется откат миграции
            $table->renameColumn('name', 'pdf_type');
        });
    }
}
