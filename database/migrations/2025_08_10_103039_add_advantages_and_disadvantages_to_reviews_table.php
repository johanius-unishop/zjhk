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
        Schema::table('reviews', function (Blueprint $table) {
            $table->text('advantages')->nullable()->after('review_text'); // Достоинства
            $table->text('disadvantages')->nullable()->after('advantages'); // Недостатки
            $table->dropColumn('review_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn(['advantages', 'disadvantages']);
        });
    }
};
