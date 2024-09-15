<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
 
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('order_column')->nullable();
            $table->text('slug');
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->string('country')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('warranty')->nullable();
            $table->tinyInteger('published');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');

    }
};
