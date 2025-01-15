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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();  // Эквивалентно INT AUTO_INCREMENT PRIMARY KEY
            $table->string('group');  // VARCHAR(255)
            $table->string('key');  // VARCHAR(255)
            $table->text('value');  // TEXT
            $table->string('description')->nullable();  // VARCHAR(255), nullable
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->unique(['group', 'key']);  // Уникальность пары группа-ключ
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
