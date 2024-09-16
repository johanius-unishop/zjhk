<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliveryMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('delivery_methods')->delete();

        \DB::table('delivery_methods')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Самовывоз',
                'comment' => 'бесплатно',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Доставка',
                'comment' => 'от 300',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
