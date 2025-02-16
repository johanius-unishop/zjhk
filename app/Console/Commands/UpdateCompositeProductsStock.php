<?php

namespace App\Console\Commands;

use App\Models\ProductCompositeElement;
use Illuminate\Console\Command;
use App\Models\Product;


class UpdateCompositeProductsStock extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     *
     * @var string
     */
    protected $signature = 'products:update-composite-products-stock';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Обновление цены и наличия у комплектов, полукомлектов';

    /**
     * Путь к файлу отчета.
     *
     * @var string
     */

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Выполнить консольную команду.
     *
     * @return int
     */
    public function handle()
    {

            // Получаем простые товары
            $products = Product::where('composite_product', 0)->get();
                        
            // Создаем ассоциативный массив для быстрого поиска по имени и артикулу
            $products_new_stock = [];
            foreach ($products as $product) {
                $key = $product->name . '-' . $product->article;
                $products_new_stock[$key] = [
                    'id' => $product->id,
                    'stock' => intval($product->stock),
                ];
            }

            // Получаем полный список составных товаров
            $composite_products = Product::where('composite_product', 1)->get();

            // Создаем ассоциативный массив для быстрого поиска по id составвного товара
            $composite_products_new_stock = [];
            foreach ($composite_products as $composite_product) {
                $key = $composite_product->id;
                $composite_products_new_stock[$key] = [
                    'id' => $composite_product->id,
                    'stock' => intval($composite_product->stock),
                    'new_stock' => 0,
                ];
            }

            //Подготавливаем ассоциативный массив простых товаров где ключ - id
            $simple_products = [];
            foreach ($products_new_stock as $product_new_stock) {
                $simple_products[$product_new_stock['id']] = $product_new_stock['stock'];
            }

            
            foreach ($composite_products_new_stock as &$composite_product_new_stock) {
                $composite_product_quantity = 10000000;
                $composite_product_elements = ProductCompositeElement::where('product_id', $composite_product_new_stock['id'])->get();
            
                if (!empty($composite_product_elements)) {
                    foreach ($composite_product_elements as $composite_product_element) {
                        
                        if (isset($simple_products[$composite_product_element->product_element_id])) {
                            // Ключ существует, можно работать с элементом
                            $quantity = intdiv($simple_products[$composite_product_element->product_element_id], $composite_product_element->quantity);
            
                            
                        } else {
                            $quantity = 0;
                        }
                        $composite_product_quantity = min($composite_product_quantity, $quantity);
                    }
                }
                else{
                    $composite_product_quantity = 0;   
                }
                $composite_product_new_stock['new_stock'] = $composite_product_quantity;
            }

            // Подготавливаем массив для массового обновления составных товаров
            $updates_composite_products = [];
            foreach ($composite_products_new_stock as $composite_product_new_stock) {
                if ($composite_product_new_stock['stock'] != $composite_product_new_stock['new_stock']) {
                    $updates_composite_products[] = [
                        'id' => intval($composite_product_new_stock['id']),
                        'stock' => intval($composite_product_new_stock['new_stock'])
                    ];
                }
            }

            

            if (!empty($updates_composite_products)) {
                foreach ($updates_composite_products as $update) {
                    Product::where('id', $update['id'])->update(['stock' => $update['stock']]);
                }
            }
    }

}
