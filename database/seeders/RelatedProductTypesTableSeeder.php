<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RelatedProductTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('related_product_types')->delete();

        \DB::table('related_product_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Ответные контактные вставки',
                'order_column' => 1,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:28:18',
                'updated_at' => '2024-06-28 16:28:19',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Совместимые корпусы',
                'order_column' => 2,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:28:50',
                'updated_at' => '2024-06-28 16:28:51',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Совместимые обжимные контакты',
                'order_column' => 3,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:29:35',
                'updated_at' => '2024-06-28 16:29:36',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Инструмент',
                'order_column' => 4,
                'product_type_id' => 17,
                'created_at' => '2024-06-28 16:30:48',
                'updated_at' => '2024-06-28 16:30:49',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Совместимые контактные вставки',
                'order_column' => 1,
                'product_type_id' => 20,
                'created_at' => '2024-07-04 21:50:24',
                'updated_at' => '2024-07-04 21:50:26',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Ответные корпусы',
                'order_column' => 2,
                'product_type_id' => 20,
                'created_at' => '2024-07-04 21:51:07',
                'updated_at' => '2024-07-04 21:51:08',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Резьбовые фиттинги',
                'order_column' => 4,
                'product_type_id' => 20,
                'created_at' => '2024-07-04 21:53:05',
                'updated_at' => '2024-07-04 21:53:06',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Совместимые крышки',
                'order_column' => 3,
                'product_type_id' => 20,
                'created_at' => '2024-07-04 23:31:03',
                'updated_at' => '2024-07-04 23:31:04',
            ),
        ));


    }
}
