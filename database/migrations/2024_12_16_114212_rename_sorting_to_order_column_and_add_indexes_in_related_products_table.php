<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameSortingToOrderColumnAndAddIndexesInRelatedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Переименовываем столбец 'sorting' в 'order_column'
        Schema::table('related_products', function (Blueprint $table) {
            $table->renameColumn('sorting', 'order_column');
        });
        
        // Добавляем индексы
        Schema::table('related_products', function (Blueprint $table) {
            $table->index('product_id');      // Индекс для поля product_id
            $table->index('id_product');      // Индекс для поля id_product
            $table->index('related_product_type_id');   // Индекс для поля related_product_type_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Возвращаемся к исходному состоянию
        Schema::table('related_products', function (Blueprint $table) {
            $table->renameColumn('order_column', 'sorting');
        });
        
        // Удаляем индексы
        Schema::table('related_products', function (Blueprint $table) {
            $table->dropIndex(['product_id']);
            $table->dropIndex(['id_product']);
            $table->dropIndex(['related_product_type_id']);
        });
    }
}
