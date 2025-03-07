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
        Schema::table('product_composite_elements', function ($table) {
            $table->renameColumn('product_composite_element_id', 'product_type_composite_element_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_composite_elements', function ($table) {
            $table->renameColumn('product_type_composite_element_id', 'product_composite_element_id');
        });
    }
};
