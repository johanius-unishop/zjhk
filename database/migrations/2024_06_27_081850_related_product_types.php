<?php

use App\Models\ProductType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('related_product_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->integer('sorting')->nullable();
            $table->integer(column: 'order_column')->nullable();
            $table->foreignIdFor(ProductType::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('related_product_types');
    }
};
