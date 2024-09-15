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
                'name' => 'Евро',
                'charcode' => 'EUR',
                'numcode' => '978',
                'created_at' => '2024-07-04 13:55:40',
                'updated_at' => '2024-09-15 15:17:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Доллар США',
                'charcode' => 'USD',
                'numcode' => '840',
                'created_at' => '2024-07-04 13:55:59',
                'updated_at' => '2024-09-15 15:16:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Китайский юань',
                'charcode' => 'CNY',
                'numcode' => '156',
                'created_at' => '2024-07-04 13:56:18',
                'updated_at' => '2024-09-15 15:17:54',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'TRY',
                'charcode' => 'TRY',
                'numcode' => 'TRY',
                'created_at' => '2024-07-04 13:56:26',
                'updated_at' => '2024-07-04 13:56:27',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'GBP',
                'charcode' => 'GBP',
                'numcode' => 'GBP',
                'created_at' => '2024-07-04 13:56:40',
                'updated_at' => '2024-07-04 13:56:41',
            ),
        ));
        
        
    }
}