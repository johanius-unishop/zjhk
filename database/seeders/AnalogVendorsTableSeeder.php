<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnalogVendorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('analog_vendors')->delete();

        \DB::table('analog_vendors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Harting',
                'published' => 1,
                'created_at' => '2024-06-28 16:48:00',
                'updated_at' => '2024-06-28 16:48:01',
            ),
            1 =>
            array (
                'id' => 2,
            'name' => 'MeteCon (MeteEnerji)',
                'published' => 1,
                'created_at' => '2024-06-28 16:48:46',
                'updated_at' => '2024-06-28 16:48:47',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'ILME',
                'published' => 1,
                'created_at' => '2024-06-28 16:49:07',
                'updated_at' => '2024-06-28 16:49:08',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'WAIN',
                'published' => 1,
                'created_at' => '2024-06-28 16:49:20',
                'updated_at' => '2024-06-28 16:49:21',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'ELMI',
                'published' => 1,
                'created_at' => '2024-06-28 16:49:40',
                'updated_at' => '2024-06-28 16:49:41',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Oukerui',
                'published' => 1,
                'created_at' => '2024-06-28 16:50:04',
                'updated_at' => '2024-06-28 16:50:06',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Weidmuller',
                'published' => 1,
                'created_at' => '2024-06-28 16:50:27',
                'updated_at' => '2024-06-28 16:50:28',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Phoenix Contact',
                'published' => 1,
                'created_at' => '2024-06-28 16:51:01',
                'updated_at' => '2024-06-28 16:51:02',
            ),
  
        ));


    }
}
