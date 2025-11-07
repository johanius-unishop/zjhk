<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentationTable extends Migration
{
    public function up()
    {
        Schema::create('documentation', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('text')->nullable(); // Поле для хранения текста документа
            $table->unsignedBigInteger('vendor_id'); // Связь с брендом
            $table->foreign('vendor_id')
                  ->references('id')
                  ->on('vendors')
                  ->cascadeOnDelete();
            $table->unsignedBigInteger('type_id'); // Тип документации
            $table->foreign('type_id')
                  ->references('id')
                  ->on('documentation_types') // Имя будущей таблицы типов документов
                  ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('documentation');
    }
}
