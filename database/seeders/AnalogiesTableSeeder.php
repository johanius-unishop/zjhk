<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnalogiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('analogies')->delete();
        
        \DB::table('analogies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'CKA 03 VAS',
                'article' => NULL,
                'product_id' => 1184,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:52:28',
                'updated_at' => '2024-06-28 16:52:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'CKM 03',
                'article' => '',
                'product_id' => 1433,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-09-18 12:41:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'CKF 03',
                'article' => NULL,
                'product_id' => 1499,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'CKM 04',
                'article' => NULL,
                'product_id' => 1502,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'CKF 04',
                'article' => NULL,
                'product_id' => 1503,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'CDAM 10 X',
                'article' => NULL,
                'product_id' => 1506,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'CDAF 10 X',
                'article' => NULL,
                'product_id' => 1507,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'CDCM 10',
                'article' => NULL,
                'product_id' => 1508,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'CDCF 10',
                'article' => NULL,
                'product_id' => 1509,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'CDAM 16 X',
                'article' => NULL,
                'product_id' => 1510,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'CDAF 16 X',
                'article' => NULL,
                'product_id' => 1511,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'CDCM 16',
                'article' => NULL,
                'product_id' => 1512,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'CDCF 16',
                'article' => NULL,
                'product_id' => 1513,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'CDAM 16 X + CDAM 16 XN',
                'article' => NULL,
                'product_id' => 1514,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'CDAF 16 X + CDAF 16 XN',
                'article' => NULL,
                'product_id' => 1515,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'CDCM 16 + CDCM 16 N',
                'article' => NULL,
                'product_id' => 1516,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'CDCF 16 + CDCF 16 N',
                'article' => NULL,
                'product_id' => 1517,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'CNEM 06 X',
                'article' => NULL,
                'product_id' => 1554,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'CNEF 06 X',
                'article' => NULL,
                'product_id' => 1558,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'CCEM 06',
                'article' => NULL,
                'product_id' => 1559,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'CCEF 06',
                'article' => NULL,
                'product_id' => 1560,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'CSEM 06',
                'article' => NULL,
                'product_id' => 1561,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'CSEF 06',
                'article' => NULL,
                'product_id' => 1562,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'CNEM 10 X',
                'article' => NULL,
                'product_id' => 1563,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'CNEF 10 X',
                'article' => NULL,
                'product_id' => 1564,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'CCEM 10',
                'article' => NULL,
                'product_id' => 1565,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'CCEF 10',
                'article' => NULL,
                'product_id' => 1566,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'CSEM 10',
                'article' => NULL,
                'product_id' => 1567,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'CSEF 10',
                'article' => NULL,
                'product_id' => 1568,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'CNEM 16 X',
                'article' => NULL,
                'product_id' => 1569,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'CNEF 16 X',
                'article' => NULL,
                'product_id' => 1570,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'CCEM 16',
                'article' => NULL,
                'product_id' => 1571,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'CCEF 16',
                'article' => NULL,
                'product_id' => 1572,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'CSEM 16',
                'article' => NULL,
                'product_id' => 1573,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'CSEF 16',
                'article' => NULL,
                'product_id' => 1574,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'CNEM 24 X',
                'article' => NULL,
                'product_id' => 1575,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'CNEF 24 X',
                'article' => NULL,
                'product_id' => 1576,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'CCEM 24',
                'article' => NULL,
                'product_id' => 1577,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'CCEF 24',
                'article' => NULL,
                'product_id' => 1578,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'CSEM 24',
                'article' => NULL,
                'product_id' => 1579,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'CSEF 24',
                'article' => NULL,
                'product_id' => 1580,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'CNEM 16 X + CNEM 16 XN',
                'article' => NULL,
                'product_id' => 1581,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'CNEF 16 X + CNEF 16 XN',
                'article' => NULL,
                'product_id' => 1582,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'CCEM 16 + CCEM 16 N',
                'article' => NULL,
                'product_id' => 1583,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'CCEF 16 + CCEF 16 N',
                'article' => NULL,
                'product_id' => 1584,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'CSEM 16 + CSEM 16 N',
                'article' => NULL,
                'product_id' => 1585,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'CSEF 16 + CSEF 16 N',
                'article' => NULL,
                'product_id' => 1586,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'CNEM 24 X + CNEM 24 XN',
                'article' => NULL,
                'product_id' => 1587,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'CNEF 24 X + CNEF 24 XN',
                'article' => NULL,
                'product_id' => 1588,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'CCEM 24 + CCEM 24 N',
                'article' => NULL,
                'product_id' => 1589,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'CCEF 24 + CCEF 24 N',
                'article' => NULL,
                'product_id' => 1590,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'CSEM 24 + CSEM 24 N',
                'article' => NULL,
                'product_id' => 1591,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'CSEF 24 + CSEF 24 N',
                'article' => NULL,
                'product_id' => 1592,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'CQEM 10',
                'article' => NULL,
                'product_id' => 1613,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'CQEF 10',
                'article' => NULL,
                'product_id' => 1614,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'CQEM 18',
                'article' => NULL,
                'product_id' => 1615,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'CQEF 18',
                'article' => NULL,
                'product_id' => 1616,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'CQEM 32',
                'article' => NULL,
                'product_id' => 1617,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'CQEF 32',
                'article' => NULL,
                'product_id' => 1618,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'CQEM 46',
                'article' => NULL,
                'product_id' => 1619,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'CQEF 46',
                'article' => NULL,
                'product_id' => 1620,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'CQEM 32 + CQEM 32 N',
                'article' => NULL,
                'product_id' => 1621,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'CQEF 32 + CQEF 32 N',
                'article' => NULL,
                'product_id' => 1622,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'CQEM 46 + CQEM 46 N',
                'article' => NULL,
                'product_id' => 1623,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'CQEF 46 + CQEF 46 N',
                'article' => NULL,
                'product_id' => 1624,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'CDM 07',
                'article' => NULL,
                'product_id' => 1644,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'CDF 07',
                'article' => NULL,
                'product_id' => 1645,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'CDM 08',
                'article' => NULL,
                'product_id' => 1646,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'CDF 08',
                'article' => NULL,
                'product_id' => 1647,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'CDM 15',
                'article' => NULL,
                'product_id' => 1648,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'CDF 15',
                'article' => NULL,
                'product_id' => 1649,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'CDM 25',
                'article' => NULL,
                'product_id' => 1650,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'CDF 25',
                'article' => NULL,
                'product_id' => 1651,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'CDM 25 + CDM 25 Z',
                'article' => NULL,
                'product_id' => 1652,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'CDF 25 + CDF 25 Z',
                'article' => NULL,
                'product_id' => 1653,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'CDM 40',
                'article' => NULL,
                'product_id' => 1654,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'CDF 40',
                'article' => NULL,
                'product_id' => 1655,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'CDM 64',
                'article' => NULL,
                'product_id' => 1656,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'CDF 64',
                'article' => NULL,
                'product_id' => 1657,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'CDM 40 + CDM 40',
                'article' => NULL,
                'product_id' => 1658,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'CDF 40 + CDF 40',
                'article' => NULL,
                'product_id' => 1659,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'CDM 64 + CDM 64',
                'article' => NULL,
                'product_id' => 1660,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'CDF 64 + CDF 64',
                'article' => NULL,
                'product_id' => 1661,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'CQEEM 40',
                'article' => NULL,
                'product_id' => 1663,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'CQEEF 40',
                'article' => NULL,
                'product_id' => 1665,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'CQEEM 64',
                'article' => NULL,
                'product_id' => 1666,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'CQEEF 64',
                'article' => NULL,
                'product_id' => 1667,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'CDDM 24',
                'article' => NULL,
                'product_id' => 1682,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'CDDF 24',
                'article' => NULL,
                'product_id' => 1683,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'CDDM 42',
                'article' => NULL,
                'product_id' => 1684,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'CDDF 42',
                'article' => NULL,
                'product_id' => 1685,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'CDDM 72',
                'article' => NULL,
                'product_id' => 1686,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'CDDF 72',
                'article' => NULL,
                'product_id' => 1687,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'CDDM 108',
                'article' => NULL,
                'product_id' => 1688,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'CDDF 108',
                'article' => NULL,
                'product_id' => 1689,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'CDDM 72 + CDDM 72 N',
                'article' => NULL,
                'product_id' => 1690,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'CDDF 72 + CDDF 72 N',
                'article' => NULL,
                'product_id' => 1691,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'CDDM 108 + CDDM 108 N',
                'article' => NULL,
                'product_id' => 1692,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'CDDF 108 + CDDF 108 N',
                'article' => NULL,
                'product_id' => 1693,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'CPM 06',
                'article' => NULL,
                'product_id' => 1700,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'CPF 06',
                'article' => NULL,
                'product_id' => 1701,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'CPM 06 + CPM 06 N',
                'article' => NULL,
                'product_id' => 1702,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'CPF 06 + CPF 06 N',
                'article' => NULL,
                'product_id' => 1703,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'CXM 4/0',
                'article' => NULL,
                'product_id' => 1725,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'CXF 4/0',
                'article' => NULL,
                'product_id' => 1726,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'CXM 4/2',
                'article' => NULL,
                'product_id' => 1727,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'CXF 4/2',
                'article' => NULL,
                'product_id' => 1728,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'CXM 4/8',
                'article' => NULL,
                'product_id' => 1729,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'CXF 4/8',
                'article' => NULL,
                'product_id' => 1730,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'CXM 6/36',
                'article' => NULL,
                'product_id' => 1737,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'CXF 6/36',
                'article' => NULL,
                'product_id' => 1738,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'CXM 12/2',
                'article' => NULL,
                'product_id' => 1739,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'CXF 12/2',
                'article' => NULL,
                'product_id' => 1740,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'CXM 8/24',
                'article' => NULL,
                'product_id' => 1746,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'CXF 8/24',
                'article' => NULL,
                'product_id' => 1747,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'CTM 06 L',
                'article' => NULL,
                'product_id' => 1770,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'CTM 06 R',
                'article' => NULL,
                'product_id' => 1771,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'CTF 06 L',
                'article' => NULL,
                'product_id' => 1772,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'CTF 06 R',
                'article' => NULL,
                'product_id' => 1773,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'CTM 10 L',
                'article' => NULL,
                'product_id' => 1774,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'CTM 10 R',
                'article' => NULL,
                'product_id' => 1775,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'CTF 10 L',
                'article' => NULL,
                'product_id' => 1776,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'CTF 10 R',
                'article' => NULL,
                'product_id' => 1777,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'CTM 16 L',
                'article' => NULL,
                'product_id' => 1778,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'CTM 16 R',
                'article' => NULL,
                'product_id' => 1779,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'CTF 16 L',
                'article' => NULL,
                'product_id' => 1780,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'CTF 16 R',
                'article' => NULL,
                'product_id' => 1781,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'CTM 24 L',
                'article' => NULL,
                'product_id' => 1782,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'CTM 24 R',
                'article' => NULL,
                'product_id' => 1783,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'CTF 24 L',
                'article' => NULL,
                'product_id' => 1784,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'CTF 24 R',
                'article' => NULL,
                'product_id' => 1785,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'CQM 05',
                'article' => NULL,
                'product_id' => 1811,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'CQF 05',
                'article' => NULL,
                'product_id' => 1812,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'CQM 07',
                'article' => NULL,
                'product_id' => 1813,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'CQF 07',
                'article' => NULL,
                'product_id' => 1814,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'CQM 12',
                'article' => NULL,
                'product_id' => 1815,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'CQF 12',
                'article' => NULL,
                'product_id' => 1816,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'CQM 08',
                'article' => NULL,
                'product_id' => 1817,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'CQF 08',
                'article' => NULL,
                'product_id' => 1818,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'CQM 17',
                'article' => NULL,
                'product_id' => 1819,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'CQF 17',
                'article' => NULL,
                'product_id' => 1820,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'CQM 04/2',
                'article' => NULL,
                'product_id' => 1821,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'CQF 04/2',
                'article' => NULL,
                'product_id' => 1822,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'CX 02 TM',
                'article' => NULL,
                'product_id' => 1880,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'CX 02 TF',
                'article' => NULL,
                'product_id' => 1881,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'CX 03 TM',
                'article' => NULL,
                'product_id' => 1882,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'CX 03 TF',
                'article' => NULL,
                'product_id' => 1883,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'CX 04 TM',
                'article' => NULL,
                'product_id' => 1884,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'CX 04 TF',
                'article' => NULL,
                'product_id' => 1885,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'CX 06 TM',
                'article' => NULL,
                'product_id' => 1886,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'CX 06 TF',
                'article' => NULL,
                'product_id' => 1887,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'CX 01 YM',
                'article' => NULL,
                'product_id' => 1892,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'CX 01 YF',
                'article' => NULL,
                'product_id' => 1893,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'CX 01 GM',
                'article' => NULL,
                'product_id' => 1894,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'CX 01 GM',
                'article' => NULL,
                'product_id' => 1895,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'CX 02 GM',
                'article' => NULL,
                'product_id' => 1900,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'CX 02 GF',
                'article' => NULL,
                'product_id' => 1901,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'CX 02 7M',
                'article' => NULL,
                'product_id' => 1906,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'CX 02 7F',
                'article' => NULL,
                'product_id' => 1907,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'CX 02 4AM',
                'article' => NULL,
                'product_id' => 1909,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'CX 02 4BM',
                'article' => NULL,
                'product_id' => 1910,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'CX 02 4AF',
                'article' => NULL,
                'product_id' => 1911,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'CX 02 4BF',
                'article' => NULL,
                'product_id' => 1912,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'CX 02 4M',
                'article' => NULL,
                'product_id' => 1913,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'CX 02 4F',
                'article' => NULL,
                'product_id' => 1914,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'CX 03 4M',
                'article' => NULL,
                'product_id' => 1921,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'CX 03 4F',
                'article' => NULL,
                'product_id' => 1922,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'CX 04 XM',
                'article' => NULL,
                'product_id' => 1923,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'CX 04 XF',
                'article' => NULL,
                'product_id' => 1924,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'CX 05 SHM',
                'article' => NULL,
                'product_id' => 1925,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'CX 05 SHF',
                'article' => NULL,
                'product_id' => 1926,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'CX 06 CM',
                'article' => NULL,
                'product_id' => 1927,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'CX 06 CF',
                'article' => NULL,
                'product_id' => 1928,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'CX 06P CM',
                'article' => NULL,
                'product_id' => 1929,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'CX 06P CF',
                'article' => NULL,
                'product_id' => 1930,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'CX 08 CM',
                'article' => NULL,
                'product_id' => 1931,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'CX 08 CF',
                'article' => NULL,
                'product_id' => 1932,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'CX 20 CM',
                'article' => NULL,
                'product_id' => 1933,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'CX 20 CF',
                'article' => NULL,
                'product_id' => 1934,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'CX 12 DM',
                'article' => NULL,
                'product_id' => 1935,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'CX 12 DF',
                'article' => NULL,
                'product_id' => 1936,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'CX 17 DM',
                'article' => NULL,
                'product_id' => 1937,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'CX 17 DF',
                'article' => NULL,
                'product_id' => 1938,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'CX 01 9VTM',
                'article' => NULL,
                'product_id' => 1939,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'CX 01 9VTF',
                'article' => NULL,
                'product_id' => 1940,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'CX 25 IBM',
                'article' => NULL,
                'product_id' => 1941,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'CX 25 IBF',
                'article' => NULL,
                'product_id' => 1942,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'CX 02 P',
                'article' => NULL,
                'product_id' => 1943,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'CX 03 P',
                'article' => NULL,
                'product_id' => 1944,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'MKA VA20',
                'article' => NULL,
                'product_id' => 1995,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'MKA V20',
                'article' => NULL,
                'product_id' => 1996,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'MKA V25',
                'article' => NULL,
                'product_id' => 1997,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'CKA 03 VS',
                'article' => NULL,
                'product_id' => 1998,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'CKA 03 I',
                'article' => NULL,
                'product_id' => 2000,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'CKA 03 ILSA',
                'article' => NULL,
                'product_id' => 2001,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'CKA 03 ILS',
                'article' => NULL,
                'product_id' => 2002,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'CKA 03 IA',
                'article' => NULL,
                'product_id' => 2003,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'MKA IAP20',
                'article' => NULL,
                'product_id' => 2004,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'CKA 03 IAPS',
                'article' => NULL,
                'product_id' => 2005,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'MKA VG20',
                'article' => NULL,
                'product_id' => 2007,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'CKA 03 VGS',
                'article' => NULL,
                'product_id' => 2008,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'MK VA20',
                'article' => NULL,
                'product_id' => 2020,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'CK 03 VAS',
                'article' => NULL,
                'product_id' => 2021,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'MK V20',
                'article' => NULL,
                'product_id' => 2022,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'CK 03 VS',
                'article' => NULL,
                'product_id' => 2023,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'CK 03 I',
                'article' => NULL,
                'product_id' => 2024,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'CK 03 IA',
                'article' => NULL,
                'product_id' => 2025,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'MK IAP20',
                'article' => NULL,
                'product_id' => 2026,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'CK 03 IAPS',
                'article' => NULL,
                'product_id' => 2027,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'MK VG20',
                'article' => NULL,
                'product_id' => 2028,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'CK 03 VGS',
                'article' => NULL,
                'product_id' => 2029,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'MZO 15 L20',
                'article' => NULL,
                'product_id' => 2061,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'CZO 15 L',
                'article' => NULL,
                'product_id' => 2062,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'MZAO 15 L25',
                'article' => NULL,
                'product_id' => 2063,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'CZAO 15 L16',
                'article' => NULL,
                'product_id' => 2064,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'CZAO 15 L21',
                'article' => NULL,
                'product_id' => 2065,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'MZV 15 L20',
                'article' => NULL,
                'product_id' => 2066,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'CZV 15 L',
                'article' => NULL,
                'product_id' => 2067,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'MZAV 15 L25',
                'article' => NULL,
                'product_id' => 2068,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'CZAV 15 L16',
                'article' => NULL,
                'product_id' => 2069,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'CZAV 15 L21',
                'article' => NULL,
                'product_id' => 2070,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'CZI 15 L',
                'article' => NULL,
                'product_id' => 2071,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'CZI 15 LSP',
                'article' => NULL,
                'product_id' => 2072,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'CZI 15 LS',
                'article' => NULL,
                'product_id' => 2073,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'MZP 15 L25',
                'article' => NULL,
                'product_id' => 2076,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'CZP 15 L',
                'article' => NULL,
                'product_id' => 2077,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'CZP 15 L2',
                'article' => NULL,
                'product_id' => 2078,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'CZP 15 L21',
                'article' => NULL,
                'product_id' => 2079,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'MZP 15 LSP20',
                'article' => NULL,
                'product_id' => 2080,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'MZP 15 LSP25',
                'article' => NULL,
                'product_id' => 2082,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'CZP 15 LSP16',
                'article' => NULL,
                'product_id' => 2083,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'CZP 15 LSP21',
                'article' => NULL,
                'product_id' => 2085,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'MZP 15 LS25',
                'article' => NULL,
                'product_id' => 2088,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'CZP 15 LS',
                'article' => NULL,
                'product_id' => 2089,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'CZP 15 LS2',
                'article' => NULL,
                'product_id' => 2090,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'CZP 15 LS21',
                'article' => NULL,
                'product_id' => 2091,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'MZO 25 L20',
                'article' => NULL,
                'product_id' => 2119,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'CZO 25 L',
                'article' => NULL,
                'product_id' => 2120,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'MZAO 25 L25',
                'article' => NULL,
                'product_id' => 2121,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'CZAO 25 L16',
                'article' => NULL,
                'product_id' => 2122,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'CZAO 25 L21',
                'article' => NULL,
                'product_id' => 2123,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'MZV 25 L20',
                'article' => NULL,
                'product_id' => 2124,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'CZV 25 L',
                'article' => NULL,
                'product_id' => 2125,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'MZAV 25 L25',
                'article' => NULL,
                'product_id' => 2126,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'CZAV 25 L16',
                'article' => NULL,
                'product_id' => 2127,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'CZAV 25 L21',
                'article' => NULL,
                'product_id' => 2128,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'CZI 25 L',
                'article' => NULL,
                'product_id' => 2129,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'CZI 25 LSP',
                'article' => NULL,
                'product_id' => 2130,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'CZI 25 LS',
                'article' => NULL,
                'product_id' => 2131,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'MZAP 25 L25',
                'article' => NULL,
                'product_id' => 2134,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'CZAP 25 L2',
                'article' => NULL,
                'product_id' => 2135,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'CZAP 25 L',
                'article' => NULL,
                'product_id' => 2136,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'CZAP 25 L21',
                'article' => NULL,
                'product_id' => 2137,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'MZAP 25LSP20',
                'article' => NULL,
                'product_id' => 2138,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'MZAP 25LSP25',
                'article' => NULL,
                'product_id' => 2140,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'CZAP 25LSP16',
                'article' => NULL,
                'product_id' => 2142,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'CZAP 25LSP21',
                'article' => NULL,
                'product_id' => 2144,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'MZAP 25 LS25',
                'article' => NULL,
                'product_id' => 2147,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'MZAP 25 LS225',
                'article' => NULL,
                'product_id' => 2148,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'CZAP 25 LS',
                'article' => NULL,
                'product_id' => 2149,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'CZAP 25 LS2',
                'article' => NULL,
                'product_id' => 2150,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'CZAP 25 LS21',
                'article' => NULL,
                'product_id' => 2151,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'MZAP 25 L225',
                'article' => NULL,
                'product_id' => 2153,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'MHO 06 L20',
                'article' => NULL,
                'product_id' => 2325,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'MHO 06 L25',
                'article' => NULL,
                'product_id' => 2326,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'CHO 06 L13',
                'article' => NULL,
                'product_id' => 2327,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'CHO 06 L16',
                'article' => NULL,
                'product_id' => 2328,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'MFO 06 L25',
                'article' => NULL,
                'product_id' => 2329,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'MFO 06 L32',
                'article' => NULL,
                'product_id' => 2330,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'CFO 06 L21',
                'article' => NULL,
                'product_id' => 2331,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'CFO 06 L29',
                'article' => NULL,
                'product_id' => 2332,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'MHV 06 L20',
                'article' => NULL,
                'product_id' => 2333,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'CHV 06 L13',
                'article' => NULL,
                'product_id' => 2334,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'CHV 06 L16',
                'article' => NULL,
                'product_id' => 2335,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'MFV 06 L25',
                'article' => NULL,
                'product_id' => 2336,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'MFV 06 L32',
                'article' => NULL,
                'product_id' => 2337,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'CFV 06 L21',
                'article' => NULL,
                'product_id' => 2338,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'CFV 06 L29',
                'article' => NULL,
                'product_id' => 2339,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'CHV 06 LG',
                'article' => NULL,
                'product_id' => 2342,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'MFV 06 LG25',
                'article' => NULL,
                'product_id' => 2343,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'CFV 06 LG21',
                'article' => NULL,
                'product_id' => 2344,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'CFV 06 LG29',
                'article' => NULL,
                'product_id' => 2345,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'CHI 06 L',
                'article' => NULL,
                'product_id' => 2346,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'CHI 06 LS',
                'article' => NULL,
                'product_id' => 2348,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'MHP 06 L20',
                'article' => NULL,
                'product_id' => 2349,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'MHP 06 L220',
                'article' => NULL,
                'product_id' => 2350,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'CHP 06 L',
                'article' => NULL,
                'product_id' => 2353,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'CHP 06 L2',
                'article' => NULL,
                'product_id' => 2354,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'MHP 06 LS20',
                'article' => NULL,
                'product_id' => 2361,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'MHP 06 LS220',
                'article' => NULL,
                'product_id' => 2362,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'CHP 06 LS',
                'article' => NULL,
                'product_id' => 2365,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'CHP 06 LS2',
                'article' => NULL,
                'product_id' => 2366,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'MAP 06 L25',
                'article' => NULL,
                'product_id' => 2367,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'MAP 06 L225',
                'article' => NULL,
                'product_id' => 2368,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'MAP 06 L32',
                'article' => NULL,
                'product_id' => 2369,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'MAP 06 L232',
                'article' => NULL,
                'product_id' => 2370,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'CAP 06 L',
                'article' => NULL,
                'product_id' => 2371,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'CAP 06 L2',
                'article' => NULL,
                'product_id' => 2372,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'CAP 06 L29',
                'article' => NULL,
                'product_id' => 2373,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'CAP 06 L229',
                'article' => NULL,
                'product_id' => 2374,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'MAP 06 LS32',
                'article' => NULL,
                'product_id' => 2385,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'MAP 06 LS232',
                'article' => NULL,
                'product_id' => 2386,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'CAP 06 LS',
                'article' => NULL,
                'product_id' => 2387,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'CAP 06 LS2',
                'article' => NULL,
                'product_id' => 2388,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'CAP 06 LS29',
                'article' => NULL,
                'product_id' => 2389,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'CAP 06 LS229',
                'article' => NULL,
                'product_id' => 2390,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'CVI 10 LS',
                'article' => NULL,
                'product_id' => 2569,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'MHV 10.25',
                'article' => NULL,
                'product_id' => 2620,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'CHI 10',
                'article' => NULL,
                'product_id' => 2626,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'MHV 16 L25',
                'article' => NULL,
                'product_id' => 2847,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'CHI 16 L',
                'article' => NULL,
                'product_id' => 2861,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'CVI 16 LS',
                'article' => NULL,
                'product_id' => 2863,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'MHV 16.25',
                'article' => NULL,
                'product_id' => 2902,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'CHI 16',
                'article' => NULL,
                'product_id' => 2909,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'MHV 24.25',
                'article' => NULL,
                'product_id' => 3182,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'CHI 024',
                'article' => NULL,
                'product_id' => 3190,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'CCMA 0.3',
                'article' => NULL,
                'product_id' => 3539,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'CCFA 0.3',
                'article' => NULL,
                'product_id' => 3540,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'CCMA 0.5',
                'article' => NULL,
                'product_id' => 3541,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'CCFA 0.5',
                'article' => NULL,
                'product_id' => 3542,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'CX 3/4 XDM',
                'article' => NULL,
                'product_id' => 8280,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'CX 3/4 XDF',
                'article' => NULL,
                'product_id' => 8281,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'CX 01 J8M',
                'article' => NULL,
                'product_id' => 8282,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'CX 01 J8F',
                'article' => NULL,
                'product_id' => 8283,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'CX 01 J8IM',
                'article' => NULL,
                'product_id' => 8284,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'CX 6.0 PM',
                'article' => NULL,
                'product_id' => 8285,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'CX 6.0 PF',
                'article' => NULL,
                'product_id' => 8286,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'CX 6.0 VC',
                'article' => NULL,
                'product_id' => 8287,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'CX 4.0 PM',
                'article' => NULL,
                'product_id' => 8288,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'CX 4.0 PF',
                'article' => NULL,
                'product_id' => 8289,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'CX 4.0 VC',
                'article' => NULL,
                'product_id' => 8290,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'CX 3.0 PM',
                'article' => NULL,
                'product_id' => 8291,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'CX 3.0 PF ',
                'article' => NULL,
                'product_id' => 8292,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'CX 3.0 VC',
                'article' => NULL,
                'product_id' => 8293,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'MHV 06 L25',
                'article' => NULL,
                'product_id' => 61968,
                'analog_vendor_id' => 3,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            335 => 
            array (
                'id' => 493,
                'name' => NULL,
                'article' => '09 20 016 2612',
                'product_id' => 1510,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            336 => 
            array (
                'id' => 494,
                'name' => NULL,
                'article' => '09 20 016 2812',
                'product_id' => 1511,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            337 => 
            array (
                'id' => 495,
                'name' => NULL,
                'article' => '09 33 016 2601',
                'product_id' => 1569,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            338 => 
            array (
                'id' => 496,
                'name' => NULL,
                'article' => '09 33 016 2701',
                'product_id' => 1570,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            339 => 
            array (
                'id' => 497,
                'name' => NULL,
                'article' => '09 33 016 2616',
                'product_id' => 1573,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            340 => 
            array (
                'id' => 498,
                'name' => NULL,
                'article' => '09 33 016 2716',
                'product_id' => 1574,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            341 => 
            array (
                'id' => 499,
                'name' => NULL,
                'article' => '09 33 024 2601',
                'product_id' => 1575,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            342 => 
            array (
                'id' => 500,
                'name' => NULL,
                'article' => '19 20 003 1440',
                'product_id' => 1996,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            343 => 
            array (
                'id' => 501,
                'name' => NULL,
                'article' => '09 20 003 0301',
                'product_id' => 2000,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            344 => 
            array (
                'id' => 502,
                'name' => NULL,
                'article' => '09 20 016 0301',
                'product_id' => 2129,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            345 => 
            array (
                'id' => 503,
                'name' => NULL,
                'article' => '09 30 010 0301',
                'product_id' => 2626,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            346 => 
            array (
                'id' => 504,
                'name' => NULL,
                'article' => '09 30 016 0307',
                'product_id' => 2861,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            347 => 
            array (
                'id' => 505,
                'name' => NULL,
                'article' => '09 30 016 0301',
                'product_id' => 2909,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            348 => 
            array (
                'id' => 506,
                'name' => NULL,
                'article' => '09 30 024 0301',
                'product_id' => 3190,
                'analog_vendor_id' => 1,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            349 => 
            array (
                'id' => 507,
                'name' => NULL,
                'article' => '29019',
                'product_id' => 1184,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            350 => 
            array (
                'id' => 508,
                'name' => '',
                'article' => '29009 / 29003',
                'product_id' => 1433,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-09-18 12:41:33',
            ),
            351 => 
            array (
                'id' => 509,
                'name' => NULL,
                'article' => '29008 / 29002',
                'product_id' => 1499,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            352 => 
            array (
                'id' => 510,
                'name' => NULL,
                'article' => '29011 / 29016',
                'product_id' => 1502,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            353 => 
            array (
                'id' => 511,
                'name' => NULL,
                'article' => '29010 / 29012',
                'product_id' => 1503,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            354 => 
            array (
                'id' => 512,
                'name' => NULL,
                'article' => '29421',
                'product_id' => 1506,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            355 => 
            array (
                'id' => 513,
                'name' => NULL,
                'article' => '29420',
                'product_id' => 1507,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            356 => 
            array (
                'id' => 514,
                'name' => NULL,
                'article' => '29423',
                'product_id' => 1510,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            357 => 
            array (
                'id' => 515,
                'name' => NULL,
                'article' => '29422',
                'product_id' => 1511,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            358 => 
            array (
                'id' => 516,
                'name' => NULL,
                'article' => '29121',
                'product_id' => 1554,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            359 => 
            array (
                'id' => 517,
                'name' => NULL,
                'article' => '29120',
                'product_id' => 1558,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            360 => 
            array (
                'id' => 518,
                'name' => NULL,
                'article' => '291213006',
                'product_id' => 1559,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            361 => 
            array (
                'id' => 519,
                'name' => NULL,
                'article' => '291203006',
                'product_id' => 1560,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            362 => 
            array (
                'id' => 520,
                'name' => NULL,
                'article' => '291212006',
                'product_id' => 1561,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            363 => 
            array (
                'id' => 521,
                'name' => NULL,
                'article' => '291202006',
                'product_id' => 1562,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            364 => 
            array (
                'id' => 522,
                'name' => NULL,
                'article' => '29021',
                'product_id' => 1563,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            365 => 
            array (
                'id' => 523,
                'name' => NULL,
                'article' => '29020',
                'product_id' => 1564,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            366 => 
            array (
                'id' => 524,
                'name' => NULL,
                'article' => '290213010',
                'product_id' => 1565,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            367 => 
            array (
                'id' => 525,
                'name' => NULL,
                'article' => '290203010',
                'product_id' => 1566,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            368 => 
            array (
                'id' => 526,
                'name' => NULL,
                'article' => '290212010',
                'product_id' => 1567,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            369 => 
            array (
                'id' => 527,
                'name' => NULL,
                'article' => '290202010',
                'product_id' => 1568,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            370 => 
            array (
                'id' => 528,
                'name' => NULL,
                'article' => '29023',
                'product_id' => 1569,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            371 => 
            array (
                'id' => 529,
                'name' => NULL,
                'article' => '29022',
                'product_id' => 1570,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            372 => 
            array (
                'id' => 530,
                'name' => NULL,
                'article' => '290233016',
                'product_id' => 1571,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            373 => 
            array (
                'id' => 531,
                'name' => NULL,
                'article' => '290223016',
                'product_id' => 1572,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            374 => 
            array (
                'id' => 532,
                'name' => NULL,
                'article' => '290232016',
                'product_id' => 1573,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            375 => 
            array (
                'id' => 533,
                'name' => NULL,
                'article' => '290222016',
                'product_id' => 1574,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            376 => 
            array (
                'id' => 534,
                'name' => NULL,
                'article' => '29025',
                'product_id' => 1575,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            377 => 
            array (
                'id' => 535,
                'name' => NULL,
                'article' => '29024',
                'product_id' => 1576,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            378 => 
            array (
                'id' => 536,
                'name' => NULL,
                'article' => '290253024',
                'product_id' => 1577,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            379 => 
            array (
                'id' => 537,
                'name' => NULL,
                'article' => '290243024',
                'product_id' => 1578,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            380 => 
            array (
                'id' => 538,
                'name' => NULL,
                'article' => '290252024',
                'product_id' => 1579,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            381 => 
            array (
                'id' => 539,
                'name' => NULL,
                'article' => '290242024',
                'product_id' => 1580,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            382 => 
            array (
                'id' => 540,
                'name' => NULL,
                'article' => '291213010',
                'product_id' => 1613,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            383 => 
            array (
                'id' => 541,
                'name' => NULL,
                'article' => '291203010',
                'product_id' => 1614,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            384 => 
            array (
                'id' => 542,
                'name' => NULL,
                'article' => '290213018',
                'product_id' => 1615,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            385 => 
            array (
                'id' => 543,
                'name' => NULL,
                'article' => '290203018',
                'product_id' => 1616,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            386 => 
            array (
                'id' => 544,
                'name' => NULL,
                'article' => '290233032',
                'product_id' => 1617,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            387 => 
            array (
                'id' => 545,
                'name' => NULL,
                'article' => '290223032',
                'product_id' => 1618,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            388 => 
            array (
                'id' => 546,
                'name' => NULL,
                'article' => '290253046',
                'product_id' => 1619,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            389 => 
            array (
                'id' => 547,
                'name' => NULL,
                'article' => '290243046',
                'product_id' => 1620,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            390 => 
            array (
                'id' => 548,
                'name' => NULL,
                'article' => '290113007',
                'product_id' => 1644,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            391 => 
            array (
                'id' => 549,
                'name' => NULL,
                'article' => '290103007',
                'product_id' => 1645,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            392 => 
            array (
                'id' => 550,
                'name' => NULL,
                'article' => '294213015',
                'product_id' => 1648,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            393 => 
            array (
                'id' => 551,
                'name' => NULL,
                'article' => '294203015',
                'product_id' => 1649,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            394 => 
            array (
                'id' => 552,
                'name' => NULL,
                'article' => '294233025',
                'product_id' => 1650,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            395 => 
            array (
                'id' => 553,
                'name' => NULL,
                'article' => '294223025',
                'product_id' => 1651,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            396 => 
            array (
                'id' => 554,
                'name' => NULL,
                'article' => '290233040',
                'product_id' => 1654,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            397 => 
            array (
                'id' => 555,
                'name' => NULL,
                'article' => '290223040',
                'product_id' => 1655,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            398 => 
            array (
                'id' => 556,
                'name' => NULL,
                'article' => '290253064',
                'product_id' => 1656,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            399 => 
            array (
                'id' => 557,
                'name' => NULL,
                'article' => '290243064',
                'product_id' => 1657,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            400 => 
            array (
                'id' => 558,
                'name' => NULL,
                'article' => '291213024',
                'product_id' => 1682,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            401 => 
            array (
                'id' => 559,
                'name' => NULL,
                'article' => '291203024',
                'product_id' => 1683,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            402 => 
            array (
                'id' => 560,
                'name' => NULL,
                'article' => '290213042',
                'product_id' => 1684,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            403 => 
            array (
                'id' => 561,
                'name' => NULL,
                'article' => '290203042',
                'product_id' => 1685,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            404 => 
            array (
                'id' => 562,
                'name' => NULL,
                'article' => '290233072',
                'product_id' => 1686,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            405 => 
            array (
                'id' => 563,
                'name' => NULL,
                'article' => '290223072',
                'product_id' => 1687,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            406 => 
            array (
                'id' => 564,
                'name' => NULL,
                'article' => '290253108',
                'product_id' => 1688,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            407 => 
            array (
                'id' => 565,
                'name' => NULL,
                'article' => '290243108',
                'product_id' => 1689,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            408 => 
            array (
                'id' => 566,
                'name' => NULL,
                'article' => '29125',
                'product_id' => 1700,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            409 => 
            array (
                'id' => 567,
                'name' => NULL,
                'article' => '29124',
                'product_id' => 1701,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            410 => 
            array (
                'id' => 568,
                'name' => NULL,
                'article' => '29115',
                'product_id' => 1725,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            411 => 
            array (
                'id' => 569,
                'name' => NULL,
                'article' => '29114',
                'product_id' => 1726,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            412 => 
            array (
                'id' => 570,
                'name' => NULL,
                'article' => '29117',
                'product_id' => 1727,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            413 => 
            array (
                'id' => 571,
                'name' => NULL,
                'article' => '29116',
                'product_id' => 1728,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            414 => 
            array (
                'id' => 572,
                'name' => NULL,
                'article' => '29250160361',
                'product_id' => 1884,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            415 => 
            array (
                'id' => 573,
                'name' => NULL,
                'article' => '29250160371',
                'product_id' => 1885,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            416 => 
            array (
                'id' => 574,
                'name' => NULL,
                'article' => '29250063001',
                'product_id' => 1927,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            417 => 
            array (
                'id' => 575,
                'name' => NULL,
                'article' => '29250063101',
                'product_id' => 1928,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            418 => 
            array (
                'id' => 576,
                'name' => NULL,
                'article' => '29250123001',
                'product_id' => 1935,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            419 => 
            array (
                'id' => 577,
                'name' => NULL,
                'article' => '29250123101',
                'product_id' => 1936,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            420 => 
            array (
                'id' => 578,
                'name' => NULL,
                'article' => '290192205',
                'product_id' => 1995,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            421 => 
            array (
                'id' => 579,
                'name' => NULL,
                'article' => '290172205',
                'product_id' => 1996,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            422 => 
            array (
                'id' => 580,
                'name' => NULL,
                'article' => '29017',
                'product_id' => 1998,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            423 => 
            array (
                'id' => 581,
                'name' => NULL,
                'article' => '290170405',
                'product_id' => 1999,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            424 => 
            array (
                'id' => 582,
                'name' => NULL,
            'article' => '(29013S) HA-C',
                'product_id' => 2000,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            425 => 
            array (
                'id' => 583,
                'name' => NULL,
                'article' => '29014S',
                'product_id' => 2003,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            426 => 
            array (
                'id' => 584,
                'name' => NULL,
                'article' => '290152205S',
                'product_id' => 2007,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            427 => 
            array (
                'id' => 585,
                'name' => NULL,
                'article' => '29015S',
                'product_id' => 2008,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            428 => 
            array (
                'id' => 586,
                'name' => NULL,
                'article' => '29080',
                'product_id' => 2023,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            429 => 
            array (
                'id' => 587,
                'name' => NULL,
                'article' => '29075',
                'product_id' => 2024,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            430 => 
            array (
                'id' => 588,
                'name' => NULL,
                'article' => '29077',
                'product_id' => 2025,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            431 => 
            array (
                'id' => 589,
                'name' => NULL,
                'article' => '29079',
                'product_id' => 2029,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            432 => 
            array (
                'id' => 590,
                'name' => NULL,
                'article' => '2935322205',
                'product_id' => 2061,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            433 => 
            array (
                'id' => 591,
                'name' => NULL,
                'article' => '293532',
                'product_id' => 2062,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            434 => 
            array (
                'id' => 592,
                'name' => NULL,
                'article' => '2935422205',
                'product_id' => 2066,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            435 => 
            array (
                'id' => 593,
                'name' => NULL,
                'article' => '2935420405',
                'product_id' => 2067,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            436 => 
            array (
                'id' => 594,
                'name' => NULL,
                'article' => '293502',
                'product_id' => 2071,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            437 => 
            array (
                'id' => 595,
                'name' => NULL,
                'article' => '2935122205',
                'product_id' => 2074,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            438 => 
            array (
                'id' => 596,
                'name' => NULL,
                'article' => '2935222205',
                'product_id' => 2075,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            439 => 
            array (
                'id' => 597,
                'name' => NULL,
                'article' => '2935122305',
                'product_id' => 2076,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            440 => 
            array (
                'id' => 598,
                'name' => NULL,
                'article' => '293512',
                'product_id' => 2077,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            441 => 
            array (
                'id' => 599,
                'name' => NULL,
                'article' => '293522',
                'product_id' => 2078,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            442 => 
            array (
                'id' => 600,
                'name' => NULL,
                'article' => '2936322205',
                'product_id' => 2119,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            443 => 
            array (
                'id' => 601,
                'name' => NULL,
                'article' => '293632',
                'product_id' => 2120,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            444 => 
            array (
                'id' => 602,
                'name' => NULL,
                'article' => '2936422205',
                'product_id' => 2124,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            445 => 
            array (
                'id' => 603,
                'name' => NULL,
                'article' => '293642',
                'product_id' => 2125,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            446 => 
            array (
                'id' => 604,
                'name' => NULL,
                'article' => '293602',
                'product_id' => 2129,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            447 => 
            array (
                'id' => 605,
                'name' => NULL,
                'article' => '2936122205',
                'product_id' => 2132,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            448 => 
            array (
                'id' => 606,
                'name' => NULL,
                'article' => '2936222205',
                'product_id' => 2133,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            449 => 
            array (
                'id' => 607,
                'name' => NULL,
                'article' => '293622',
                'product_id' => 2135,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            450 => 
            array (
                'id' => 608,
                'name' => NULL,
                'article' => '293612',
                'product_id' => 2136,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            451 => 
            array (
                'id' => 609,
                'name' => NULL,
                'article' => '2906122405',
                'product_id' => 2208,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            452 => 
            array (
                'id' => 610,
                'name' => NULL,
                'article' => '290612',
                'product_id' => 2209,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            453 => 
            array (
                'id' => 611,
                'name' => NULL,
                'article' => '2906022405',
                'product_id' => 2212,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            454 => 
            array (
                'id' => 612,
                'name' => NULL,
                'article' => '290602',
                'product_id' => 2213,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            455 => 
            array (
                'id' => 613,
                'name' => NULL,
                'article' => '290462',
                'product_id' => 2215,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            456 => 
            array (
                'id' => 614,
                'name' => NULL,
                'article' => '2908122405',
                'product_id' => 2217,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            457 => 
            array (
                'id' => 615,
                'name' => NULL,
                'article' => '2908222405',
                'product_id' => 2218,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            458 => 
            array (
                'id' => 616,
                'name' => NULL,
                'article' => '290812',
                'product_id' => 2219,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            459 => 
            array (
                'id' => 617,
                'name' => NULL,
                'article' => '290822',
                'product_id' => 2220,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            460 => 
            array (
                'id' => 618,
                'name' => NULL,
            'article' => '(29040S) H10E-C2',
                'product_id' => 2626,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            461 => 
            array (
                'id' => 619,
                'name' => NULL,
            'article' => '(29360S) H16E-C',
                'product_id' => 2861,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            462 => 
            array (
                'id' => 620,
                'name' => NULL,
            'article' => '(29042S) H16E-C2',
                'product_id' => 2909,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            463 => 
            array (
                'id' => 621,
                'name' => NULL,
            'article' => '(29044S) H24E-C2',
                'product_id' => 3190,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            464 => 
            array (
                'id' => 622,
                'name' => NULL,
                'article' => '14104164',
                'product_id' => 3510,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            465 => 
            array (
                'id' => 623,
                'name' => NULL,
                'article' => '14103164',
                'product_id' => 3511,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            466 => 
            array (
                'id' => 624,
                'name' => NULL,
                'article' => '14104264',
                'product_id' => 3512,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            467 => 
            array (
                'id' => 625,
                'name' => NULL,
                'article' => '14103264',
                'product_id' => 3513,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            468 => 
            array (
                'id' => 626,
                'name' => NULL,
                'article' => '14104364',
                'product_id' => 3514,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            469 => 
            array (
                'id' => 627,
                'name' => NULL,
                'article' => '14103364',
                'product_id' => 3515,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            470 => 
            array (
                'id' => 628,
                'name' => NULL,
                'article' => '14104464',
                'product_id' => 3516,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            471 => 
            array (
                'id' => 629,
                'name' => NULL,
                'article' => '14103464',
                'product_id' => 3517,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            472 => 
            array (
                'id' => 630,
                'name' => NULL,
                'article' => '14104564',
                'product_id' => 3518,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            473 => 
            array (
                'id' => 631,
                'name' => NULL,
                'article' => '14103564',
                'product_id' => 3519,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            474 => 
            array (
                'id' => 632,
                'name' => NULL,
                'article' => '14104664',
                'product_id' => 3520,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            475 => 
            array (
                'id' => 633,
                'name' => NULL,
                'article' => '14103664',
                'product_id' => 3521,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            476 => 
            array (
                'id' => 634,
                'name' => NULL,
                'article' => '141061',
                'product_id' => 3539,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            477 => 
            array (
                'id' => 635,
                'name' => NULL,
                'article' => '141051',
                'product_id' => 3540,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            478 => 
            array (
                'id' => 636,
                'name' => NULL,
                'article' => '141062',
                'product_id' => 3541,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            479 => 
            array (
                'id' => 637,
                'name' => NULL,
                'article' => '141052',
                'product_id' => 3542,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            480 => 
            array (
                'id' => 638,
                'name' => NULL,
                'article' => '141063',
                'product_id' => 3543,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            481 => 
            array (
                'id' => 639,
                'name' => NULL,
                'article' => '141053',
                'product_id' => 3544,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            482 => 
            array (
                'id' => 640,
                'name' => NULL,
                'article' => '141064',
                'product_id' => 3545,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            483 => 
            array (
                'id' => 641,
                'name' => NULL,
                'article' => '141054',
                'product_id' => 3546,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            484 => 
            array (
                'id' => 642,
                'name' => NULL,
                'article' => '141065',
                'product_id' => 3547,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            485 => 
            array (
                'id' => 643,
                'name' => NULL,
                'article' => '141055',
                'product_id' => 3548,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            486 => 
            array (
                'id' => 644,
                'name' => NULL,
                'article' => '141066',
                'product_id' => 3549,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            487 => 
            array (
                'id' => 645,
                'name' => NULL,
                'article' => '141056',
                'product_id' => 3550,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            488 => 
            array (
                'id' => 646,
                'name' => NULL,
                'article' => '141067',
                'product_id' => 3551,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            489 => 
            array (
                'id' => 647,
                'name' => NULL,
                'article' => '141057',
                'product_id' => 3552,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            490 => 
            array (
                'id' => 648,
                'name' => NULL,
                'article' => '141068',
                'product_id' => 3553,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            491 => 
            array (
                'id' => 649,
                'name' => NULL,
                'article' => '141058',
                'product_id' => 3554,
                'analog_vendor_id' => 2,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            492 => 
            array (
                'id' => 650,
                'name' => 'H3A-TE-2B-M20',
                'article' => '110 003 410 1002',
                'product_id' => 1996,
                'analog_vendor_id' => 4,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            493 => 
            array (
                'id' => 651,
                'name' => 'H3A-BK-1L/W',
                'article' => '110 003 324 1001',
                'product_id' => 2000,
                'analog_vendor_id' => 4,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            494 => 
            array (
                'id' => 652,
                'name' => 'H10B-BK-2L/SC',
                'article' => '111 010 341 1001',
                'product_id' => 2626,
                'analog_vendor_id' => 4,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            495 => 
            array (
                'id' => 653,
                'name' => 'H16B-BK-1L/SC',
                'article' => '111 016 321 1001',
                'product_id' => 2861,
                'analog_vendor_id' => 4,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            496 => 
            array (
                'id' => 654,
                'name' => 'H16B-BK-2L/SC',
                'article' => '111 016 341 1001',
                'product_id' => 2909,
                'analog_vendor_id' => 4,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            497 => 
            array (
                'id' => 655,
                'name' => 'H24B-BK-2L/SC',
                'article' => '111 024 341 1001',
                'product_id' => 3190,
                'analog_vendor_id' => 4,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            498 => 
            array (
                'id' => 656,
                'name' => 'ELM-HA-010-M',
                'article' => NULL,
                'product_id' => 1506,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            499 => 
            array (
                'id' => 657,
                'name' => 'ELM-HA-010-F',
                'article' => NULL,
                'product_id' => 1507,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
        ));
        \DB::table('analogies')->insert(array (
            0 => 
            array (
                'id' => 658,
                'name' => 'ELM-HE-016-M',
                'article' => NULL,
                'product_id' => 1569,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            1 => 
            array (
                'id' => 659,
                'name' => 'ELM-HE-016-F',
                'article' => NULL,
                'product_id' => 1570,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            2 => 
            array (
                'id' => 660,
                'name' => 'ELM-HE-024-M',
                'article' => NULL,
                'product_id' => 1575,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            3 => 
            array (
                'id' => 661,
                'name' => 'ELM-HE-024-F',
                'article' => NULL,
                'product_id' => 1576,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            4 => 
            array (
                'id' => 662,
                'name' => 'ELM-HK-4/0-M',
                'article' => NULL,
                'product_id' => 1725,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            5 => 
            array (
                'id' => 663,
                'name' => 'ELM-HK-4/0-F',
                'article' => NULL,
                'product_id' => 1726,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            6 => 
            array (
                'id' => 664,
                'name' => 'ELM-HK-4/8-M',
                'article' => NULL,
                'product_id' => 1729,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            7 => 
            array (
                'id' => 665,
                'name' => 'ELM-HK-4/8-F',
                'article' => NULL,
                'product_id' => 1730,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            8 => 
            array (
                'id' => 666,
                'name' => 'ELM-H10A-SKH-2g-M25',
                'article' => NULL,
                'product_id' => 2063,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            9 => 
            array (
                'id' => 667,
                'name' => 'ELM-H10A-TKH-2g-M25',
                'article' => NULL,
                'product_id' => 2068,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            10 => 
            array (
                'id' => 668,
                'name' => 'ELM-H10A-SG-1PL-M20',
                'article' => NULL,
                'product_id' => 2074,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            11 => 
            array (
                'id' => 669,
                'name' => 'ELM-H16B-SKH-2g-M32',
                'article' => NULL,
                'product_id' => 2843,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            12 => 
            array (
                'id' => 670,
                'name' => 'ELM-H16B-ST-1PL',
                'article' => NULL,
                'product_id' => 2861,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            13 => 
            array (
                'id' => 671,
                'name' => 'ELM-H16B-SG-1PL-M25',
                'article' => NULL,
                'product_id' => 2864,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            14 => 
            array (
                'id' => 672,
                'name' => 'ELM-H24B-SKH-2g-M32',
                'article' => NULL,
                'product_id' => 3120,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            15 => 
            array (
                'id' => 673,
                'name' => 'ELM-H24B-ST-1PL',
                'article' => NULL,
                'product_id' => 3142,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            16 => 
            array (
                'id' => 674,
                'name' => 'ELM-H24B-SG-1PL-M25',
                'article' => NULL,
                'product_id' => 3145,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            17 => 
            array (
                'id' => 675,
                'name' => 'ELM-H24B-SGH-1PL-2M32',
                'article' => NULL,
                'product_id' => 3158,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            18 => 
            array (
                'id' => 676,
                'name' => 'ELM-M25-P',
                'article' => NULL,
                'product_id' => 8764,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            19 => 
            array (
                'id' => 677,
                'name' => 'ELM-M32-P',
                'article' => NULL,
                'product_id' => 16725,
                'analog_vendor_id' => 5,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            20 => 
            array (
                'id' => 678,
                'name' => 'HDC HA 3 MS',
                'article' => '1498100000',
                'product_id' => 1433,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-09-18 12:41:33',
            ),
            21 => 
            array (
                'id' => 679,
                'name' => 'HDC HA 3 FS',
                'article' => '1498200000',
                'product_id' => 1499,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            22 => 
            array (
                'id' => 680,
                'name' => 'HDC HA 4 MS',
                'article' => '1498300000',
                'product_id' => 1502,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            23 => 
            array (
                'id' => 681,
                'name' => 'HDC HA 4 FS',
                'article' => '1498400000',
                'product_id' => 1503,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            24 => 
            array (
                'id' => 682,
                'name' => 'HDC HA 10 MS',
                'article' => '1650610000',
                'product_id' => 1506,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            25 => 
            array (
                'id' => 683,
                'name' => 'HDC HA 10 FS',
                'article' => '1650620000',
                'product_id' => 1507,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            26 => 
            array (
                'id' => 684,
                'name' => 'HDC HA 10 MC',
                'article' => '1873870000',
                'product_id' => 1508,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            27 => 
            array (
                'id' => 685,
                'name' => 'HDC HA 10 FC',
                'article' => '1873860000',
                'product_id' => 1509,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            28 => 
            array (
                'id' => 686,
                'name' => 'HDC HA 16 MS',
                'article' => '1650770000',
                'product_id' => 1510,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            29 => 
            array (
                'id' => 687,
                'name' => 'HDC HA 16 FS',
                'article' => '1650780000',
                'product_id' => 1511,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            30 => 
            array (
                'id' => 688,
                'name' => 'HDC HA 16 MC',
                'article' => '1873890000',
                'product_id' => 1512,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            31 => 
            array (
                'id' => 689,
                'name' => 'HDC HA 16 FC',
                'article' => '1873880000',
                'product_id' => 1513,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            32 => 
            array (
                'id' => 690,
                'name' => 'HDC HE 6 MS',
                'article' => '1200000000',
                'product_id' => 1554,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            33 => 
            array (
                'id' => 691,
                'name' => 'HDC HE 6 FS',
                'article' => '1200200000',
                'product_id' => 1558,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            34 => 
            array (
                'id' => 692,
                'name' => 'HDC HE 6 MC',
                'article' => '1200400000',
                'product_id' => 1559,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            35 => 
            array (
                'id' => 693,
                'name' => 'HDC HE 6 FC',
                'article' => '1201000000',
                'product_id' => 1560,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            36 => 
            array (
                'id' => 694,
                'name' => 'HDC HE 6 MT',
                'article' => '1745820000',
                'product_id' => 1561,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            37 => 
            array (
                'id' => 695,
                'name' => 'HDC HE 6 FT',
                'article' => '1745760000',
                'product_id' => 1562,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            38 => 
            array (
                'id' => 696,
                'name' => 'HDC HE 10 MS',
                'article' => '1203900000',
                'product_id' => 1563,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            39 => 
            array (
                'id' => 697,
                'name' => 'HDC HE 10 FS',
                'article' => '1204100000',
                'product_id' => 1564,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            40 => 
            array (
                'id' => 698,
                'name' => 'HDC HE 10 MC',
                'article' => '1204300000',
                'product_id' => 1565,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            41 => 
            array (
                'id' => 699,
                'name' => 'HDC HE 10 FC',
                'article' => '1204400000',
                'product_id' => 1566,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            42 => 
            array (
                'id' => 700,
                'name' => 'HDC HE 10 MT',
                'article' => '1745830000',
                'product_id' => 1567,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            43 => 
            array (
                'id' => 701,
                'name' => 'HDC HE 10 FT',
                'article' => '1745770000',
                'product_id' => 1568,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            44 => 
            array (
                'id' => 702,
                'name' => 'HDC HE 16 MS',
                'article' => '1207500000',
                'product_id' => 1569,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            45 => 
            array (
                'id' => 703,
                'name' => 'HDC HE 16 FS',
                'article' => '1207700000',
                'product_id' => 1570,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            46 => 
            array (
                'id' => 704,
                'name' => 'HDC HE 16 MC',
                'article' => '1207900000',
                'product_id' => 1571,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            47 => 
            array (
                'id' => 705,
                'name' => 'HDC HE 16 FC',
                'article' => '1208000000',
                'product_id' => 1572,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            48 => 
            array (
                'id' => 706,
                'name' => 'HDC HE 16 MT',
                'article' => '1745840000',
                'product_id' => 1573,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            49 => 
            array (
                'id' => 707,
                'name' => 'HDC HE 16 FT',
                'article' => '1745780000',
                'product_id' => 1574,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            50 => 
            array (
                'id' => 708,
                'name' => 'HDC HE 24 MS',
                'article' => '1211100000',
                'product_id' => 1575,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            51 => 
            array (
                'id' => 709,
                'name' => 'HDC HE 24 FS',
                'article' => '1211300000',
                'product_id' => 1576,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            52 => 
            array (
                'id' => 710,
                'name' => 'HDC HE 24 MC',
                'article' => '1211500000',
                'product_id' => 1577,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            53 => 
            array (
                'id' => 711,
                'name' => 'HDC HE 24 FC',
                'article' => '1211600000',
                'product_id' => 1578,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            54 => 
            array (
                'id' => 712,
                'name' => 'HDC HE 24 MT',
                'article' => '1745850000',
                'product_id' => 1579,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            55 => 
            array (
                'id' => 713,
                'name' => 'HDC HE 24 FT',
                'article' => '1745790000',
                'product_id' => 1580,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            56 => 
            array (
                'id' => 714,
                'name' => 'HDC HEE 10 MC',
                'article' => '1826830000',
                'product_id' => 1613,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            57 => 
            array (
                'id' => 715,
                'name' => 'HDC HEE 10 FC',
                'article' => '1826840000',
                'product_id' => 1614,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            58 => 
            array (
                'id' => 716,
                'name' => 'HDC HEE 18 MC',
                'article' => '1826810000',
                'product_id' => 1615,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            59 => 
            array (
                'id' => 717,
                'name' => 'HDC HEE 18 FC',
                'article' => '1826820000',
                'product_id' => 1616,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            60 => 
            array (
                'id' => 718,
                'name' => 'HDC HEE 32 MC',
                'article' => '1826790000',
                'product_id' => 1617,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            61 => 
            array (
                'id' => 719,
                'name' => 'HDC HEE 32 FC',
                'article' => '1826800000',
                'product_id' => 1618,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            62 => 
            array (
                'id' => 720,
                'name' => 'HDC HEE 46 MC',
                'article' => '1826770000',
                'product_id' => 1619,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            63 => 
            array (
                'id' => 721,
                'name' => 'HDC HEE 46 FC',
                'article' => '1826780000',
                'product_id' => 1620,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            64 => 
            array (
                'id' => 722,
                'name' => 'HDC HD 7 MC',
                'article' => '1650570000',
                'product_id' => 1644,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            65 => 
            array (
                'id' => 723,
                'name' => 'HDC HD 7 FC',
                'article' => '1650580000',
                'product_id' => 1645,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            66 => 
            array (
                'id' => 724,
                'name' => 'HDC HD 8 MC',
                'article' => '1650590000',
                'product_id' => 1646,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            67 => 
            array (
                'id' => 725,
                'name' => 'HDC HD 8 FC',
                'article' => '1650600000',
                'product_id' => 1647,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            68 => 
            array (
                'id' => 726,
                'name' => 'HDC HD 15 MC',
                'article' => '1650650000',
                'product_id' => 1648,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            69 => 
            array (
                'id' => 727,
                'name' => 'HDC HD 15 FC',
                'article' => '1650660000',
                'product_id' => 1649,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            70 => 
            array (
                'id' => 728,
                'name' => 'HDC HD 25 MC',
                'article' => '1650810000',
                'product_id' => 1650,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            71 => 
            array (
                'id' => 729,
                'name' => 'HDC HD 25 FC',
                'article' => '1650820000',
                'product_id' => 1651,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            72 => 
            array (
                'id' => 730,
                'name' => 'HDC HD 40 MC',
                'article' => '1601710000',
                'product_id' => 1654,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            73 => 
            array (
                'id' => 731,
                'name' => 'HDC HD 40 FC',
                'article' => '1601730000',
                'product_id' => 1655,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            74 => 
            array (
                'id' => 732,
                'name' => 'HDC HD 64 MC',
                'article' => '1601720000',
                'product_id' => 1656,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            75 => 
            array (
                'id' => 733,
                'name' => 'HDC HD 64 FC',
                'article' => '1601740000',
                'product_id' => 1657,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            76 => 
            array (
                'id' => 734,
                'name' => 'HDC HEEE 40 MC',
                'article' => '1528370000',
                'product_id' => 1663,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            77 => 
            array (
                'id' => 735,
                'name' => 'HDC HEEE 40 FC',
                'article' => '1528380000',
                'product_id' => 1665,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            78 => 
            array (
                'id' => 736,
                'name' => 'HDC HEEE 64 MC',
                'article' => '2729580000',
                'product_id' => 1666,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            79 => 
            array (
                'id' => 737,
                'name' => 'HDC HEEE 64 FC',
                'article' => '2729590000',
                'product_id' => 1667,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            80 => 
            array (
                'id' => 738,
                'name' => 'HDC HDD 24 MC',
                'article' => '1651150000',
                'product_id' => 1682,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            81 => 
            array (
                'id' => 739,
                'name' => 'HDC HDD 24 FC',
                'article' => '1651160000',
                'product_id' => 1683,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            82 => 
            array (
                'id' => 740,
                'name' => 'HDC HDD 42 MC',
                'article' => '1651170000',
                'product_id' => 1684,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            83 => 
            array (
                'id' => 741,
                'name' => 'HDC HDD 42 FC',
                'article' => '1651180000',
                'product_id' => 1685,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            84 => 
            array (
                'id' => 742,
                'name' => 'HDC HDD 72 MC',
                'article' => '1651190000',
                'product_id' => 1686,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            85 => 
            array (
                'id' => 743,
                'name' => 'HDC HDD 72 FC',
                'article' => '1651200000',
                'product_id' => 1687,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            86 => 
            array (
                'id' => 744,
                'name' => 'HDC HDD 108 MC',
                'article' => '1651210000',
                'product_id' => 1688,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            87 => 
            array (
                'id' => 745,
                'name' => 'HDC HDD 108 FC',
                'article' => '1651220000',
                'product_id' => 1689,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            88 => 
            array (
                'id' => 746,
                'name' => 'HDC HSB 6 MS',
                'article' => '1498700000',
                'product_id' => 1700,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            89 => 
            array (
                'id' => 747,
                'name' => 'HDC HSB 6 FS',
                'article' => '1498900000',
                'product_id' => 1701,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            90 => 
            array (
                'id' => 748,
                'name' => 'HDC S4/0 MS',
                'article' => '1023220000',
                'product_id' => 1725,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            91 => 
            array (
                'id' => 749,
                'name' => 'HDC S4/0 FS',
                'article' => '1023210000',
                'product_id' => 1726,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            92 => 
            array (
                'id' => 750,
                'name' => 'HDC S4/2 MS',
                'article' => '1023240000',
                'product_id' => 1727,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            93 => 
            array (
                'id' => 751,
                'name' => 'HDC S4/2 FS',
                'article' => '1023230000',
                'product_id' => 1728,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            94 => 
            array (
                'id' => 752,
                'name' => 'HDC S4/8 MS',
                'article' => '1023260000',
                'product_id' => 1729,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            95 => 
            array (
                'id' => 753,
                'name' => 'HDC S4/8 FS',
                'article' => '1023250000',
                'product_id' => 1730,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            96 => 
            array (
                'id' => 754,
                'name' => 'HDC S6 12 SAS',
                'article' => '1790000000',
                'product_id' => 1733,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            97 => 
            array (
                'id' => 755,
                'name' => 'HDC S6 12 SAS',
                'article' => '1790000000',
                'product_id' => 1734,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            98 => 
            array (
                'id' => 756,
                'name' => 'HDC S6 12 BAS',
                'article' => '1790010000',
                'product_id' => 1735,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            99 => 
            array (
                'id' => 757,
                'name' => 'HDC S6 12 BAS',
                'article' => '1790010000',
                'product_id' => 1736,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            100 => 
            array (
                'id' => 758,
                'name' => 'HDC S6/36 MC',
                'article' => '1023320000',
                'product_id' => 1737,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            101 => 
            array (
                'id' => 759,
                'name' => 'HDC S6/36 FC',
                'article' => '1023310000',
                'product_id' => 1738,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            102 => 
            array (
                'id' => 760,
                'name' => 'HDC S12/2 MC',
                'article' => '1023340000',
                'product_id' => 1739,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            103 => 
            array (
                'id' => 761,
                'name' => 'HDC S12/2 FC',
                'article' => '1023330000',
                'product_id' => 1740,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            104 => 
            array (
                'id' => 762,
                'name' => 'HDC S6 6 SAS',
                'article' => '1790030000',
                'product_id' => 1741,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            105 => 
            array (
                'id' => 763,
                'name' => 'HDC S6 6 BAS',
                'article' => '1790020000',
                'product_id' => 1742,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            106 => 
            array (
                'id' => 764,
                'name' => 'HDC S8/0 MAS',
                'article' => '1023360000',
                'product_id' => 1743,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            107 => 
            array (
                'id' => 765,
                'name' => 'HDC S8/0 FAS',
                'article' => '1023350000',
                'product_id' => 1744,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            108 => 
            array (
                'id' => 766,
                'name' => 'HDC S8/24 MC',
                'article' => '1023290000',
                'product_id' => 1746,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            109 => 
            array (
                'id' => 767,
                'name' => 'HDC S8/24 FC',
                'article' => '1023270000',
                'product_id' => 1747,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            110 => 
            array (
                'id' => 768,
                'name' => 'HDC HQ 5 MC',
                'article' => '1912440000',
                'product_id' => 1811,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            111 => 
            array (
                'id' => 769,
                'name' => 'HDC HQ 5 FC',
                'article' => '1912460000',
                'product_id' => 1812,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            112 => 
            array (
                'id' => 770,
                'name' => 'HDC HQ 7 MC',
                'article' => '1003190000',
                'product_id' => 1813,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            113 => 
            array (
                'id' => 771,
                'name' => 'HDC HQ 7 FC',
                'article' => '1003180000',
                'product_id' => 1814,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            114 => 
            array (
                'id' => 772,
                'name' => 'HDC HQ 12 MC',
                'article' => '1993810000',
                'product_id' => 1815,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            115 => 
            array (
                'id' => 773,
                'name' => 'HDC HQ 12 FC',
                'article' => '1993820000',
                'product_id' => 1816,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            116 => 
            array (
                'id' => 774,
                'name' => 'HDC HQ 8 MC',
                'article' => '1919970000',
                'product_id' => 1817,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            117 => 
            array (
                'id' => 775,
                'name' => 'HDC HQ 8 FC',
                'article' => '1919980000',
                'product_id' => 1818,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            118 => 
            array (
                'id' => 776,
                'name' => 'HDC HQ 17 MC',
                'article' => '1003210000',
                'product_id' => 1819,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            119 => 
            array (
                'id' => 777,
                'name' => 'HDC HQ 17 FC',
                'article' => '1003200000',
                'product_id' => 1820,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            120 => 
            array (
                'id' => 778,
                'name' => 'HDC HQ 4/2 MC',
                'article' => '1003170000',
                'product_id' => 1821,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            121 => 
            array (
                'id' => 779,
                'name' => 'HDC HQ 4/2 FC',
                'article' => '1003160000',
                'product_id' => 1822,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            122 => 
            array (
                'id' => 780,
                'name' => 'HDC-C-HD-SM0.14-0.37AG',
                'article' => '1651520000',
                'product_id' => 3510,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            123 => 
            array (
                'id' => 781,
                'name' => 'HDC-C-HD-BM0.14-0.37AG',
                'article' => '1651570000',
                'product_id' => 3511,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            124 => 
            array (
                'id' => 782,
                'name' => 'HDC-C-HD-SM0.5AG',
                'article' => '1651530000',
                'product_id' => 3512,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            125 => 
            array (
                'id' => 783,
                'name' => 'HDC-C-HD-BM0.5AG',
                'article' => '1651580000',
                'product_id' => 3513,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            126 => 
            array (
                'id' => 784,
                'name' => 'HDC-C-HD-SM0.75-1.00AG',
                'article' => '1601750000',
                'product_id' => 3516,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            127 => 
            array (
                'id' => 785,
                'name' => 'HDC-C-HD-BM0.75-1.00AG',
                'article' => '1601760000',
                'product_id' => 3517,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            128 => 
            array (
                'id' => 786,
                'name' => 'HDC-C-HD-SM1.5AG',
                'article' => '1651550000',
                'product_id' => 3518,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            129 => 
            array (
                'id' => 787,
                'name' => 'HDC-C-HD-BM1.5AG',
                'article' => '1651600000',
                'product_id' => 3519,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            130 => 
            array (
                'id' => 788,
                'name' => 'HDC-C-HD-SM2.5AG',
                'article' => '1651560000',
                'product_id' => 3520,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            131 => 
            array (
                'id' => 789,
                'name' => 'HDC-C-HD-BM2.5AG',
                'article' => '1651610000',
                'product_id' => 3521,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            132 => 
            array (
                'id' => 790,
                'name' => 'HDC-C-HD-SM0.14-0.37AU',
                'article' => '1651620000',
                'product_id' => 3522,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            133 => 
            array (
                'id' => 791,
                'name' => 'HDC-C-HD-BM0.14-0.37AU',
                'article' => '1651670000',
                'product_id' => 3523,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            134 => 
            array (
                'id' => 792,
                'name' => 'HDC-C-HD-SM0.5AU',
                'article' => '1651630000',
                'product_id' => 3524,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            135 => 
            array (
                'id' => 793,
                'name' => 'HDC-C-HD-BM0.5AU',
                'article' => '1651680000',
                'product_id' => 3525,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            136 => 
            array (
                'id' => 794,
                'name' => 'HDC-C-HD-SM0.75-1.00AU',
                'article' => '1651640000',
                'product_id' => 3528,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            137 => 
            array (
                'id' => 795,
                'name' => 'HDC-C-HD-BM0.75-1.00AU',
                'article' => '1651690000',
                'product_id' => 3529,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            138 => 
            array (
                'id' => 796,
                'name' => 'HDC-C-HD-SM1.5AU',
                'article' => '1651650000',
                'product_id' => 3530,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            139 => 
            array (
                'id' => 797,
                'name' => 'HDC-C-HD-BM1.5AU',
                'article' => '1651700000',
                'product_id' => 3531,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            140 => 
            array (
                'id' => 798,
                'name' => 'HDC-C-HD-SM2.5AU',
                'article' => '1651660000',
                'product_id' => 3532,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            141 => 
            array (
                'id' => 799,
                'name' => 'HDC-C-HD-BM2.5AU',
                'article' => '1651710000',
                'product_id' => 3533,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            142 => 
            array (
                'id' => 800,
                'name' => 'HDC-C-HE-SM0.5AG',
                'article' => '1200500000',
                'product_id' => 3541,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            143 => 
            array (
                'id' => 801,
                'name' => 'HDC-C-HE-BM0.5AG',
                'article' => '1201100000',
                'product_id' => 3542,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            144 => 
            array (
                'id' => 802,
                'name' => 'HDC-C-HE-SM0.75-1.00AG',
                'article' => '1200600000',
                'product_id' => 3545,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            145 => 
            array (
                'id' => 803,
                'name' => 'HDC-C-HE-BM0.75-1.00AG',
                'article' => '1201200000',
                'product_id' => 3546,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            146 => 
            array (
                'id' => 804,
                'name' => 'HDC-C-HE-SM1.5AG',
                'article' => '1200700000',
                'product_id' => 3547,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            147 => 
            array (
                'id' => 805,
                'name' => 'HDC-C-HE-BM1.5AG',
                'article' => '1201300000',
                'product_id' => 3548,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            148 => 
            array (
                'id' => 806,
                'name' => 'HDC-C-HE-SM2.5AG',
                'article' => '1200800000',
                'product_id' => 3549,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            149 => 
            array (
                'id' => 807,
                'name' => 'HDC-C-HE-BM2.5AG',
                'article' => '1201400000',
                'product_id' => 3550,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            150 => 
            array (
                'id' => 808,
                'name' => 'HDC-C-HE-SM4.0AG',
                'article' => '1200900000',
                'product_id' => 3553,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            151 => 
            array (
                'id' => 809,
                'name' => 'HDC-C-HE-BM4.0AG',
                'article' => '1201500000',
                'product_id' => 3554,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            152 => 
            array (
                'id' => 810,
                'name' => 'HDC-C-HE-SM0.5AU',
                'article' => '1651420000',
                'product_id' => 3557,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            153 => 
            array (
                'id' => 811,
                'name' => 'HDC-C-HE-BM0.5AU',
                'article' => '1651470000',
                'product_id' => 3558,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            154 => 
            array (
                'id' => 812,
                'name' => 'HDC-C-HE-SM0.75-1.00AU',
                'article' => '1651430000',
                'product_id' => 3561,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            155 => 
            array (
                'id' => 813,
                'name' => 'HDC-C-HE-BM0.75-1.00AU',
                'article' => '1651480000',
                'product_id' => 3562,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            156 => 
            array (
                'id' => 814,
                'name' => 'HDC-C-HE-SM1.5AU',
                'article' => '1651440000',
                'product_id' => 3563,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            157 => 
            array (
                'id' => 815,
                'name' => 'HDC-C-HE-BM1.5AU',
                'article' => '1651490000',
                'product_id' => 3564,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            158 => 
            array (
                'id' => 816,
                'name' => 'HDC-C-HE-SM2.5AU',
                'article' => '1651450000',
                'product_id' => 3565,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            159 => 
            array (
                'id' => 817,
                'name' => 'HDC-C-HE-BM2.5AU',
                'article' => '1651500000',
                'product_id' => 3566,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            160 => 
            array (
                'id' => 818,
                'name' => 'HDC-C-HE-SM4.0AU',
                'article' => '1651460000',
                'product_id' => 3567,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            161 => 
            array (
                'id' => 819,
                'name' => 'HDC-C-HE-BM4.0AU',
                'article' => '1651510000',
                'product_id' => 3568,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            162 => 
            array (
                'id' => 820,
                'name' => 'HDC C HX SM1.5AG',
                'article' => '1002910000',
                'product_id' => 3574,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            163 => 
            array (
                'id' => 821,
                'name' => 'HDC C HX BM1.5AG',
                'article' => '1002950000',
                'product_id' => 3575,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            164 => 
            array (
                'id' => 822,
                'name' => 'HDC C HX SM2.5AG',
                'article' => '1002920000',
                'product_id' => 3576,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            165 => 
            array (
                'id' => 823,
                'name' => 'HDC C HX BM2.5AG',
                'article' => '1002960000',
                'product_id' => 3577,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            166 => 
            array (
                'id' => 824,
                'name' => 'HDC C HX SM4.0AG',
                'article' => '1002930000',
                'product_id' => 3578,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            167 => 
            array (
                'id' => 825,
                'name' => 'HDC C HX BM4.0AG',
                'article' => '1002970000',
                'product_id' => 3579,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            168 => 
            array (
                'id' => 826,
                'name' => 'HDC C HX SM6.0AG',
                'article' => '1002940000',
                'product_id' => 3580,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            169 => 
            array (
                'id' => 827,
                'name' => 'HDC C HX BM6.0AG',
                'article' => '1002980000',
                'product_id' => 3581,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            170 => 
            array (
                'id' => 828,
                'name' => 'HDC C HX SM10.0AG',
                'article' => '1526150000',
                'product_id' => 3582,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            171 => 
            array (
                'id' => 829,
                'name' => 'HDC C HX BM10.0AG',
                'article' => '1526190000',
                'product_id' => 3583,
                'analog_vendor_id' => 7,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            172 => 
            array (
                'id' => 830,
                'name' => 'HZW-HA-003-M',
                'article' => NULL,
                'product_id' => 1433,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-09-18 12:41:33',
            ),
            173 => 
            array (
                'id' => 831,
                'name' => 'HZW-HA-003-F',
                'article' => NULL,
                'product_id' => 1499,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            174 => 
            array (
                'id' => 832,
                'name' => 'HZW-HA-004-M',
                'article' => NULL,
                'product_id' => 1502,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            175 => 
            array (
                'id' => 833,
                'name' => 'HZW-HA-004-F',
                'article' => NULL,
                'product_id' => 1503,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            176 => 
            array (
                'id' => 834,
                'name' => 'HZW-HA-010-M',
                'article' => NULL,
                'product_id' => 1506,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            177 => 
            array (
                'id' => 835,
                'name' => 'HZW-HA-010-F',
                'article' => NULL,
                'product_id' => 1507,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            178 => 
            array (
                'id' => 836,
            'name' => 'HZW-HA-016-M (1-16)',
                'article' => NULL,
                'product_id' => 1510,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            179 => 
            array (
                'id' => 837,
            'name' => 'HZW-HA-016-F (1-16)',
                'article' => NULL,
                'product_id' => 1511,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            180 => 
            array (
                'id' => 838,
            'name' => 'HZW-HA-032-M(1-16)(17-32)',
                'article' => NULL,
                'product_id' => 1514,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            181 => 
            array (
                'id' => 839,
            'name' => 'HZW-HA-032-F(1-16)(17-32)',
                'article' => NULL,
                'product_id' => 1515,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            182 => 
            array (
                'id' => 840,
                'name' => 'HZW-HE-006-M',
                'article' => NULL,
                'product_id' => 1554,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            183 => 
            array (
                'id' => 841,
                'name' => 'HZW-HE-006-F',
                'article' => NULL,
                'product_id' => 1558,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            184 => 
            array (
                'id' => 842,
                'name' => 'HZW-HE-010-M',
                'article' => NULL,
                'product_id' => 1563,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            185 => 
            array (
                'id' => 843,
                'name' => 'HZW-HE-010-F',
                'article' => NULL,
                'product_id' => 1564,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            186 => 
            array (
                'id' => 844,
            'name' => 'HZW-HE-016-M(1-16)',
                'article' => NULL,
                'product_id' => 1569,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            187 => 
            array (
                'id' => 845,
            'name' => 'HZW-HE-016-F(1-16)',
                'article' => NULL,
                'product_id' => 1570,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            188 => 
            array (
                'id' => 846,
            'name' => 'HZW-HE-024-M(1-24)',
                'article' => NULL,
                'product_id' => 1575,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            189 => 
            array (
                'id' => 847,
            'name' => 'HZW-HE-024-F(1-24)',
                'article' => NULL,
                'product_id' => 1576,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            190 => 
            array (
                'id' => 848,
            'name' => 'HZW-HE-032-M(1-16)(17-32)',
                'article' => NULL,
                'product_id' => 1581,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            191 => 
            array (
                'id' => 849,
            'name' => 'HZW-HE-032-F(1-16)(17-32)',
                'article' => NULL,
                'product_id' => 1582,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            192 => 
            array (
                'id' => 850,
            'name' => 'HZW-HE-048-M(1-24)(25-48)',
                'article' => NULL,
                'product_id' => 1587,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            193 => 
            array (
                'id' => 851,
            'name' => 'HZW-HE-048-F(1-24)(25-48)',
                'article' => NULL,
                'product_id' => 1588,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            194 => 
            array (
                'id' => 852,
                'name' => 'HZW-HEE-010-MC',
                'article' => NULL,
                'product_id' => 1613,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            195 => 
            array (
                'id' => 853,
                'name' => 'HZW-HEE-010-FC',
                'article' => NULL,
                'product_id' => 1614,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            196 => 
            array (
                'id' => 854,
                'name' => 'HZW-HEE-018-MC',
                'article' => NULL,
                'product_id' => 1615,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            197 => 
            array (
                'id' => 855,
                'name' => 'HZW-HEE-018-FC',
                'article' => NULL,
                'product_id' => 1616,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            198 => 
            array (
                'id' => 856,
            'name' => 'HZW-HEE-032-M(1-32)',
                'article' => NULL,
                'product_id' => 1617,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            199 => 
            array (
                'id' => 857,
            'name' => 'HZW-HEE-032-F(1-32)',
                'article' => NULL,
                'product_id' => 1618,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            200 => 
            array (
                'id' => 858,
            'name' => 'HZW-HEE-046-MC(1-46)',
                'article' => NULL,
                'product_id' => 1619,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            201 => 
            array (
                'id' => 859,
            'name' => 'HZW-HEE-046-FC(1-46)',
                'article' => NULL,
                'product_id' => 1620,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            202 => 
            array (
                'id' => 860,
            'name' => 'HZW-HEE-064-MC(1-32)(33-64)',
                'article' => NULL,
                'product_id' => 1621,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            203 => 
            array (
                'id' => 861,
            'name' => 'HZW-HEE-064-FC(1-32)(33-64)',
                'article' => NULL,
                'product_id' => 1622,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            204 => 
            array (
                'id' => 862,
            'name' => 'HZW-HEE-092-MC(1-46)(47-92)',
                'article' => NULL,
                'product_id' => 1623,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            205 => 
            array (
                'id' => 863,
            'name' => 'HZW-HEE-092-FC(1-46)(47-92)',
                'article' => NULL,
                'product_id' => 1624,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            206 => 
            array (
                'id' => 864,
                'name' => 'HZW-HD-007-MC',
                'article' => NULL,
                'product_id' => 1644,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            207 => 
            array (
                'id' => 865,
                'name' => 'HZW-HD-007-FC',
                'article' => NULL,
                'product_id' => 1645,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            208 => 
            array (
                'id' => 866,
                'name' => 'HZW-HD-008-MC',
                'article' => NULL,
                'product_id' => 1646,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            209 => 
            array (
                'id' => 867,
                'name' => 'HZW-HD-008-FC',
                'article' => NULL,
                'product_id' => 1647,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            210 => 
            array (
                'id' => 868,
                'name' => 'HZW-HD-015-MC',
                'article' => NULL,
                'product_id' => 1648,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            211 => 
            array (
                'id' => 869,
                'name' => 'HZW-HD-015-FC',
                'article' => NULL,
                'product_id' => 1649,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            212 => 
            array (
                'id' => 870,
                'name' => 'HZW-HD-025-MC',
                'article' => NULL,
                'product_id' => 1650,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            213 => 
            array (
                'id' => 871,
                'name' => 'HZW-HD-025-FC',
                'article' => NULL,
                'product_id' => 1651,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            214 => 
            array (
                'id' => 872,
                'name' => 'HZW-HD-050-MC',
                'article' => NULL,
                'product_id' => 1652,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            215 => 
            array (
                'id' => 873,
                'name' => 'HZW-HD-050-FC',
                'article' => NULL,
                'product_id' => 1653,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            216 => 
            array (
                'id' => 874,
                'name' => 'HZW-HD-040-MC',
                'article' => NULL,
                'product_id' => 1654,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            217 => 
            array (
                'id' => 875,
                'name' => 'HZW-HD-040-FC',
                'article' => NULL,
                'product_id' => 1655,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            218 => 
            array (
                'id' => 876,
                'name' => 'HZW-HD-064-MC',
                'article' => NULL,
                'product_id' => 1656,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            219 => 
            array (
                'id' => 877,
                'name' => 'HZW-HD-064-FC',
                'article' => NULL,
                'product_id' => 1657,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            220 => 
            array (
                'id' => 878,
                'name' => 'HZW-HD-080-MC',
                'article' => NULL,
                'product_id' => 1658,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            221 => 
            array (
                'id' => 879,
                'name' => 'HZW-HD-080-FC',
                'article' => NULL,
                'product_id' => 1659,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            222 => 
            array (
                'id' => 880,
                'name' => 'HZW-HD-128-MC',
                'article' => NULL,
                'product_id' => 1660,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            223 => 
            array (
                'id' => 881,
                'name' => 'HZW-HD-128-FC',
                'article' => NULL,
                'product_id' => 1661,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            224 => 
            array (
                'id' => 882,
                'name' => 'HZW-HDD-024-MC',
                'article' => NULL,
                'product_id' => 1682,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            225 => 
            array (
                'id' => 883,
                'name' => 'HZW-HDD-024-FC',
                'article' => NULL,
                'product_id' => 1683,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            226 => 
            array (
                'id' => 884,
                'name' => 'HZW-HDD-042-MC',
                'article' => NULL,
                'product_id' => 1684,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            227 => 
            array (
                'id' => 885,
                'name' => 'HZW-HDD-042-FC',
                'article' => NULL,
                'product_id' => 1685,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            228 => 
            array (
                'id' => 886,
            'name' => 'HZW-HDD-072-MC(1-72)',
                'article' => NULL,
                'product_id' => 1686,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            229 => 
            array (
                'id' => 887,
            'name' => 'HZW-HDD-072-FC(1-72)',
                'article' => NULL,
                'product_id' => 1687,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            230 => 
            array (
                'id' => 888,
            'name' => 'HZW-HDD-108-MC(1-108)',
                'article' => NULL,
                'product_id' => 1688,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            231 => 
            array (
                'id' => 889,
            'name' => 'HZW-HDD-108-FC(1-108)',
                'article' => NULL,
                'product_id' => 1689,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            232 => 
            array (
                'id' => 890,
            'name' => 'HZW-HDD-144-MC(1-72)(73-144)',
                'article' => NULL,
                'product_id' => 1690,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            233 => 
            array (
                'id' => 891,
            'name' => 'HZW-HDD-144-FC(1-72)(73-144)',
                'article' => NULL,
                'product_id' => 1691,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            234 => 
            array (
                'id' => 892,
            'name' => 'HZW-HDD-216-MC(1-108)(109-216)',
                'article' => NULL,
                'product_id' => 1692,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            235 => 
            array (
                'id' => 893,
            'name' => 'HZW-HDD-216-FC(1-108)(109-216)',
                'article' => NULL,
                'product_id' => 1693,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            236 => 
            array (
                'id' => 894,
                'name' => 'HZW-HSB-006-M',
                'article' => NULL,
                'product_id' => 1700,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            237 => 
            array (
                'id' => 895,
                'name' => 'HZW-HSB-006-F',
                'article' => NULL,
                'product_id' => 1701,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            238 => 
            array (
                'id' => 896,
            'name' => 'HZW-HSB-012-M 2*(1-6) ',
                'article' => NULL,
                'product_id' => 1702,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            239 => 
            array (
                'id' => 897,
            'name' => 'HZW-HSB-012-F 2*(1-6)',
                'article' => NULL,
                'product_id' => 1703,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            240 => 
            array (
                'id' => 898,
                'name' => 'HZW-HK-4/0-M',
                'article' => NULL,
                'product_id' => 1725,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            241 => 
            array (
                'id' => 899,
                'name' => 'HZW-HK-4/0-F',
                'article' => NULL,
                'product_id' => 1726,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            242 => 
            array (
                'id' => 900,
                'name' => 'HZW-HK-4/2-M',
                'article' => NULL,
                'product_id' => 1727,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            243 => 
            array (
                'id' => 901,
                'name' => 'HZW-HK-4/2-F',
                'article' => NULL,
                'product_id' => 1728,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            244 => 
            array (
                'id' => 902,
                'name' => 'HZW-HK-4/8-M',
                'article' => NULL,
                'product_id' => 1729,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            245 => 
            array (
                'id' => 903,
                'name' => 'HZW-HK-4/8-F',
                'article' => NULL,
                'product_id' => 1730,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            246 => 
            array (
                'id' => 904,
                'name' => 'HZW-HK-8/24-MC',
                'article' => NULL,
                'product_id' => 1746,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            247 => 
            array (
                'id' => 905,
                'name' => 'HZW-HK-8/24-FC',
                'article' => NULL,
                'product_id' => 1747,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            248 => 
            array (
                'id' => 906,
                'name' => 'HZW-HQ-005/0-MC',
                'article' => NULL,
                'product_id' => 1811,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            249 => 
            array (
                'id' => 907,
                'name' => 'HZW-HQ-005/0-FC',
                'article' => NULL,
                'product_id' => 1812,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            250 => 
            array (
                'id' => 908,
                'name' => 'HZW-HQ-007/0-MC',
                'article' => NULL,
                'product_id' => 1813,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            251 => 
            array (
                'id' => 909,
                'name' => 'HZW-HQ-007/0-FC',
                'article' => NULL,
                'product_id' => 1814,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            252 => 
            array (
                'id' => 910,
                'name' => 'HZW-HQ-012/0-MC',
                'article' => NULL,
                'product_id' => 1815,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            253 => 
            array (
                'id' => 911,
                'name' => 'HZW-HQ-012/0-FC',
                'article' => NULL,
                'product_id' => 1816,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            254 => 
            array (
                'id' => 912,
                'name' => 'HZW-HF6B-UA',
                'article' => NULL,
                'product_id' => 1880,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            255 => 
            array (
                'id' => 913,
                'name' => 'HZW-HF6B-LA',
                'article' => NULL,
                'product_id' => 1881,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            256 => 
            array (
                'id' => 914,
                'name' => 'HZW-HF10B-UA',
                'article' => NULL,
                'product_id' => 1882,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            257 => 
            array (
                'id' => 915,
                'name' => 'HZW-HF10B-LA',
                'article' => NULL,
                'product_id' => 1883,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            258 => 
            array (
                'id' => 916,
                'name' => 'HZW-HF16B-UA',
                'article' => NULL,
                'product_id' => 1884,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            259 => 
            array (
                'id' => 917,
                'name' => 'HZW-HF16B-LA',
                'article' => NULL,
                'product_id' => 1885,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            260 => 
            array (
                'id' => 918,
                'name' => 'HZW-HF24B-UA',
                'article' => NULL,
                'product_id' => 1886,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            261 => 
            array (
                'id' => 919,
                'name' => 'HZW-HF24B-LA',
                'article' => NULL,
                'product_id' => 1887,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            262 => 
            array (
                'id' => 920,
            'name' => 'HZW-H2MK-001.1-M (25-40)',
                'article' => NULL,
                'product_id' => 1888,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            263 => 
            array (
                'id' => 921,
            'name' => 'HZW-H2MK-001.2-M (40-70)',
                'article' => NULL,
                'product_id' => 1889,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            264 => 
            array (
                'id' => 922,
            'name' => 'HZW-H2MK-001.1-F (25-40)',
                'article' => NULL,
                'product_id' => 1890,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            265 => 
            array (
                'id' => 923,
            'name' => 'HZW-H2MK-001.2-F (40-70)',
                'article' => NULL,
                'product_id' => 1891,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            266 => 
            array (
                'id' => 924,
            'name' => 'HZW-H2MK-002.1-M (10-25)',
                'article' => NULL,
                'product_id' => 1896,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            267 => 
            array (
                'id' => 925,
            'name' => 'HZW-H2MK-002.2-M (16-35)',
                'article' => NULL,
                'product_id' => 1897,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            268 => 
            array (
                'id' => 926,
            'name' => 'HZW-H2MK-002.1-F (10-25)',
                'article' => NULL,
                'product_id' => 1898,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            269 => 
            array (
                'id' => 927,
            'name' => 'HZW-H2MK-002.2-F (16-35)',
                'article' => NULL,
                'product_id' => 1899,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            270 => 
            array (
                'id' => 928,
            'name' => 'HZW-HMK7-002.1-M (6-16)',
                'article' => NULL,
                'product_id' => 1902,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            271 => 
            array (
                'id' => 929,
            'name' => 'HZW-HMK7-002.2-M (14-22)',
                'article' => NULL,
                'product_id' => 1903,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            272 => 
            array (
                'id' => 930,
            'name' => 'HZW-HMK7-002.1-F (6-16)',
                'article' => NULL,
                'product_id' => 1904,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            273 => 
            array (
                'id' => 931,
            'name' => 'HZW-HMK7-002.2-F (14-22)',
                'article' => NULL,
                'product_id' => 1905,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            274 => 
            array (
                'id' => 932,
            'name' => 'HZW-HMK2-002.1-M (2.5-8)',
                'article' => NULL,
                'product_id' => 1909,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            275 => 
            array (
                'id' => 933,
            'name' => 'HZW-HMK2-002.2-M (6-10)',
                'article' => NULL,
                'product_id' => 1910,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            276 => 
            array (
                'id' => 934,
            'name' => 'HZW-HMK2-002.1-F (2.5-8)',
                'article' => NULL,
                'product_id' => 1911,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            277 => 
            array (
                'id' => 935,
            'name' => 'HZW-HMK2-002.2-F (6-10)',
                'article' => NULL,
                'product_id' => 1912,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            278 => 
            array (
                'id' => 936,
                'name' => 'HZW-HMK2-002-MC',
                'article' => NULL,
                'product_id' => 1913,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            279 => 
            array (
                'id' => 937,
                'name' => 'HZW-HMK2-002-FC',
                'article' => NULL,
                'product_id' => 1914,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            280 => 
            array (
                'id' => 938,
            'name' => 'HZW-HMK3-003.1-M (2.5-8)',
                'article' => NULL,
                'product_id' => 1916,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            281 => 
            array (
                'id' => 939,
            'name' => 'HZW-HMK3-003.2-M (6-10)',
                'article' => NULL,
                'product_id' => 1917,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            282 => 
            array (
                'id' => 940,
            'name' => 'HZW-HMK3-003.1-F (2.5-8)',
                'article' => NULL,
                'product_id' => 1919,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            283 => 
            array (
                'id' => 941,
            'name' => 'HZW-HMK3-003.2-F (6-10)',
                'article' => NULL,
                'product_id' => 1920,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            284 => 
            array (
                'id' => 942,
                'name' => 'HZW-HMK3-003-MC',
                'article' => NULL,
                'product_id' => 1921,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            285 => 
            array (
                'id' => 943,
                'name' => 'HZW-HMK3-003-FC',
                'article' => NULL,
                'product_id' => 1922,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            286 => 
            array (
                'id' => 944,
                'name' => 'HZW-HMK4-004-MC',
                'article' => NULL,
                'product_id' => 1923,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            287 => 
            array (
                'id' => 945,
                'name' => 'HZW-HMK4-004-FC',
                'article' => NULL,
                'product_id' => 1924,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            288 => 
            array (
                'id' => 946,
                'name' => 'HZW-HMKE-005-MS',
                'article' => NULL,
                'product_id' => 1925,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            289 => 
            array (
                'id' => 947,
                'name' => 'HZW-HMKE-005-FS',
                'article' => NULL,
                'product_id' => 1926,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            290 => 
            array (
                'id' => 948,
                'name' => 'HZW-HMK6-006-MC',
                'article' => NULL,
                'product_id' => 1927,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            291 => 
            array (
                'id' => 949,
                'name' => 'HZW-HMK6-006-FC',
                'article' => NULL,
                'product_id' => 1928,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            292 => 
            array (
                'id' => 950,
                'name' => 'HZW-HVME-006-MC',
                'article' => NULL,
                'product_id' => 1929,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            293 => 
            array (
                'id' => 951,
                'name' => 'HZW-HVME-006-FC',
                'article' => NULL,
                'product_id' => 1930,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            294 => 
            array (
                'id' => 952,
                'name' => 'HZW-HMK8-008-MC',
                'article' => NULL,
                'product_id' => 1931,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            295 => 
            array (
                'id' => 953,
                'name' => 'HZW-HMK8-008-FC',
                'article' => NULL,
                'product_id' => 1932,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            296 => 
            array (
                'id' => 954,
                'name' => 'HZW-HMEE-020-MC',
                'article' => NULL,
                'product_id' => 1933,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            297 => 
            array (
                'id' => 955,
                'name' => 'HZW-HMEE-020-FC',
                'article' => NULL,
                'product_id' => 1934,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            298 => 
            array (
                'id' => 956,
                'name' => 'HZW-HMKD-012-MC',
                'article' => NULL,
                'product_id' => 1935,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            299 => 
            array (
                'id' => 957,
                'name' => 'HZW-HMKD-012-FC',
                'article' => NULL,
                'product_id' => 1936,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            300 => 
            array (
                'id' => 958,
                'name' => 'HZW-HMDD-017-MC',
                'article' => NULL,
                'product_id' => 1937,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            301 => 
            array (
                'id' => 959,
                'name' => 'HZW-HMDD-017-FC',
                'article' => NULL,
                'product_id' => 1938,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            302 => 
            array (
                'id' => 960,
                'name' => 'HZW-HMP-002',
                'article' => NULL,
                'product_id' => 1943,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            303 => 
            array (
                'id' => 961,
                'name' => 'HZW-HMP-003',
                'article' => NULL,
                'product_id' => 1944,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            304 => 
            array (
                'id' => 962,
                'name' => 'HZW-HSB-004-M',
                'article' => NULL,
                'product_id' => 8257,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            305 => 
            array (
                'id' => 963,
                'name' => 'HZW-HSB-004-F',
                'article' => NULL,
                'product_id' => 8258,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            306 => 
            array (
                'id' => 964,
                'name' => 'HZW-HMKX-003/4-MC',
                'article' => NULL,
                'product_id' => 8280,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            307 => 
            array (
                'id' => 965,
                'name' => 'HZW-HMKX-003/4-FC',
                'article' => NULL,
                'product_id' => 8281,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            308 => 
            array (
                'id' => 966,
                'name' => 'HZW-HM-RJ45-M',
                'article' => NULL,
                'product_id' => 8282,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            309 => 
            array (
                'id' => 967,
                'name' => 'HZW-HM-RJ45-F',
                'article' => NULL,
                'product_id' => 8283,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            310 => 
            array (
                'id' => 968,
                'name' => 'HZW-HM-APT',
                'article' => NULL,
                'product_id' => 8284,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            311 => 
            array (
                'id' => 969,
                'name' => 'HZW-PCM-6.0',
                'article' => NULL,
                'product_id' => 8285,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            312 => 
            array (
                'id' => 970,
                'name' => 'HZW-PCF-6.0',
                'article' => NULL,
                'product_id' => 8286,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            313 => 
            array (
                'id' => 971,
                'name' => 'HZW-PCFS-6.0',
                'article' => NULL,
                'product_id' => 8287,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            314 => 
            array (
                'id' => 972,
                'name' => 'HZW-PCM-4.0',
                'article' => NULL,
                'product_id' => 8288,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            315 => 
            array (
                'id' => 973,
                'name' => 'HZW-PCF-4.0',
                'article' => NULL,
                'product_id' => 8289,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            316 => 
            array (
                'id' => 974,
                'name' => 'HZW-PCFS-4.0',
                'article' => NULL,
                'product_id' => 8290,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            317 => 
            array (
                'id' => 975,
                'name' => 'HZW-PCM-3.0',
                'article' => NULL,
                'product_id' => 8291,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            318 => 
            array (
                'id' => 976,
                'name' => 'HZW-PCF-3.0',
                'article' => NULL,
                'product_id' => 8292,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            319 => 
            array (
                'id' => 977,
                'name' => 'HZW-PCFS-3.0',
                'article' => NULL,
                'product_id' => 8293,
                'analog_vendor_id' => 6,
                'created_at' => '2024-06-28 16:54:26',
                'updated_at' => '2024-06-28 16:54:27',
            ),
            320 => 
            array (
                'id' => 978,
                'name' => '',
                'article' => '',
                'product_id' => 1433,
                'analog_vendor_id' => 1,
                'created_at' => '2024-09-18 12:10:55',
                'updated_at' => '2024-09-18 12:41:33',
            ),
            321 => 
            array (
                'id' => 979,
                'name' => NULL,
                'article' => NULL,
                'product_id' => 1433,
                'analog_vendor_id' => 4,
                'created_at' => '2024-09-18 12:10:55',
                'updated_at' => '2024-09-18 12:41:33',
            ),
            322 => 
            array (
                'id' => 980,
                'name' => NULL,
                'article' => NULL,
                'product_id' => 1433,
                'analog_vendor_id' => 5,
                'created_at' => '2024-09-18 12:10:55',
                'updated_at' => '2024-09-18 12:41:33',
            ),
            323 => 
            array (
                'id' => 981,
                'name' => NULL,
                'article' => NULL,
                'product_id' => 1433,
                'analog_vendor_id' => 8,
                'created_at' => '2024-09-18 12:10:55',
                'updated_at' => '2024-09-18 12:41:33',
            ),
        ));
        
        
    }
}