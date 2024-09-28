<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductPdfsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_pdfs')->delete();
        
        \DB::table('product_pdfs')->insert(array (
            0 => 
            array (
                'id' => 3,
                'product_id' => 2071,
                'pdf' => 'h10a-bk-1l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            1 => 
            array (
                'id' => 4,
                'product_id' => 2072,
                'pdf' => 'h10a-bk-1l-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            2 => 
            array (
                'id' => 5,
                'product_id' => 2073,
                'pdf' => 'h10a-bk-1l-mcv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            3 => 
            array (
                'id' => 6,
                'product_id' => 2061,
                'pdf' => 'h10a-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            4 => 
            array (
                'id' => 7,
                'product_id' => 2062,
                'pdf' => 'h10a-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            5 => 
            array (
                'id' => 8,
                'product_id' => 2063,
                'pdf' => 'h10a-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            6 => 
            array (
                'id' => 9,
                'product_id' => 2064,
                'pdf' => 'h10a-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            7 => 
            array (
                'id' => 10,
                'product_id' => 2065,
                'pdf' => 'h10a-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            8 => 
            array (
                'id' => 11,
                'product_id' => 2075,
                'pdf' => 'h10a-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            9 => 
            array (
                'id' => 12,
                'product_id' => 2078,
                'pdf' => 'h10a-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            10 => 
            array (
                'id' => 13,
                'product_id' => 2081,
                'pdf' => 'h10a-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            11 => 
            array (
                'id' => 14,
                'product_id' => 2084,
                'pdf' => 'h10a-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            12 => 
            array (
                'id' => 15,
                'product_id' => 2080,
                'pdf' => 'h10a-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            13 => 
            array (
                'id' => 16,
                'product_id' => 2082,
                'pdf' => 'h10a-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            14 => 
            array (
                'id' => 17,
                'product_id' => 2083,
                'pdf' => 'h10a-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            15 => 
            array (
                'id' => 18,
                'product_id' => 2085,
                'pdf' => 'h10a-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            16 => 
            array (
                'id' => 19,
                'product_id' => 2074,
                'pdf' => 'h10a-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            17 => 
            array (
                'id' => 20,
                'product_id' => 2076,
                'pdf' => 'h10a-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            18 => 
            array (
                'id' => 21,
                'product_id' => 2087,
                'pdf' => 'h10a-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            19 => 
            array (
                'id' => 22,
                'product_id' => 2090,
                'pdf' => 'h10a-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            20 => 
            array (
                'id' => 23,
                'product_id' => 2086,
                'pdf' => 'h10a-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            21 => 
            array (
                'id' => 24,
                'product_id' => 2088,
                'pdf' => 'h10a-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            22 => 
            array (
                'id' => 25,
                'product_id' => 2089,
                'pdf' => 'h10a-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            23 => 
            array (
                'id' => 26,
                'product_id' => 2091,
                'pdf' => 'h10a-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            24 => 
            array (
                'id' => 27,
                'product_id' => 2077,
                'pdf' => 'h10a-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            25 => 
            array (
                'id' => 28,
                'product_id' => 2079,
                'pdf' => 'h10a-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            26 => 
            array (
                'id' => 29,
                'product_id' => 2066,
                'pdf' => 'h10a-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            27 => 
            array (
                'id' => 30,
                'product_id' => 2067,
                'pdf' => 'h10a-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            28 => 
            array (
                'id' => 31,
                'product_id' => 2068,
                'pdf' => 'h10a-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            29 => 
            array (
                'id' => 32,
                'product_id' => 2069,
                'pdf' => 'h10a-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            30 => 
            array (
                'id' => 33,
                'product_id' => 2070,
                'pdf' => 'h10a-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            31 => 
            array (
                'id' => 34,
                'product_id' => 2567,
                'pdf' => 'h10b-bk-1l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            32 => 
            array (
                'id' => 35,
                'product_id' => 2568,
                'pdf' => 'h10b-bk-1l-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            33 => 
            array (
                'id' => 36,
                'product_id' => 2569,
                'pdf' => 'h10b-bk-1l-mcv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            34 => 
            array (
                'id' => 37,
                'product_id' => 2626,
                'pdf' => 'h10b-bk-2l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            35 => 
            array (
                'id' => 38,
                'product_id' => 2659,
                'pdf' => 'h10b-bk-4b.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            36 => 
            array (
                'id' => 39,
                'product_id' => 2660,
                'pdf' => 'h10b-bk-4b-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            37 => 
            array (
                'id' => 40,
                'product_id' => 2561,
                'pdf' => 'h10b-cct-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            38 => 
            array (
                'id' => 41,
                'product_id' => 2562,
                'pdf' => 'h10b-cct-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            39 => 
            array (
                'id' => 42,
                'product_id' => 2641,
                'pdf' => 'h10b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            40 => 
            array (
                'id' => 43,
                'product_id' => 2642,
                'pdf' => 'h10b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            41 => 
            array (
                'id' => 44,
                'product_id' => 2563,
                'pdf' => 'h10b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            42 => 
            array (
                'id' => 45,
                'product_id' => 2564,
                'pdf' => 'h10b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            43 => 
            array (
                'id' => 46,
                'product_id' => 2565,
                'pdf' => 'h10b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            44 => 
            array (
                'id' => 47,
                'product_id' => 2566,
                'pdf' => 'h10b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            45 => 
            array (
                'id' => 48,
                'product_id' => 2643,
                'pdf' => 'h10b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            46 => 
            array (
                'id' => 49,
                'product_id' => 2644,
                'pdf' => 'h10b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            47 => 
            array (
                'id' => 50,
                'product_id' => 2645,
                'pdf' => 'h10b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            48 => 
            array (
                'id' => 51,
                'product_id' => 2646,
                'pdf' => 'h10b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            49 => 
            array (
                'id' => 52,
                'product_id' => 8393,
                'pdf' => 'h10b-cv-4b-1.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            50 => 
            array (
                'id' => 53,
                'product_id' => 8394,
                'pdf' => 'h10b-cv-4b-2.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            51 => 
            array (
                'id' => 54,
                'product_id' => 2547,
                'pdf' => 'h10b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            52 => 
            array (
                'id' => 55,
                'product_id' => 2548,
                'pdf' => 'h10b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            53 => 
            array (
                'id' => 56,
                'product_id' => 2549,
                'pdf' => 'h10b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            54 => 
            array (
                'id' => 57,
                'product_id' => 2647,
                'pdf' => 'h10b-se-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            55 => 
            array (
                'id' => 58,
                'product_id' => 2648,
                'pdf' => 'h10b-se-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            56 => 
            array (
                'id' => 59,
                'product_id' => 2612,
                'pdf' => 'h10b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            57 => 
            array (
                'id' => 60,
                'product_id' => 2613,
                'pdf' => 'h10b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            58 => 
            array (
                'id' => 61,
                'product_id' => 2614,
                'pdf' => 'h10b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            59 => 
            array (
                'id' => 62,
                'product_id' => 2550,
                'pdf' => 'h10b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            60 => 
            array (
                'id' => 63,
                'product_id' => 2551,
                'pdf' => 'h10b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            61 => 
            array (
                'id' => 64,
                'product_id' => 2552,
                'pdf' => 'h10b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            62 => 
            array (
                'id' => 65,
                'product_id' => 2553,
                'pdf' => 'h10b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            63 => 
            array (
                'id' => 66,
                'product_id' => 2649,
                'pdf' => 'h10b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            64 => 
            array (
                'id' => 67,
                'product_id' => 2650,
                'pdf' => 'h10b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            65 => 
            array (
                'id' => 68,
                'product_id' => 2651,
                'pdf' => 'h10b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            66 => 
            array (
                'id' => 69,
                'product_id' => 2652,
                'pdf' => 'h10b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            67 => 
            array (
                'id' => 70,
                'product_id' => 2615,
                'pdf' => 'h10b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            68 => 
            array (
                'id' => 71,
                'product_id' => 2616,
                'pdf' => 'h10b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            69 => 
            array (
                'id' => 72,
                'product_id' => 2617,
                'pdf' => 'h10b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            70 => 
            array (
                'id' => 73,
                'product_id' => 2618,
                'pdf' => 'h10b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            71 => 
            array (
                'id' => 74,
                'product_id' => 2571,
                'pdf' => 'h10b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            72 => 
            array (
                'id' => 75,
                'product_id' => 2573,
                'pdf' => 'h10b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            73 => 
            array (
                'id' => 76,
                'product_id' => 2575,
                'pdf' => 'h10b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            74 => 
            array (
                'id' => 77,
                'product_id' => 2577,
                'pdf' => 'h10b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            75 => 
            array (
                'id' => 78,
                'product_id' => 2579,
                'pdf' => 'h10b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            76 => 
            array (
                'id' => 79,
                'product_id' => 2581,
                'pdf' => 'h10b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            77 => 
            array (
                'id' => 80,
                'product_id' => 2576,
                'pdf' => 'h10b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            78 => 
            array (
                'id' => 81,
                'product_id' => 2578,
                'pdf' => 'h10b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            79 => 
            array (
                'id' => 82,
                'product_id' => 2580,
                'pdf' => 'h10b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            80 => 
            array (
                'id' => 83,
                'product_id' => 2570,
                'pdf' => 'h10b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            81 => 
            array (
                'id' => 84,
                'product_id' => 2572,
                'pdf' => 'h10b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            82 => 
            array (
                'id' => 85,
                'product_id' => 2583,
                'pdf' => 'h10b-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            83 => 
            array (
                'id' => 86,
                'product_id' => 2585,
                'pdf' => 'h10b-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            84 => 
            array (
                'id' => 87,
                'product_id' => 2587,
                'pdf' => 'h10b-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            85 => 
            array (
                'id' => 88,
                'product_id' => 2582,
                'pdf' => 'h10b-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            86 => 
            array (
                'id' => 89,
                'product_id' => 2584,
                'pdf' => 'h10b-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            87 => 
            array (
                'id' => 90,
                'product_id' => 2586,
                'pdf' => 'h10b-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            88 => 
            array (
                'id' => 91,
                'product_id' => 2574,
                'pdf' => 'h10b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            89 => 
            array (
                'id' => 92,
                'product_id' => 2628,
                'pdf' => 'h10b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            90 => 
            array (
                'id' => 93,
                'product_id' => 2630,
                'pdf' => 'h10b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            91 => 
            array (
                'id' => 94,
                'product_id' => 2632,
                'pdf' => 'h10b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            92 => 
            array (
                'id' => 95,
                'product_id' => 2627,
                'pdf' => 'h10b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            93 => 
            array (
                'id' => 96,
                'product_id' => 2629,
                'pdf' => 'h10b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            94 => 
            array (
                'id' => 97,
                'product_id' => 2631,
                'pdf' => 'h10b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            95 => 
            array (
                'id' => 98,
                'product_id' => 2663,
                'pdf' => 'h10b-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            96 => 
            array (
                'id' => 99,
                'product_id' => 2665,
                'pdf' => 'h10b-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            97 => 
            array (
                'id' => 100,
                'product_id' => 2667,
                'pdf' => 'h10b-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            98 => 
            array (
                'id' => 101,
                'product_id' => 2669,
                'pdf' => 'h10b-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            99 => 
            array (
                'id' => 102,
                'product_id' => 2671,
                'pdf' => 'h10b-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            100 => 
            array (
                'id' => 103,
                'product_id' => 2673,
                'pdf' => 'h10b-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            101 => 
            array (
                'id' => 104,
                'product_id' => 2668,
                'pdf' => 'h10b-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            102 => 
            array (
                'id' => 105,
                'product_id' => 2670,
                'pdf' => 'h10b-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            103 => 
            array (
                'id' => 106,
                'product_id' => 2672,
                'pdf' => 'h10b-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            104 => 
            array (
                'id' => 107,
                'product_id' => 2662,
                'pdf' => 'h10b-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            105 => 
            array (
                'id' => 108,
                'product_id' => 2664,
                'pdf' => 'h10b-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            106 => 
            array (
                'id' => 109,
                'product_id' => 2675,
                'pdf' => 'h10b-sf-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            107 => 
            array (
                'id' => 110,
                'product_id' => 2677,
                'pdf' => 'h10b-sf-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            108 => 
            array (
                'id' => 111,
                'product_id' => 2679,
                'pdf' => 'h10b-sf-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            109 => 
            array (
                'id' => 112,
                'product_id' => 2674,
                'pdf' => 'h10b-sf-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            110 => 
            array (
                'id' => 113,
                'product_id' => 2676,
                'pdf' => 'h10b-sf-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            111 => 
            array (
                'id' => 114,
                'product_id' => 2678,
                'pdf' => 'h10b-sf-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            112 => 
            array (
                'id' => 115,
                'product_id' => 2666,
                'pdf' => 'h10b-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            113 => 
            array (
                'id' => 116,
                'product_id' => 2589,
                'pdf' => 'h10b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            114 => 
            array (
                'id' => 117,
                'product_id' => 2591,
                'pdf' => 'h10b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            115 => 
            array (
                'id' => 118,
                'product_id' => 2593,
                'pdf' => 'h10b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            116 => 
            array (
                'id' => 119,
                'product_id' => 2595,
                'pdf' => 'h10b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            117 => 
            array (
                'id' => 120,
                'product_id' => 2597,
                'pdf' => 'h10b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            118 => 
            array (
                'id' => 121,
                'product_id' => 2599,
                'pdf' => 'h10b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            119 => 
            array (
                'id' => 122,
                'product_id' => 2601,
                'pdf' => 'h10b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            120 => 
            array (
                'id' => 123,
                'product_id' => 2603,
                'pdf' => 'h10b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            121 => 
            array (
                'id' => 124,
                'product_id' => 2596,
                'pdf' => 'h10b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            122 => 
            array (
                'id' => 125,
                'product_id' => 2598,
                'pdf' => 'h10b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            123 => 
            array (
                'id' => 126,
                'product_id' => 2600,
                'pdf' => 'h10b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            124 => 
            array (
                'id' => 127,
                'product_id' => 2602,
                'pdf' => 'h10b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            125 => 
            array (
                'id' => 128,
                'product_id' => 2588,
                'pdf' => 'h10b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            126 => 
            array (
                'id' => 129,
                'product_id' => 2590,
                'pdf' => 'h10b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            127 => 
            array (
                'id' => 130,
                'product_id' => 2605,
                'pdf' => 'h10b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            128 => 
            array (
                'id' => 131,
                'product_id' => 2607,
                'pdf' => 'h10b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            129 => 
            array (
                'id' => 132,
                'product_id' => 2609,
                'pdf' => 'h10b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            130 => 
            array (
                'id' => 133,
                'product_id' => 2611,
                'pdf' => 'h10b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            131 => 
            array (
                'id' => 134,
                'product_id' => 2604,
                'pdf' => 'h10b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            132 => 
            array (
                'id' => 135,
                'product_id' => 2606,
                'pdf' => 'h10b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            133 => 
            array (
                'id' => 136,
                'product_id' => 2608,
                'pdf' => 'h10b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            134 => 
            array (
                'id' => 137,
                'product_id' => 2610,
                'pdf' => 'h10b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            135 => 
            array (
                'id' => 138,
                'product_id' => 2592,
                'pdf' => 'h10b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            136 => 
            array (
                'id' => 139,
                'product_id' => 2594,
                'pdf' => 'h10b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            137 => 
            array (
                'id' => 140,
                'product_id' => 2634,
                'pdf' => 'h10b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            138 => 
            array (
                'id' => 141,
                'product_id' => 2636,
                'pdf' => 'h10b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            139 => 
            array (
                'id' => 142,
                'product_id' => 2638,
                'pdf' => 'h10b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            140 => 
            array (
                'id' => 143,
                'product_id' => 2640,
                'pdf' => 'h10b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            141 => 
            array (
                'id' => 144,
                'product_id' => 2633,
                'pdf' => 'h10b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            142 => 
            array (
                'id' => 145,
                'product_id' => 2635,
                'pdf' => 'h10b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            143 => 
            array (
                'id' => 146,
                'product_id' => 2637,
                'pdf' => 'h10b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            144 => 
            array (
                'id' => 147,
                'product_id' => 2639,
                'pdf' => 'h10b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            145 => 
            array (
                'id' => 148,
                'product_id' => 2681,
                'pdf' => 'h10b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            146 => 
            array (
                'id' => 149,
                'product_id' => 2683,
                'pdf' => 'h10b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            147 => 
            array (
                'id' => 150,
                'product_id' => 2685,
                'pdf' => 'h10b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            148 => 
            array (
                'id' => 151,
                'product_id' => 2687,
                'pdf' => 'h10b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            149 => 
            array (
                'id' => 152,
                'product_id' => 2689,
                'pdf' => 'h10b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            150 => 
            array (
                'id' => 153,
                'product_id' => 2691,
                'pdf' => 'h10b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            151 => 
            array (
                'id' => 154,
                'product_id' => 2693,
                'pdf' => 'h10b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            152 => 
            array (
                'id' => 155,
                'product_id' => 2695,
                'pdf' => 'h10b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            153 => 
            array (
                'id' => 156,
                'product_id' => 2688,
                'pdf' => 'h10b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            154 => 
            array (
                'id' => 157,
                'product_id' => 2690,
                'pdf' => 'h10b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            155 => 
            array (
                'id' => 158,
                'product_id' => 2692,
                'pdf' => 'h10b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            156 => 
            array (
                'id' => 159,
                'product_id' => 2694,
                'pdf' => 'h10b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            157 => 
            array (
                'id' => 160,
                'product_id' => 2680,
                'pdf' => 'h10b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            158 => 
            array (
                'id' => 161,
                'product_id' => 2682,
                'pdf' => 'h10b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            159 => 
            array (
                'id' => 162,
                'product_id' => 2697,
                'pdf' => 'h10b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            160 => 
            array (
                'id' => 163,
                'product_id' => 2699,
                'pdf' => 'h10b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            161 => 
            array (
                'id' => 164,
                'product_id' => 2701,
                'pdf' => 'h10b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            162 => 
            array (
                'id' => 165,
                'product_id' => 2703,
                'pdf' => 'h10b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            163 => 
            array (
                'id' => 166,
                'product_id' => 2696,
                'pdf' => 'h10b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            164 => 
            array (
                'id' => 167,
                'product_id' => 2698,
                'pdf' => 'h10b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            165 => 
            array (
                'id' => 168,
                'product_id' => 2700,
                'pdf' => 'h10b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            166 => 
            array (
                'id' => 169,
                'product_id' => 2702,
                'pdf' => 'h10b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            167 => 
            array (
                'id' => 170,
                'product_id' => 2684,
                'pdf' => 'h10b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            168 => 
            array (
                'id' => 171,
                'product_id' => 2686,
                'pdf' => 'h10b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            169 => 
            array (
                'id' => 172,
                'product_id' => 2554,
                'pdf' => 'h10b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            170 => 
            array (
                'id' => 173,
                'product_id' => 2555,
                'pdf' => 'h10b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            171 => 
            array (
                'id' => 174,
                'product_id' => 2556,
                'pdf' => 'h10b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            172 => 
            array (
                'id' => 175,
                'product_id' => 2653,
                'pdf' => 'h10b-te-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            173 => 
            array (
                'id' => 176,
                'product_id' => 2654,
                'pdf' => 'h10b-te-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            174 => 
            array (
                'id' => 177,
                'product_id' => 2619,
                'pdf' => 'h10b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            175 => 
            array (
                'id' => 178,
                'product_id' => 2620,
                'pdf' => 'h10b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            176 => 
            array (
                'id' => 179,
                'product_id' => 2621,
                'pdf' => 'h10b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            177 => 
            array (
                'id' => 180,
                'product_id' => 2557,
                'pdf' => 'h10b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            178 => 
            array (
                'id' => 181,
                'product_id' => 2558,
                'pdf' => 'h10b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            179 => 
            array (
                'id' => 182,
                'product_id' => 2559,
                'pdf' => 'h10b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            180 => 
            array (
                'id' => 183,
                'product_id' => 2560,
                'pdf' => 'h10b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            181 => 
            array (
                'id' => 184,
                'product_id' => 2655,
                'pdf' => 'h10b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            182 => 
            array (
                'id' => 185,
                'product_id' => 2656,
                'pdf' => 'h10b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            183 => 
            array (
                'id' => 186,
                'product_id' => 2657,
                'pdf' => 'h10b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            184 => 
            array (
                'id' => 187,
                'product_id' => 2658,
                'pdf' => 'h10b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            185 => 
            array (
                'id' => 188,
                'product_id' => 2622,
                'pdf' => 'h10b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            186 => 
            array (
                'id' => 189,
                'product_id' => 2623,
                'pdf' => 'h10b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            187 => 
            array (
                'id' => 190,
                'product_id' => 64114,
                'pdf' => 'h10b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            188 => 
            array (
                'id' => 191,
                'product_id' => 2624,
                'pdf' => 'h10b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            189 => 
            array (
                'id' => 192,
                'product_id' => 2625,
                'pdf' => 'h10b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            190 => 
            array (
                'id' => 193,
                'product_id' => 2129,
                'pdf' => 'h16a-bk-1l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            191 => 
            array (
                'id' => 194,
                'product_id' => 2130,
                'pdf' => 'h16a-bk-1l-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            192 => 
            array (
                'id' => 195,
                'product_id' => 2131,
                'pdf' => 'h16a-bk-1l-mcv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            193 => 
            array (
                'id' => 196,
                'product_id' => 2119,
                'pdf' => 'h16a-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            194 => 
            array (
                'id' => 197,
                'product_id' => 2120,
                'pdf' => 'h16a-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            195 => 
            array (
                'id' => 198,
                'product_id' => 2121,
                'pdf' => 'h16a-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            196 => 
            array (
                'id' => 199,
                'product_id' => 2122,
                'pdf' => 'h16a-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            197 => 
            array (
                'id' => 200,
                'product_id' => 2123,
                'pdf' => 'h16a-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            198 => 
            array (
                'id' => 201,
                'product_id' => 2133,
                'pdf' => 'h16a-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            199 => 
            array (
                'id' => 202,
                'product_id' => 2153,
                'pdf' => 'h16a-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            200 => 
            array (
                'id' => 203,
                'product_id' => 2135,
                'pdf' => 'h16a-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            201 => 
            array (
                'id' => 204,
                'product_id' => 2139,
                'pdf' => 'h16a-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            202 => 
            array (
                'id' => 205,
                'product_id' => 2141,
                'pdf' => 'h16a-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            203 => 
            array (
                'id' => 206,
                'product_id' => 2143,
                'pdf' => 'h16a-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            204 => 
            array (
                'id' => 207,
                'product_id' => 2138,
                'pdf' => 'h16a-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            205 => 
            array (
                'id' => 208,
                'product_id' => 2140,
                'pdf' => 'h16a-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            206 => 
            array (
                'id' => 209,
                'product_id' => 2142,
                'pdf' => 'h16a-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            207 => 
            array (
                'id' => 210,
                'product_id' => 2144,
                'pdf' => 'h16a-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            208 => 
            array (
                'id' => 211,
                'product_id' => 2132,
                'pdf' => 'h16a-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            209 => 
            array (
                'id' => 212,
                'product_id' => 2134,
                'pdf' => 'h16a-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            210 => 
            array (
                'id' => 213,
                'product_id' => 2146,
                'pdf' => 'h16a-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            211 => 
            array (
                'id' => 214,
                'product_id' => 2148,
                'pdf' => 'h16a-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            212 => 
            array (
                'id' => 215,
                'product_id' => 2150,
                'pdf' => 'h16a-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            213 => 
            array (
                'id' => 216,
                'product_id' => 2145,
                'pdf' => 'h16a-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            214 => 
            array (
                'id' => 217,
                'product_id' => 2147,
                'pdf' => 'h16a-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            215 => 
            array (
                'id' => 218,
                'product_id' => 2149,
                'pdf' => 'h16a-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            216 => 
            array (
                'id' => 219,
                'product_id' => 2151,
                'pdf' => 'h16a-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            217 => 
            array (
                'id' => 220,
                'product_id' => 2136,
                'pdf' => 'h16a-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            218 => 
            array (
                'id' => 221,
                'product_id' => 2137,
                'pdf' => 'h16a-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            219 => 
            array (
                'id' => 222,
                'product_id' => 2124,
                'pdf' => 'h16a-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            220 => 
            array (
                'id' => 223,
                'product_id' => 2125,
                'pdf' => 'h16a-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            221 => 
            array (
                'id' => 224,
                'product_id' => 2126,
                'pdf' => 'h16a-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            222 => 
            array (
                'id' => 225,
                'product_id' => 2127,
                'pdf' => 'h16a-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            223 => 
            array (
                'id' => 226,
                'product_id' => 2128,
                'pdf' => 'h16a-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            224 => 
            array (
                'id' => 227,
                'product_id' => 2861,
                'pdf' => 'h16b-bk-1l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            225 => 
            array (
                'id' => 228,
                'product_id' => 2862,
                'pdf' => 'h16b-bk-1l-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            226 => 
            array (
                'id' => 229,
                'product_id' => 2863,
                'pdf' => 'h16b-bk-1l-mcv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            227 => 
            array (
                'id' => 230,
                'product_id' => 2909,
                'pdf' => 'h16b-bk-2l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            228 => 
            array (
                'id' => 231,
                'product_id' => 2944,
                'pdf' => 'h16b-bk-4b.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            229 => 
            array (
                'id' => 232,
                'product_id' => 2945,
                'pdf' => 'h16b-bk-4b-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            230 => 
            array (
                'id' => 233,
                'product_id' => 2946,
                'pdf' => 'h16b-bk-4b-mcv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            231 => 
            array (
                'id' => 234,
                'product_id' => 2854,
                'pdf' => 'h16b-cct-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            232 => 
            array (
                'id' => 235,
                'product_id' => 2855,
                'pdf' => 'h16b-cct-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            233 => 
            array (
                'id' => 236,
                'product_id' => 2856,
                'pdf' => 'h16b-cct-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            234 => 
            array (
                'id' => 237,
                'product_id' => 2922,
                'pdf' => 'h16b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            235 => 
            array (
                'id' => 238,
                'product_id' => 2923,
                'pdf' => 'h16b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            236 => 
            array (
                'id' => 239,
                'product_id' => 2924,
                'pdf' => 'h16b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            237 => 
            array (
                'id' => 240,
                'product_id' => 2857,
                'pdf' => 'h16b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            238 => 
            array (
                'id' => 241,
                'product_id' => 2858,
                'pdf' => 'h16b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            239 => 
            array (
                'id' => 242,
                'product_id' => 2859,
                'pdf' => 'h16b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            240 => 
            array (
                'id' => 243,
                'product_id' => 2860,
                'pdf' => 'h16b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            241 => 
            array (
                'id' => 244,
                'product_id' => 2925,
                'pdf' => 'h16b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            242 => 
            array (
                'id' => 245,
                'product_id' => 2926,
                'pdf' => 'h16b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            243 => 
            array (
                'id' => 246,
                'product_id' => 2927,
                'pdf' => 'h16b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            244 => 
            array (
                'id' => 247,
                'product_id' => 2928,
                'pdf' => 'h16b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            245 => 
            array (
                'id' => 248,
                'product_id' => 2929,
                'pdf' => 'h16b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            246 => 
            array (
                'id' => 249,
                'product_id' => 8415,
                'pdf' => 'h16b-cv-4b-1.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            247 => 
            array (
                'id' => 250,
                'product_id' => 8416,
                'pdf' => 'h16b-cv-4b-2.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            248 => 
            array (
                'id' => 251,
                'product_id' => 2840,
                'pdf' => 'h16b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            249 => 
            array (
                'id' => 252,
                'product_id' => 2841,
                'pdf' => 'h16b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            250 => 
            array (
                'id' => 253,
                'product_id' => 2842,
                'pdf' => 'h16b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            251 => 
            array (
                'id' => 254,
                'product_id' => 2930,
                'pdf' => 'h16b-se-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            252 => 
            array (
                'id' => 255,
                'product_id' => 2931,
                'pdf' => 'h16b-se-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            253 => 
            array (
                'id' => 256,
                'product_id' => 2932,
                'pdf' => 'h16b-se-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            254 => 
            array (
                'id' => 257,
                'product_id' => 2895,
                'pdf' => 'h16b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            255 => 
            array (
                'id' => 258,
                'product_id' => 2896,
                'pdf' => 'h16b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            256 => 
            array (
                'id' => 259,
                'product_id' => 2897,
                'pdf' => 'h16b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            257 => 
            array (
                'id' => 260,
                'product_id' => 2843,
                'pdf' => 'h16b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            258 => 
            array (
                'id' => 261,
                'product_id' => 2844,
                'pdf' => 'h16b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            259 => 
            array (
                'id' => 262,
                'product_id' => 2845,
                'pdf' => 'h16b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            260 => 
            array (
                'id' => 263,
                'product_id' => 2846,
                'pdf' => 'h16b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            261 => 
            array (
                'id' => 264,
                'product_id' => 2933,
                'pdf' => 'h16b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            262 => 
            array (
                'id' => 265,
                'product_id' => 2934,
                'pdf' => 'h16b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            263 => 
            array (
                'id' => 266,
                'product_id' => 2935,
                'pdf' => 'h16b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            264 => 
            array (
                'id' => 267,
                'product_id' => 2936,
                'pdf' => 'h16b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            265 => 
            array (
                'id' => 268,
                'product_id' => 64115,
                'pdf' => 'h16b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            266 => 
            array (
                'id' => 269,
                'product_id' => 2898,
                'pdf' => 'h16b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            267 => 
            array (
                'id' => 270,
                'product_id' => 2899,
                'pdf' => 'h16b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            268 => 
            array (
                'id' => 271,
                'product_id' => 2900,
                'pdf' => 'h16b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            269 => 
            array (
                'id' => 272,
                'product_id' => 2901,
                'pdf' => 'h16b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            270 => 
            array (
                'id' => 273,
                'product_id' => 2865,
                'pdf' => 'h16b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            271 => 
            array (
                'id' => 274,
                'product_id' => 2867,
                'pdf' => 'h16b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            272 => 
            array (
                'id' => 275,
                'product_id' => 2869,
                'pdf' => 'h16b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            273 => 
            array (
                'id' => 276,
                'product_id' => 2871,
                'pdf' => 'h16b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            274 => 
            array (
                'id' => 277,
                'product_id' => 2868,
                'pdf' => 'h16b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            275 => 
            array (
                'id' => 278,
                'product_id' => 2870,
                'pdf' => 'h16b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            276 => 
            array (
                'id' => 279,
                'product_id' => 2864,
                'pdf' => 'h16b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            277 => 
            array (
                'id' => 280,
                'product_id' => 2873,
                'pdf' => 'h16b-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            278 => 
            array (
                'id' => 281,
                'product_id' => 2875,
                'pdf' => 'h16b-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            279 => 
            array (
                'id' => 282,
                'product_id' => 2872,
                'pdf' => 'h16b-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            280 => 
            array (
                'id' => 283,
                'product_id' => 2874,
                'pdf' => 'h16b-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            281 => 
            array (
                'id' => 284,
                'product_id' => 2866,
                'pdf' => 'h16b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            282 => 
            array (
                'id' => 285,
                'product_id' => 2911,
                'pdf' => 'h16b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            283 => 
            array (
                'id' => 286,
                'product_id' => 2913,
                'pdf' => 'h16b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            284 => 
            array (
                'id' => 287,
                'product_id' => 2910,
                'pdf' => 'h16b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            285 => 
            array (
                'id' => 288,
                'product_id' => 2912,
                'pdf' => 'h16b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            286 => 
            array (
                'id' => 289,
                'product_id' => 2948,
                'pdf' => 'h16b-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            287 => 
            array (
                'id' => 290,
                'product_id' => 2950,
                'pdf' => 'h16b-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            288 => 
            array (
                'id' => 291,
                'product_id' => 2952,
                'pdf' => 'h16b-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            289 => 
            array (
                'id' => 292,
                'product_id' => 2954,
                'pdf' => 'h16b-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            290 => 
            array (
                'id' => 293,
                'product_id' => 2951,
                'pdf' => 'h16b-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            291 => 
            array (
                'id' => 294,
                'product_id' => 2953,
                'pdf' => 'h16b-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            292 => 
            array (
                'id' => 295,
                'product_id' => 2947,
                'pdf' => 'h16b-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            293 => 
            array (
                'id' => 296,
                'product_id' => 2956,
                'pdf' => 'h16b-sf-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            294 => 
            array (
                'id' => 297,
                'product_id' => 2958,
                'pdf' => 'h16b-sf-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            295 => 
            array (
                'id' => 298,
                'product_id' => 2955,
                'pdf' => 'h16b-sf-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            296 => 
            array (
                'id' => 299,
                'product_id' => 2957,
                'pdf' => 'h16b-sf-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            297 => 
            array (
                'id' => 300,
                'product_id' => 2949,
                'pdf' => 'h16b-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            298 => 
            array (
                'id' => 301,
                'product_id' => 2877,
                'pdf' => 'h16b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            299 => 
            array (
                'id' => 302,
                'product_id' => 2878,
                'pdf' => 'h16b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            300 => 
            array (
                'id' => 303,
                'product_id' => 2880,
                'pdf' => 'h16b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            301 => 
            array (
                'id' => 304,
                'product_id' => 2882,
                'pdf' => 'h16b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            302 => 
            array (
                'id' => 305,
                'product_id' => 2884,
                'pdf' => 'h16b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            303 => 
            array (
                'id' => 306,
                'product_id' => 2886,
                'pdf' => 'h16b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            304 => 
            array (
                'id' => 307,
                'product_id' => 2888,
                'pdf' => 'h16b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            305 => 
            array (
                'id' => 308,
                'product_id' => 2883,
                'pdf' => 'h16b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            306 => 
            array (
                'id' => 309,
                'product_id' => 2885,
                'pdf' => 'h16b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            307 => 
            array (
                'id' => 310,
                'product_id' => 2887,
                'pdf' => 'h16b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            308 => 
            array (
                'id' => 311,
                'product_id' => 2876,
                'pdf' => 'h16b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            309 => 
            array (
                'id' => 312,
                'product_id' => 2890,
                'pdf' => 'h16b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            310 => 
            array (
                'id' => 313,
                'product_id' => 2892,
                'pdf' => 'h16b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            311 => 
            array (
                'id' => 314,
                'product_id' => 2894,
                'pdf' => 'h16b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            312 => 
            array (
                'id' => 315,
                'product_id' => 2889,
                'pdf' => 'h16b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            313 => 
            array (
                'id' => 316,
                'product_id' => 2891,
                'pdf' => 'h16b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            314 => 
            array (
                'id' => 317,
                'product_id' => 2893,
                'pdf' => 'h16b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            315 => 
            array (
                'id' => 318,
                'product_id' => 2879,
                'pdf' => 'h16b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            316 => 
            array (
                'id' => 319,
                'product_id' => 2881,
                'pdf' => 'h16b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            317 => 
            array (
                'id' => 320,
                'product_id' => 2914,
                'pdf' => 'h16b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            318 => 
            array (
                'id' => 321,
                'product_id' => 2916,
                'pdf' => 'h16b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            319 => 
            array (
                'id' => 322,
                'product_id' => 2917,
                'pdf' => 'h16b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            320 => 
            array (
                'id' => 323,
                'product_id' => 2919,
                'pdf' => 'h16b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            321 => 
            array (
                'id' => 324,
                'product_id' => 2921,
                'pdf' => 'h16b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            322 => 
            array (
                'id' => 325,
                'product_id' => 2915,
                'pdf' => 'h16b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            323 => 
            array (
                'id' => 326,
                'product_id' => 2918,
                'pdf' => 'h16b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            324 => 
            array (
                'id' => 327,
                'product_id' => 2920,
                'pdf' => 'h16b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            325 => 
            array (
                'id' => 328,
                'product_id' => 2960,
                'pdf' => 'h16b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            326 => 
            array (
                'id' => 329,
                'product_id' => 2962,
                'pdf' => 'h16b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            327 => 
            array (
                'id' => 330,
                'product_id' => 2964,
                'pdf' => 'h16b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            328 => 
            array (
                'id' => 331,
                'product_id' => 2966,
                'pdf' => 'h16b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            329 => 
            array (
                'id' => 332,
                'product_id' => 2968,
                'pdf' => 'h16b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            330 => 
            array (
                'id' => 333,
                'product_id' => 2970,
                'pdf' => 'h16b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            331 => 
            array (
                'id' => 334,
                'product_id' => 2965,
                'pdf' => 'h16b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            332 => 
            array (
                'id' => 335,
                'product_id' => 2967,
                'pdf' => 'h16b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            333 => 
            array (
                'id' => 336,
                'product_id' => 2969,
                'pdf' => 'h16b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            334 => 
            array (
                'id' => 337,
                'product_id' => 2959,
                'pdf' => 'h16b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            335 => 
            array (
                'id' => 338,
                'product_id' => 2972,
                'pdf' => 'h16b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            336 => 
            array (
                'id' => 339,
                'product_id' => 2974,
                'pdf' => 'h16b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            337 => 
            array (
                'id' => 340,
                'product_id' => 2976,
                'pdf' => 'h16b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            338 => 
            array (
                'id' => 341,
                'product_id' => 2971,
                'pdf' => 'h16b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            339 => 
            array (
                'id' => 342,
                'product_id' => 2973,
                'pdf' => 'h16b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            340 => 
            array (
                'id' => 343,
                'product_id' => 2975,
                'pdf' => 'h16b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            341 => 
            array (
                'id' => 344,
                'product_id' => 2961,
                'pdf' => 'h16b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            342 => 
            array (
                'id' => 345,
                'product_id' => 2963,
                'pdf' => 'h16b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            343 => 
            array (
                'id' => 346,
                'product_id' => 2847,
                'pdf' => 'h16b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            344 => 
            array (
                'id' => 347,
                'product_id' => 2848,
                'pdf' => 'h16b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            345 => 
            array (
                'id' => 348,
                'product_id' => 2849,
                'pdf' => 'h16b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            346 => 
            array (
                'id' => 349,
                'product_id' => 2937,
                'pdf' => 'h16b-te-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            347 => 
            array (
                'id' => 350,
                'product_id' => 2938,
                'pdf' => 'h16b-te-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            348 => 
            array (
                'id' => 351,
                'product_id' => 2939,
                'pdf' => 'h16b-te-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            349 => 
            array (
                'id' => 352,
                'product_id' => 2902,
                'pdf' => 'h16b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            350 => 
            array (
                'id' => 353,
                'product_id' => 2903,
                'pdf' => 'h16b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            351 => 
            array (
                'id' => 354,
                'product_id' => 2904,
                'pdf' => 'h16b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            352 => 
            array (
                'id' => 355,
                'product_id' => 2850,
                'pdf' => 'h16b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            353 => 
            array (
                'id' => 356,
                'product_id' => 2851,
                'pdf' => 'h16b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            354 => 
            array (
                'id' => 357,
                'product_id' => 2852,
                'pdf' => 'h16b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            355 => 
            array (
                'id' => 358,
                'product_id' => 2853,
                'pdf' => 'h16b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            356 => 
            array (
                'id' => 359,
                'product_id' => 2940,
                'pdf' => 'h16b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            357 => 
            array (
                'id' => 360,
                'product_id' => 2941,
                'pdf' => 'h16b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            358 => 
            array (
                'id' => 361,
                'product_id' => 2942,
                'pdf' => 'h16b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            359 => 
            array (
                'id' => 362,
                'product_id' => 2943,
                'pdf' => 'h16b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            360 => 
            array (
                'id' => 363,
                'product_id' => 28424,
                'pdf' => 'h16b-teh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            361 => 
            array (
                'id' => 364,
                'product_id' => 64116,
                'pdf' => 'h16b-teh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            362 => 
            array (
                'id' => 365,
                'product_id' => 64117,
                'pdf' => 'h16b-teh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            363 => 
            array (
                'id' => 366,
                'product_id' => 2905,
                'pdf' => 'h16b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            364 => 
            array (
                'id' => 367,
                'product_id' => 2906,
                'pdf' => 'h16b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            365 => 
            array (
                'id' => 368,
                'product_id' => 2907,
                'pdf' => 'h16b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            366 => 
            array (
                'id' => 369,
                'product_id' => 2908,
                'pdf' => 'h16b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            367 => 
            array (
                'id' => 370,
                'product_id' => 3142,
                'pdf' => 'h24b-bk-1l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            368 => 
            array (
                'id' => 371,
                'product_id' => 3143,
                'pdf' => 'h24b-bk-1l-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            369 => 
            array (
                'id' => 372,
                'product_id' => 3144,
                'pdf' => 'h24b-bk-1l-mcv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            370 => 
            array (
                'id' => 373,
                'product_id' => 3190,
                'pdf' => 'h24b-bk-2l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            371 => 
            array (
                'id' => 374,
                'product_id' => 3225,
                'pdf' => 'h24b-bk-4b.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            372 => 
            array (
                'id' => 375,
                'product_id' => 3226,
                'pdf' => 'h24b-bk-4b-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            373 => 
            array (
                'id' => 376,
                'product_id' => 3227,
                'pdf' => 'h24b-bk-4b-mcv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            374 => 
            array (
                'id' => 377,
                'product_id' => 3134,
                'pdf' => 'h24b-cct-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            375 => 
            array (
                'id' => 378,
                'product_id' => 3135,
                'pdf' => 'h24b-cct-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            376 => 
            array (
                'id' => 379,
                'product_id' => 3136,
                'pdf' => 'h24b-cct-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            377 => 
            array (
                'id' => 380,
                'product_id' => 3137,
                'pdf' => 'h24b-cct-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            378 => 
            array (
                'id' => 381,
                'product_id' => 3202,
                'pdf' => 'h24b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            379 => 
            array (
                'id' => 382,
                'product_id' => 3203,
                'pdf' => 'h24b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            380 => 
            array (
                'id' => 383,
                'product_id' => 3204,
                'pdf' => 'h24b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            381 => 
            array (
                'id' => 384,
                'product_id' => 3205,
                'pdf' => 'h24b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            382 => 
            array (
                'id' => 385,
                'product_id' => 3138,
                'pdf' => 'h24b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            383 => 
            array (
                'id' => 386,
                'product_id' => 3139,
                'pdf' => 'h24b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            384 => 
            array (
                'id' => 387,
                'product_id' => 3140,
                'pdf' => 'h24b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            385 => 
            array (
                'id' => 388,
                'product_id' => 3141,
                'pdf' => 'h24b-ccth-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            386 => 
            array (
                'id' => 389,
                'product_id' => 3206,
                'pdf' => 'h24b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            387 => 
            array (
                'id' => 390,
                'product_id' => 3207,
                'pdf' => 'h24b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            388 => 
            array (
                'id' => 391,
                'product_id' => 3208,
                'pdf' => 'h24b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            389 => 
            array (
                'id' => 392,
                'product_id' => 3209,
                'pdf' => 'h24b-ccth-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            390 => 
            array (
                'id' => 393,
                'product_id' => 8436,
                'pdf' => 'h24b-cv-4b-1.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            391 => 
            array (
                'id' => 394,
                'product_id' => 8437,
                'pdf' => 'h24b-cv-4b-2.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            392 => 
            array (
                'id' => 395,
                'product_id' => 3117,
                'pdf' => 'h24b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            393 => 
            array (
                'id' => 396,
                'product_id' => 3118,
                'pdf' => 'h24b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            394 => 
            array (
                'id' => 397,
                'product_id' => 3119,
                'pdf' => 'h24b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            395 => 
            array (
                'id' => 398,
                'product_id' => 3175,
                'pdf' => 'h24b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            396 => 
            array (
                'id' => 399,
                'product_id' => 3176,
                'pdf' => 'h24b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            397 => 
            array (
                'id' => 400,
                'product_id' => 3177,
                'pdf' => 'h24b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            398 => 
            array (
                'id' => 401,
                'product_id' => 64118,
                'pdf' => 'h24b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            399 => 
            array (
                'id' => 402,
                'product_id' => 3120,
                'pdf' => 'h24b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            400 => 
            array (
                'id' => 403,
                'product_id' => 3121,
                'pdf' => 'h24b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            401 => 
            array (
                'id' => 404,
                'product_id' => 3122,
                'pdf' => 'h24b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            402 => 
            array (
                'id' => 405,
                'product_id' => 3123,
                'pdf' => 'h24b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            403 => 
            array (
                'id' => 406,
                'product_id' => 3124,
                'pdf' => 'h24b-seh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            404 => 
            array (
                'id' => 407,
                'product_id' => 3213,
                'pdf' => 'h24b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            405 => 
            array (
                'id' => 408,
                'product_id' => 3214,
                'pdf' => 'h24b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            406 => 
            array (
                'id' => 409,
                'product_id' => 3215,
                'pdf' => 'h24b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            407 => 
            array (
                'id' => 410,
                'product_id' => 3216,
                'pdf' => 'h24b-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            408 => 
            array (
                'id' => 411,
                'product_id' => 64121,
                'pdf' => 'h24b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            409 => 
            array (
                'id' => 412,
                'product_id' => 3178,
                'pdf' => 'h24b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            410 => 
            array (
                'id' => 413,
                'product_id' => 3179,
                'pdf' => 'h24b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            411 => 
            array (
                'id' => 414,
                'product_id' => 3180,
                'pdf' => 'h24b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            412 => 
            array (
                'id' => 415,
                'product_id' => 3181,
                'pdf' => 'h24b-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            413 => 
            array (
                'id' => 416,
                'product_id' => 3146,
                'pdf' => 'h24b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            414 => 
            array (
                'id' => 417,
                'product_id' => 3148,
                'pdf' => 'h24b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            415 => 
            array (
                'id' => 418,
                'product_id' => 3150,
                'pdf' => 'h24b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            416 => 
            array (
                'id' => 419,
                'product_id' => 3152,
                'pdf' => 'h24b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            417 => 
            array (
                'id' => 420,
                'product_id' => 3149,
                'pdf' => 'h24b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            418 => 
            array (
                'id' => 421,
                'product_id' => 3151,
                'pdf' => 'h24b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            419 => 
            array (
                'id' => 422,
                'product_id' => 3145,
                'pdf' => 'h24b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            420 => 
            array (
                'id' => 423,
                'product_id' => 3154,
                'pdf' => 'h24b-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            421 => 
            array (
                'id' => 424,
                'product_id' => 3156,
                'pdf' => 'h24b-sf-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            422 => 
            array (
                'id' => 425,
                'product_id' => 3153,
                'pdf' => 'h24b-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            423 => 
            array (
                'id' => 426,
                'product_id' => 3155,
                'pdf' => 'h24b-sf-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            424 => 
            array (
                'id' => 427,
                'product_id' => 3147,
                'pdf' => 'h24b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            425 => 
            array (
                'id' => 428,
                'product_id' => 3192,
                'pdf' => 'h24b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            426 => 
            array (
                'id' => 429,
                'product_id' => 3194,
                'pdf' => 'h24b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            427 => 
            array (
                'id' => 430,
                'product_id' => 3191,
                'pdf' => 'h24b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            428 => 
            array (
                'id' => 431,
                'product_id' => 3193,
                'pdf' => 'h24b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            429 => 
            array (
                'id' => 432,
                'product_id' => 3229,
                'pdf' => 'h24b-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            430 => 
            array (
                'id' => 433,
                'product_id' => 3231,
                'pdf' => 'h24b-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            431 => 
            array (
                'id' => 434,
                'product_id' => 3233,
                'pdf' => 'h24b-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            432 => 
            array (
                'id' => 435,
                'product_id' => 3235,
                'pdf' => 'h24b-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            433 => 
            array (
                'id' => 436,
                'product_id' => 3232,
                'pdf' => 'h24b-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            434 => 
            array (
                'id' => 437,
                'product_id' => 3234,
                'pdf' => 'h24b-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            435 => 
            array (
                'id' => 438,
                'product_id' => 3228,
                'pdf' => 'h24b-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            436 => 
            array (
                'id' => 439,
                'product_id' => 3237,
                'pdf' => 'h24b-sf-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            437 => 
            array (
                'id' => 440,
                'product_id' => 3239,
                'pdf' => 'h24b-sf-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            438 => 
            array (
                'id' => 441,
                'product_id' => 3236,
                'pdf' => 'h24b-sf-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            439 => 
            array (
                'id' => 442,
                'product_id' => 3238,
                'pdf' => 'h24b-sf-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            440 => 
            array (
                'id' => 443,
                'product_id' => 3230,
                'pdf' => 'h24b-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            441 => 
            array (
                'id' => 444,
                'product_id' => 3158,
                'pdf' => 'h24b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            442 => 
            array (
                'id' => 445,
                'product_id' => 64120,
                'pdf' => 'h24b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            443 => 
            array (
                'id' => 446,
                'product_id' => 3160,
                'pdf' => 'h24b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            444 => 
            array (
                'id' => 447,
                'product_id' => 3162,
                'pdf' => 'h24b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            445 => 
            array (
                'id' => 448,
                'product_id' => 3164,
                'pdf' => 'h24b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            446 => 
            array (
                'id' => 449,
                'product_id' => 3166,
                'pdf' => 'h24b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            447 => 
            array (
                'id' => 450,
                'product_id' => 3168,
                'pdf' => 'h24b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            448 => 
            array (
                'id' => 451,
                'product_id' => 3163,
                'pdf' => 'h24b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            449 => 
            array (
                'id' => 452,
                'product_id' => 3165,
                'pdf' => 'h24b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            450 => 
            array (
                'id' => 453,
                'product_id' => 3167,
                'pdf' => 'h24b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            451 => 
            array (
                'id' => 454,
                'product_id' => 3157,
                'pdf' => 'h24b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            452 => 
            array (
                'id' => 455,
                'product_id' => 64119,
                'pdf' => 'h24b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            453 => 
            array (
                'id' => 456,
                'product_id' => 3170,
                'pdf' => 'h24b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            454 => 
            array (
                'id' => 457,
                'product_id' => 3172,
                'pdf' => 'h24b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            455 => 
            array (
                'id' => 458,
                'product_id' => 3174,
                'pdf' => 'h24b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            456 => 
            array (
                'id' => 459,
                'product_id' => 3169,
                'pdf' => 'h24b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            457 => 
            array (
                'id' => 460,
                'product_id' => 3171,
                'pdf' => 'h24b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            458 => 
            array (
                'id' => 461,
                'product_id' => 3173,
                'pdf' => 'h24b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            459 => 
            array (
                'id' => 462,
                'product_id' => 3159,
                'pdf' => 'h24b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            460 => 
            array (
                'id' => 463,
                'product_id' => 3161,
                'pdf' => 'h24b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            461 => 
            array (
                'id' => 464,
                'product_id' => 3196,
                'pdf' => 'h24b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            462 => 
            array (
                'id' => 465,
                'product_id' => 3197,
                'pdf' => 'h24b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            463 => 
            array (
                'id' => 466,
                'product_id' => 3199,
                'pdf' => 'h24b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            464 => 
            array (
                'id' => 467,
                'product_id' => 3201,
                'pdf' => 'h24b-sfh-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            465 => 
            array (
                'id' => 468,
                'product_id' => 3195,
                'pdf' => 'h24b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            466 => 
            array (
                'id' => 469,
                'product_id' => 64127,
                'pdf' => 'h24b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            467 => 
            array (
                'id' => 470,
                'product_id' => 3198,
                'pdf' => 'h24b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            468 => 
            array (
                'id' => 471,
                'product_id' => 3200,
                'pdf' => 'h24b-sfh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            469 => 
            array (
                'id' => 472,
                'product_id' => 3241,
                'pdf' => 'h24b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            470 => 
            array (
                'id' => 473,
                'product_id' => 3243,
                'pdf' => 'h24b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            471 => 
            array (
                'id' => 474,
                'product_id' => 3245,
                'pdf' => 'h24b-sfh-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            472 => 
            array (
                'id' => 475,
                'product_id' => 3247,
                'pdf' => 'h24b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            473 => 
            array (
                'id' => 476,
                'product_id' => 3249,
                'pdf' => 'h24b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            474 => 
            array (
                'id' => 477,
                'product_id' => 3251,
                'pdf' => 'h24b-sfh-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            475 => 
            array (
                'id' => 478,
                'product_id' => 3246,
                'pdf' => 'h24b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            476 => 
            array (
                'id' => 479,
                'product_id' => 3248,
                'pdf' => 'h24b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            477 => 
            array (
                'id' => 480,
                'product_id' => 3250,
                'pdf' => 'h24b-sfh-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            478 => 
            array (
                'id' => 481,
                'product_id' => 3240,
                'pdf' => 'h24b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            479 => 
            array (
                'id' => 482,
                'product_id' => 3253,
                'pdf' => 'h24b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            480 => 
            array (
                'id' => 483,
                'product_id' => 3255,
                'pdf' => 'h24b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            481 => 
            array (
                'id' => 484,
                'product_id' => 3257,
                'pdf' => 'h24b-sfh-4b-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            482 => 
            array (
                'id' => 485,
                'product_id' => 3252,
                'pdf' => 'h24b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            483 => 
            array (
                'id' => 486,
                'product_id' => 3254,
                'pdf' => 'h24b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            484 => 
            array (
                'id' => 487,
                'product_id' => 3256,
                'pdf' => 'h24b-sfh-4b-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            485 => 
            array (
                'id' => 488,
                'product_id' => 3242,
                'pdf' => 'h24b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            486 => 
            array (
                'id' => 489,
                'product_id' => 3244,
                'pdf' => 'h24b-sfh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            487 => 
            array (
                'id' => 490,
                'product_id' => 3125,
                'pdf' => 'h24b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            488 => 
            array (
                'id' => 491,
                'product_id' => 3126,
                'pdf' => 'h24b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            489 => 
            array (
                'id' => 492,
                'product_id' => 3127,
                'pdf' => 'h24b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            490 => 
            array (
                'id' => 493,
                'product_id' => 3128,
                'pdf' => 'h24b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            491 => 
            array (
                'id' => 494,
                'product_id' => 3217,
                'pdf' => 'h24b-te-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            492 => 
            array (
                'id' => 495,
                'product_id' => 3218,
                'pdf' => 'h24b-te-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            493 => 
            array (
                'id' => 496,
                'product_id' => 3219,
                'pdf' => 'h24b-te-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            494 => 
            array (
                'id' => 497,
                'product_id' => 3220,
                'pdf' => 'h24b-te-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            495 => 
            array (
                'id' => 498,
                'product_id' => 3182,
                'pdf' => 'h24b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            496 => 
            array (
                'id' => 499,
                'product_id' => 3183,
                'pdf' => 'h24b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            497 => 
            array (
                'id' => 500,
                'product_id' => 3184,
                'pdf' => 'h24b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            498 => 
            array (
                'id' => 501,
                'product_id' => 3185,
                'pdf' => 'h24b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            499 => 
            array (
                'id' => 502,
                'product_id' => 3129,
                'pdf' => 'h24b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
        ));
        \DB::table('product_pdfs')->insert(array (
            0 => 
            array (
                'id' => 503,
                'product_id' => 3130,
                'pdf' => 'h24b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            1 => 
            array (
                'id' => 504,
                'product_id' => 3131,
                'pdf' => 'h24b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            2 => 
            array (
                'id' => 505,
                'product_id' => 3132,
                'pdf' => 'h24b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            3 => 
            array (
                'id' => 506,
                'product_id' => 3133,
                'pdf' => 'h24b-teh-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            4 => 
            array (
                'id' => 507,
                'product_id' => 3221,
                'pdf' => 'h24b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            5 => 
            array (
                'id' => 508,
                'product_id' => 3222,
                'pdf' => 'h24b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            6 => 
            array (
                'id' => 509,
                'product_id' => 3223,
                'pdf' => 'h24b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            7 => 
            array (
                'id' => 510,
                'product_id' => 3224,
                'pdf' => 'h24b-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            8 => 
            array (
                'id' => 511,
                'product_id' => 3186,
                'pdf' => 'h24b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            9 => 
            array (
                'id' => 512,
                'product_id' => 3187,
                'pdf' => 'h24b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            10 => 
            array (
                'id' => 513,
                'product_id' => 3188,
                'pdf' => 'h24b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            11 => 
            array (
                'id' => 514,
                'product_id' => 3189,
                'pdf' => 'h24b-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            12 => 
            array (
                'id' => 515,
                'product_id' => 2215,
                'pdf' => 'h32a-bk-2l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            13 => 
            array (
                'id' => 516,
                'product_id' => 2232,
                'pdf' => 'h32a-bk-4b.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            14 => 
            array (
                'id' => 517,
                'product_id' => 2233,
                'pdf' => 'h32a-bk-4b-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            15 => 
            array (
                'id' => 518,
                'product_id' => 2223,
                'pdf' => 'h32a-se-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            16 => 
            array (
                'id' => 519,
                'product_id' => 2224,
                'pdf' => 'h32a-se-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            17 => 
            array (
                'id' => 520,
                'product_id' => 2206,
                'pdf' => 'h32a-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            18 => 
            array (
                'id' => 521,
                'product_id' => 2207,
                'pdf' => 'h32a-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            19 => 
            array (
                'id' => 522,
                'product_id' => 2225,
                'pdf' => 'h32a-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            20 => 
            array (
                'id' => 523,
                'product_id' => 2226,
                'pdf' => 'h32a-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            21 => 
            array (
                'id' => 524,
                'product_id' => 2227,
                'pdf' => 'h32a-seh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            22 => 
            array (
                'id' => 525,
                'product_id' => 2208,
                'pdf' => 'h32a-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            23 => 
            array (
                'id' => 526,
                'product_id' => 2209,
                'pdf' => 'h32a-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            24 => 
            array (
                'id' => 527,
                'product_id' => 2210,
                'pdf' => 'h32a-seh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            25 => 
            array (
                'id' => 528,
                'product_id' => 2218,
                'pdf' => 'h32a-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            26 => 
            array (
                'id' => 529,
                'product_id' => 2220,
                'pdf' => 'h32a-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            27 => 
            array (
                'id' => 530,
                'product_id' => 2222,
                'pdf' => 'h32a-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            28 => 
            array (
                'id' => 531,
                'product_id' => 2216,
                'pdf' => 'h32a-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            29 => 
            array (
                'id' => 532,
                'product_id' => 2217,
                'pdf' => 'h32a-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            30 => 
            array (
                'id' => 533,
                'product_id' => 2219,
                'pdf' => 'h32a-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            31 => 
            array (
                'id' => 534,
                'product_id' => 2221,
                'pdf' => 'h32a-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            32 => 
            array (
                'id' => 535,
                'product_id' => 2237,
                'pdf' => 'h32a-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            33 => 
            array (
                'id' => 536,
                'product_id' => 2239,
                'pdf' => 'h32a-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            34 => 
            array (
                'id' => 537,
                'product_id' => 2241,
                'pdf' => 'h32a-sf-4b-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            35 => 
            array (
                'id' => 538,
                'product_id' => 2244,
                'pdf' => 'h32a-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            36 => 
            array (
                'id' => 539,
                'product_id' => 2246,
                'pdf' => 'h32a-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            37 => 
            array (
                'id' => 540,
                'product_id' => 2248,
                'pdf' => 'h32a-sf-4b-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            38 => 
            array (
                'id' => 541,
                'product_id' => 2242,
                'pdf' => 'h32a-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            39 => 
            array (
                'id' => 542,
                'product_id' => 2243,
                'pdf' => 'h32a-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            40 => 
            array (
                'id' => 543,
                'product_id' => 2245,
                'pdf' => 'h32a-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            41 => 
            array (
                'id' => 544,
                'product_id' => 2247,
                'pdf' => 'h32a-sf-4b-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            42 => 
            array (
                'id' => 545,
                'product_id' => 2235,
                'pdf' => 'h32a-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            43 => 
            array (
                'id' => 546,
                'product_id' => 2236,
                'pdf' => 'h32a-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            44 => 
            array (
                'id' => 547,
                'product_id' => 2238,
                'pdf' => 'h32a-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            45 => 
            array (
                'id' => 548,
                'product_id' => 2240,
                'pdf' => 'h32a-sf-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            46 => 
            array (
                'id' => 549,
                'product_id' => 2228,
                'pdf' => 'h32a-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            47 => 
            array (
                'id' => 550,
                'product_id' => 2229,
                'pdf' => 'h32a-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            48 => 
            array (
                'id' => 551,
                'product_id' => 2230,
                'pdf' => 'h32a-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            49 => 
            array (
                'id' => 552,
                'product_id' => 2231,
                'pdf' => 'h32a-teh-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            50 => 
            array (
                'id' => 553,
                'product_id' => 2211,
                'pdf' => 'h32a-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            51 => 
            array (
                'id' => 554,
                'product_id' => 2212,
                'pdf' => 'h32a-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            52 => 
            array (
                'id' => 555,
                'product_id' => 2213,
                'pdf' => 'h32a-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            53 => 
            array (
                'id' => 556,
                'product_id' => 2214,
                'pdf' => 'h32a-teh-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            54 => 
            array (
                'id' => 557,
                'product_id' => 3370,
                'pdf' => 'h32b-bk-1l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            55 => 
            array (
                'id' => 558,
                'product_id' => 3371,
                'pdf' => 'h32b-bk-1l-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            56 => 
            array (
                'id' => 559,
                'product_id' => 3409,
                'pdf' => 'h32b-bk-2l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            57 => 
            array (
                'id' => 560,
                'product_id' => 3419,
                'pdf' => 'h32b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            58 => 
            array (
                'id' => 561,
                'product_id' => 3420,
                'pdf' => 'h32b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            59 => 
            array (
                'id' => 562,
                'product_id' => 64133,
                'pdf' => 'h32b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            60 => 
            array (
                'id' => 563,
                'product_id' => 3421,
                'pdf' => 'h32b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            61 => 
            array (
                'id' => 564,
                'product_id' => 3422,
                'pdf' => 'h32b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            62 => 
            array (
                'id' => 565,
                'product_id' => 3423,
                'pdf' => 'h32b-cct-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            63 => 
            array (
                'id' => 566,
                'product_id' => 3397,
                'pdf' => 'h32b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            64 => 
            array (
                'id' => 567,
                'product_id' => 3398,
                'pdf' => 'h32b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            65 => 
            array (
                'id' => 568,
                'product_id' => 3399,
                'pdf' => 'h32b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            66 => 
            array (
                'id' => 569,
                'product_id' => 3400,
                'pdf' => 'h32b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            67 => 
            array (
                'id' => 570,
                'product_id' => 3401,
                'pdf' => 'h32b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            68 => 
            array (
                'id' => 571,
                'product_id' => 3402,
                'pdf' => 'h32b-se-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            69 => 
            array (
                'id' => 572,
                'product_id' => 3411,
                'pdf' => 'h32b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            70 => 
            array (
                'id' => 573,
                'product_id' => 3413,
                'pdf' => 'h32b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            71 => 
            array (
                'id' => 574,
                'product_id' => 3415,
                'pdf' => 'h32b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            72 => 
            array (
                'id' => 575,
                'product_id' => 3417,
                'pdf' => 'h32b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            73 => 
            array (
                'id' => 576,
                'product_id' => 3418,
                'pdf' => 'h32b-sf-2l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            74 => 
            array (
                'id' => 577,
                'product_id' => 3410,
                'pdf' => 'h32b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            75 => 
            array (
                'id' => 578,
                'product_id' => 3412,
                'pdf' => 'h32b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            76 => 
            array (
                'id' => 579,
                'product_id' => 64131,
                'pdf' => 'h32b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            77 => 
            array (
                'id' => 580,
                'product_id' => 3414,
                'pdf' => 'h32b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            78 => 
            array (
                'id' => 581,
                'product_id' => 3416,
                'pdf' => 'h32b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            79 => 
            array (
                'id' => 582,
                'product_id' => 64132,
                'pdf' => 'h32b-sf-2l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            80 => 
            array (
                'id' => 583,
                'product_id' => 3403,
                'pdf' => 'h32b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            81 => 
            array (
                'id' => 584,
                'product_id' => 3404,
                'pdf' => 'h32b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            82 => 
            array (
                'id' => 585,
                'product_id' => 3405,
                'pdf' => 'h32b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            83 => 
            array (
                'id' => 586,
                'product_id' => 3406,
                'pdf' => 'h32b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            84 => 
            array (
                'id' => 587,
                'product_id' => 3407,
                'pdf' => 'h32b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            85 => 
            array (
                'id' => 588,
                'product_id' => 3408,
                'pdf' => 'h32b-te-4b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            86 => 
            array (
                'id' => 589,
                'product_id' => 2000,
                'pdf' => 'h3a-bk-1l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            87 => 
            array (
                'id' => 590,
                'product_id' => 2002,
                'pdf' => 'h3a-bk-1l-mcv-f.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            88 => 
            array (
                'id' => 591,
                'product_id' => 2001,
                'pdf' => 'h3a-bk-1l-mcv-m.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            89 => 
            array (
                'id' => 592,
                'product_id' => 2003,
                'pdf' => 'h3a-bk-1l-se.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            90 => 
            array (
                'id' => 593,
                'product_id' => 2007,
                'pdf' => 'h3a-cct-1l-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            91 => 
            array (
                'id' => 594,
                'product_id' => 2008,
                'pdf' => 'h3a-cct-1l-pg11.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            92 => 
            array (
                'id' => 595,
                'product_id' => 1995,
                'pdf' => 'h3a-se-2b-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            93 => 
            array (
                'id' => 596,
                'product_id' => 1184,
                'pdf' => 'h3a-se-2b-pg11.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            94 => 
            array (
                'id' => 597,
                'product_id' => 2004,
                'pdf' => 'h3a-sf-1l-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            95 => 
            array (
                'id' => 598,
                'product_id' => 2005,
                'pdf' => 'h3a-sf-1l-pg11.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            96 => 
            array (
                'id' => 599,
                'product_id' => 2006,
                'pdf' => 'h3a-sf-1l-pg13.5.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            97 => 
            array (
                'id' => 600,
                'product_id' => 1996,
                'pdf' => 'h3a-te-2b-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            98 => 
            array (
                'id' => 601,
                'product_id' => 1997,
                'pdf' => 'h3a-te-2b-m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            99 => 
            array (
                'id' => 602,
                'product_id' => 1998,
                'pdf' => 'h3a-te-2b-pg11.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            100 => 
            array (
                'id' => 603,
                'product_id' => 1999,
                'pdf' => 'h3a-te-2b-pg13.5.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            101 => 
            array (
                'id' => 604,
                'product_id' => 3437,
                'pdf' => 'h48b-bk-1l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            102 => 
            array (
                'id' => 605,
                'product_id' => 3438,
                'pdf' => 'h48b-bk-1l-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            103 => 
            array (
                'id' => 606,
                'product_id' => 3425,
                'pdf' => 'h48b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            104 => 
            array (
                'id' => 607,
                'product_id' => 3426,
                'pdf' => 'h48b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            105 => 
            array (
                'id' => 608,
                'product_id' => 3427,
                'pdf' => 'h48b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            106 => 
            array (
                'id' => 609,
                'product_id' => 3428,
                'pdf' => 'h48b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            107 => 
            array (
                'id' => 610,
                'product_id' => 3429,
                'pdf' => 'h48b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            108 => 
            array (
                'id' => 611,
                'product_id' => 3430,
                'pdf' => 'h48b-se-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            109 => 
            array (
                'id' => 612,
                'product_id' => 3441,
                'pdf' => 'h48b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            110 => 
            array (
                'id' => 613,
                'product_id' => 3443,
                'pdf' => 'h48b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            111 => 
            array (
                'id' => 614,
                'product_id' => 64135,
                'pdf' => 'h48b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            112 => 
            array (
                'id' => 615,
                'product_id' => 3445,
                'pdf' => 'h48b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            113 => 
            array (
                'id' => 616,
                'product_id' => 3447,
                'pdf' => 'h48b-sf-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            114 => 
            array (
                'id' => 617,
                'product_id' => 3449,
                'pdf' => 'h48b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            115 => 
            array (
                'id' => 618,
                'product_id' => 3451,
                'pdf' => 'h48b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            116 => 
            array (
                'id' => 619,
                'product_id' => 3453,
                'pdf' => 'h48b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            117 => 
            array (
                'id' => 620,
                'product_id' => 3455,
                'pdf' => 'h48b-sf-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            118 => 
            array (
                'id' => 621,
                'product_id' => 3448,
                'pdf' => 'h48b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            119 => 
            array (
                'id' => 622,
                'product_id' => 3450,
                'pdf' => 'h48b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            120 => 
            array (
                'id' => 623,
                'product_id' => 3452,
                'pdf' => 'h48b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            121 => 
            array (
                'id' => 624,
                'product_id' => 3454,
                'pdf' => 'h48b-sf-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            122 => 
            array (
                'id' => 625,
                'product_id' => 3440,
                'pdf' => 'h48b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            123 => 
            array (
                'id' => 626,
                'product_id' => 3442,
                'pdf' => 'h48b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            124 => 
            array (
                'id' => 627,
                'product_id' => 64134,
                'pdf' => 'h48b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            125 => 
            array (
                'id' => 628,
                'product_id' => 3444,
                'pdf' => 'h48b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            126 => 
            array (
                'id' => 629,
                'product_id' => 3446,
                'pdf' => 'h48b-sf-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            127 => 
            array (
                'id' => 630,
                'product_id' => 3431,
                'pdf' => 'h48b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            128 => 
            array (
                'id' => 631,
                'product_id' => 3432,
                'pdf' => 'h48b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            129 => 
            array (
                'id' => 632,
                'product_id' => 3433,
                'pdf' => 'h48b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            130 => 
            array (
                'id' => 633,
                'product_id' => 3434,
                'pdf' => 'h48b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            131 => 
            array (
                'id' => 634,
                'product_id' => 3435,
                'pdf' => 'h48b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            132 => 
            array (
                'id' => 635,
                'product_id' => 3436,
                'pdf' => 'h48b-te-2b-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            133 => 
            array (
                'id' => 636,
                'product_id' => 2346,
                'pdf' => 'h6b-bk-1l.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            134 => 
            array (
                'id' => 637,
                'product_id' => 2347,
                'pdf' => 'h6b-bk-1l-cv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            135 => 
            array (
                'id' => 638,
                'product_id' => 2348,
                'pdf' => 'h6b-bk-1l-mcv.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            136 => 
            array (
                'id' => 639,
                'product_id' => 2340,
                'pdf' => 'h6b-cct-1l-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            137 => 
            array (
                'id' => 640,
                'product_id' => 2341,
                'pdf' => 'h6b-cct-1l-pg13.5.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            138 => 
            array (
                'id' => 641,
                'product_id' => 2342,
                'pdf' => 'h6b-cct-1l-pg16.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            139 => 
            array (
                'id' => 642,
                'product_id' => 2343,
                'pdf' => 'h6b-ccth-1l-m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            140 => 
            array (
                'id' => 643,
                'product_id' => 2344,
                'pdf' => 'h6b-ccth-1l-pg21.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            141 => 
            array (
                'id' => 644,
                'product_id' => 2345,
                'pdf' => 'h6b-ccth-1l-pg29.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            142 => 
            array (
                'id' => 645,
                'product_id' => 2325,
                'pdf' => 'h6b-se-2b-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            143 => 
            array (
                'id' => 646,
                'product_id' => 2326,
                'pdf' => 'h6b-se-2b-m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            144 => 
            array (
                'id' => 647,
                'product_id' => 2327,
                'pdf' => 'h6b-se-2b-pg13.5.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            145 => 
            array (
                'id' => 648,
                'product_id' => 2328,
                'pdf' => 'h6b-se-2b-pg16.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            146 => 
            array (
                'id' => 649,
                'product_id' => 2329,
                'pdf' => 'h6b-seh-2b-m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            147 => 
            array (
                'id' => 650,
                'product_id' => 2330,
                'pdf' => 'h6b-seh-2b-m32.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            148 => 
            array (
                'id' => 651,
                'product_id' => 2331,
                'pdf' => 'h6b-seh-2b-pg21.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            149 => 
            array (
                'id' => 652,
                'product_id' => 2332,
                'pdf' => 'h6b-seh-2b-pg29.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            150 => 
            array (
                'id' => 653,
                'product_id' => 2350,
                'pdf' => 'h6b-sf-1l-2m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            151 => 
            array (
                'id' => 654,
                'product_id' => 2352,
                'pdf' => 'h6b-sf-1l-2m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            152 => 
            array (
                'id' => 655,
                'product_id' => 2354,
                'pdf' => 'h6b-sf-1l-2pg16.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            153 => 
            array (
                'id' => 656,
                'product_id' => 2356,
                'pdf' => 'h6b-sf-1l-cv-2m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            154 => 
            array (
                'id' => 657,
                'product_id' => 2358,
                'pdf' => 'h6b-sf-1l-cv-2m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            155 => 
            array (
                'id' => 658,
                'product_id' => 2360,
                'pdf' => 'h6b-sf-1l-cv-2pg16.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            156 => 
            array (
                'id' => 659,
                'product_id' => 2355,
                'pdf' => 'h6b-sf-1l-cv-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            157 => 
            array (
                'id' => 660,
                'product_id' => 2357,
                'pdf' => 'h6b-sf-1l-cv-m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            158 => 
            array (
                'id' => 661,
                'product_id' => 2359,
                'pdf' => 'h6b-sf-1l-cv-pg16.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            159 => 
            array (
                'id' => 662,
                'product_id' => 2349,
                'pdf' => 'h6b-sf-1l-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            160 => 
            array (
                'id' => 663,
                'product_id' => 2351,
                'pdf' => 'h6b-sf-1l-m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            161 => 
            array (
                'id' => 664,
                'product_id' => 2362,
                'pdf' => 'h6b-sf-1l-mcv-2m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            162 => 
            array (
                'id' => 665,
                'product_id' => 2364,
                'pdf' => 'h6b-sf-1l-mcv-2m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            163 => 
            array (
                'id' => 666,
                'product_id' => 2366,
                'pdf' => 'h6b-sf-1l-mcv-2pg16.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            164 => 
            array (
                'id' => 667,
                'product_id' => 2361,
                'pdf' => 'h6b-sf-1l-mcv-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            165 => 
            array (
                'id' => 668,
                'product_id' => 2363,
                'pdf' => 'h6b-sf-1l-mcv-m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            166 => 
            array (
                'id' => 669,
                'product_id' => 2365,
                'pdf' => 'h6b-sf-1l-mcv-pg16.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            167 => 
            array (
                'id' => 670,
                'product_id' => 2353,
                'pdf' => 'h6b-sf-1l-pg16.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            168 => 
            array (
                'id' => 671,
                'product_id' => 2368,
                'pdf' => 'h6b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            169 => 
            array (
                'id' => 672,
                'product_id' => 2370,
                'pdf' => 'h6b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            170 => 
            array (
                'id' => 673,
                'product_id' => 2372,
                'pdf' => 'h6b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            171 => 
            array (
                'id' => 674,
                'product_id' => 2374,
                'pdf' => 'h6b-sfh-1l-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            172 => 
            array (
                'id' => 675,
                'product_id' => 2376,
                'pdf' => 'h6b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            173 => 
            array (
                'id' => 676,
                'product_id' => 2378,
                'pdf' => 'h6b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            174 => 
            array (
                'id' => 677,
                'product_id' => 2380,
                'pdf' => 'h6b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            175 => 
            array (
                'id' => 678,
                'product_id' => 2382,
                'pdf' => 'h6b-sfh-1l-cv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            176 => 
            array (
                'id' => 679,
                'product_id' => 2375,
                'pdf' => 'h6b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            177 => 
            array (
                'id' => 680,
                'product_id' => 2377,
                'pdf' => 'h6b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            178 => 
            array (
                'id' => 681,
                'product_id' => 2379,
                'pdf' => 'h6b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            179 => 
            array (
                'id' => 682,
                'product_id' => 2381,
                'pdf' => 'h6b-sfh-1l-cv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            180 => 
            array (
                'id' => 683,
                'product_id' => 2367,
                'pdf' => 'h6b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            181 => 
            array (
                'id' => 684,
                'product_id' => 2369,
                'pdf' => 'h6b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            182 => 
            array (
                'id' => 685,
                'product_id' => 2384,
                'pdf' => 'h6b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            183 => 
            array (
                'id' => 686,
                'product_id' => 2386,
                'pdf' => 'h6b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            184 => 
            array (
                'id' => 687,
                'product_id' => 2388,
                'pdf' => 'h6b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            185 => 
            array (
                'id' => 688,
                'product_id' => 2390,
                'pdf' => 'h6b-sfh-1l-mcv-2m2pg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            186 => 
            array (
                'id' => 689,
                'product_id' => 2383,
                'pdf' => 'h6b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            187 => 
            array (
                'id' => 690,
                'product_id' => 2385,
                'pdf' => 'h6b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            188 => 
            array (
                'id' => 691,
                'product_id' => 2387,
                'pdf' => 'h6b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            189 => 
            array (
                'id' => 692,
                'product_id' => 2389,
                'pdf' => 'h6b-sfh-1l-mcv-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            190 => 
            array (
                'id' => 693,
                'product_id' => 2371,
                'pdf' => 'h6b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            191 => 
            array (
                'id' => 694,
                'product_id' => 2373,
                'pdf' => 'h6b-sfh-1l-mpg.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            192 => 
            array (
                'id' => 695,
                'product_id' => 2333,
                'pdf' => 'h6b-te-2b-m20.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            193 => 
            array (
                'id' => 696,
                'product_id' => 2334,
                'pdf' => 'h6b-te-2b-pg13.5.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            194 => 
            array (
                'id' => 697,
                'product_id' => 2335,
                'pdf' => 'h6b-te-2b-pg16.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            195 => 
            array (
                'id' => 698,
                'product_id' => 2336,
                'pdf' => 'h6b-teh-2b-m25.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            196 => 
            array (
                'id' => 699,
                'product_id' => 2337,
                'pdf' => 'h6b-teh-2b-m32.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            197 => 
            array (
                'id' => 700,
                'product_id' => 2338,
                'pdf' => 'h6b-teh-2b-pg21.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            198 => 
            array (
                'id' => 701,
                'product_id' => 2339,
                'pdf' => 'h6b-teh-2b-pg29.pdf',
                'product_pdf_type_id' => 2,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            199 => 
            array (
                'id' => 702,
                'product_id' => 1499,
                'pdf' => 'HA-003.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            200 => 
            array (
                'id' => 703,
                'product_id' => 1501,
                'pdf' => 'HA-003.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            201 => 
            array (
                'id' => 704,
                'product_id' => 1433,
                'pdf' => 'HA-003.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            202 => 
            array (
                'id' => 705,
                'product_id' => 1500,
                'pdf' => 'HA-003.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            203 => 
            array (
                'id' => 706,
                'product_id' => 1503,
                'pdf' => 'HA-004.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            204 => 
            array (
                'id' => 707,
                'product_id' => 1505,
                'pdf' => 'HA-004.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            205 => 
            array (
                'id' => 708,
                'product_id' => 1502,
                'pdf' => 'HA-004.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            206 => 
            array (
                'id' => 709,
                'product_id' => 1504,
                'pdf' => 'HA-004.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            207 => 
            array (
                'id' => 710,
                'product_id' => 1507,
                'pdf' => 'HA-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            208 => 
            array (
                'id' => 711,
                'product_id' => 1509,
                'pdf' => 'HA-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            209 => 
            array (
                'id' => 712,
                'product_id' => 1506,
                'pdf' => 'HA-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            210 => 
            array (
                'id' => 713,
                'product_id' => 1508,
                'pdf' => 'HA-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            211 => 
            array (
                'id' => 714,
                'product_id' => 1511,
                'pdf' => 'HA-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            212 => 
            array (
                'id' => 715,
                'product_id' => 52470,
                'pdf' => 'HA-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            213 => 
            array (
                'id' => 716,
                'product_id' => 1513,
                'pdf' => 'HA-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            214 => 
            array (
                'id' => 717,
                'product_id' => 52472,
                'pdf' => 'HA-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            215 => 
            array (
                'id' => 718,
                'product_id' => 1510,
                'pdf' => 'HA-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            216 => 
            array (
                'id' => 719,
                'product_id' => 52469,
                'pdf' => 'HA-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            217 => 
            array (
                'id' => 720,
                'product_id' => 1512,
                'pdf' => 'HA-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            218 => 
            array (
                'id' => 721,
                'product_id' => 52471,
                'pdf' => 'HA-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            219 => 
            array (
                'id' => 722,
                'product_id' => 1515,
                'pdf' => 'HA-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            220 => 
            array (
                'id' => 723,
                'product_id' => 1517,
                'pdf' => 'HA-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            221 => 
            array (
                'id' => 724,
                'product_id' => 1514,
                'pdf' => 'HA-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            222 => 
            array (
                'id' => 725,
                'product_id' => 1516,
                'pdf' => 'HA-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            223 => 
            array (
                'id' => 726,
                'product_id' => 1645,
                'pdf' => 'HD-007.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            224 => 
            array (
                'id' => 727,
                'product_id' => 1644,
                'pdf' => 'HD-007.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            225 => 
            array (
                'id' => 728,
                'product_id' => 1647,
                'pdf' => 'HD-008.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            226 => 
            array (
                'id' => 729,
                'product_id' => 1646,
                'pdf' => 'HD-008.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            227 => 
            array (
                'id' => 730,
                'product_id' => 1649,
                'pdf' => 'HD-015.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            228 => 
            array (
                'id' => 731,
                'product_id' => 1648,
                'pdf' => 'HD-015.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            229 => 
            array (
                'id' => 732,
                'product_id' => 1651,
                'pdf' => 'HD-025.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            230 => 
            array (
                'id' => 733,
                'product_id' => 1650,
                'pdf' => 'HD-025.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            231 => 
            array (
                'id' => 734,
                'product_id' => 1655,
                'pdf' => 'HD-040.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            232 => 
            array (
                'id' => 735,
                'product_id' => 1654,
                'pdf' => 'HD-040.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            233 => 
            array (
                'id' => 736,
                'product_id' => 1653,
                'pdf' => 'HD-050.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            234 => 
            array (
                'id' => 737,
                'product_id' => 1652,
                'pdf' => 'HD-050.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            235 => 
            array (
                'id' => 738,
                'product_id' => 1657,
                'pdf' => 'HD-064.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            236 => 
            array (
                'id' => 739,
                'product_id' => 1656,
                'pdf' => 'HD-064.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            237 => 
            array (
                'id' => 740,
                'product_id' => 1659,
                'pdf' => 'HD-080.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            238 => 
            array (
                'id' => 741,
                'product_id' => 1658,
                'pdf' => 'HD-080.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            239 => 
            array (
                'id' => 742,
                'product_id' => 1661,
                'pdf' => 'HD-128.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            240 => 
            array (
                'id' => 743,
                'product_id' => 1660,
                'pdf' => 'HD-128.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            241 => 
            array (
                'id' => 744,
                'product_id' => 1683,
                'pdf' => 'HDD-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            242 => 
            array (
                'id' => 745,
                'product_id' => 1682,
                'pdf' => 'HDD-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            243 => 
            array (
                'id' => 746,
                'product_id' => 1685,
                'pdf' => 'HDD-042.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            244 => 
            array (
                'id' => 747,
                'product_id' => 1684,
                'pdf' => 'HDD-042.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            245 => 
            array (
                'id' => 748,
                'product_id' => 1687,
                'pdf' => 'HDD-072.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            246 => 
            array (
                'id' => 749,
                'product_id' => 52490,
                'pdf' => 'HDD-144.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            247 => 
            array (
                'id' => 750,
                'product_id' => 1686,
                'pdf' => 'HDD-072.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            248 => 
            array (
                'id' => 751,
                'product_id' => 52489,
                'pdf' => 'HDD-144.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            249 => 
            array (
                'id' => 752,
                'product_id' => 1689,
                'pdf' => 'HDD-108.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            250 => 
            array (
                'id' => 753,
                'product_id' => 52492,
                'pdf' => 'HDD-216.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            251 => 
            array (
                'id' => 754,
                'product_id' => 1688,
                'pdf' => 'HDD-108.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            252 => 
            array (
                'id' => 755,
                'product_id' => 52491,
                'pdf' => 'HDD-216.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            253 => 
            array (
                'id' => 756,
                'product_id' => 1691,
                'pdf' => 'HDD-144.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            254 => 
            array (
                'id' => 757,
                'product_id' => 1690,
                'pdf' => 'HDD-144.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            255 => 
            array (
                'id' => 758,
                'product_id' => 1693,
                'pdf' => 'HDD-216.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            256 => 
            array (
                'id' => 759,
                'product_id' => 1692,
                'pdf' => 'HDD-216.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            257 => 
            array (
                'id' => 760,
                'product_id' => 1558,
                'pdf' => 'HE-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            258 => 
            array (
                'id' => 761,
                'product_id' => 1560,
                'pdf' => 'HE-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            259 => 
            array (
                'id' => 762,
                'product_id' => 1562,
                'pdf' => 'HE-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            260 => 
            array (
                'id' => 763,
                'product_id' => 8213,
                'pdf' => 'HE-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            261 => 
            array (
                'id' => 764,
                'product_id' => 1554,
                'pdf' => 'HE-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            262 => 
            array (
                'id' => 765,
                'product_id' => 1559,
                'pdf' => 'HE-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            263 => 
            array (
                'id' => 766,
                'product_id' => 1561,
                'pdf' => 'HE-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            264 => 
            array (
                'id' => 767,
                'product_id' => 8212,
                'pdf' => 'HE-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            265 => 
            array (
                'id' => 768,
                'product_id' => 1564,
                'pdf' => 'HE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            266 => 
            array (
                'id' => 769,
                'product_id' => 1566,
                'pdf' => 'HE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            267 => 
            array (
                'id' => 770,
                'product_id' => 1568,
                'pdf' => 'HE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            268 => 
            array (
                'id' => 771,
                'product_id' => 8220,
                'pdf' => 'HE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            269 => 
            array (
                'id' => 772,
                'product_id' => 1563,
                'pdf' => 'HE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            270 => 
            array (
                'id' => 773,
                'product_id' => 1565,
                'pdf' => 'HE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            271 => 
            array (
                'id' => 774,
                'product_id' => 1567,
                'pdf' => 'HE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            272 => 
            array (
                'id' => 775,
                'product_id' => 8219,
                'pdf' => 'HE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            273 => 
            array (
                'id' => 776,
                'product_id' => 1570,
                'pdf' => 'HE-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            274 => 
            array (
                'id' => 777,
                'product_id' => 52474,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            275 => 
            array (
                'id' => 778,
                'product_id' => 1572,
                'pdf' => 'HE-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            276 => 
            array (
                'id' => 779,
                'product_id' => 52476,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            277 => 
            array (
                'id' => 780,
                'product_id' => 1574,
                'pdf' => 'HE-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            278 => 
            array (
                'id' => 781,
                'product_id' => 52478,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            279 => 
            array (
                'id' => 782,
                'product_id' => 8222,
                'pdf' => 'HE-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            280 => 
            array (
                'id' => 783,
                'product_id' => 1569,
                'pdf' => 'HE-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            281 => 
            array (
                'id' => 784,
                'product_id' => 52473,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            282 => 
            array (
                'id' => 785,
                'product_id' => 1571,
                'pdf' => 'HE-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            283 => 
            array (
                'id' => 786,
                'product_id' => 52475,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            284 => 
            array (
                'id' => 787,
                'product_id' => 1573,
                'pdf' => 'HE-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            285 => 
            array (
                'id' => 788,
                'product_id' => 52477,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            286 => 
            array (
                'id' => 789,
                'product_id' => 8221,
                'pdf' => 'HE-016.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            287 => 
            array (
                'id' => 790,
                'product_id' => 1576,
                'pdf' => 'HE-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            288 => 
            array (
                'id' => 791,
                'product_id' => 52480,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            289 => 
            array (
                'id' => 792,
                'product_id' => 1578,
                'pdf' => 'HE-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            290 => 
            array (
                'id' => 793,
                'product_id' => 52482,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            291 => 
            array (
                'id' => 794,
                'product_id' => 1580,
                'pdf' => 'HE-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            292 => 
            array (
                'id' => 795,
                'product_id' => 52484,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            293 => 
            array (
                'id' => 796,
                'product_id' => 8224,
                'pdf' => 'HE-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            294 => 
            array (
                'id' => 797,
                'product_id' => 1575,
                'pdf' => 'HE-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            295 => 
            array (
                'id' => 798,
                'product_id' => 52479,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            296 => 
            array (
                'id' => 799,
                'product_id' => 1577,
                'pdf' => 'HE-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            297 => 
            array (
                'id' => 800,
                'product_id' => 52481,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            298 => 
            array (
                'id' => 801,
                'product_id' => 1579,
                'pdf' => 'HE-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            299 => 
            array (
                'id' => 802,
                'product_id' => 52483,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            300 => 
            array (
                'id' => 803,
                'product_id' => 8223,
                'pdf' => 'HE-024.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            301 => 
            array (
                'id' => 804,
                'product_id' => 1582,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            302 => 
            array (
                'id' => 805,
                'product_id' => 1584,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            303 => 
            array (
                'id' => 806,
                'product_id' => 1586,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            304 => 
            array (
                'id' => 807,
                'product_id' => 8226,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            305 => 
            array (
                'id' => 808,
                'product_id' => 1581,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            306 => 
            array (
                'id' => 809,
                'product_id' => 1583,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            307 => 
            array (
                'id' => 810,
                'product_id' => 1585,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            308 => 
            array (
                'id' => 811,
                'product_id' => 8225,
                'pdf' => 'HE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            309 => 
            array (
                'id' => 812,
                'product_id' => 1588,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            310 => 
            array (
                'id' => 813,
                'product_id' => 1590,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            311 => 
            array (
                'id' => 814,
                'product_id' => 1592,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            312 => 
            array (
                'id' => 815,
                'product_id' => 8228,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            313 => 
            array (
                'id' => 816,
                'product_id' => 1587,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            314 => 
            array (
                'id' => 817,
                'product_id' => 1589,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            315 => 
            array (
                'id' => 818,
                'product_id' => 1591,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            316 => 
            array (
                'id' => 819,
                'product_id' => 8227,
                'pdf' => 'HE-048.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            317 => 
            array (
                'id' => 820,
                'product_id' => 1614,
                'pdf' => 'HEE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            318 => 
            array (
                'id' => 821,
                'product_id' => 1613,
                'pdf' => 'HEE-010.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            319 => 
            array (
                'id' => 822,
                'product_id' => 1616,
                'pdf' => 'HEE-018.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            320 => 
            array (
                'id' => 823,
                'product_id' => 1615,
                'pdf' => 'HEE-018.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            321 => 
            array (
                'id' => 824,
                'product_id' => 1618,
                'pdf' => 'HEE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            322 => 
            array (
                'id' => 825,
                'product_id' => 52486,
                'pdf' => 'HEE-064.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            323 => 
            array (
                'id' => 826,
                'product_id' => 1617,
                'pdf' => 'HEE-032.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            324 => 
            array (
                'id' => 827,
                'product_id' => 52485,
                'pdf' => 'HEE-064.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            325 => 
            array (
                'id' => 828,
                'product_id' => 1620,
                'pdf' => 'HEE-046.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            326 => 
            array (
                'id' => 829,
                'product_id' => 52488,
                'pdf' => 'HEE-092.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            327 => 
            array (
                'id' => 830,
                'product_id' => 1619,
                'pdf' => 'HEE-046.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            328 => 
            array (
                'id' => 831,
                'product_id' => 52487,
                'pdf' => 'HEE-092.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            329 => 
            array (
                'id' => 832,
                'product_id' => 1622,
                'pdf' => 'HEE-064.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            330 => 
            array (
                'id' => 833,
                'product_id' => 1621,
                'pdf' => 'HEE-064.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            331 => 
            array (
                'id' => 834,
                'product_id' => 1624,
                'pdf' => 'HEE-092.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            332 => 
            array (
                'id' => 835,
                'product_id' => 1623,
                'pdf' => 'HEE-092.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            333 => 
            array (
                'id' => 836,
                'product_id' => 1665,
                'pdf' => 'HEEE-040.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            334 => 
            array (
                'id' => 837,
                'product_id' => 1663,
                'pdf' => 'HEEE-040.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            335 => 
            array (
                'id' => 838,
                'product_id' => 1667,
                'pdf' => 'HEEE-064.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            336 => 
            array (
                'id' => 839,
                'product_id' => 1666,
                'pdf' => 'HEEE-064.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            337 => 
            array (
                'id' => 840,
                'product_id' => 8269,
                'pdf' => 'HK-004_4.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            338 => 
            array (
                'id' => 841,
                'product_id' => 8268,
                'pdf' => 'HK-004_4.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            339 => 
            array (
                'id' => 842,
                'product_id' => 8271,
                'pdf' => 'HK-004_4.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            340 => 
            array (
                'id' => 843,
                'product_id' => 8270,
                'pdf' => 'HK-004_4.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            341 => 
            array (
                'id' => 844,
                'product_id' => 1726,
                'pdf' => 'HK-004_0__HK-004_2.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            342 => 
            array (
                'id' => 845,
                'product_id' => 1725,
                'pdf' => 'HK-004_0__HK-004_2.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            343 => 
            array (
                'id' => 846,
                'product_id' => 1728,
                'pdf' => 'HK-004_0__HK-004_2.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            344 => 
            array (
                'id' => 847,
                'product_id' => 1727,
                'pdf' => 'HK-004_0__HK-004_2.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            345 => 
            array (
                'id' => 848,
                'product_id' => 1730,
                'pdf' => 'HK-004_8.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            346 => 
            array (
                'id' => 849,
                'product_id' => 1729,
                'pdf' => 'HK-004_8.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            347 => 
            array (
                'id' => 850,
                'product_id' => 1735,
                'pdf' => 'HK-006_12.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            348 => 
            array (
                'id' => 851,
                'product_id' => 1733,
                'pdf' => 'HK-006_12.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            349 => 
            array (
                'id' => 852,
                'product_id' => 1736,
                'pdf' => 'HK-006_12.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            350 => 
            array (
                'id' => 853,
                'product_id' => 1734,
                'pdf' => 'HK-006_12.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            351 => 
            array (
                'id' => 854,
                'product_id' => 1738,
                'pdf' => 'HK-006_36.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            352 => 
            array (
                'id' => 855,
                'product_id' => 1737,
                'pdf' => 'HK-006_36.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            353 => 
            array (
                'id' => 856,
                'product_id' => 1742,
                'pdf' => 'HK-006_6.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            354 => 
            array (
                'id' => 857,
                'product_id' => 1741,
                'pdf' => 'HK-006_6.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            355 => 
            array (
                'id' => 858,
                'product_id' => 1744,
                'pdf' => 'HK-008_0.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            356 => 
            array (
                'id' => 859,
                'product_id' => 1743,
                'pdf' => 'HK-008_0.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            357 => 
            array (
                'id' => 860,
                'product_id' => 1747,
                'pdf' => 'HK-008_24.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            358 => 
            array (
                'id' => 861,
                'product_id' => 1746,
                'pdf' => 'HK-008_24.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            359 => 
            array (
                'id' => 862,
                'product_id' => 1740,
                'pdf' => 'HK-012_2.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            360 => 
            array (
                'id' => 863,
                'product_id' => 1739,
                'pdf' => 'HK-012_2.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            361 => 
            array (
                'id' => 864,
                'product_id' => 8258,
                'pdf' => 'HSB-004.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            362 => 
            array (
                'id' => 865,
                'product_id' => 8257,
                'pdf' => 'HSB-004.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            363 => 
            array (
                'id' => 866,
                'product_id' => 1701,
                'pdf' => 'HSB-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            364 => 
            array (
                'id' => 867,
                'product_id' => 52494,
                'pdf' => 'HSB-012.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            365 => 
            array (
                'id' => 868,
                'product_id' => 1700,
                'pdf' => 'HSB-006.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            366 => 
            array (
                'id' => 869,
                'product_id' => 52493,
                'pdf' => 'HSB-012.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            367 => 
            array (
                'id' => 870,
                'product_id' => 1703,
                'pdf' => 'HSB-012.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            368 => 
            array (
                'id' => 871,
                'product_id' => 1702,
                'pdf' => 'HSB-012.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            369 => 
            array (
                'id' => 872,
                'product_id' => 8256,
                'pdf' => 'HSBS-004.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            370 => 
            array (
                'id' => 873,
                'product_id' => 8255,
                'pdf' => 'HSBS-004.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            371 => 
            array (
                'id' => 874,
                'product_id' => 1732,
                'pdf' => 'HWK-006_6.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            372 => 
            array (
                'id' => 875,
                'product_id' => 1731,
                'pdf' => 'HWK-006_6.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            373 => 
            array (
                'id' => 876,
                'product_id' => 3575,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            374 => 
            array (
                'id' => 877,
                'product_id' => 3583,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            375 => 
            array (
                'id' => 878,
                'product_id' => 3577,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            376 => 
            array (
                'id' => 879,
                'product_id' => 3579,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            377 => 
            array (
                'id' => 880,
                'product_id' => 3581,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            378 => 
            array (
                'id' => 881,
                'product_id' => 3574,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            379 => 
            array (
                'id' => 882,
                'product_id' => 3582,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            380 => 
            array (
                'id' => 883,
                'product_id' => 3576,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            381 => 
            array (
                'id' => 884,
                'product_id' => 3578,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            382 => 
            array (
                'id' => 885,
                'product_id' => 3580,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            383 => 
            array (
                'id' => 886,
                'product_id' => 3523,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            384 => 
            array (
                'id' => 887,
                'product_id' => 3525,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            385 => 
            array (
                'id' => 888,
                'product_id' => 3527,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            386 => 
            array (
                'id' => 889,
                'product_id' => 3529,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            387 => 
            array (
                'id' => 890,
                'product_id' => 3531,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            388 => 
            array (
                'id' => 891,
                'product_id' => 3533,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            389 => 
            array (
                'id' => 892,
                'product_id' => 3522,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            390 => 
            array (
                'id' => 893,
                'product_id' => 3524,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            391 => 
            array (
                'id' => 894,
                'product_id' => 3526,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            392 => 
            array (
                'id' => 895,
                'product_id' => 3528,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            393 => 
            array (
                'id' => 896,
                'product_id' => 3530,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            394 => 
            array (
                'id' => 897,
                'product_id' => 3532,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            395 => 
            array (
                'id' => 898,
                'product_id' => 3511,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            396 => 
            array (
                'id' => 899,
                'product_id' => 3513,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            397 => 
            array (
                'id' => 900,
                'product_id' => 3515,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            398 => 
            array (
                'id' => 901,
                'product_id' => 3517,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            399 => 
            array (
                'id' => 902,
                'product_id' => 3519,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            400 => 
            array (
                'id' => 903,
                'product_id' => 3521,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            401 => 
            array (
                'id' => 904,
                'product_id' => 3510,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            402 => 
            array (
                'id' => 905,
                'product_id' => 3512,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            403 => 
            array (
                'id' => 906,
                'product_id' => 3514,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            404 => 
            array (
                'id' => 907,
                'product_id' => 3516,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            405 => 
            array (
                'id' => 908,
                'product_id' => 3518,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            406 => 
            array (
                'id' => 909,
                'product_id' => 3520,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            407 => 
            array (
                'id' => 910,
                'product_id' => 3556,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            408 => 
            array (
                'id' => 911,
                'product_id' => 3558,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            409 => 
            array (
                'id' => 912,
                'product_id' => 3560,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            410 => 
            array (
                'id' => 913,
                'product_id' => 3562,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            411 => 
            array (
                'id' => 914,
                'product_id' => 3564,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            412 => 
            array (
                'id' => 915,
                'product_id' => 3566,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            413 => 
            array (
                'id' => 916,
                'product_id' => 3568,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            414 => 
            array (
                'id' => 917,
                'product_id' => 3555,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            415 => 
            array (
                'id' => 918,
                'product_id' => 3557,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            416 => 
            array (
                'id' => 919,
                'product_id' => 3559,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            417 => 
            array (
                'id' => 920,
                'product_id' => 3561,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            418 => 
            array (
                'id' => 921,
                'product_id' => 3563,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            419 => 
            array (
                'id' => 922,
                'product_id' => 3565,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            420 => 
            array (
                'id' => 923,
                'product_id' => 3567,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            421 => 
            array (
                'id' => 924,
                'product_id' => 3540,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            422 => 
            array (
                'id' => 925,
                'product_id' => 3542,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            423 => 
            array (
                'id' => 926,
                'product_id' => 3544,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            424 => 
            array (
                'id' => 927,
                'product_id' => 3546,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            425 => 
            array (
                'id' => 928,
                'product_id' => 3548,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            426 => 
            array (
                'id' => 929,
                'product_id' => 3550,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            427 => 
            array (
                'id' => 930,
                'product_id' => 3552,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            428 => 
            array (
                'id' => 931,
                'product_id' => 3554,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            429 => 
            array (
                'id' => 932,
                'product_id' => 3539,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            430 => 
            array (
                'id' => 933,
                'product_id' => 3541,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            431 => 
            array (
                'id' => 934,
                'product_id' => 3543,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            432 => 
            array (
                'id' => 935,
                'product_id' => 3545,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            433 => 
            array (
                'id' => 936,
                'product_id' => 3547,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            434 => 
            array (
                'id' => 937,
                'product_id' => 3549,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            435 => 
            array (
                'id' => 938,
                'product_id' => 3551,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            436 => 
            array (
                'id' => 939,
                'product_id' => 3553,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            437 => 
            array (
                'id' => 940,
                'product_id' => 3608,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            438 => 
            array (
                'id' => 941,
                'product_id' => 3610,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            439 => 
            array (
                'id' => 942,
                'product_id' => 3612,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            440 => 
            array (
                'id' => 943,
                'product_id' => 3614,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            441 => 
            array (
                'id' => 944,
                'product_id' => 3607,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            442 => 
            array (
                'id' => 945,
                'product_id' => 3609,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            443 => 
            array (
                'id' => 946,
                'product_id' => 3611,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            444 => 
            array (
                'id' => 947,
                'product_id' => 3613,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            445 => 
            array (
                'id' => 948,
                'product_id' => 3599,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            446 => 
            array (
                'id' => 949,
                'product_id' => 3601,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            447 => 
            array (
                'id' => 950,
                'product_id' => 3603,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            448 => 
            array (
                'id' => 951,
                'product_id' => 3605,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            449 => 
            array (
                'id' => 952,
                'product_id' => 3592,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            450 => 
            array (
                'id' => 953,
                'product_id' => 3594,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            451 => 
            array (
                'id' => 954,
                'product_id' => 3596,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            452 => 
            array (
                'id' => 955,
                'product_id' => 3598,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            453 => 
            array (
                'id' => 956,
                'product_id' => 3600,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            454 => 
            array (
                'id' => 957,
                'product_id' => 3602,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            455 => 
            array (
                'id' => 958,
                'product_id' => 3604,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            456 => 
            array (
                'id' => 959,
                'product_id' => 3591,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            457 => 
            array (
                'id' => 960,
                'product_id' => 3593,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            458 => 
            array (
                'id' => 961,
                'product_id' => 3595,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            459 => 
            array (
                'id' => 962,
                'product_id' => 62067,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            460 => 
            array (
                'id' => 963,
                'product_id' => 62066,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            461 => 
            array (
                'id' => 964,
                'product_id' => 62054,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            462 => 
            array (
                'id' => 965,
                'product_id' => 62068,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            463 => 
            array (
                'id' => 966,
                'product_id' => 62071,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            464 => 
            array (
                'id' => 967,
                'product_id' => 62070,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            465 => 
            array (
                'id' => 968,
                'product_id' => 62069,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            466 => 
            array (
                'id' => 969,
                'product_id' => 3479,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            467 => 
            array (
                'id' => 970,
                'product_id' => 3481,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            468 => 
            array (
                'id' => 971,
                'product_id' => 3483,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            469 => 
            array (
                'id' => 972,
                'product_id' => 3485,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            470 => 
            array (
                'id' => 973,
                'product_id' => 3478,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            471 => 
            array (
                'id' => 974,
                'product_id' => 3480,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            472 => 
            array (
                'id' => 975,
                'product_id' => 3482,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            473 => 
            array (
                'id' => 976,
                'product_id' => 3484,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            474 => 
            array (
                'id' => 977,
                'product_id' => 3471,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            475 => 
            array (
                'id' => 978,
                'product_id' => 3473,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            476 => 
            array (
                'id' => 979,
                'product_id' => 3475,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            477 => 
            array (
                'id' => 980,
                'product_id' => 3477,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            478 => 
            array (
                'id' => 981,
                'product_id' => 3470,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            479 => 
            array (
                'id' => 982,
                'product_id' => 3472,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            480 => 
            array (
                'id' => 983,
                'product_id' => 3474,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            481 => 
            array (
                'id' => 984,
                'product_id' => 3476,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            482 => 
            array (
                'id' => 985,
                'product_id' => 62062,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            483 => 
            array (
                'id' => 986,
                'product_id' => 62126,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            484 => 
            array (
                'id' => 987,
                'product_id' => 62135,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            485 => 
            array (
                'id' => 988,
                'product_id' => 62063,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            486 => 
            array (
                'id' => 989,
                'product_id' => 2071,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            487 => 
            array (
                'id' => 990,
                'product_id' => 2072,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            488 => 
            array (
                'id' => 991,
                'product_id' => 2073,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            489 => 
            array (
                'id' => 992,
                'product_id' => 62951,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            490 => 
            array (
                'id' => 993,
                'product_id' => 62952,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            491 => 
            array (
                'id' => 994,
                'product_id' => 62953,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            492 => 
            array (
                'id' => 995,
                'product_id' => 2061,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            493 => 
            array (
                'id' => 996,
                'product_id' => 2062,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            494 => 
            array (
                'id' => 997,
                'product_id' => 2063,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            495 => 
            array (
                'id' => 998,
                'product_id' => 2064,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            496 => 
            array (
                'id' => 999,
                'product_id' => 2065,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            497 => 
            array (
                'id' => 1000,
                'product_id' => 2075,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            498 => 
            array (
                'id' => 1001,
                'product_id' => 2078,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            499 => 
            array (
                'id' => 1002,
                'product_id' => 2081,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
        ));
        \DB::table('product_pdfs')->insert(array (
            0 => 
            array (
                'id' => 1003,
                'product_id' => 2084,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            1 => 
            array (
                'id' => 1004,
                'product_id' => 2080,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            2 => 
            array (
                'id' => 1005,
                'product_id' => 2082,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            3 => 
            array (
                'id' => 1006,
                'product_id' => 2083,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            4 => 
            array (
                'id' => 1007,
                'product_id' => 2085,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            5 => 
            array (
                'id' => 1008,
                'product_id' => 2074,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            6 => 
            array (
                'id' => 1009,
                'product_id' => 2076,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            7 => 
            array (
                'id' => 1010,
                'product_id' => 2087,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            8 => 
            array (
                'id' => 1011,
                'product_id' => 2090,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            9 => 
            array (
                'id' => 1012,
                'product_id' => 2086,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            10 => 
            array (
                'id' => 1013,
                'product_id' => 2088,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            11 => 
            array (
                'id' => 1014,
                'product_id' => 2089,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            12 => 
            array (
                'id' => 1015,
                'product_id' => 2091,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            13 => 
            array (
                'id' => 1016,
                'product_id' => 2077,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            14 => 
            array (
                'id' => 1017,
                'product_id' => 2079,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            15 => 
            array (
                'id' => 1018,
                'product_id' => 2066,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            16 => 
            array (
                'id' => 1019,
                'product_id' => 2067,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            17 => 
            array (
                'id' => 1020,
                'product_id' => 2068,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            18 => 
            array (
                'id' => 1021,
                'product_id' => 2069,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            19 => 
            array (
                'id' => 1022,
                'product_id' => 2070,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            20 => 
            array (
                'id' => 1023,
                'product_id' => 62151,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            21 => 
            array (
                'id' => 1024,
                'product_id' => 2567,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            22 => 
            array (
                'id' => 1025,
                'product_id' => 2568,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            23 => 
            array (
                'id' => 1026,
                'product_id' => 2569,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            24 => 
            array (
                'id' => 1027,
                'product_id' => 2626,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            25 => 
            array (
                'id' => 1028,
                'product_id' => 2659,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            26 => 
            array (
                'id' => 1029,
                'product_id' => 2660,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            27 => 
            array (
                'id' => 1030,
                'product_id' => 2661,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            28 => 
            array (
                'id' => 1031,
                'product_id' => 2561,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            29 => 
            array (
                'id' => 1032,
                'product_id' => 2562,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            30 => 
            array (
                'id' => 1033,
                'product_id' => 2641,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            31 => 
            array (
                'id' => 1034,
                'product_id' => 2642,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            32 => 
            array (
                'id' => 1035,
                'product_id' => 2563,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            33 => 
            array (
                'id' => 1036,
                'product_id' => 2564,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            34 => 
            array (
                'id' => 1037,
                'product_id' => 2565,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            35 => 
            array (
                'id' => 1038,
                'product_id' => 2566,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            36 => 
            array (
                'id' => 1039,
                'product_id' => 2643,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            37 => 
            array (
                'id' => 1040,
                'product_id' => 2644,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            38 => 
            array (
                'id' => 1041,
                'product_id' => 2645,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            39 => 
            array (
                'id' => 1042,
                'product_id' => 2646,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            40 => 
            array (
                'id' => 1043,
                'product_id' => 8392,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            41 => 
            array (
                'id' => 1044,
                'product_id' => 8393,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            42 => 
            array (
                'id' => 1045,
                'product_id' => 8394,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            43 => 
            array (
                'id' => 1046,
                'product_id' => 8391,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            44 => 
            array (
                'id' => 1047,
                'product_id' => 61413,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            45 => 
            array (
                'id' => 1048,
                'product_id' => 64146,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            46 => 
            array (
                'id' => 1049,
                'product_id' => 8387,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            47 => 
            array (
                'id' => 1050,
                'product_id' => 8388,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            48 => 
            array (
                'id' => 1051,
                'product_id' => 8389,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            49 => 
            array (
                'id' => 1052,
                'product_id' => 8390,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            50 => 
            array (
                'id' => 1053,
                'product_id' => 2547,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            51 => 
            array (
                'id' => 1054,
                'product_id' => 2548,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            52 => 
            array (
                'id' => 1055,
                'product_id' => 2549,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            53 => 
            array (
                'id' => 1056,
                'product_id' => 2647,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            54 => 
            array (
                'id' => 1057,
                'product_id' => 2648,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            55 => 
            array (
                'id' => 1058,
                'product_id' => 2612,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            56 => 
            array (
                'id' => 1059,
                'product_id' => 2613,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            57 => 
            array (
                'id' => 1060,
                'product_id' => 2614,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            58 => 
            array (
                'id' => 1061,
                'product_id' => 2550,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            59 => 
            array (
                'id' => 1062,
                'product_id' => 2551,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            60 => 
            array (
                'id' => 1063,
                'product_id' => 2552,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            61 => 
            array (
                'id' => 1064,
                'product_id' => 2553,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            62 => 
            array (
                'id' => 1065,
                'product_id' => 2649,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            63 => 
            array (
                'id' => 1066,
                'product_id' => 2650,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            64 => 
            array (
                'id' => 1067,
                'product_id' => 2651,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            65 => 
            array (
                'id' => 1068,
                'product_id' => 2652,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            66 => 
            array (
                'id' => 1069,
                'product_id' => 2615,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            67 => 
            array (
                'id' => 1070,
                'product_id' => 2616,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            68 => 
            array (
                'id' => 1071,
                'product_id' => 2617,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            69 => 
            array (
                'id' => 1072,
                'product_id' => 2618,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            70 => 
            array (
                'id' => 1073,
                'product_id' => 2571,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            71 => 
            array (
                'id' => 1074,
                'product_id' => 2573,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            72 => 
            array (
                'id' => 1075,
                'product_id' => 2575,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            73 => 
            array (
                'id' => 1076,
                'product_id' => 2577,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            74 => 
            array (
                'id' => 1077,
                'product_id' => 2579,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            75 => 
            array (
                'id' => 1078,
                'product_id' => 2581,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            76 => 
            array (
                'id' => 1079,
                'product_id' => 2576,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            77 => 
            array (
                'id' => 1080,
                'product_id' => 2578,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            78 => 
            array (
                'id' => 1081,
                'product_id' => 2580,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            79 => 
            array (
                'id' => 1082,
                'product_id' => 2570,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            80 => 
            array (
                'id' => 1083,
                'product_id' => 2572,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            81 => 
            array (
                'id' => 1084,
                'product_id' => 2583,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            82 => 
            array (
                'id' => 1085,
                'product_id' => 2585,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            83 => 
            array (
                'id' => 1086,
                'product_id' => 2587,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            84 => 
            array (
                'id' => 1087,
                'product_id' => 2582,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            85 => 
            array (
                'id' => 1088,
                'product_id' => 2584,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            86 => 
            array (
                'id' => 1089,
                'product_id' => 2586,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            87 => 
            array (
                'id' => 1090,
                'product_id' => 2574,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            88 => 
            array (
                'id' => 1091,
                'product_id' => 2628,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            89 => 
            array (
                'id' => 1092,
                'product_id' => 2630,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            90 => 
            array (
                'id' => 1093,
                'product_id' => 2632,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            91 => 
            array (
                'id' => 1094,
                'product_id' => 2627,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            92 => 
            array (
                'id' => 1095,
                'product_id' => 2629,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            93 => 
            array (
                'id' => 1096,
                'product_id' => 2631,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            94 => 
            array (
                'id' => 1097,
                'product_id' => 2663,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            95 => 
            array (
                'id' => 1098,
                'product_id' => 2665,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            96 => 
            array (
                'id' => 1099,
                'product_id' => 2667,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            97 => 
            array (
                'id' => 1100,
                'product_id' => 2669,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            98 => 
            array (
                'id' => 1101,
                'product_id' => 2671,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            99 => 
            array (
                'id' => 1102,
                'product_id' => 2673,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            100 => 
            array (
                'id' => 1103,
                'product_id' => 2668,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            101 => 
            array (
                'id' => 1104,
                'product_id' => 2670,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            102 => 
            array (
                'id' => 1105,
                'product_id' => 2672,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            103 => 
            array (
                'id' => 1106,
                'product_id' => 2662,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            104 => 
            array (
                'id' => 1107,
                'product_id' => 2664,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            105 => 
            array (
                'id' => 1108,
                'product_id' => 2675,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            106 => 
            array (
                'id' => 1109,
                'product_id' => 2677,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            107 => 
            array (
                'id' => 1110,
                'product_id' => 2679,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            108 => 
            array (
                'id' => 1111,
                'product_id' => 2674,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            109 => 
            array (
                'id' => 1112,
                'product_id' => 2676,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            110 => 
            array (
                'id' => 1113,
                'product_id' => 2678,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            111 => 
            array (
                'id' => 1114,
                'product_id' => 2666,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            112 => 
            array (
                'id' => 1115,
                'product_id' => 2589,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            113 => 
            array (
                'id' => 1116,
                'product_id' => 2591,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            114 => 
            array (
                'id' => 1117,
                'product_id' => 2593,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            115 => 
            array (
                'id' => 1118,
                'product_id' => 2595,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            116 => 
            array (
                'id' => 1119,
                'product_id' => 2597,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            117 => 
            array (
                'id' => 1120,
                'product_id' => 2599,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            118 => 
            array (
                'id' => 1121,
                'product_id' => 2601,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            119 => 
            array (
                'id' => 1122,
                'product_id' => 2603,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            120 => 
            array (
                'id' => 1123,
                'product_id' => 2596,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            121 => 
            array (
                'id' => 1124,
                'product_id' => 2598,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            122 => 
            array (
                'id' => 1125,
                'product_id' => 2600,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            123 => 
            array (
                'id' => 1126,
                'product_id' => 2602,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            124 => 
            array (
                'id' => 1127,
                'product_id' => 2588,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            125 => 
            array (
                'id' => 1128,
                'product_id' => 2590,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            126 => 
            array (
                'id' => 1129,
                'product_id' => 2605,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            127 => 
            array (
                'id' => 1130,
                'product_id' => 2607,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            128 => 
            array (
                'id' => 1131,
                'product_id' => 2609,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            129 => 
            array (
                'id' => 1132,
                'product_id' => 2611,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            130 => 
            array (
                'id' => 1133,
                'product_id' => 2604,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            131 => 
            array (
                'id' => 1134,
                'product_id' => 2606,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            132 => 
            array (
                'id' => 1135,
                'product_id' => 2608,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            133 => 
            array (
                'id' => 1136,
                'product_id' => 2610,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            134 => 
            array (
                'id' => 1137,
                'product_id' => 2592,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            135 => 
            array (
                'id' => 1138,
                'product_id' => 2594,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            136 => 
            array (
                'id' => 1139,
                'product_id' => 2634,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            137 => 
            array (
                'id' => 1140,
                'product_id' => 2636,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            138 => 
            array (
                'id' => 1141,
                'product_id' => 2638,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            139 => 
            array (
                'id' => 1142,
                'product_id' => 2640,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            140 => 
            array (
                'id' => 1143,
                'product_id' => 2633,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            141 => 
            array (
                'id' => 1144,
                'product_id' => 2635,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            142 => 
            array (
                'id' => 1145,
                'product_id' => 2637,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            143 => 
            array (
                'id' => 1146,
                'product_id' => 2639,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            144 => 
            array (
                'id' => 1147,
                'product_id' => 2681,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            145 => 
            array (
                'id' => 1148,
                'product_id' => 2683,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            146 => 
            array (
                'id' => 1149,
                'product_id' => 2685,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            147 => 
            array (
                'id' => 1150,
                'product_id' => 2687,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            148 => 
            array (
                'id' => 1151,
                'product_id' => 2689,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            149 => 
            array (
                'id' => 1152,
                'product_id' => 2691,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            150 => 
            array (
                'id' => 1153,
                'product_id' => 2693,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            151 => 
            array (
                'id' => 1154,
                'product_id' => 2695,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            152 => 
            array (
                'id' => 1155,
                'product_id' => 2688,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            153 => 
            array (
                'id' => 1156,
                'product_id' => 2690,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            154 => 
            array (
                'id' => 1157,
                'product_id' => 2692,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            155 => 
            array (
                'id' => 1158,
                'product_id' => 2694,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            156 => 
            array (
                'id' => 1159,
                'product_id' => 2680,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            157 => 
            array (
                'id' => 1160,
                'product_id' => 2682,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            158 => 
            array (
                'id' => 1161,
                'product_id' => 2697,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            159 => 
            array (
                'id' => 1162,
                'product_id' => 2699,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            160 => 
            array (
                'id' => 1163,
                'product_id' => 2701,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            161 => 
            array (
                'id' => 1164,
                'product_id' => 2703,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            162 => 
            array (
                'id' => 1165,
                'product_id' => 2696,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            163 => 
            array (
                'id' => 1166,
                'product_id' => 2698,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            164 => 
            array (
                'id' => 1167,
                'product_id' => 2700,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            165 => 
            array (
                'id' => 1168,
                'product_id' => 2702,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            166 => 
            array (
                'id' => 1169,
                'product_id' => 2684,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            167 => 
            array (
                'id' => 1170,
                'product_id' => 2686,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            168 => 
            array (
                'id' => 1171,
                'product_id' => 2554,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            169 => 
            array (
                'id' => 1172,
                'product_id' => 2555,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            170 => 
            array (
                'id' => 1173,
                'product_id' => 2556,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            171 => 
            array (
                'id' => 1174,
                'product_id' => 2653,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            172 => 
            array (
                'id' => 1175,
                'product_id' => 2654,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            173 => 
            array (
                'id' => 1176,
                'product_id' => 2619,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            174 => 
            array (
                'id' => 1177,
                'product_id' => 2620,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            175 => 
            array (
                'id' => 1178,
                'product_id' => 2621,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            176 => 
            array (
                'id' => 1179,
                'product_id' => 2557,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            177 => 
            array (
                'id' => 1180,
                'product_id' => 2558,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            178 => 
            array (
                'id' => 1181,
                'product_id' => 2559,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            179 => 
            array (
                'id' => 1182,
                'product_id' => 2560,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            180 => 
            array (
                'id' => 1183,
                'product_id' => 2655,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            181 => 
            array (
                'id' => 1184,
                'product_id' => 2656,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            182 => 
            array (
                'id' => 1185,
                'product_id' => 2657,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            183 => 
            array (
                'id' => 1186,
                'product_id' => 2658,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            184 => 
            array (
                'id' => 1187,
                'product_id' => 64113,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            185 => 
            array (
                'id' => 1188,
                'product_id' => 2622,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            186 => 
            array (
                'id' => 1189,
                'product_id' => 2623,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            187 => 
            array (
                'id' => 1190,
                'product_id' => 64114,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            188 => 
            array (
                'id' => 1191,
                'product_id' => 2624,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            189 => 
            array (
                'id' => 1192,
                'product_id' => 2625,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-10b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            190 => 
            array (
                'id' => 1193,
                'product_id' => 2129,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            191 => 
            array (
                'id' => 1194,
                'product_id' => 2130,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            192 => 
            array (
                'id' => 1195,
                'product_id' => 2131,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            193 => 
            array (
                'id' => 1196,
                'product_id' => 2119,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            194 => 
            array (
                'id' => 1197,
                'product_id' => 2120,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            195 => 
            array (
                'id' => 1198,
                'product_id' => 2121,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            196 => 
            array (
                'id' => 1199,
                'product_id' => 2122,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            197 => 
            array (
                'id' => 1200,
                'product_id' => 2123,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            198 => 
            array (
                'id' => 1201,
                'product_id' => 2133,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            199 => 
            array (
                'id' => 1202,
                'product_id' => 2153,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            200 => 
            array (
                'id' => 1203,
                'product_id' => 2135,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            201 => 
            array (
                'id' => 1204,
                'product_id' => 2139,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            202 => 
            array (
                'id' => 1205,
                'product_id' => 2141,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            203 => 
            array (
                'id' => 1206,
                'product_id' => 2143,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            204 => 
            array (
                'id' => 1207,
                'product_id' => 2138,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            205 => 
            array (
                'id' => 1208,
                'product_id' => 2140,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            206 => 
            array (
                'id' => 1209,
                'product_id' => 2142,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            207 => 
            array (
                'id' => 1210,
                'product_id' => 2144,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            208 => 
            array (
                'id' => 1211,
                'product_id' => 2132,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            209 => 
            array (
                'id' => 1212,
                'product_id' => 2134,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            210 => 
            array (
                'id' => 1213,
                'product_id' => 2146,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            211 => 
            array (
                'id' => 1214,
                'product_id' => 2148,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            212 => 
            array (
                'id' => 1215,
                'product_id' => 2150,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            213 => 
            array (
                'id' => 1216,
                'product_id' => 2145,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            214 => 
            array (
                'id' => 1217,
                'product_id' => 2147,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            215 => 
            array (
                'id' => 1218,
                'product_id' => 2149,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            216 => 
            array (
                'id' => 1219,
                'product_id' => 2151,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            217 => 
            array (
                'id' => 1220,
                'product_id' => 2136,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            218 => 
            array (
                'id' => 1221,
                'product_id' => 2137,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            219 => 
            array (
                'id' => 1222,
                'product_id' => 2124,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            220 => 
            array (
                'id' => 1223,
                'product_id' => 2125,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            221 => 
            array (
                'id' => 1224,
                'product_id' => 2126,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            222 => 
            array (
                'id' => 1225,
                'product_id' => 2127,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            223 => 
            array (
                'id' => 1226,
                'product_id' => 2128,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            224 => 
            array (
                'id' => 1227,
                'product_id' => 62152,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            225 => 
            array (
                'id' => 1228,
                'product_id' => 2861,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            226 => 
            array (
                'id' => 1229,
                'product_id' => 2862,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            227 => 
            array (
                'id' => 1230,
                'product_id' => 2863,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            228 => 
            array (
                'id' => 1231,
                'product_id' => 2909,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            229 => 
            array (
                'id' => 1232,
                'product_id' => 2944,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            230 => 
            array (
                'id' => 1233,
                'product_id' => 2945,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            231 => 
            array (
                'id' => 1234,
                'product_id' => 2946,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            232 => 
            array (
                'id' => 1235,
                'product_id' => 2854,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            233 => 
            array (
                'id' => 1236,
                'product_id' => 2855,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            234 => 
            array (
                'id' => 1237,
                'product_id' => 2856,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            235 => 
            array (
                'id' => 1238,
                'product_id' => 2922,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            236 => 
            array (
                'id' => 1239,
                'product_id' => 2923,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            237 => 
            array (
                'id' => 1240,
                'product_id' => 2924,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            238 => 
            array (
                'id' => 1241,
                'product_id' => 2857,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            239 => 
            array (
                'id' => 1242,
                'product_id' => 2858,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            240 => 
            array (
                'id' => 1243,
                'product_id' => 2859,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            241 => 
            array (
                'id' => 1244,
                'product_id' => 2860,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            242 => 
            array (
                'id' => 1245,
                'product_id' => 2925,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            243 => 
            array (
                'id' => 1246,
                'product_id' => 2926,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            244 => 
            array (
                'id' => 1247,
                'product_id' => 2927,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            245 => 
            array (
                'id' => 1248,
                'product_id' => 2928,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            246 => 
            array (
                'id' => 1249,
                'product_id' => 2929,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            247 => 
            array (
                'id' => 1250,
                'product_id' => 8415,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            248 => 
            array (
                'id' => 1251,
                'product_id' => 8416,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            249 => 
            array (
                'id' => 1252,
                'product_id' => 8414,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            250 => 
            array (
                'id' => 1253,
                'product_id' => 64065,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            251 => 
            array (
                'id' => 1254,
                'product_id' => 64147,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            252 => 
            array (
                'id' => 1255,
                'product_id' => 8410,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            253 => 
            array (
                'id' => 1256,
                'product_id' => 8411,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            254 => 
            array (
                'id' => 1257,
                'product_id' => 8412,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            255 => 
            array (
                'id' => 1258,
                'product_id' => 8413,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            256 => 
            array (
                'id' => 1259,
                'product_id' => 2840,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            257 => 
            array (
                'id' => 1260,
                'product_id' => 2841,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            258 => 
            array (
                'id' => 1261,
                'product_id' => 2842,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            259 => 
            array (
                'id' => 1262,
                'product_id' => 2930,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            260 => 
            array (
                'id' => 1263,
                'product_id' => 2931,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            261 => 
            array (
                'id' => 1264,
                'product_id' => 2932,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            262 => 
            array (
                'id' => 1265,
                'product_id' => 2895,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            263 => 
            array (
                'id' => 1266,
                'product_id' => 2896,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            264 => 
            array (
                'id' => 1267,
                'product_id' => 2897,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            265 => 
            array (
                'id' => 1268,
                'product_id' => 2843,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            266 => 
            array (
                'id' => 1269,
                'product_id' => 2844,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            267 => 
            array (
                'id' => 1270,
                'product_id' => 2845,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            268 => 
            array (
                'id' => 1271,
                'product_id' => 2846,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            269 => 
            array (
                'id' => 1272,
                'product_id' => 2933,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            270 => 
            array (
                'id' => 1273,
                'product_id' => 2934,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            271 => 
            array (
                'id' => 1274,
                'product_id' => 2935,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            272 => 
            array (
                'id' => 1275,
                'product_id' => 2936,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            273 => 
            array (
                'id' => 1276,
                'product_id' => 64115,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            274 => 
            array (
                'id' => 1277,
                'product_id' => 2898,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            275 => 
            array (
                'id' => 1278,
                'product_id' => 2899,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            276 => 
            array (
                'id' => 1279,
                'product_id' => 2900,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            277 => 
            array (
                'id' => 1280,
                'product_id' => 2901,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            278 => 
            array (
                'id' => 1281,
                'product_id' => 2865,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            279 => 
            array (
                'id' => 1282,
                'product_id' => 2867,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            280 => 
            array (
                'id' => 1283,
                'product_id' => 2869,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            281 => 
            array (
                'id' => 1284,
                'product_id' => 2871,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            282 => 
            array (
                'id' => 1285,
                'product_id' => 2868,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            283 => 
            array (
                'id' => 1286,
                'product_id' => 2870,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            284 => 
            array (
                'id' => 1287,
                'product_id' => 2864,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            285 => 
            array (
                'id' => 1288,
                'product_id' => 2873,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            286 => 
            array (
                'id' => 1289,
                'product_id' => 2875,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            287 => 
            array (
                'id' => 1290,
                'product_id' => 2872,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            288 => 
            array (
                'id' => 1291,
                'product_id' => 2874,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            289 => 
            array (
                'id' => 1292,
                'product_id' => 2866,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            290 => 
            array (
                'id' => 1293,
                'product_id' => 2911,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            291 => 
            array (
                'id' => 1294,
                'product_id' => 2913,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            292 => 
            array (
                'id' => 1295,
                'product_id' => 2910,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            293 => 
            array (
                'id' => 1296,
                'product_id' => 2912,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            294 => 
            array (
                'id' => 1297,
                'product_id' => 2948,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            295 => 
            array (
                'id' => 1298,
                'product_id' => 2950,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            296 => 
            array (
                'id' => 1299,
                'product_id' => 2952,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            297 => 
            array (
                'id' => 1300,
                'product_id' => 2954,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            298 => 
            array (
                'id' => 1301,
                'product_id' => 2951,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            299 => 
            array (
                'id' => 1302,
                'product_id' => 2953,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            300 => 
            array (
                'id' => 1303,
                'product_id' => 2947,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            301 => 
            array (
                'id' => 1304,
                'product_id' => 2956,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            302 => 
            array (
                'id' => 1305,
                'product_id' => 2958,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            303 => 
            array (
                'id' => 1306,
                'product_id' => 2955,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            304 => 
            array (
                'id' => 1307,
                'product_id' => 2957,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            305 => 
            array (
                'id' => 1308,
                'product_id' => 2949,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            306 => 
            array (
                'id' => 1309,
                'product_id' => 2877,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            307 => 
            array (
                'id' => 1310,
                'product_id' => 2878,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            308 => 
            array (
                'id' => 1311,
                'product_id' => 2880,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            309 => 
            array (
                'id' => 1312,
                'product_id' => 2882,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            310 => 
            array (
                'id' => 1313,
                'product_id' => 2884,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            311 => 
            array (
                'id' => 1314,
                'product_id' => 2886,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            312 => 
            array (
                'id' => 1315,
                'product_id' => 2888,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            313 => 
            array (
                'id' => 1316,
                'product_id' => 2883,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            314 => 
            array (
                'id' => 1317,
                'product_id' => 2885,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            315 => 
            array (
                'id' => 1318,
                'product_id' => 2887,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            316 => 
            array (
                'id' => 1319,
                'product_id' => 2876,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            317 => 
            array (
                'id' => 1320,
                'product_id' => 2890,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            318 => 
            array (
                'id' => 1321,
                'product_id' => 2892,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            319 => 
            array (
                'id' => 1322,
                'product_id' => 2894,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            320 => 
            array (
                'id' => 1323,
                'product_id' => 2889,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            321 => 
            array (
                'id' => 1324,
                'product_id' => 2891,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            322 => 
            array (
                'id' => 1325,
                'product_id' => 2893,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            323 => 
            array (
                'id' => 1326,
                'product_id' => 2879,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            324 => 
            array (
                'id' => 1327,
                'product_id' => 2881,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            325 => 
            array (
                'id' => 1328,
                'product_id' => 2914,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            326 => 
            array (
                'id' => 1329,
                'product_id' => 2916,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            327 => 
            array (
                'id' => 1330,
                'product_id' => 2917,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            328 => 
            array (
                'id' => 1331,
                'product_id' => 2919,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            329 => 
            array (
                'id' => 1332,
                'product_id' => 2921,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            330 => 
            array (
                'id' => 1333,
                'product_id' => 2915,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            331 => 
            array (
                'id' => 1334,
                'product_id' => 2918,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            332 => 
            array (
                'id' => 1335,
                'product_id' => 2920,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            333 => 
            array (
                'id' => 1336,
                'product_id' => 2960,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            334 => 
            array (
                'id' => 1337,
                'product_id' => 2962,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            335 => 
            array (
                'id' => 1338,
                'product_id' => 2964,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            336 => 
            array (
                'id' => 1339,
                'product_id' => 2966,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            337 => 
            array (
                'id' => 1340,
                'product_id' => 2968,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            338 => 
            array (
                'id' => 1341,
                'product_id' => 2970,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            339 => 
            array (
                'id' => 1342,
                'product_id' => 2965,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            340 => 
            array (
                'id' => 1343,
                'product_id' => 2967,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            341 => 
            array (
                'id' => 1344,
                'product_id' => 2969,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            342 => 
            array (
                'id' => 1345,
                'product_id' => 2959,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            343 => 
            array (
                'id' => 1346,
                'product_id' => 2972,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            344 => 
            array (
                'id' => 1347,
                'product_id' => 2974,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            345 => 
            array (
                'id' => 1348,
                'product_id' => 2976,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            346 => 
            array (
                'id' => 1349,
                'product_id' => 2971,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            347 => 
            array (
                'id' => 1350,
                'product_id' => 2973,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            348 => 
            array (
                'id' => 1351,
                'product_id' => 2975,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            349 => 
            array (
                'id' => 1352,
                'product_id' => 2961,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            350 => 
            array (
                'id' => 1353,
                'product_id' => 2963,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            351 => 
            array (
                'id' => 1354,
                'product_id' => 2847,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            352 => 
            array (
                'id' => 1355,
                'product_id' => 2848,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            353 => 
            array (
                'id' => 1356,
                'product_id' => 2849,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            354 => 
            array (
                'id' => 1357,
                'product_id' => 2937,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            355 => 
            array (
                'id' => 1358,
                'product_id' => 2938,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            356 => 
            array (
                'id' => 1359,
                'product_id' => 2939,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            357 => 
            array (
                'id' => 1360,
                'product_id' => 2902,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            358 => 
            array (
                'id' => 1361,
                'product_id' => 2903,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            359 => 
            array (
                'id' => 1362,
                'product_id' => 2904,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            360 => 
            array (
                'id' => 1363,
                'product_id' => 2850,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            361 => 
            array (
                'id' => 1364,
                'product_id' => 2851,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            362 => 
            array (
                'id' => 1365,
                'product_id' => 2852,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            363 => 
            array (
                'id' => 1366,
                'product_id' => 2853,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            364 => 
            array (
                'id' => 1367,
                'product_id' => 2940,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            365 => 
            array (
                'id' => 1368,
                'product_id' => 2941,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            366 => 
            array (
                'id' => 1369,
                'product_id' => 2942,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            367 => 
            array (
                'id' => 1370,
                'product_id' => 2943,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            368 => 
            array (
                'id' => 1371,
                'product_id' => 28424,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            369 => 
            array (
                'id' => 1372,
                'product_id' => 64116,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            370 => 
            array (
                'id' => 1373,
                'product_id' => 64117,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            371 => 
            array (
                'id' => 1374,
                'product_id' => 2905,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            372 => 
            array (
                'id' => 1375,
                'product_id' => 2906,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            373 => 
            array (
                'id' => 1376,
                'product_id' => 2907,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            374 => 
            array (
                'id' => 1377,
                'product_id' => 2908,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-16b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            375 => 
            array (
                'id' => 1378,
                'product_id' => 62153,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            376 => 
            array (
                'id' => 1379,
                'product_id' => 3142,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            377 => 
            array (
                'id' => 1380,
                'product_id' => 3143,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            378 => 
            array (
                'id' => 1381,
                'product_id' => 3144,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            379 => 
            array (
                'id' => 1382,
                'product_id' => 3190,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            380 => 
            array (
                'id' => 1383,
                'product_id' => 3225,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            381 => 
            array (
                'id' => 1384,
                'product_id' => 3226,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            382 => 
            array (
                'id' => 1385,
                'product_id' => 3227,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            383 => 
            array (
                'id' => 1386,
                'product_id' => 3134,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            384 => 
            array (
                'id' => 1387,
                'product_id' => 3135,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            385 => 
            array (
                'id' => 1388,
                'product_id' => 3136,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            386 => 
            array (
                'id' => 1389,
                'product_id' => 3137,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            387 => 
            array (
                'id' => 1390,
                'product_id' => 3202,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            388 => 
            array (
                'id' => 1391,
                'product_id' => 3203,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            389 => 
            array (
                'id' => 1392,
                'product_id' => 3204,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            390 => 
            array (
                'id' => 1393,
                'product_id' => 3205,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            391 => 
            array (
                'id' => 1394,
                'product_id' => 3138,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            392 => 
            array (
                'id' => 1395,
                'product_id' => 3139,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            393 => 
            array (
                'id' => 1396,
                'product_id' => 3140,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            394 => 
            array (
                'id' => 1397,
                'product_id' => 3141,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            395 => 
            array (
                'id' => 1398,
                'product_id' => 3206,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            396 => 
            array (
                'id' => 1399,
                'product_id' => 3207,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            397 => 
            array (
                'id' => 1400,
                'product_id' => 3208,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            398 => 
            array (
                'id' => 1401,
                'product_id' => 3209,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            399 => 
            array (
                'id' => 1402,
                'product_id' => 8436,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            400 => 
            array (
                'id' => 1403,
                'product_id' => 8437,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            401 => 
            array (
                'id' => 1404,
                'product_id' => 8435,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            402 => 
            array (
                'id' => 1405,
                'product_id' => 64066,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            403 => 
            array (
                'id' => 1406,
                'product_id' => 8433,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            404 => 
            array (
                'id' => 1407,
                'product_id' => 8434,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            405 => 
            array (
                'id' => 1408,
                'product_id' => 8431,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            406 => 
            array (
                'id' => 1409,
                'product_id' => 8432,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            407 => 
            array (
                'id' => 1410,
                'product_id' => 3117,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            408 => 
            array (
                'id' => 1411,
                'product_id' => 3118,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            409 => 
            array (
                'id' => 1412,
                'product_id' => 3119,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            410 => 
            array (
                'id' => 1413,
                'product_id' => 3210,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            411 => 
            array (
                'id' => 1414,
                'product_id' => 3211,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            412 => 
            array (
                'id' => 1415,
                'product_id' => 3212,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            413 => 
            array (
                'id' => 1416,
                'product_id' => 3175,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            414 => 
            array (
                'id' => 1417,
                'product_id' => 3176,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            415 => 
            array (
                'id' => 1418,
                'product_id' => 3177,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            416 => 
            array (
                'id' => 1419,
                'product_id' => 64118,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            417 => 
            array (
                'id' => 1420,
                'product_id' => 3120,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            418 => 
            array (
                'id' => 1421,
                'product_id' => 3121,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            419 => 
            array (
                'id' => 1422,
                'product_id' => 3122,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            420 => 
            array (
                'id' => 1423,
                'product_id' => 3123,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            421 => 
            array (
                'id' => 1424,
                'product_id' => 3124,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            422 => 
            array (
                'id' => 1425,
                'product_id' => 3213,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            423 => 
            array (
                'id' => 1426,
                'product_id' => 3214,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            424 => 
            array (
                'id' => 1427,
                'product_id' => 3215,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            425 => 
            array (
                'id' => 1428,
                'product_id' => 3216,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            426 => 
            array (
                'id' => 1429,
                'product_id' => 64121,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            427 => 
            array (
                'id' => 1430,
                'product_id' => 3178,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            428 => 
            array (
                'id' => 1431,
                'product_id' => 3179,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            429 => 
            array (
                'id' => 1432,
                'product_id' => 3180,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            430 => 
            array (
                'id' => 1433,
                'product_id' => 3181,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            431 => 
            array (
                'id' => 1434,
                'product_id' => 3146,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            432 => 
            array (
                'id' => 1435,
                'product_id' => 3148,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            433 => 
            array (
                'id' => 1436,
                'product_id' => 3150,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            434 => 
            array (
                'id' => 1437,
                'product_id' => 3152,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            435 => 
            array (
                'id' => 1438,
                'product_id' => 3149,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            436 => 
            array (
                'id' => 1439,
                'product_id' => 3151,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            437 => 
            array (
                'id' => 1440,
                'product_id' => 3145,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            438 => 
            array (
                'id' => 1441,
                'product_id' => 3154,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            439 => 
            array (
                'id' => 1442,
                'product_id' => 3156,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            440 => 
            array (
                'id' => 1443,
                'product_id' => 3153,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            441 => 
            array (
                'id' => 1444,
                'product_id' => 3155,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            442 => 
            array (
                'id' => 1445,
                'product_id' => 3147,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            443 => 
            array (
                'id' => 1446,
                'product_id' => 3192,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            444 => 
            array (
                'id' => 1447,
                'product_id' => 3194,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            445 => 
            array (
                'id' => 1448,
                'product_id' => 3191,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            446 => 
            array (
                'id' => 1449,
                'product_id' => 3193,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            447 => 
            array (
                'id' => 1450,
                'product_id' => 3229,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            448 => 
            array (
                'id' => 1451,
                'product_id' => 3231,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            449 => 
            array (
                'id' => 1452,
                'product_id' => 3233,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            450 => 
            array (
                'id' => 1453,
                'product_id' => 3235,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            451 => 
            array (
                'id' => 1454,
                'product_id' => 3232,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            452 => 
            array (
                'id' => 1455,
                'product_id' => 3234,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            453 => 
            array (
                'id' => 1456,
                'product_id' => 3228,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            454 => 
            array (
                'id' => 1457,
                'product_id' => 3237,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            455 => 
            array (
                'id' => 1458,
                'product_id' => 3239,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            456 => 
            array (
                'id' => 1459,
                'product_id' => 3236,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            457 => 
            array (
                'id' => 1460,
                'product_id' => 3238,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            458 => 
            array (
                'id' => 1461,
                'product_id' => 3230,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            459 => 
            array (
                'id' => 1462,
                'product_id' => 3158,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            460 => 
            array (
                'id' => 1463,
                'product_id' => 64120,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            461 => 
            array (
                'id' => 1464,
                'product_id' => 3160,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            462 => 
            array (
                'id' => 1465,
                'product_id' => 3162,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            463 => 
            array (
                'id' => 1466,
                'product_id' => 3164,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            464 => 
            array (
                'id' => 1467,
                'product_id' => 3166,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            465 => 
            array (
                'id' => 1468,
                'product_id' => 3168,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            466 => 
            array (
                'id' => 1469,
                'product_id' => 3163,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            467 => 
            array (
                'id' => 1470,
                'product_id' => 3165,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            468 => 
            array (
                'id' => 1471,
                'product_id' => 3167,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            469 => 
            array (
                'id' => 1472,
                'product_id' => 3157,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            470 => 
            array (
                'id' => 1473,
                'product_id' => 64119,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            471 => 
            array (
                'id' => 1474,
                'product_id' => 3170,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            472 => 
            array (
                'id' => 1475,
                'product_id' => 3172,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            473 => 
            array (
                'id' => 1476,
                'product_id' => 3174,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            474 => 
            array (
                'id' => 1477,
                'product_id' => 3169,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            475 => 
            array (
                'id' => 1478,
                'product_id' => 3171,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            476 => 
            array (
                'id' => 1479,
                'product_id' => 3173,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            477 => 
            array (
                'id' => 1480,
                'product_id' => 3159,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            478 => 
            array (
                'id' => 1481,
                'product_id' => 3161,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            479 => 
            array (
                'id' => 1482,
                'product_id' => 3196,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            480 => 
            array (
                'id' => 1483,
                'product_id' => 3197,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            481 => 
            array (
                'id' => 1484,
                'product_id' => 3199,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            482 => 
            array (
                'id' => 1485,
                'product_id' => 3201,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            483 => 
            array (
                'id' => 1486,
                'product_id' => 3195,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            484 => 
            array (
                'id' => 1487,
                'product_id' => 64127,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            485 => 
            array (
                'id' => 1488,
                'product_id' => 3198,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            486 => 
            array (
                'id' => 1489,
                'product_id' => 3200,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            487 => 
            array (
                'id' => 1490,
                'product_id' => 3241,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            488 => 
            array (
                'id' => 1491,
                'product_id' => 3243,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            489 => 
            array (
                'id' => 1492,
                'product_id' => 3245,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            490 => 
            array (
                'id' => 1493,
                'product_id' => 3247,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            491 => 
            array (
                'id' => 1494,
                'product_id' => 3249,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            492 => 
            array (
                'id' => 1495,
                'product_id' => 3251,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            493 => 
            array (
                'id' => 1496,
                'product_id' => 3246,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            494 => 
            array (
                'id' => 1497,
                'product_id' => 3248,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            495 => 
            array (
                'id' => 1498,
                'product_id' => 3250,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            496 => 
            array (
                'id' => 1499,
                'product_id' => 3240,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            497 => 
            array (
                'id' => 1500,
                'product_id' => 3253,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            498 => 
            array (
                'id' => 1501,
                'product_id' => 3255,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            499 => 
            array (
                'id' => 1502,
                'product_id' => 3257,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
        ));
        \DB::table('product_pdfs')->insert(array (
            0 => 
            array (
                'id' => 1503,
                'product_id' => 3252,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            1 => 
            array (
                'id' => 1504,
                'product_id' => 3254,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            2 => 
            array (
                'id' => 1505,
                'product_id' => 3256,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            3 => 
            array (
                'id' => 1506,
                'product_id' => 3242,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            4 => 
            array (
                'id' => 1507,
                'product_id' => 3244,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            5 => 
            array (
                'id' => 1508,
                'product_id' => 3125,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            6 => 
            array (
                'id' => 1509,
                'product_id' => 3126,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            7 => 
            array (
                'id' => 1510,
                'product_id' => 3127,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            8 => 
            array (
                'id' => 1511,
                'product_id' => 3128,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            9 => 
            array (
                'id' => 1512,
                'product_id' => 3217,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            10 => 
            array (
                'id' => 1513,
                'product_id' => 3218,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            11 => 
            array (
                'id' => 1514,
                'product_id' => 3219,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            12 => 
            array (
                'id' => 1515,
                'product_id' => 3220,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            13 => 
            array (
                'id' => 1516,
                'product_id' => 3182,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            14 => 
            array (
                'id' => 1517,
                'product_id' => 3183,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            15 => 
            array (
                'id' => 1518,
                'product_id' => 3184,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            16 => 
            array (
                'id' => 1519,
                'product_id' => 3185,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            17 => 
            array (
                'id' => 1520,
                'product_id' => 3129,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            18 => 
            array (
                'id' => 1521,
                'product_id' => 3130,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            19 => 
            array (
                'id' => 1522,
                'product_id' => 3131,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            20 => 
            array (
                'id' => 1523,
                'product_id' => 3132,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            21 => 
            array (
                'id' => 1524,
                'product_id' => 3133,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            22 => 
            array (
                'id' => 1525,
                'product_id' => 3221,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            23 => 
            array (
                'id' => 1526,
                'product_id' => 3222,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            24 => 
            array (
                'id' => 1527,
                'product_id' => 3223,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            25 => 
            array (
                'id' => 1528,
                'product_id' => 3224,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            26 => 
            array (
                'id' => 1529,
                'product_id' => 64122,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            27 => 
            array (
                'id' => 1530,
                'product_id' => 64123,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            28 => 
            array (
                'id' => 1531,
                'product_id' => 64124,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            29 => 
            array (
                'id' => 1532,
                'product_id' => 64125,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            30 => 
            array (
                'id' => 1533,
                'product_id' => 64126,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            31 => 
            array (
                'id' => 1534,
                'product_id' => 3186,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            32 => 
            array (
                'id' => 1535,
                'product_id' => 3187,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            33 => 
            array (
                'id' => 1536,
                'product_id' => 3188,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            34 => 
            array (
                'id' => 1537,
                'product_id' => 3189,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-24b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            35 => 
            array (
                'id' => 1538,
                'product_id' => 2215,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            36 => 
            array (
                'id' => 1539,
                'product_id' => 2232,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            37 => 
            array (
                'id' => 1540,
                'product_id' => 2233,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            38 => 
            array (
                'id' => 1541,
                'product_id' => 2234,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            39 => 
            array (
                'id' => 1542,
                'product_id' => 2223,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            40 => 
            array (
                'id' => 1543,
                'product_id' => 2224,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            41 => 
            array (
                'id' => 1544,
                'product_id' => 2206,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            42 => 
            array (
                'id' => 1545,
                'product_id' => 2207,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            43 => 
            array (
                'id' => 1546,
                'product_id' => 2225,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            44 => 
            array (
                'id' => 1547,
                'product_id' => 2226,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            45 => 
            array (
                'id' => 1548,
                'product_id' => 2227,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            46 => 
            array (
                'id' => 1549,
                'product_id' => 2208,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            47 => 
            array (
                'id' => 1550,
                'product_id' => 2209,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            48 => 
            array (
                'id' => 1551,
                'product_id' => 2210,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            49 => 
            array (
                'id' => 1552,
                'product_id' => 2218,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            50 => 
            array (
                'id' => 1553,
                'product_id' => 2220,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            51 => 
            array (
                'id' => 1554,
                'product_id' => 2222,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            52 => 
            array (
                'id' => 1555,
                'product_id' => 2216,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            53 => 
            array (
                'id' => 1556,
                'product_id' => 2217,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            54 => 
            array (
                'id' => 1557,
                'product_id' => 2219,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            55 => 
            array (
                'id' => 1558,
                'product_id' => 2221,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            56 => 
            array (
                'id' => 1559,
                'product_id' => 2237,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            57 => 
            array (
                'id' => 1560,
                'product_id' => 2239,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            58 => 
            array (
                'id' => 1561,
                'product_id' => 2241,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            59 => 
            array (
                'id' => 1562,
                'product_id' => 2244,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            60 => 
            array (
                'id' => 1563,
                'product_id' => 2246,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            61 => 
            array (
                'id' => 1564,
                'product_id' => 2248,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            62 => 
            array (
                'id' => 1565,
                'product_id' => 2242,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            63 => 
            array (
                'id' => 1566,
                'product_id' => 2243,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            64 => 
            array (
                'id' => 1567,
                'product_id' => 2245,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            65 => 
            array (
                'id' => 1568,
                'product_id' => 2247,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            66 => 
            array (
                'id' => 1569,
                'product_id' => 2235,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            67 => 
            array (
                'id' => 1570,
                'product_id' => 2236,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            68 => 
            array (
                'id' => 1571,
                'product_id' => 2251,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            69 => 
            array (
                'id' => 1572,
                'product_id' => 2253,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            70 => 
            array (
                'id' => 1573,
                'product_id' => 2255,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            71 => 
            array (
                'id' => 1574,
                'product_id' => 2249,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            72 => 
            array (
                'id' => 1575,
                'product_id' => 2250,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            73 => 
            array (
                'id' => 1576,
                'product_id' => 2252,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            74 => 
            array (
                'id' => 1577,
                'product_id' => 2254,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            75 => 
            array (
                'id' => 1578,
                'product_id' => 2238,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            76 => 
            array (
                'id' => 1579,
                'product_id' => 2240,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            77 => 
            array (
                'id' => 1580,
                'product_id' => 2228,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            78 => 
            array (
                'id' => 1581,
                'product_id' => 2229,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            79 => 
            array (
                'id' => 1582,
                'product_id' => 2230,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            80 => 
            array (
                'id' => 1583,
                'product_id' => 2231,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            81 => 
            array (
                'id' => 1584,
                'product_id' => 2211,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            82 => 
            array (
                'id' => 1585,
                'product_id' => 2212,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            83 => 
            array (
                'id' => 1586,
                'product_id' => 2213,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            84 => 
            array (
                'id' => 1587,
                'product_id' => 2214,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            85 => 
            array (
                'id' => 1588,
                'product_id' => 3370,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            86 => 
            array (
                'id' => 1589,
                'product_id' => 3371,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            87 => 
            array (
                'id' => 1590,
                'product_id' => 3372,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            88 => 
            array (
                'id' => 1591,
                'product_id' => 3409,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            89 => 
            array (
                'id' => 1592,
                'product_id' => 3419,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            90 => 
            array (
                'id' => 1593,
                'product_id' => 3420,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            91 => 
            array (
                'id' => 1594,
                'product_id' => 64133,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            92 => 
            array (
                'id' => 1595,
                'product_id' => 3421,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            93 => 
            array (
                'id' => 1596,
                'product_id' => 3422,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            94 => 
            array (
                'id' => 1597,
                'product_id' => 3423,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            95 => 
            array (
                'id' => 1598,
                'product_id' => 3360,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            96 => 
            array (
                'id' => 1599,
                'product_id' => 64128,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            97 => 
            array (
                'id' => 1600,
                'product_id' => 64129,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            98 => 
            array (
                'id' => 1601,
                'product_id' => 3361,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            99 => 
            array (
                'id' => 1602,
                'product_id' => 3362,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            100 => 
            array (
                'id' => 1603,
                'product_id' => 3363,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            101 => 
            array (
                'id' => 1604,
                'product_id' => 3397,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            102 => 
            array (
                'id' => 1605,
                'product_id' => 3398,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            103 => 
            array (
                'id' => 1606,
                'product_id' => 3399,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            104 => 
            array (
                'id' => 1607,
                'product_id' => 3400,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            105 => 
            array (
                'id' => 1608,
                'product_id' => 3401,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            106 => 
            array (
                'id' => 1609,
                'product_id' => 3402,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            107 => 
            array (
                'id' => 1610,
                'product_id' => 3374,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            108 => 
            array (
                'id' => 1611,
                'product_id' => 3376,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            109 => 
            array (
                'id' => 1612,
                'product_id' => 3378,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            110 => 
            array (
                'id' => 1613,
                'product_id' => 3380,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            111 => 
            array (
                'id' => 1614,
                'product_id' => 3382,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            112 => 
            array (
                'id' => 1615,
                'product_id' => 3384,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            113 => 
            array (
                'id' => 1616,
                'product_id' => 3386,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            114 => 
            array (
                'id' => 1617,
                'product_id' => 3388,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            115 => 
            array (
                'id' => 1618,
                'product_id' => 3381,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            116 => 
            array (
                'id' => 1619,
                'product_id' => 3383,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            117 => 
            array (
                'id' => 1620,
                'product_id' => 3385,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            118 => 
            array (
                'id' => 1621,
                'product_id' => 3387,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            119 => 
            array (
                'id' => 1622,
                'product_id' => 3373,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            120 => 
            array (
                'id' => 1623,
                'product_id' => 3375,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            121 => 
            array (
                'id' => 1624,
                'product_id' => 64130,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            122 => 
            array (
                'id' => 1625,
                'product_id' => 3390,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            123 => 
            array (
                'id' => 1626,
                'product_id' => 3392,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            124 => 
            array (
                'id' => 1627,
                'product_id' => 3394,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            125 => 
            array (
                'id' => 1628,
                'product_id' => 3396,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            126 => 
            array (
                'id' => 1629,
                'product_id' => 3389,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            127 => 
            array (
                'id' => 1630,
                'product_id' => 3391,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            128 => 
            array (
                'id' => 1631,
                'product_id' => 3393,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            129 => 
            array (
                'id' => 1632,
                'product_id' => 3395,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            130 => 
            array (
                'id' => 1633,
                'product_id' => 3377,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            131 => 
            array (
                'id' => 1634,
                'product_id' => 3379,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            132 => 
            array (
                'id' => 1635,
                'product_id' => 3411,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            133 => 
            array (
                'id' => 1636,
                'product_id' => 3413,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            134 => 
            array (
                'id' => 1637,
                'product_id' => 3415,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            135 => 
            array (
                'id' => 1638,
                'product_id' => 3417,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            136 => 
            array (
                'id' => 1639,
                'product_id' => 3418,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            137 => 
            array (
                'id' => 1640,
                'product_id' => 3410,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            138 => 
            array (
                'id' => 1641,
                'product_id' => 3412,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            139 => 
            array (
                'id' => 1642,
                'product_id' => 64131,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            140 => 
            array (
                'id' => 1643,
                'product_id' => 3414,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            141 => 
            array (
                'id' => 1644,
                'product_id' => 3416,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            142 => 
            array (
                'id' => 1645,
                'product_id' => 64132,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            143 => 
            array (
                'id' => 1646,
                'product_id' => 3364,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            144 => 
            array (
                'id' => 1647,
                'product_id' => 3365,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            145 => 
            array (
                'id' => 1648,
                'product_id' => 3366,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            146 => 
            array (
                'id' => 1649,
                'product_id' => 3367,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            147 => 
            array (
                'id' => 1650,
                'product_id' => 3368,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            148 => 
            array (
                'id' => 1651,
                'product_id' => 3369,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            149 => 
            array (
                'id' => 1652,
                'product_id' => 3403,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            150 => 
            array (
                'id' => 1653,
                'product_id' => 3404,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            151 => 
            array (
                'id' => 1654,
                'product_id' => 3405,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            152 => 
            array (
                'id' => 1655,
                'product_id' => 3406,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            153 => 
            array (
                'id' => 1656,
                'product_id' => 3407,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            154 => 
            array (
                'id' => 1657,
                'product_id' => 3408,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-32b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            155 => 
            array (
                'id' => 1658,
                'product_id' => 2000,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            156 => 
            array (
                'id' => 1659,
                'product_id' => 2002,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            157 => 
            array (
                'id' => 1660,
                'product_id' => 2001,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            158 => 
            array (
                'id' => 1661,
                'product_id' => 2003,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            159 => 
            array (
                'id' => 1662,
                'product_id' => 2007,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            160 => 
            array (
                'id' => 1663,
                'product_id' => 2008,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            161 => 
            array (
                'id' => 1664,
                'product_id' => 61961,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            162 => 
            array (
                'id' => 1665,
                'product_id' => 64140,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            163 => 
            array (
                'id' => 1666,
                'product_id' => 64141,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            164 => 
            array (
                'id' => 1667,
                'product_id' => 64137,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            165 => 
            array (
                'id' => 1668,
                'product_id' => 64139,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            166 => 
            array (
                'id' => 1669,
                'product_id' => 64136,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            167 => 
            array (
                'id' => 1670,
                'product_id' => 64138,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            168 => 
            array (
                'id' => 1671,
                'product_id' => 62933,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            169 => 
            array (
                'id' => 1672,
                'product_id' => 62932,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            170 => 
            array (
                'id' => 1673,
                'product_id' => 62936,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            171 => 
            array (
                'id' => 1674,
                'product_id' => 62934,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            172 => 
            array (
                'id' => 1675,
                'product_id' => 62937,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            173 => 
            array (
                'id' => 1676,
                'product_id' => 62935,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            174 => 
            array (
                'id' => 1677,
                'product_id' => 1995,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            175 => 
            array (
                'id' => 1678,
                'product_id' => 1184,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            176 => 
            array (
                'id' => 1679,
                'product_id' => 2004,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            177 => 
            array (
                'id' => 1680,
                'product_id' => 2005,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            178 => 
            array (
                'id' => 1681,
                'product_id' => 2006,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            179 => 
            array (
                'id' => 1682,
                'product_id' => 1996,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            180 => 
            array (
                'id' => 1683,
                'product_id' => 1997,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            181 => 
            array (
                'id' => 1684,
                'product_id' => 1998,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            182 => 
            array (
                'id' => 1685,
                'product_id' => 1999,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            183 => 
            array (
                'id' => 1686,
                'product_id' => 64108,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            184 => 
            array (
                'id' => 1687,
                'product_id' => 64109,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            185 => 
            array (
                'id' => 1688,
                'product_id' => 64110,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            186 => 
            array (
                'id' => 1689,
                'product_id' => 2024,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            187 => 
            array (
                'id' => 1690,
                'product_id' => 2025,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            188 => 
            array (
                'id' => 1691,
                'product_id' => 2028,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            189 => 
            array (
                'id' => 1692,
                'product_id' => 2029,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            190 => 
            array (
                'id' => 1693,
                'product_id' => 2020,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            191 => 
            array (
                'id' => 1694,
                'product_id' => 2021,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            192 => 
            array (
                'id' => 1695,
                'product_id' => 2026,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            193 => 
            array (
                'id' => 1696,
                'product_id' => 2027,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            194 => 
            array (
                'id' => 1697,
                'product_id' => 2022,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            195 => 
            array (
                'id' => 1698,
                'product_id' => 2023,
                'pdf' => 'plastikovye-kozhuhi-tiporazmer-3a.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            196 => 
            array (
                'id' => 1699,
                'product_id' => 3437,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            197 => 
            array (
                'id' => 1700,
                'product_id' => 3438,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            198 => 
            array (
                'id' => 1701,
                'product_id' => 3439,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            199 => 
            array (
                'id' => 1702,
                'product_id' => 3425,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            200 => 
            array (
                'id' => 1703,
                'product_id' => 3426,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            201 => 
            array (
                'id' => 1704,
                'product_id' => 3427,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            202 => 
            array (
                'id' => 1705,
                'product_id' => 3428,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            203 => 
            array (
                'id' => 1706,
                'product_id' => 3429,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            204 => 
            array (
                'id' => 1707,
                'product_id' => 3430,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            205 => 
            array (
                'id' => 1708,
                'product_id' => 3441,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            206 => 
            array (
                'id' => 1709,
                'product_id' => 3443,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            207 => 
            array (
                'id' => 1710,
                'product_id' => 64135,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            208 => 
            array (
                'id' => 1711,
                'product_id' => 3445,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            209 => 
            array (
                'id' => 1712,
                'product_id' => 3447,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            210 => 
            array (
                'id' => 1713,
                'product_id' => 3449,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            211 => 
            array (
                'id' => 1714,
                'product_id' => 3451,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            212 => 
            array (
                'id' => 1715,
                'product_id' => 3453,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            213 => 
            array (
                'id' => 1716,
                'product_id' => 3455,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            214 => 
            array (
                'id' => 1717,
                'product_id' => 3448,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            215 => 
            array (
                'id' => 1718,
                'product_id' => 3450,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            216 => 
            array (
                'id' => 1719,
                'product_id' => 3452,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            217 => 
            array (
                'id' => 1720,
                'product_id' => 3454,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            218 => 
            array (
                'id' => 1721,
                'product_id' => 3440,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            219 => 
            array (
                'id' => 1722,
                'product_id' => 3442,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            220 => 
            array (
                'id' => 1723,
                'product_id' => 64134,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            221 => 
            array (
                'id' => 1724,
                'product_id' => 3457,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            222 => 
            array (
                'id' => 1725,
                'product_id' => 3459,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            223 => 
            array (
                'id' => 1726,
                'product_id' => 3461,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            224 => 
            array (
                'id' => 1727,
                'product_id' => 3463,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            225 => 
            array (
                'id' => 1728,
                'product_id' => 3456,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            226 => 
            array (
                'id' => 1729,
                'product_id' => 3458,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            227 => 
            array (
                'id' => 1730,
                'product_id' => 3460,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            228 => 
            array (
                'id' => 1731,
                'product_id' => 3462,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            229 => 
            array (
                'id' => 1732,
                'product_id' => 3444,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            230 => 
            array (
                'id' => 1733,
                'product_id' => 3446,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            231 => 
            array (
                'id' => 1734,
                'product_id' => 3431,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            232 => 
            array (
                'id' => 1735,
                'product_id' => 3432,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            233 => 
            array (
                'id' => 1736,
                'product_id' => 3433,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            234 => 
            array (
                'id' => 1737,
                'product_id' => 3434,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            235 => 
            array (
                'id' => 1738,
                'product_id' => 3435,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            236 => 
            array (
                'id' => 1739,
                'product_id' => 3436,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-48b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            237 => 
            array (
                'id' => 1740,
                'product_id' => 62150,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            238 => 
            array (
                'id' => 1741,
                'product_id' => 2346,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            239 => 
            array (
                'id' => 1742,
                'product_id' => 2347,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            240 => 
            array (
                'id' => 1743,
                'product_id' => 2348,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            241 => 
            array (
                'id' => 1744,
                'product_id' => 2340,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            242 => 
            array (
                'id' => 1745,
                'product_id' => 2341,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            243 => 
            array (
                'id' => 1746,
                'product_id' => 2342,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            244 => 
            array (
                'id' => 1747,
                'product_id' => 2343,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            245 => 
            array (
                'id' => 1748,
                'product_id' => 2344,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            246 => 
            array (
                'id' => 1749,
                'product_id' => 2345,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            247 => 
            array (
                'id' => 1750,
                'product_id' => 8373,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            248 => 
            array (
                'id' => 1751,
                'product_id' => 8372,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            249 => 
            array (
                'id' => 1752,
                'product_id' => 8371,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            250 => 
            array (
                'id' => 1753,
                'product_id' => 8102,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            251 => 
            array (
                'id' => 1754,
                'product_id' => 8370,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            252 => 
            array (
                'id' => 1755,
                'product_id' => 64099,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            253 => 
            array (
                'id' => 1756,
                'product_id' => 2325,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            254 => 
            array (
                'id' => 1757,
                'product_id' => 2326,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            255 => 
            array (
                'id' => 1758,
                'product_id' => 2327,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            256 => 
            array (
                'id' => 1759,
                'product_id' => 2328,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            257 => 
            array (
                'id' => 1760,
                'product_id' => 2329,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            258 => 
            array (
                'id' => 1761,
                'product_id' => 2330,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            259 => 
            array (
                'id' => 1762,
                'product_id' => 2331,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            260 => 
            array (
                'id' => 1763,
                'product_id' => 2332,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            261 => 
            array (
                'id' => 1764,
                'product_id' => 2350,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            262 => 
            array (
                'id' => 1765,
                'product_id' => 2352,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            263 => 
            array (
                'id' => 1766,
                'product_id' => 2354,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            264 => 
            array (
                'id' => 1767,
                'product_id' => 2356,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            265 => 
            array (
                'id' => 1768,
                'product_id' => 2358,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            266 => 
            array (
                'id' => 1769,
                'product_id' => 2360,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            267 => 
            array (
                'id' => 1770,
                'product_id' => 2355,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            268 => 
            array (
                'id' => 1771,
                'product_id' => 2357,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            269 => 
            array (
                'id' => 1772,
                'product_id' => 2359,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            270 => 
            array (
                'id' => 1773,
                'product_id' => 2349,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            271 => 
            array (
                'id' => 1774,
                'product_id' => 2351,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            272 => 
            array (
                'id' => 1775,
                'product_id' => 2362,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            273 => 
            array (
                'id' => 1776,
                'product_id' => 2364,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            274 => 
            array (
                'id' => 1777,
                'product_id' => 2366,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            275 => 
            array (
                'id' => 1778,
                'product_id' => 2361,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            276 => 
            array (
                'id' => 1779,
                'product_id' => 2363,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            277 => 
            array (
                'id' => 1780,
                'product_id' => 2365,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            278 => 
            array (
                'id' => 1781,
                'product_id' => 2353,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            279 => 
            array (
                'id' => 1782,
                'product_id' => 2368,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            280 => 
            array (
                'id' => 1783,
                'product_id' => 2370,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            281 => 
            array (
                'id' => 1784,
                'product_id' => 2372,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            282 => 
            array (
                'id' => 1785,
                'product_id' => 2374,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            283 => 
            array (
                'id' => 1786,
                'product_id' => 2376,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            284 => 
            array (
                'id' => 1787,
                'product_id' => 2378,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            285 => 
            array (
                'id' => 1788,
                'product_id' => 2380,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            286 => 
            array (
                'id' => 1789,
                'product_id' => 2382,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            287 => 
            array (
                'id' => 1790,
                'product_id' => 2375,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            288 => 
            array (
                'id' => 1791,
                'product_id' => 2377,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            289 => 
            array (
                'id' => 1792,
                'product_id' => 2379,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            290 => 
            array (
                'id' => 1793,
                'product_id' => 2381,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            291 => 
            array (
                'id' => 1794,
                'product_id' => 2367,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            292 => 
            array (
                'id' => 1795,
                'product_id' => 2369,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            293 => 
            array (
                'id' => 1796,
                'product_id' => 2384,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            294 => 
            array (
                'id' => 1797,
                'product_id' => 2386,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            295 => 
            array (
                'id' => 1798,
                'product_id' => 2388,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            296 => 
            array (
                'id' => 1799,
                'product_id' => 2390,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            297 => 
            array (
                'id' => 1800,
                'product_id' => 2383,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            298 => 
            array (
                'id' => 1801,
                'product_id' => 2385,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            299 => 
            array (
                'id' => 1802,
                'product_id' => 2387,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            300 => 
            array (
                'id' => 1803,
                'product_id' => 2389,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            301 => 
            array (
                'id' => 1804,
                'product_id' => 2371,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            302 => 
            array (
                'id' => 1805,
                'product_id' => 2373,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            303 => 
            array (
                'id' => 1806,
                'product_id' => 2333,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            304 => 
            array (
                'id' => 1807,
                'product_id' => 61968,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            305 => 
            array (
                'id' => 1808,
                'product_id' => 2334,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            306 => 
            array (
                'id' => 1809,
                'product_id' => 2335,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            307 => 
            array (
                'id' => 1810,
                'product_id' => 64111,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            308 => 
            array (
                'id' => 1811,
                'product_id' => 2336,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            309 => 
            array (
                'id' => 1812,
                'product_id' => 2337,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            310 => 
            array (
                'id' => 1813,
                'product_id' => 64112,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            311 => 
            array (
                'id' => 1814,
                'product_id' => 2338,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            312 => 
            array (
                'id' => 1815,
                'product_id' => 2339,
                'pdf' => 'metallicheskie-kozhuhi-tiporazmer-6b.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            313 => 
            array (
                'id' => 1816,
                'product_id' => 62147,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            314 => 
            array (
                'id' => 1817,
                'product_id' => 62148,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            315 => 
            array (
                'id' => 1818,
                'product_id' => 62149,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            316 => 
            array (
                'id' => 1819,
                'product_id' => 62141,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            317 => 
            array (
                'id' => 1820,
                'product_id' => 62061,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            318 => 
            array (
                'id' => 1821,
                'product_id' => 62064,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            319 => 
            array (
                'id' => 1822,
                'product_id' => 62065,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            320 => 
            array (
                'id' => 1823,
                'product_id' => 3698,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            321 => 
            array (
                'id' => 1824,
                'product_id' => 3699,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            322 => 
            array (
                'id' => 1825,
                'product_id' => 3703,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            323 => 
            array (
                'id' => 1826,
                'product_id' => 3704,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            324 => 
            array (
                'id' => 1827,
                'product_id' => 3702,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            325 => 
            array (
                'id' => 1828,
                'product_id' => 3701,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            326 => 
            array (
                'id' => 1829,
                'product_id' => 3705,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            327 => 
            array (
                'id' => 1830,
                'product_id' => 3700,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            328 => 
            array (
                'id' => 1831,
                'product_id' => 3697,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            329 => 
            array (
                'id' => 1832,
                'product_id' => 64142,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            330 => 
            array (
                'id' => 1833,
                'product_id' => 3628,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            331 => 
            array (
                'id' => 1834,
                'product_id' => 62566,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            332 => 
            array (
                'id' => 1835,
                'product_id' => 3629,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            333 => 
            array (
                'id' => 1836,
                'product_id' => 3630,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            334 => 
            array (
                'id' => 1837,
                'product_id' => 3631,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            335 => 
            array (
                'id' => 1838,
                'product_id' => 62567,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            336 => 
            array (
                'id' => 1839,
                'product_id' => 3632,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            337 => 
            array (
                'id' => 1840,
                'product_id' => 3633,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            338 => 
            array (
                'id' => 1841,
                'product_id' => 3634,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            339 => 
            array (
                'id' => 1842,
                'product_id' => 62568,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            340 => 
            array (
                'id' => 1843,
                'product_id' => 3635,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            341 => 
            array (
                'id' => 1844,
                'product_id' => 3637,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            342 => 
            array (
                'id' => 1845,
                'product_id' => 3636,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            343 => 
            array (
                'id' => 1846,
                'product_id' => 62569,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            344 => 
            array (
                'id' => 1847,
                'product_id' => 3638,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            345 => 
            array (
                'id' => 1848,
                'product_id' => 3639,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            346 => 
            array (
                'id' => 1849,
                'product_id' => 62570,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            347 => 
            array (
                'id' => 1850,
                'product_id' => 3640,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            348 => 
            array (
                'id' => 1851,
                'product_id' => 3641,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            349 => 
            array (
                'id' => 1852,
                'product_id' => 62571,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            350 => 
            array (
                'id' => 1853,
                'product_id' => 3642,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            351 => 
            array (
                'id' => 1854,
                'product_id' => 3643,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            352 => 
            array (
                'id' => 1855,
                'product_id' => 62572,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            353 => 
            array (
                'id' => 1856,
                'product_id' => 3644,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            354 => 
            array (
                'id' => 1857,
                'product_id' => 62573,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            355 => 
            array (
                'id' => 1858,
                'product_id' => 3620,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            356 => 
            array (
                'id' => 1859,
                'product_id' => 62558,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            357 => 
            array (
                'id' => 1860,
                'product_id' => 3621,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            358 => 
            array (
                'id' => 1861,
                'product_id' => 62559,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            359 => 
            array (
                'id' => 1862,
                'product_id' => 3622,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            360 => 
            array (
                'id' => 1863,
                'product_id' => 62560,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            361 => 
            array (
                'id' => 1864,
                'product_id' => 3623,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            362 => 
            array (
                'id' => 1865,
                'product_id' => 62561,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            363 => 
            array (
                'id' => 1866,
                'product_id' => 3624,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            364 => 
            array (
                'id' => 1867,
                'product_id' => 62562,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            365 => 
            array (
                'id' => 1868,
                'product_id' => 3625,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            366 => 
            array (
                'id' => 1869,
                'product_id' => 62563,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            367 => 
            array (
                'id' => 1870,
                'product_id' => 3626,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            368 => 
            array (
                'id' => 1871,
                'product_id' => 62564,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            369 => 
            array (
                'id' => 1872,
                'product_id' => 3627,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            370 => 
            array (
                'id' => 1873,
                'product_id' => 62565,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            371 => 
            array (
                'id' => 1874,
                'product_id' => 3618,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            372 => 
            array (
                'id' => 1875,
                'product_id' => 62550,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            373 => 
            array (
                'id' => 1876,
                'product_id' => 3619,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            374 => 
            array (
                'id' => 1877,
                'product_id' => 62557,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            375 => 
            array (
                'id' => 1878,
                'product_id' => 62259,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            376 => 
            array (
                'id' => 1879,
                'product_id' => 62260,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            377 => 
            array (
                'id' => 1880,
                'product_id' => 62261,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            378 => 
            array (
                'id' => 1881,
                'product_id' => 62262,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            379 => 
            array (
                'id' => 1882,
                'product_id' => 62263,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            380 => 
            array (
                'id' => 1883,
                'product_id' => 62264,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            381 => 
            array (
                'id' => 1884,
                'product_id' => 62265,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            382 => 
            array (
                'id' => 1885,
                'product_id' => 62266,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            383 => 
            array (
                'id' => 1886,
                'product_id' => 62267,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            384 => 
            array (
                'id' => 1887,
                'product_id' => 62268,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            385 => 
            array (
                'id' => 1888,
                'product_id' => 62269,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            386 => 
            array (
                'id' => 1889,
                'product_id' => 62270,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            387 => 
            array (
                'id' => 1890,
                'product_id' => 62271,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            388 => 
            array (
                'id' => 1891,
                'product_id' => 62272,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            389 => 
            array (
                'id' => 1892,
                'product_id' => 62273,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            390 => 
            array (
                'id' => 1893,
                'product_id' => 62274,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            391 => 
            array (
                'id' => 1894,
                'product_id' => 62275,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            392 => 
            array (
                'id' => 1895,
                'product_id' => 62252,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            393 => 
            array (
                'id' => 1896,
                'product_id' => 62253,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            394 => 
            array (
                'id' => 1897,
                'product_id' => 62254,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            395 => 
            array (
                'id' => 1898,
                'product_id' => 62255,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            396 => 
            array (
                'id' => 1899,
                'product_id' => 62256,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            397 => 
            array (
                'id' => 1900,
                'product_id' => 62257,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            398 => 
            array (
                'id' => 1901,
                'product_id' => 62258,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            399 => 
            array (
                'id' => 1902,
                'product_id' => 62246,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            400 => 
            array (
                'id' => 1903,
                'product_id' => 62251,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            401 => 
            array (
                'id' => 1904,
                'product_id' => 62338,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            402 => 
            array (
                'id' => 1905,
                'product_id' => 62340,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            403 => 
            array (
                'id' => 1906,
                'product_id' => 62339,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            404 => 
            array (
                'id' => 1907,
                'product_id' => 62341,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            405 => 
            array (
                'id' => 1908,
                'product_id' => 62344,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            406 => 
            array (
                'id' => 1909,
                'product_id' => 62343,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            407 => 
            array (
                'id' => 1910,
                'product_id' => 62342,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            408 => 
            array (
                'id' => 1911,
                'product_id' => 62345,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            409 => 
            array (
                'id' => 1912,
                'product_id' => 62347,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            410 => 
            array (
                'id' => 1913,
                'product_id' => 62346,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            411 => 
            array (
                'id' => 1914,
                'product_id' => 62333,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            412 => 
            array (
                'id' => 1915,
                'product_id' => 62334,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            413 => 
            array (
                'id' => 1916,
                'product_id' => 62335,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            414 => 
            array (
                'id' => 1917,
                'product_id' => 62332,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            415 => 
            array (
                'id' => 1918,
                'product_id' => 62331,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            416 => 
            array (
                'id' => 1919,
                'product_id' => 62336,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            417 => 
            array (
                'id' => 1920,
                'product_id' => 62337,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            418 => 
            array (
                'id' => 1921,
                'product_id' => 62326,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            419 => 
            array (
                'id' => 1922,
                'product_id' => 3675,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            420 => 
            array (
                'id' => 1923,
                'product_id' => 62611,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            421 => 
            array (
                'id' => 1924,
                'product_id' => 3665,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            422 => 
            array (
                'id' => 1925,
                'product_id' => 62600,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            423 => 
            array (
                'id' => 1926,
                'product_id' => 3676,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            424 => 
            array (
                'id' => 1927,
                'product_id' => 62612,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            425 => 
            array (
                'id' => 1928,
                'product_id' => 3666,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            426 => 
            array (
                'id' => 1929,
                'product_id' => 62601,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            427 => 
            array (
                'id' => 1930,
                'product_id' => 62613,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            428 => 
            array (
                'id' => 1931,
                'product_id' => 62602,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            429 => 
            array (
                'id' => 1932,
                'product_id' => 3677,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            430 => 
            array (
                'id' => 1933,
                'product_id' => 3678,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            431 => 
            array (
                'id' => 1934,
                'product_id' => 62614,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            432 => 
            array (
                'id' => 1935,
                'product_id' => 3667,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            433 => 
            array (
                'id' => 1936,
                'product_id' => 3668,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            434 => 
            array (
                'id' => 1937,
                'product_id' => 62603,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            435 => 
            array (
                'id' => 1938,
                'product_id' => 3679,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            436 => 
            array (
                'id' => 1939,
                'product_id' => 62615,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            437 => 
            array (
                'id' => 1940,
                'product_id' => 3669,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            438 => 
            array (
                'id' => 1941,
                'product_id' => 62604,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            439 => 
            array (
                'id' => 1942,
                'product_id' => 62616,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            440 => 
            array (
                'id' => 1943,
                'product_id' => 62605,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            441 => 
            array (
                'id' => 1944,
                'product_id' => 3680,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            442 => 
            array (
                'id' => 1945,
                'product_id' => 62617,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            443 => 
            array (
                'id' => 1946,
                'product_id' => 3670,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            444 => 
            array (
                'id' => 1947,
                'product_id' => 62606,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            445 => 
            array (
                'id' => 1948,
                'product_id' => 3681,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            446 => 
            array (
                'id' => 1949,
                'product_id' => 62618,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            447 => 
            array (
                'id' => 1950,
                'product_id' => 3671,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            448 => 
            array (
                'id' => 1951,
                'product_id' => 62607,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            449 => 
            array (
                'id' => 1952,
                'product_id' => 3682,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            450 => 
            array (
                'id' => 1953,
                'product_id' => 62619,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            451 => 
            array (
                'id' => 1954,
                'product_id' => 3672,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            452 => 
            array (
                'id' => 1955,
                'product_id' => 62608,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            453 => 
            array (
                'id' => 1956,
                'product_id' => 3683,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            454 => 
            array (
                'id' => 1957,
                'product_id' => 62620,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            455 => 
            array (
                'id' => 1958,
                'product_id' => 3673,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            456 => 
            array (
                'id' => 1959,
                'product_id' => 62609,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            457 => 
            array (
                'id' => 1960,
                'product_id' => 3684,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            458 => 
            array (
                'id' => 1961,
                'product_id' => 62621,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            459 => 
            array (
                'id' => 1962,
                'product_id' => 3674,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            460 => 
            array (
                'id' => 1963,
                'product_id' => 62610,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            461 => 
            array (
                'id' => 1964,
                'product_id' => 3657,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            462 => 
            array (
                'id' => 1965,
                'product_id' => 62592,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            463 => 
            array (
                'id' => 1966,
                'product_id' => 3647,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            464 => 
            array (
                'id' => 1967,
                'product_id' => 62582,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            465 => 
            array (
                'id' => 1968,
                'product_id' => 3658,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            466 => 
            array (
                'id' => 1969,
                'product_id' => 62593,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            467 => 
            array (
                'id' => 1970,
                'product_id' => 3648,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            468 => 
            array (
                'id' => 1971,
                'product_id' => 62583,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            469 => 
            array (
                'id' => 1972,
                'product_id' => 3659,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            470 => 
            array (
                'id' => 1973,
                'product_id' => 62594,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            471 => 
            array (
                'id' => 1974,
                'product_id' => 3649,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            472 => 
            array (
                'id' => 1975,
                'product_id' => 62584,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            473 => 
            array (
                'id' => 1976,
                'product_id' => 3660,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            474 => 
            array (
                'id' => 1977,
                'product_id' => 62595,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            475 => 
            array (
                'id' => 1978,
                'product_id' => 3650,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            476 => 
            array (
                'id' => 1979,
                'product_id' => 62585,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            477 => 
            array (
                'id' => 1980,
                'product_id' => 3661,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            478 => 
            array (
                'id' => 1981,
                'product_id' => 62596,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            479 => 
            array (
                'id' => 1982,
                'product_id' => 3651,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            480 => 
            array (
                'id' => 1983,
                'product_id' => 62586,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            481 => 
            array (
                'id' => 1984,
                'product_id' => 3662,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            482 => 
            array (
                'id' => 1985,
                'product_id' => 62597,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            483 => 
            array (
                'id' => 1986,
                'product_id' => 3652,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            484 => 
            array (
                'id' => 1987,
                'product_id' => 62587,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            485 => 
            array (
                'id' => 1988,
                'product_id' => 3663,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            486 => 
            array (
                'id' => 1989,
                'product_id' => 62598,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            487 => 
            array (
                'id' => 1990,
                'product_id' => 3653,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            488 => 
            array (
                'id' => 1991,
                'product_id' => 62588,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            489 => 
            array (
                'id' => 1992,
                'product_id' => 3664,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            490 => 
            array (
                'id' => 1993,
                'product_id' => 62599,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            491 => 
            array (
                'id' => 1994,
                'product_id' => 3654,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            492 => 
            array (
                'id' => 1995,
                'product_id' => 62589,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            493 => 
            array (
                'id' => 1996,
                'product_id' => 3655,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            494 => 
            array (
                'id' => 1997,
                'product_id' => 62590,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            495 => 
            array (
                'id' => 1998,
                'product_id' => 3645,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            496 => 
            array (
                'id' => 1999,
                'product_id' => 62574,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            497 => 
            array (
                'id' => 2000,
                'product_id' => 3656,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            498 => 
            array (
                'id' => 2001,
                'product_id' => 62591,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            499 => 
            array (
                'id' => 2002,
                'product_id' => 3646,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
        ));
        \DB::table('product_pdfs')->insert(array (
            0 => 
            array (
                'id' => 2003,
                'product_id' => 62581,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            1 => 
            array (
                'id' => 2004,
                'product_id' => 61141,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            2 => 
            array (
                'id' => 2005,
                'product_id' => 61140,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            3 => 
            array (
                'id' => 2006,
                'product_id' => 61142,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            4 => 
            array (
                'id' => 2007,
                'product_id' => 61143,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            5 => 
            array (
                'id' => 2008,
                'product_id' => 61144,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            6 => 
            array (
                'id' => 2009,
                'product_id' => 61145,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            7 => 
            array (
                'id' => 2010,
                'product_id' => 61132,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            8 => 
            array (
                'id' => 2011,
                'product_id' => 61133,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            9 => 
            array (
                'id' => 2012,
                'product_id' => 61134,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            10 => 
            array (
                'id' => 2013,
                'product_id' => 61135,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            11 => 
            array (
                'id' => 2014,
                'product_id' => 52767,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            12 => 
            array (
                'id' => 2015,
                'product_id' => 61136,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            13 => 
            array (
                'id' => 2016,
                'product_id' => 61137,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            14 => 
            array (
                'id' => 2017,
                'product_id' => 61138,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            15 => 
            array (
                'id' => 2018,
                'product_id' => 61139,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            16 => 
            array (
                'id' => 2019,
                'product_id' => 61131,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            17 => 
            array (
                'id' => 2020,
                'product_id' => 61265,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            18 => 
            array (
                'id' => 2021,
                'product_id' => 61266,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            19 => 
            array (
                'id' => 2022,
                'product_id' => 61267,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            20 => 
            array (
                'id' => 2023,
                'product_id' => 52771,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            21 => 
            array (
                'id' => 2024,
                'product_id' => 61268,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            22 => 
            array (
                'id' => 2025,
                'product_id' => 61269,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            23 => 
            array (
                'id' => 2026,
                'product_id' => 52769,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            24 => 
            array (
                'id' => 2027,
                'product_id' => 61270,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            25 => 
            array (
                'id' => 2028,
                'product_id' => 61271,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            26 => 
            array (
                'id' => 2029,
                'product_id' => 61272,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            27 => 
            array (
                'id' => 2030,
                'product_id' => 61273,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            28 => 
            array (
                'id' => 2031,
                'product_id' => 61274,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            29 => 
            array (
                'id' => 2032,
                'product_id' => 61259,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            30 => 
            array (
                'id' => 2033,
                'product_id' => 61260,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            31 => 
            array (
                'id' => 2034,
                'product_id' => 61261,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            32 => 
            array (
                'id' => 2035,
                'product_id' => 61262,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            33 => 
            array (
                'id' => 2036,
                'product_id' => 61263,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            34 => 
            array (
                'id' => 2037,
                'product_id' => 61264,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            35 => 
            array (
                'id' => 2038,
                'product_id' => 61257,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            36 => 
            array (
                'id' => 2039,
                'product_id' => 61258,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            37 => 
            array (
                'id' => 2040,
                'product_id' => 62202,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            38 => 
            array (
                'id' => 2041,
                'product_id' => 62203,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            39 => 
            array (
                'id' => 2042,
                'product_id' => 62204,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            40 => 
            array (
                'id' => 2043,
                'product_id' => 62205,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            41 => 
            array (
                'id' => 2044,
                'product_id' => 62206,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            42 => 
            array (
                'id' => 2045,
                'product_id' => 62207,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            43 => 
            array (
                'id' => 2046,
                'product_id' => 62208,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            44 => 
            array (
                'id' => 2047,
                'product_id' => 62209,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            45 => 
            array (
                'id' => 2048,
                'product_id' => 62210,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            46 => 
            array (
                'id' => 2049,
                'product_id' => 62211,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            47 => 
            array (
                'id' => 2050,
                'product_id' => 62195,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            48 => 
            array (
                'id' => 2051,
                'product_id' => 62196,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            49 => 
            array (
                'id' => 2052,
                'product_id' => 62197,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            50 => 
            array (
                'id' => 2053,
                'product_id' => 62198,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            51 => 
            array (
                'id' => 2054,
                'product_id' => 62199,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            52 => 
            array (
                'id' => 2055,
                'product_id' => 62200,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            53 => 
            array (
                'id' => 2056,
                'product_id' => 62201,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            54 => 
            array (
                'id' => 2057,
                'product_id' => 62190,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            55 => 
            array (
                'id' => 2058,
                'product_id' => 62444,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            56 => 
            array (
                'id' => 2059,
                'product_id' => 62445,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            57 => 
            array (
                'id' => 2060,
                'product_id' => 62446,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            58 => 
            array (
                'id' => 2061,
                'product_id' => 62447,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            59 => 
            array (
                'id' => 2062,
                'product_id' => 62448,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            60 => 
            array (
                'id' => 2063,
                'product_id' => 62449,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            61 => 
            array (
                'id' => 2064,
                'product_id' => 62450,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            62 => 
            array (
                'id' => 2065,
                'product_id' => 62451,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            63 => 
            array (
                'id' => 2066,
                'product_id' => 62452,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            64 => 
            array (
                'id' => 2067,
                'product_id' => 62453,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            65 => 
            array (
                'id' => 2068,
                'product_id' => 62454,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            66 => 
            array (
                'id' => 2069,
                'product_id' => 62455,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            67 => 
            array (
                'id' => 2070,
                'product_id' => 62456,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            68 => 
            array (
                'id' => 2071,
                'product_id' => 62436,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            69 => 
            array (
                'id' => 2072,
                'product_id' => 62437,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            70 => 
            array (
                'id' => 2073,
                'product_id' => 62438,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            71 => 
            array (
                'id' => 2074,
                'product_id' => 62439,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            72 => 
            array (
                'id' => 2075,
                'product_id' => 62440,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            73 => 
            array (
                'id' => 2076,
                'product_id' => 62441,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            74 => 
            array (
                'id' => 2077,
                'product_id' => 62442,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            75 => 
            array (
                'id' => 2078,
                'product_id' => 62443,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            76 => 
            array (
                'id' => 2079,
                'product_id' => 62425,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            77 => 
            array (
                'id' => 2080,
                'product_id' => 62435,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            78 => 
            array (
                'id' => 2081,
                'product_id' => 62417,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            79 => 
            array (
                'id' => 2082,
                'product_id' => 62418,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            80 => 
            array (
                'id' => 2083,
                'product_id' => 62419,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            81 => 
            array (
                'id' => 2084,
                'product_id' => 62420,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            82 => 
            array (
                'id' => 2085,
                'product_id' => 62421,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            83 => 
            array (
                'id' => 2086,
                'product_id' => 62422,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            84 => 
            array (
                'id' => 2087,
                'product_id' => 62423,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            85 => 
            array (
                'id' => 2088,
                'product_id' => 62424,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            86 => 
            array (
                'id' => 2089,
                'product_id' => 62409,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            87 => 
            array (
                'id' => 2090,
                'product_id' => 62410,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            88 => 
            array (
                'id' => 2091,
                'product_id' => 62411,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            89 => 
            array (
                'id' => 2092,
                'product_id' => 62412,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            90 => 
            array (
                'id' => 2093,
                'product_id' => 62413,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            91 => 
            array (
                'id' => 2094,
                'product_id' => 62414,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            92 => 
            array (
                'id' => 2095,
                'product_id' => 62415,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            93 => 
            array (
                'id' => 2096,
                'product_id' => 62416,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            94 => 
            array (
                'id' => 2097,
                'product_id' => 62402,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            95 => 
            array (
                'id' => 2098,
                'product_id' => 62408,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            96 => 
            array (
                'id' => 2099,
                'product_id' => 62480,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            97 => 
            array (
                'id' => 2100,
                'product_id' => 62487,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            98 => 
            array (
                'id' => 2101,
                'product_id' => 62528,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            99 => 
            array (
                'id' => 2102,
                'product_id' => 62481,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            100 => 
            array (
                'id' => 2103,
                'product_id' => 62488,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            101 => 
            array (
                'id' => 2104,
                'product_id' => 62529,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            102 => 
            array (
                'id' => 2105,
                'product_id' => 62482,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            103 => 
            array (
                'id' => 2106,
                'product_id' => 62489,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            104 => 
            array (
                'id' => 2107,
                'product_id' => 62530,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            105 => 
            array (
                'id' => 2108,
                'product_id' => 62483,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            106 => 
            array (
                'id' => 2109,
                'product_id' => 62490,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            107 => 
            array (
                'id' => 2110,
                'product_id' => 62531,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            108 => 
            array (
                'id' => 2111,
                'product_id' => 62484,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            109 => 
            array (
                'id' => 2112,
                'product_id' => 62491,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            110 => 
            array (
                'id' => 2113,
                'product_id' => 62532,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            111 => 
            array (
                'id' => 2114,
                'product_id' => 62485,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            112 => 
            array (
                'id' => 2115,
                'product_id' => 62492,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            113 => 
            array (
                'id' => 2116,
                'product_id' => 62533,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            114 => 
            array (
                'id' => 2117,
                'product_id' => 62486,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            115 => 
            array (
                'id' => 2118,
                'product_id' => 62493,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            116 => 
            array (
                'id' => 2119,
                'product_id' => 62534,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            117 => 
            array (
                'id' => 2120,
                'product_id' => 62464,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            118 => 
            array (
                'id' => 2121,
                'product_id' => 62473,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            119 => 
            array (
                'id' => 2122,
                'product_id' => 62520,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            120 => 
            array (
                'id' => 2123,
                'product_id' => 62521,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            121 => 
            array (
                'id' => 2124,
                'product_id' => 62465,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            122 => 
            array (
                'id' => 2125,
                'product_id' => 62474,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            123 => 
            array (
                'id' => 2126,
                'product_id' => 62522,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            124 => 
            array (
                'id' => 2127,
                'product_id' => 62466,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            125 => 
            array (
                'id' => 2128,
                'product_id' => 62475,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            126 => 
            array (
                'id' => 2129,
                'product_id' => 62523,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            127 => 
            array (
                'id' => 2130,
                'product_id' => 62467,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            128 => 
            array (
                'id' => 2131,
                'product_id' => 62476,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            129 => 
            array (
                'id' => 2132,
                'product_id' => 62524,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            130 => 
            array (
                'id' => 2133,
                'product_id' => 62468,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            131 => 
            array (
                'id' => 2134,
                'product_id' => 62477,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            132 => 
            array (
                'id' => 2135,
                'product_id' => 62525,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            133 => 
            array (
                'id' => 2136,
                'product_id' => 62469,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            134 => 
            array (
                'id' => 2137,
                'product_id' => 62478,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            135 => 
            array (
                'id' => 2138,
                'product_id' => 62526,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            136 => 
            array (
                'id' => 2139,
                'product_id' => 62470,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            137 => 
            array (
                'id' => 2140,
                'product_id' => 62479,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            138 => 
            array (
                'id' => 2141,
                'product_id' => 62527,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            139 => 
            array (
                'id' => 2142,
                'product_id' => 62457,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            140 => 
            array (
                'id' => 2143,
                'product_id' => 62471,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            141 => 
            array (
                'id' => 2144,
                'product_id' => 62463,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            142 => 
            array (
                'id' => 2145,
                'product_id' => 62472,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            143 => 
            array (
                'id' => 2146,
                'product_id' => 62514,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            144 => 
            array (
                'id' => 2147,
                'product_id' => 62508,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            145 => 
            array (
                'id' => 2148,
                'product_id' => 62509,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            146 => 
            array (
                'id' => 2149,
                'product_id' => 62545,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            147 => 
            array (
                'id' => 2150,
                'product_id' => 62510,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            148 => 
            array (
                'id' => 2151,
                'product_id' => 62546,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            149 => 
            array (
                'id' => 2152,
                'product_id' => 62511,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            150 => 
            array (
                'id' => 2153,
                'product_id' => 62547,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            151 => 
            array (
                'id' => 2154,
                'product_id' => 62548,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            152 => 
            array (
                'id' => 2155,
                'product_id' => 62512,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            153 => 
            array (
                'id' => 2156,
                'product_id' => 62549,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            154 => 
            array (
                'id' => 2157,
                'product_id' => 62513,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            155 => 
            array (
                'id' => 2158,
                'product_id' => 62501,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            156 => 
            array (
                'id' => 2159,
                'product_id' => 62535,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            157 => 
            array (
                'id' => 2160,
                'product_id' => 62540,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            158 => 
            array (
                'id' => 2161,
                'product_id' => 62502,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            159 => 
            array (
                'id' => 2162,
                'product_id' => 62541,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            160 => 
            array (
                'id' => 2163,
                'product_id' => 62542,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            161 => 
            array (
                'id' => 2164,
                'product_id' => 62503,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            162 => 
            array (
                'id' => 2165,
                'product_id' => 62543,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            163 => 
            array (
                'id' => 2166,
                'product_id' => 62504,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            164 => 
            array (
                'id' => 2167,
                'product_id' => 62544,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            165 => 
            array (
                'id' => 2168,
                'product_id' => 62505,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            166 => 
            array (
                'id' => 2169,
                'product_id' => 62506,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            167 => 
            array (
                'id' => 2170,
                'product_id' => 62507,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            168 => 
            array (
                'id' => 2171,
                'product_id' => 62494,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
            169 => 
            array (
                'id' => 2172,
                'product_id' => 62500,
                'pdf' => '13-accessories.pdf',
                'product_pdf_type_id' => 3,
                'created_at' => '2024-09-05 16:43:12',
                'updated_at' => '2024-09-05 16:43:13',
            ),
        ));
        
        
    }
}