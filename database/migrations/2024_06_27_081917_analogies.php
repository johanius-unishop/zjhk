<?php

use App\Models\AnalogVendor;
use App\Models\Product;
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
        Schema::create('analogies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('article')->nullable();
            $table->foreignIdFor(Product::class);
            $table->foreignIdFor(AnalogVendor::class); //analog_vendor_id
            $table->timestamps();
            $table->unique(['product_id','analog_vendor_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analogies');
    }
};
