<?php

use App\Models\ProductType;
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
        Schema::create('product_kind_composite_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ProductType::class);
            $table->string('element');
            $table->integer('sorting');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_kind_composite_elements');
    }
};
