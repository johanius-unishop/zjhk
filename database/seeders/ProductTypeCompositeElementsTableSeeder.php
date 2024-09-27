<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTypeCompositeElementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('product_type_composite_elements')->delete();

        \DB::table('product_type_composite_elements')->insert(array (
            0 =>
            array (
                'id' => 1,
                'product_type_id' => 16,
                'name' => 'Вилка',
                'order_column' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'product_type_id' => 16,
                'name' => 'Розетка',
                'order_column' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'product_type_id' => 39,
                'name' => 'Контактная вставка',
                'order_column' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'product_type_id' => 39,
                'name' => 'Корпус',
                'order_column' => 2,
            ),
            4 =>
            array (
                'id' => 5,
                'product_type_id' => 39,
                'name' => 'Гермоввод',
                'order_column' => 3,
            ),
            5 =>
            array (
                'id' => 6,
                'product_type_id' => 38,
                'name' => 'Вилка',
                'order_column' => 1,
            ),
            6 =>
            array (
                'id' => 7,
                'product_type_id' => 38,
                'name' => 'Розетка',
                'order_column' => 2,
            ),
            7 =>
            array (
                'id' => 8,
                'product_type_id' => 38,
                'name' => 'Корпус',
                'order_column' => 3,
            ),
            8 =>
            array (
                'id' => 9,
                'product_type_id' => 38,
                'name' => 'Корпус',
                'order_column' => 4,
            ),
            9 =>
            array (
                'id' => 10,
                'product_type_id' => 38,
                'name' => 'Гермоввод',
                'order_column' => 5,
            ),
            10 =>
            array (
                'id' => 11,
                'product_type_id' => 17,
                'name' => 'Контактная вставка',
                'order_column' => 1,
            ),
            11 =>
            array (
                'id' => 12,
                'product_type_id' => 17,
                'name' => 'Контактная вставка',
                'order_column' => 2,
            ),
        ));


    }
}
