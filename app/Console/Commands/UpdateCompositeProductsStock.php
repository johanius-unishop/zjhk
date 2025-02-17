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
        // Массив простых товаров, цена больше 0, товар публикуется
        $simple_products = Product::where('composite_product', 0)
                                ->where('supplier_price', '>', 0)
                                ->where('published', 1)
                                ->pluck('stock', 'id')
                                ->transform(function ($value) {
                                    return max(0, $value);
                                });

        // Получаем полный список составных товаров
        $composite_products = Product::where('composite_product', 1)->get();

        // Получаем данные из таблицы product_composite_elements
        $elements = ProductCompositeElement::all();

        // Создаем ассоциативный массив для хранения информации
        $compositeElements = [];

        foreach ($elements as $element) {
            if (!isset($compositeElements[$element->product_id])) {
                $compositeElements[$element->product_id] = [];
            }
            
            $compositeElements[$element->product_id][] = [
                'product_element_id' => $element->product_element_id,
                'quantity' => $element->quantity,
                'stock' => $simple_products[$element->product_element_id],
            ];
        }

        // Обновляем new_stock для каждого составного товара
        $updates_composite_products = [];

        foreach ($composite_products as $composite_product) {
            if (isset($compositeElements[$composite_product->id]) && !empty($compositeElements[$composite_product->id])) {
                $minStock = PHP_INT_MAX;

                foreach ($compositeElements[$composite_product->id] as $element) {
                    $stockPerUnit = floor($element['stock'] / $element['quantity']);
                    $minStock = min($minStock, $stockPerUnit);
                }

                if ($composite_product->stock != $minStock) {
                    $updates_composite_products[] = [
                        'id' => $composite_product->id,
                        'stock' => $minStock
                    ];
                }
            }
        }

        // Массовое обновление составных товаров
        if (!empty($updates_composite_products)) {
            foreach (array_chunk($updates_composite_products, 100) as $chunk) {
                Product::upsert(
                    $chunk,
                    ['id'],
                    ['stock']
                );
            }
        }
    }

}
