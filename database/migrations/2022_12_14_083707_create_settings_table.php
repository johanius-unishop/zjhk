<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::dropIfExists('settings');

        Schema::create('settings', function (Blueprint $table): void {
            $table->id();

            $table->string('group', 80);
            $table->string('name', 80);
            $table->boolean('locked')->default(false);
            $table->json('payload');

            $table->timestamps();
            $table->softDeletes();
            $table->unique(['group', 'name']);
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
