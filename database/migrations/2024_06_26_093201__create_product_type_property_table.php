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
        Schema::create('product_type_property', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('sorting')->nullable();
 
            $table->foreignId('product_type_id')->nullable()->index();
            $table->boolean('section')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_type_property');
    }
};
