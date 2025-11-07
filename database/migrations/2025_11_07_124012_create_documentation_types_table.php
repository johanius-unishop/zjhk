<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentationTypesTable extends Migration
{
    public function up()
    {
        Schema::create('documentation_types', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Название типа документации (например 'каталог' или 'брошюра')
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('documentation_types');
    }
}
