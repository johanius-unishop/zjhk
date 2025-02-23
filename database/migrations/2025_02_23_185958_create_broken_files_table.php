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
        Schema::create('broken_files', function (Blueprint $table) {
            $table->id();
            $table->string('model_type'); // Тип модели (например, 'App\Models\Product')
            $table->bigInteger('model_id'); // ID модели
            $table->string('model_name'); // Название модели (например, 'Товар #123')
            $table->string('file_name'); // Имя отсутствующего файла
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('broken_files');
    }
};
