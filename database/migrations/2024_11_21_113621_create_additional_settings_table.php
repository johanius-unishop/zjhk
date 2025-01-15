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
        Schema::create('additional_settings', function (Blueprint $table) {
            $table->id(); // первичный ключ
            $table->string('group'); // группа настроек
            $table->string('name'); // имя настройки
            $table->string('value'); // значение настройки
            $table->timestamps(); // поля created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_settings');
    }
};
