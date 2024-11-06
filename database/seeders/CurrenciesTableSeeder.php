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
                'internal_rate' => '110',
                'auto_calc_cbrf' => '1',
                'auto_multiplier' => '1.02',
                'created_at' => '2024-07-04 13:55:40',
                'updated_at' => '2024-09-15 15:17:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Доллар США',
                'charcode' => 'USD',
                'internal_rate' => '105',
                'auto_calc_cbrf' => '1',
                'auto_multiplier' => '1.02',
                'created_at' => '2024-07-04 13:55:59',
                'updated_at' => '2024-09-15 15:16:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Китайский юань',
                'charcode' => 'CNY',
                'internal_rate' => '14',
                'auto_calc_cbrf' => '1',
                'auto_multiplier' => '1.02',
                'created_at' => '2024-07-04 13:56:18',
                'updated_at' => '2024-09-15 15:17:54',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Турецкая лира',
                'charcode' => 'TRY',
                'internal_rate' => '3',
                'auto_calc_cbrf' => '1',
                'auto_multiplier' => '1.02',
                'created_at' => '2024-07-04 13:56:26',
                'updated_at' => '2024-07-04 13:56:27',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Фунт стерлингов',
                'charcode' => 'GBP',
                'internal_rate' => '130',
                'auto_calc_cbrf' => '1',
                'auto_multiplier' => '1.02',
                'created_at' => '2024-07-04 13:56:40',
                'updated_at' => '2024-07-04 13:56:41',
            ),
        ));
        
        
    }
}