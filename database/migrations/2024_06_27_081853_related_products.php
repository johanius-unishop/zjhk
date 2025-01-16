<?php

use App\Models\Product;
use App\Models\RelatedProductType;
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
        Schema::create('related_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_product');
            $table->integer('sorting');
            $table->string('comment_1');
            $table->string('comment_2');
            $table->string('comment_3');
            $table->foreignIdFor(Product::class);
            $table->foreignIdFor(RelatedProductType::class); //related_product_type_id
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('related_products');

    }
};
