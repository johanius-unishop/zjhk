<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product_kind;
use App\Models\Category;
use App\Models\Vendor;
use App\Models\Currency;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product_kind::class);
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('article');
            $table->text('short_description');
            $table->text('description');
            $table->string('barcode')->nullable();
            $table->float('supplier_price')->nullable();
            $table->float('price')->nullable();
            $table->float('special_price')->nullable();
            $table->integer('pieces_per_pack')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('minimum_stock')->nullable();
            $table->integer('sorting')->nullable();
            $table->text('tn_ved')->nullable();
            $table->tinyInteger('published')->nullable();
            $table->float('weight')->nullable();
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->float('length')->nullable();
            $table->float('package_weight')->nullable();
            $table->float('package_width')->nullable();
            $table->float('package_height')->nullable();
            $table->float('package_length')->nullable();
            // $table->bigInteger('category_id');
            $table->foreignIdFor(model: Category::class);
            $table->foreignIdFor(model: Vendor::class);
            // $table->bigInteger('vendor_id');
            $table->bigInteger('currency_id')->nullable();
            $table->boolean('chip_dip')->default(0);
            $table->boolean('elec_ru')->default(0);

            $table->boolean('ozon')->default(0);
            $table->boolean('ym')->default(0);
            $table->boolean('vi')->default(0);

            $table->integer('priority')->nullable();





            $table->integer('moq_supplier')->nullable();
            $table->boolean('composite_product')->nullable(); ; //->after('column')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
