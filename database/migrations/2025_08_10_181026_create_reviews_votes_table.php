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
        Schema::create('reviews_votes', function (Blueprint $table) {
            $table->increments('id');                  // Поле id (автоматический инкремент)
            $table->unsignedInteger('review_id')->index();   // Внешний ключ к отзывам
            $table->unsignedInteger('user_id')->nullable()->comment('ID авторизованного пользователя');
            $table->string('session_id', 255)->nullable()->comment('Идентификатор анонимного пользователя');
            $table->tinyInteger('vote')->default(0)->comment('Тип голосования: 1 — лайк, 0 — дизлайк');
            $table->timestamp('created_at')->useCurrent();  // Автоустановка текущей даты и времени
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reviews_votes');
    }
};
