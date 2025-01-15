<?php

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
        Schema::table('products', function (Blueprint $table) {
            $table->string('ym_manufacturer_warranty')->default('true')->after('ym_personal_price_multiplier');
            $table->string('ym_enable_auto_discounts')->default('true')->after('ym_manufacturer_warranty');
            $table->string('ym_service_life_days')->default('P3Y')->after('ym_enable_auto_discounts');
            $table->string('ym_comment_life_days')->default('Использовать при температуре от -40 до +125°C')->after('ym_service_life_days');
            $table->string('ym_warranty_days')->default('P1Y')->after('ym_comment_life_days');
        });
    }


    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'ym_manufacturer_warranty',
                'ym_enable_auto_discounts',
                'ym_service_life_days',
                'ym_comment_life_days',
                'ym_warranty_days',
            ]);
        });
    }
};
