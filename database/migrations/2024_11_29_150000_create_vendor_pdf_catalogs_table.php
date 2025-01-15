<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorPdfCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_pdf_catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('order_column')->default(0); // Столбец сортировки
            $table->text('description')->nullable(); // Описание содержимого файла
            $table->foreignId('vendor_id')->constrained('vendors'); // Связь с таблицей vendors
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_pdf_catalogs');
    }
}