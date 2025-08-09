<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->text('admin_reply')->nullable()->after('review_text');   // Поле для комментария администрации
            $table->timestamp('admin_replied_at')->nullable()->after('admin_reply'); // Время размещения комментария
        });
    }

    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn('admin_reply');
            $table->dropColumn('admin_replied_at');
        });
    }

};
