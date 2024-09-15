<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendors')->delete();
        
        \DB::table('vendors')->insert(array (
            0 => 
            array (
                'id' => 1,
            'name' => 'ZHEJIANG HAOKE ELECTRIC (ZJHK)',
                'order_column' => 1,
                'slug' => 'zhejiang-haoke-electric-zjhk',
                'logo' => NULL,
                'description' => NULL,
                'country' => 'Китай',
                'delivery_time' => '8-12 недель',
                'warranty' => '12 мес',
                'published' => 1,
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ),
        ));
        
        
    }
}