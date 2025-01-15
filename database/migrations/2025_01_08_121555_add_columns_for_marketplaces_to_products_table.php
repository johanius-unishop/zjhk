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
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('ozon_quantity_set')->default(1)->after('ozon');
            $table->unsignedInteger('ym_quantity_set')->default(1)->after('ym');
            $table->unsignedInteger('chip_dip_quantity_set')->default(1)->after('chip_dip');
            $table->unsignedInteger('vi_quantity_set')->default(1)->after('vi');
            
            $table->float('ozon_personal_price_multiplier')->default(1.0)->after('ozon_quantity_set');
            $table->float('ym_personal_price_multiplier')->default(1.0)->after('ym_quantity_set');
            $table->float('chip_dip_personal_price_multiplier')->default(1.0)->after('chip_dip_quantity_set');
            $table->float('vi_personal_price_multiplier')->default(1.0)->after('vi_quantity_set');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'ozon_quantity_set',
                'ym_quantity_set',
                'chip_dip_quantity_set',
                'vi_quantity_set',
                'ozon_personal_price_multiplier',
                'ym_personal_price_multiplier',
                'chip_dip_personal_price_multiplier',
                'vi_personal_price_multiplier'
            ]);
        });
    }
};
