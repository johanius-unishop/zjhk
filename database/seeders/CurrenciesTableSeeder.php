<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('currencies')->delete();

        \DB::table('currencies')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'EUR',
                'created_at' => '2024-07-04 13:55:40',
                'updated_at' => '2024-07-04 13:55:41',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'USD',
                'created_at' => '2024-07-04 13:55:59',
                'updated_at' => '2024-07-04 13:56:00',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'CNY',
                'created_at' => '2024-07-04 13:56:18',
                'updated_at' => '2024-07-04 13:56:19',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'TRY',
                'created_at' => '2024-07-04 13:56:26',
                'updated_at' => '2024-07-04 13:56:27',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'GBP',
                'created_at' => '2024-07-04 13:56:40',
                'updated_at' => '2024-07-04 13:56:41',
            ),
        ));


    }
}
