<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PropertyValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_values')->delete();
        
        \DB::table('property_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'value' => ' 0.14 - 2.5 mm²',
            ),
            1 => 
            array (
                'id' => 2,
                'value' => ' 10 - 35 mm²',
            ),
            2 => 
            array (
                'id' => 3,
                'value' => '-40…+100 °С',
            ),
            3 => 
            array (
                'id' => 4,
                'value' => '-40...+100°C',
            ),
            4 => 
            array (
                'id' => 5,
                'value' => '-40...+120°C',
            ),
            5 => 
            array (
                'id' => 6,
                'value' => '-40…+125°C',
            ),
            6 => 
            array (
                'id' => 7,
                'value' => '-40…+80°C',
            ),
            7 => 
            array (
                'id' => 8,
                'value' => '-40…+85°C',
            ),
            8 => 
            array (
                'id' => 9,
                'value' => '«мама»',
            ),
            9 => 
            array (
                'id' => 10,
                'value' => '«папа»',
            ),
            10 => 
            array (
                'id' => 11,
                'value' => '«петля»',
            ),
            11 => 
            array (
                'id' => 12,
            'value' => '(100A) 16.0 - 35.0 мм² / (16A) 0.2 - 2.5 мм²',
            ),
            12 => 
            array (
                'id' => 13,
            'value' => '(100A): 16 - 35 mm² / (16A): 0.2 - 2.5 mm²',
            ),
            13 => 
            array (
                'id' => 14,
            'value' => '(100A): 16 - 35 mm²; (16A): 0.2 - 2.5 mm²',
            ),
            14 => 
            array (
                'id' => 15,
            'value' => '(100A): 5 - 2 / (16A): 24 - 13',
            ),
            15 => 
            array (
                'id' => 16,
            'value' => '(100A): 5 - 2; (16A): 24 - 13',
            ),
            16 => 
            array (
                'id' => 17,
            'value' => '(16A): 0.5 - 4 mm² / (10A): 0.14 - 2.5 mm²',
            ),
            17 => 
            array (
                'id' => 18,
            'value' => '(16A): 20 - 12 / (10A): 25 - 14',
            ),
            18 => 
            array (
                'id' => 19,
            'value' => '(40A) 1.5 - 6 mm² / (10A) 0.14 - 2.5 mm²',
            ),
            19 => 
            array (
                'id' => 20,
            'value' => '(40A) 4.0 - 10.0 мм² / (16A) 1.0 - 2.5 мм²',
            ),
            20 => 
            array (
                'id' => 21,
            'value' => '(40A): 1.5 - 6 mm² / (10A): 0.14 - 2.5 mm²',
            ),
            21 => 
            array (
                'id' => 22,
            'value' => '(40A): 10 - 8 / (10A): 24 - 14',
            ),
            22 => 
            array (
                'id' => 23,
            'value' => '(40A): 12 - 8 / (16A): 18 - 14',
            ),
            23 => 
            array (
                'id' => 24,
            'value' => '(40A): 12 - 8; (16A): 18 - 14',
            ),
            24 => 
            array (
                'id' => 25,
            'value' => '(40A): 14 - 8 / (10A): 24 - 14',
            ),
            25 => 
            array (
                'id' => 26,
            'value' => '(40A): 16 - 10 / (10A): 26 - 14',
            ),
            26 => 
            array (
                'id' => 27,
            'value' => '(40A): 2.5 - 8 mm² / (10A): 0.2 - 2.5 mm²',
            ),
            27 => 
            array (
                'id' => 28,
            'value' => '(40A): 4 - 10 mm² / (16A): 1 - 2.5 mm²',
            ),
            28 => 
            array (
                'id' => 29,
            'value' => '(40A): 4 - 10 mm²; (16A): 1 - 2.5 mm²',
            ),
            29 => 
            array (
                'id' => 30,
            'value' => '(40A): 6 - 10 mm² / (10A): 0.2 - 2.5 mm²',
            ),
            30 => 
            array (
                'id' => 31,
            'value' => '(70A): 10 - 22 mm² / (16A): 0.14 - 4.0 mm²',
            ),
            31 => 
            array (
                'id' => 32,
            'value' => '(70A): 6 - 16 mm² / (16A): 0.14 - 4.0 mm²',
            ),
            32 => 
            array (
                'id' => 33,
            'value' => '(80A) 1.5 - 16.0 мм² / (16A) 0.5 - 2.5 мм²',
            ),
            33 => 
            array (
                'id' => 34,
            'value' => '(80A): 1.5 - 16 mm² / (16A): 0.5 - 2.5 mm²',
            ),
            34 => 
            array (
                'id' => 35,
            'value' => '(80A): 1.5 - 16 mm²; (16A): 0.5 - 2.5 mm²',
            ),
            35 => 
            array (
                'id' => 36,
            'value' => '(80A): 16 - 6 / (16A): 20 - 14',
            ),
            36 => 
            array (
                'id' => 37,
            'value' => '(80A): 16 - 6; (16A): 20 - 14',
            ),
            37 => 
            array (
                'id' => 38,
                'value' => '≤0.3 мОм',
            ),
            38 => 
            array (
                'id' => 39,
                'value' => '≤1 мОм',
            ),
            39 => 
            array (
                'id' => 40,
                'value' => '≤3 мОм',
            ),
            40 => 
            array (
                'id' => 41,
                'value' => '0.09 - 0.25 мм²',
            ),
            41 => 
            array (
                'id' => 42,
                'value' => '0.09 - 0.52 mm²',
            ),
            42 => 
            array (
                'id' => 43,
                'value' => '0.09 - 0.82 mm²',
            ),
            43 => 
            array (
                'id' => 44,
                'value' => '0.13 - 0.33 мм²',
            ),
            44 => 
            array (
                'id' => 45,
                'value' => '0.14 - 0.37 мм²',
            ),
            45 => 
            array (
                'id' => 46,
                'value' => '0.14 - 2.5 mm²',
            ),
            46 => 
            array (
                'id' => 47,
                'value' => '0.14 - 2.5 мм²',
            ),
            47 => 
            array (
                'id' => 48,
                'value' => '0.14 - 4 mm²',
            ),
            48 => 
            array (
                'id' => 49,
                'value' => '0.14 - 4.0 mm²',
            ),
            49 => 
            array (
                'id' => 50,
                'value' => '0.2 - 2.5 mm²',
            ),
            50 => 
            array (
                'id' => 51,
                'value' => '0.33 - 0.52 мм²',
            ),
            51 => 
            array (
                'id' => 52,
                'value' => '0.33 - 0.82 мм²',
            ),
            52 => 
            array (
                'id' => 53,
                'value' => '0.5 - 2.5 mm²',
            ),
            53 => 
            array (
                'id' => 54,
                'value' => '0.5 мм²',
            ),
            54 => 
            array (
                'id' => 55,
                'value' => '0.75 мм²',
            ),
            55 => 
            array (
                'id' => 56,
                'value' => '1',
            ),
            56 => 
            array (
                'id' => 57,
                'value' => '1 + экранирование',
            ),
            57 => 
            array (
                'id' => 58,
                'value' => '1.0 - 2.5 mm²',
            ),
            58 => 
            array (
                'id' => 59,
                'value' => '1.0 - 2.5 мм²',
            ),
            59 => 
            array (
                'id' => 60,
                'value' => '1.0 – 2.5 mm²',
            ),
            60 => 
            array (
                'id' => 61,
                'value' => '1.0 мм²',
            ),
            61 => 
            array (
                'id' => 62,
                'value' => '1.5 - 10 mm²',
            ),
            62 => 
            array (
                'id' => 63,
                'value' => '1.5 - 16 mm²',
            ),
            63 => 
            array (
                'id' => 64,
                'value' => '1.5 - 16.0 мм²',
            ),
            64 => 
            array (
                'id' => 65,
                'value' => '1.5 - 6 mm²',
            ),
            65 => 
            array (
                'id' => 66,
                'value' => '1.5 - 6.0 мм²',
            ),
            66 => 
            array (
                'id' => 67,
                'value' => '1.5 мм²',
            ),
            67 => 
            array (
                'id' => 68,
                'value' => '10',
            ),
            68 => 
            array (
                'id' => 69,
                'value' => '10 - 14',
            ),
            69 => 
            array (
                'id' => 70,
                'value' => '10 - 16',
            ),
            70 => 
            array (
                'id' => 71,
                'value' => '10 - 25 mm²',
            ),
            71 => 
            array (
                'id' => 72,
                'value' => '10 - 35 mm²',
            ),
            72 => 
            array (
                'id' => 73,
                'value' => '10 мм',
            ),
            73 => 
            array (
                'id' => 74,
                'value' => '10.0',
            ),
            74 => 
            array (
                'id' => 75,
                'value' => '10.0 - 25.0 мм²',
            ),
            75 => 
            array (
                'id' => 76,
                'value' => '10.0 мм',
            ),
            76 => 
            array (
                'id' => 77,
                'value' => '10.0 мм²',
            ),
            77 => 
            array (
                'id' => 78,
                'value' => '10.5',
            ),
            78 => 
            array (
                'id' => 79,
                'value' => '10.5 мм',
            ),
            79 => 
            array (
                'id' => 80,
                'value' => '10+PE',
            ),
            80 => 
            array (
                'id' => 81,
                'value' => '1000V AC',
            ),
            81 => 
            array (
                'id' => 82,
                'value' => '100A',
            ),
            82 => 
            array (
                'id' => 83,
                'value' => '100A/16A',
            ),
            83 => 
            array (
                'id' => 84,
                'value' => '108+PE',
            ),
            84 => 
            array (
                'id' => 85,
                'value' => '109..216',
            ),
            85 => 
            array (
                'id' => 86,
                'value' => '10A',
            ),
            86 => 
            array (
                'id' => 87,
                'value' => '10B',
            ),
            87 => 
            array (
                'id' => 88,
                'value' => '11 мм',
            ),
            88 => 
            array (
                'id' => 89,
                'value' => '11.0',
            ),
            89 => 
            array (
                'id' => 90,
                'value' => '11.0 мм',
            ),
            90 => 
            array (
                'id' => 91,
                'value' => '11.5',
            ),
            91 => 
            array (
                'id' => 92,
                'value' => '11.5 мм',
            ),
            92 => 
            array (
                'id' => 93,
                'value' => '12',
            ),
            93 => 
            array (
                'id' => 94,
                'value' => '12 - 8',
            ),
            94 => 
            array (
                'id' => 95,
                'value' => '12 мм',
            ),
            95 => 
            array (
                'id' => 96,
                'value' => '12.0',
            ),
            96 => 
            array (
                'id' => 97,
                'value' => '12.0 мм',
            ),
            97 => 
            array (
                'id' => 98,
                'value' => '12.5',
            ),
            98 => 
            array (
                'id' => 99,
                'value' => '12.5 мм',
            ),
            99 => 
            array (
                'id' => 100,
                'value' => '12+2+PE',
            ),
            100 => 
            array (
                'id' => 101,
                'value' => '12+PE',
            ),
            101 => 
            array (
                'id' => 102,
                'value' => '128+PE',
            ),
            102 => 
            array (
                'id' => 103,
                'value' => '13 - 18',
            ),
            103 => 
            array (
                'id' => 104,
                'value' => '13 - 18 мм',
            ),
            104 => 
            array (
                'id' => 105,
                'value' => '13 мм',
            ),
            105 => 
            array (
                'id' => 106,
                'value' => '13-18 мм',
            ),
            106 => 
            array (
                'id' => 107,
                'value' => '13.0',
            ),
            107 => 
            array (
                'id' => 108,
                'value' => '13.0 мм',
            ),
            108 => 
            array (
                'id' => 109,
                'value' => '13.5',
            ),
            109 => 
            array (
                'id' => 110,
                'value' => '13.5 мм',
            ),
            110 => 
            array (
                'id' => 111,
                'value' => '14',
            ),
            111 => 
            array (
                'id' => 112,
                'value' => '14 - 10',
            ),
            112 => 
            array (
                'id' => 113,
                'value' => '14 - 22 mm²',
            ),
            113 => 
            array (
                'id' => 114,
                'value' => '14 мм',
            ),
            114 => 
            array (
                'id' => 115,
                'value' => '14.0',
            ),
            115 => 
            array (
                'id' => 116,
                'value' => '14.0 мм',
            ),
            116 => 
            array (
                'id' => 117,
                'value' => '14.5 мм',
            ),
            117 => 
            array (
                'id' => 118,
                'value' => '144+PE',
            ),
            118 => 
            array (
                'id' => 119,
                'value' => '15',
            ),
            119 => 
            array (
                'id' => 120,
                'value' => '15 - 22',
            ),
            120 => 
            array (
                'id' => 121,
                'value' => '15 мм',
            ),
            121 => 
            array (
                'id' => 122,
                'value' => '15-22 мм',
            ),
            122 => 
            array (
                'id' => 123,
                'value' => '15.0',
            ),
            123 => 
            array (
                'id' => 124,
                'value' => '15.0 мм',
            ),
            124 => 
            array (
                'id' => 125,
                'value' => '15.2',
            ),
            125 => 
            array (
                'id' => 126,
                'value' => '15.2 мм',
            ),
            126 => 
            array (
                'id' => 127,
                'value' => '15.5 мм',
            ),
            127 => 
            array (
                'id' => 128,
                'value' => '15.8',
            ),
            128 => 
            array (
                'id' => 129,
                'value' => '15+PE',
            ),
            129 => 
            array (
                'id' => 130,
                'value' => '150V AC',
            ),
            130 => 
            array (
                'id' => 131,
                'value' => '16',
            ),
            131 => 
            array (
                'id' => 132,
                'value' => '16 - 10',
            ),
            132 => 
            array (
                'id' => 133,
                'value' => '16 - 22',
            ),
            133 => 
            array (
                'id' => 134,
                'value' => '16 - 35 mm²',
            ),
            134 => 
            array (
                'id' => 135,
                'value' => '16 - 6',
            ),
            135 => 
            array (
                'id' => 136,
                'value' => '16 мм',
            ),
            136 => 
            array (
                'id' => 137,
                'value' => '16.0',
            ),
            137 => 
            array (
                'id' => 138,
                'value' => '16.0 мм',
            ),
            138 => 
            array (
                'id' => 139,
                'value' => '16.0 мм²',
            ),
            139 => 
            array (
                'id' => 140,
                'value' => '16+PE',
            ),
            140 => 
            array (
                'id' => 141,
                'value' => '160V AC',
            ),
            141 => 
            array (
                'id' => 142,
                'value' => '16A',
            ),
            142 => 
            array (
                'id' => 143,
                'value' => '16A/10A',
            ),
            143 => 
            array (
                'id' => 144,
                'value' => '16B',
            ),
            144 => 
            array (
                'id' => 145,
                'value' => '17',
            ),
            145 => 
            array (
                'id' => 146,
                'value' => '17 мм',
            ),
            146 => 
            array (
                'id' => 147,
                'value' => '17..32',
            ),
            147 => 
            array (
                'id' => 148,
                'value' => '17.0',
            ),
            148 => 
            array (
                'id' => 149,
                'value' => '17.0 мм',
            ),
            149 => 
            array (
                'id' => 150,
                'value' => '17+PE',
            ),
            150 => 
            array (
                'id' => 151,
                'value' => '18',
            ),
            151 => 
            array (
                'id' => 152,
                'value' => '18 - 14',
            ),
            152 => 
            array (
                'id' => 153,
                'value' => '18 - 25',
            ),
            153 => 
            array (
                'id' => 154,
                'value' => '18 - 25 мм',
            ),
            154 => 
            array (
                'id' => 155,
                'value' => '18-14',
            ),
            155 => 
            array (
                'id' => 156,
                'value' => '18-25 мм',
            ),
            156 => 
            array (
                'id' => 157,
                'value' => '18.0',
            ),
            157 => 
            array (
                'id' => 158,
                'value' => '18.0 мм',
            ),
            158 => 
            array (
                'id' => 159,
                'value' => '18.5',
            ),
            159 => 
            array (
                'id' => 160,
                'value' => '18.5 мм',
            ),
            160 => 
            array (
                'id' => 161,
                'value' => '18.6',
            ),
            161 => 
            array (
                'id' => 162,
                'value' => '18.6 мм',
            ),
            162 => 
            array (
                'id' => 163,
                'value' => '18+PE',
            ),
            163 => 
            array (
                'id' => 164,
                'value' => '19',
            ),
            164 => 
            array (
                'id' => 165,
                'value' => '19 мм',
            ),
            165 => 
            array (
                'id' => 166,
                'value' => '19.0',
            ),
            166 => 
            array (
                'id' => 167,
                'value' => '2',
            ),
            167 => 
            array (
                'id' => 168,
                'value' => '2 поперечных рычага',
            ),
            168 => 
            array (
                'id' => 169,
                'value' => '2 фиксатора для защелки',
            ),
            169 => 
            array (
                'id' => 170,
                'value' => '2 фиксатора для продольного рычага',
            ),
            170 => 
            array (
                'id' => 171,
                'value' => '2.5 - 6 mm²',
            ),
            171 => 
            array (
                'id' => 172,
                'value' => '2.5 - 8 mm²',
            ),
            172 => 
            array (
                'id' => 173,
                'value' => '2.5 мм²',
            ),
            173 => 
            array (
                'id' => 174,
                'value' => '2.8 мм',
            ),
            174 => 
            array (
                'id' => 175,
                'value' => '2+PE',
            ),
            175 => 
            array (
                'id' => 176,
                'value' => '20',
            ),
            176 => 
            array (
                'id' => 177,
                'value' => '20 - 14',
            ),
            177 => 
            array (
                'id' => 178,
                'value' => '20 мм',
            ),
            178 => 
            array (
                'id' => 179,
                'value' => '20.0',
            ),
            179 => 
            array (
                'id' => 180,
                'value' => '20.0 мм',
            ),
            180 => 
            array (
                'id' => 181,
                'value' => '20.4',
            ),
            181 => 
            array (
                'id' => 182,
                'value' => '20.4 мм',
            ),
            182 => 
            array (
                'id' => 183,
                'value' => '200A',
            ),
            183 => 
            array (
                'id' => 184,
                'value' => '21',
            ),
            184 => 
            array (
                'id' => 185,
                'value' => '21 - 30',
            ),
            185 => 
            array (
                'id' => 186,
                'value' => '21.2',
            ),
            186 => 
            array (
                'id' => 187,
                'value' => '21.5 мм',
            ),
            187 => 
            array (
                'id' => 188,
                'value' => '216+PE',
            ),
            188 => 
            array (
                'id' => 189,
                'value' => '22',
            ),
            189 => 
            array (
                'id' => 190,
                'value' => '22 - 18',
            ),
            190 => 
            array (
                'id' => 191,
                'value' => '22 - 20',
            ),
            191 => 
            array (
                'id' => 192,
                'value' => '22 - 30',
            ),
            192 => 
            array (
                'id' => 193,
                'value' => '22 - 32',
            ),
            193 => 
            array (
                'id' => 194,
                'value' => '22 - 32 мм',
            ),
            194 => 
            array (
                'id' => 195,
                'value' => '22 мм',
            ),
            195 => 
            array (
                'id' => 196,
                'value' => '22-32 мм',
            ),
            196 => 
            array (
                'id' => 197,
                'value' => '22.0 мм',
            ),
            197 => 
            array (
                'id' => 198,
                'value' => '22.5',
            ),
            198 => 
            array (
                'id' => 199,
                'value' => '22.5 мм',
            ),
            199 => 
            array (
                'id' => 200,
                'value' => '23 мм',
            ),
            200 => 
            array (
                'id' => 201,
                'value' => '23.0',
            ),
            201 => 
            array (
                'id' => 202,
                'value' => '230/400V',
            ),
            202 => 
            array (
                'id' => 203,
                'value' => '230/400V AC',
            ),
            203 => 
            array (
                'id' => 204,
                'value' => '24',
            ),
            204 => 
            array (
                'id' => 205,
                'value' => '24 - 14',
            ),
            205 => 
            array (
                'id' => 206,
                'value' => '24 мм',
            ),
            206 => 
            array (
                'id' => 207,
                'value' => '24.0',
            ),
            207 => 
            array (
                'id' => 208,
                'value' => '24.0 мм',
            ),
            208 => 
            array (
                'id' => 209,
                'value' => '24+PE',
            ),
            209 => 
            array (
                'id' => 210,
                'value' => '24B',
            ),
            210 => 
            array (
                'id' => 211,
                'value' => '25',
            ),
            211 => 
            array (
                'id' => 212,
                'value' => '25 - 40 mm²',
            ),
            212 => 
            array (
                'id' => 213,
                'value' => '25 - 70 mm²',
            ),
            213 => 
            array (
                'id' => 214,
                'value' => '25 мм',
            ),
            214 => 
            array (
                'id' => 215,
                'value' => '25..48',
            ),
            215 => 
            array (
                'id' => 216,
                'value' => '25.0',
            ),
            216 => 
            array (
                'id' => 217,
                'value' => '25.0 мм',
            ),
            217 => 
            array (
                'id' => 218,
                'value' => '25.0 мм²',
            ),
            218 => 
            array (
                'id' => 219,
                'value' => '25.5',
            ),
            219 => 
            array (
                'id' => 220,
                'value' => '25+PE',
            ),
            220 => 
            array (
                'id' => 221,
                'value' => '250V',
            ),
            221 => 
            array (
                'id' => 222,
                'value' => '250V AC',
            ),
            222 => 
            array (
                'id' => 223,
                'value' => '26 - 12',
            ),
            223 => 
            array (
                'id' => 224,
                'value' => '26 - 14',
            ),
            224 => 
            array (
                'id' => 225,
                'value' => '26 - 22',
            ),
            225 => 
            array (
                'id' => 226,
                'value' => '26.0',
            ),
            226 => 
            array (
                'id' => 227,
                'value' => '27',
            ),
            227 => 
            array (
                'id' => 228,
                'value' => '27 мм',
            ),
            228 => 
            array (
                'id' => 229,
                'value' => '27.0 мм',
            ),
            229 => 
            array (
                'id' => 230,
                'value' => '27.5',
            ),
            230 => 
            array (
                'id' => 231,
                'value' => '28',
            ),
            231 => 
            array (
                'id' => 232,
                'value' => '28 - 20',
            ),
            232 => 
            array (
                'id' => 233,
                'value' => '28 - 24',
            ),
            233 => 
            array (
                'id' => 234,
                'value' => '28.3',
            ),
            234 => 
            array (
                'id' => 235,
                'value' => '28.3 мм',
            ),
            235 => 
            array (
                'id' => 236,
                'value' => '28.5',
            ),
            236 => 
            array (
                'id' => 237,
                'value' => '29.5',
            ),
            237 => 
            array (
                'id' => 238,
                'value' => '29.5 мм',
            ),
            238 => 
            array (
                'id' => 239,
                'value' => '2x15 мм',
            ),
            239 => 
            array (
                'id' => 240,
                'value' => '2x3 мм',
            ),
            240 => 
            array (
                'id' => 241,
                'value' => '2x5 мм',
            ),
            241 => 
            array (
                'id' => 242,
                'value' => '2x6 мм',
            ),
            242 => 
            array (
                'id' => 243,
                'value' => '2x7 мм',
            ),
            243 => 
            array (
                'id' => 244,
                'value' => '2x8 мм',
            ),
            244 => 
            array (
                'id' => 245,
                'value' => '3',
            ),
            245 => 
            array (
                'id' => 246,
                'value' => '3 - 6.5',
            ),
            246 => 
            array (
                'id' => 247,
                'value' => '3 - 9.5 mm',
            ),
            247 => 
            array (
                'id' => 248,
                'value' => '3 мм',
            ),
            248 => 
            array (
                'id' => 249,
                'value' => '3 мм или 4 мм',
            ),
            249 => 
            array (
                'id' => 250,
                'value' => '3-6.5 мм',
            ),
            250 => 
            array (
                'id' => 251,
                'value' => '3.0 мм',
            ),
            251 => 
            array (
                'id' => 252,
                'value' => '3.0 мм²',
            ),
            252 => 
            array (
                'id' => 253,
                'value' => '3.5 мм',
            ),
            253 => 
            array (
                'id' => 254,
                'value' => '3+4',
            ),
            254 => 
            array (
                'id' => 255,
                'value' => '3+PE',
            ),
            255 => 
            array (
                'id' => 256,
                'value' => '30',
            ),
            256 => 
            array (
                'id' => 257,
                'value' => '30 - 38',
            ),
            257 => 
            array (
                'id' => 258,
                'value' => '30 мм',
            ),
            258 => 
            array (
                'id' => 259,
                'value' => '30.0',
            ),
            259 => 
            array (
                'id' => 260,
                'value' => '31 - 38 мм',
            ),
            260 => 
            array (
                'id' => 261,
                'value' => '31-38 мм',
            ),
            261 => 
            array (
                'id' => 262,
                'value' => '31.5',
            ),
            262 => 
            array (
                'id' => 263,
                'value' => '32',
            ),
            263 => 
            array (
                'id' => 264,
                'value' => '32 мм',
            ),
            264 => 
            array (
                'id' => 265,
                'value' => '32.0',
            ),
            265 => 
            array (
                'id' => 266,
                'value' => '32.0 мм',
            ),
            266 => 
            array (
                'id' => 267,
                'value' => '32+PE',
            ),
            267 => 
            array (
                'id' => 268,
                'value' => '32A',
            ),
            268 => 
            array (
                'id' => 269,
                'value' => '32B',
            ),
            269 => 
            array (
                'id' => 270,
                'value' => '33',
            ),
            270 => 
            array (
                'id' => 271,
                'value' => '33 мм',
            ),
            271 => 
            array (
                'id' => 272,
                'value' => '33..64',
            ),
            272 => 
            array (
                'id' => 273,
                'value' => '33.0 мм',
            ),
            273 => 
            array (
                'id' => 274,
                'value' => '34',
            ),
            274 => 
            array (
                'id' => 275,
                'value' => '34 мм',
            ),
            275 => 
            array (
                'id' => 276,
                'value' => '34.5',
            ),
            276 => 
            array (
                'id' => 277,
                'value' => '35',
            ),
            277 => 
            array (
                'id' => 278,
                'value' => '35 мм',
            ),
            278 => 
            array (
                'id' => 279,
                'value' => '35.0 мм²',
            ),
            279 => 
            array (
                'id' => 280,
                'value' => '35A',
            ),
            280 => 
            array (
                'id' => 281,
                'value' => '36',
            ),
            281 => 
            array (
                'id' => 282,
                'value' => '36.0',
            ),
            282 => 
            array (
                'id' => 283,
                'value' => '36.0 мм',
            ),
            283 => 
            array (
                'id' => 284,
                'value' => '37',
            ),
            284 => 
            array (
                'id' => 285,
                'value' => '37 - 44',
            ),
            285 => 
            array (
                'id' => 286,
                'value' => '37 мм',
            ),
            286 => 
            array (
                'id' => 287,
                'value' => '37-44 мм',
            ),
            287 => 
            array (
                'id' => 288,
                'value' => '37.0',
            ),
            288 => 
            array (
                'id' => 289,
                'value' => '37.0 мм',
            ),
            289 => 
            array (
                'id' => 290,
                'value' => '38',
            ),
            290 => 
            array (
                'id' => 291,
                'value' => '38.0',
            ),
            291 => 
            array (
                'id' => 292,
                'value' => '39',
            ),
            292 => 
            array (
                'id' => 293,
                'value' => '39.0',
            ),
            293 => 
            array (
                'id' => 294,
                'value' => '39.0 мм',
            ),
            294 => 
            array (
                'id' => 295,
                'value' => '3A',
            ),
            295 => 
            array (
                'id' => 296,
                'value' => '3x7 мм',
            ),
            296 => 
            array (
                'id' => 297,
                'value' => '4',
            ),
            297 => 
            array (
                'id' => 298,
                'value' => '4 - 10 mm²',
            ),
            298 => 
            array (
                'id' => 299,
                'value' => '4 - 8',
            ),
            299 => 
            array (
                'id' => 300,
                'value' => '4 + экранирование',
            ),
            300 => 
            array (
                'id' => 301,
                'value' => '4 мм',
            ),
            301 => 
            array (
                'id' => 302,
                'value' => '4 фиксатора для поперечных рычагов',
            ),
            302 => 
            array (
                'id' => 303,
                'value' => '4-8 мм',
            ),
            303 => 
            array (
                'id' => 304,
                'value' => '4.0 мм',
            ),
            304 => 
            array (
                'id' => 305,
                'value' => '4.0 мм²',
            ),
            305 => 
            array (
                'id' => 306,
                'value' => '4.5 мм',
            ),
            306 => 
            array (
                'id' => 307,
                'value' => '4+2+PE',
            ),
            307 => 
            array (
                'id' => 308,
                'value' => '4+4+PE',
            ),
            308 => 
            array (
                'id' => 309,
                'value' => '4+8+PE',
            ),
            309 => 
            array (
                'id' => 310,
                'value' => '4+PE',
            ),
            310 => 
            array (
                'id' => 311,
                'value' => '40',
            ),
            311 => 
            array (
                'id' => 312,
                'value' => '40 - 70 mm²',
            ),
            312 => 
            array (
                'id' => 313,
                'value' => '40 мм',
            ),
            313 => 
            array (
                'id' => 314,
                'value' => '40.0',
            ),
            314 => 
            array (
                'id' => 315,
                'value' => '40.0 мм',
            ),
            315 => 
            array (
                'id' => 316,
                'value' => '40+PE',
            ),
            316 => 
            array (
                'id' => 317,
                'value' => '400/400V',
            ),
            317 => 
            array (
                'id' => 318,
                'value' => '400/690V',
            ),
            318 => 
            array (
                'id' => 319,
                'value' => '400V AC',
            ),
            319 => 
            array (
                'id' => 320,
                'value' => '400V/160V AC',
            ),
            320 => 
            array (
                'id' => 321,
                'value' => '400V/400V AC',
            ),
            321 => 
            array (
                'id' => 322,
                'value' => '40A',
            ),
            322 => 
            array (
                'id' => 323,
                'value' => '40A / 10A',
            ),
            323 => 
            array (
                'id' => 324,
                'value' => '40A / 16A',
            ),
            324 => 
            array (
                'id' => 325,
                'value' => '40A/10A',
            ),
            325 => 
            array (
                'id' => 326,
                'value' => '40A/16A',
            ),
            326 => 
            array (
                'id' => 327,
                'value' => '42',
            ),
            327 => 
            array (
                'id' => 328,
                'value' => '42 мм',
            ),
            328 => 
            array (
                'id' => 329,
                'value' => '42.5',
            ),
            329 => 
            array (
                'id' => 330,
                'value' => '42+PE',
            ),
            330 => 
            array (
                'id' => 331,
                'value' => '43.0 мм',
            ),
            331 => 
            array (
                'id' => 332,
                'value' => '43.5',
            ),
            332 => 
            array (
                'id' => 333,
                'value' => '44',
            ),
            333 => 
            array (
                'id' => 334,
                'value' => '44.0',
            ),
            334 => 
            array (
                'id' => 335,
                'value' => '44.5',
            ),
            335 => 
            array (
                'id' => 336,
                'value' => '45',
            ),
            336 => 
            array (
                'id' => 337,
                'value' => '45 мм',
            ),
            337 => 
            array (
                'id' => 338,
                'value' => '45.0',
            ),
            338 => 
            array (
                'id' => 339,
                'value' => '45.5',
            ),
            339 => 
            array (
                'id' => 340,
                'value' => '46+PE',
            ),
            340 => 
            array (
                'id' => 341,
                'value' => '47..92',
            ),
            341 => 
            array (
                'id' => 342,
                'value' => '47.0',
            ),
            342 => 
            array (
                'id' => 343,
                'value' => '47.0 мм',
            ),
            343 => 
            array (
                'id' => 344,
                'value' => '48.0',
            ),
            344 => 
            array (
                'id' => 345,
                'value' => '48.0 мм',
            ),
            345 => 
            array (
                'id' => 346,
                'value' => '48+PE',
            ),
            346 => 
            array (
                'id' => 347,
                'value' => '48B',
            ),
            347 => 
            array (
                'id' => 348,
                'value' => '49',
            ),
            348 => 
            array (
                'id' => 349,
                'value' => '4A',
            ),
            349 => 
            array (
                'id' => 350,
                'value' => '4x6 мм',
            ),
            350 => 
            array (
                'id' => 351,
                'value' => '4x9 мм',
            ),
            351 => 
            array (
                'id' => 352,
                'value' => '5',
            ),
            352 => 
            array (
                'id' => 353,
                'value' => '5 - 10',
            ),
            353 => 
            array (
                'id' => 354,
                'value' => '5 - 10 мм',
            ),
            354 => 
            array (
                'id' => 355,
                'value' => '5 мм',
            ),
            355 => 
            array (
                'id' => 356,
                'value' => '5-10 мм',
            ),
            356 => 
            array (
                'id' => 357,
                'value' => '5.0',
            ),
            357 => 
            array (
                'id' => 358,
                'value' => '5.0 мм',
            ),
            358 => 
            array (
                'id' => 359,
                'value' => '5.5 мм',
            ),
            359 => 
            array (
                'id' => 360,
                'value' => '5+PE',
            ),
            360 => 
            array (
                'id' => 361,
                'value' => '50',
            ),
            361 => 
            array (
                'id' => 362,
                'value' => '50 мм',
            ),
            362 => 
            array (
                'id' => 363,
                'value' => '50 Ом',
            ),
            363 => 
            array (
                'id' => 364,
                'value' => '50.0',
            ),
            364 => 
            array (
                'id' => 365,
                'value' => '50.0 мм',
            ),
            365 => 
            array (
                'id' => 366,
                'value' => '50.0 мм²',
            ),
            366 => 
            array (
                'id' => 367,
                'value' => '50+PE',
            ),
            367 => 
            array (
                'id' => 368,
                'value' => '500V',
            ),
            368 => 
            array (
                'id' => 369,
                'value' => '500V AC',
            ),
            369 => 
            array (
                'id' => 370,
                'value' => '50V',
            ),
            370 => 
            array (
                'id' => 371,
                'value' => '50V AC',
            ),
            371 => 
            array (
                'id' => 372,
                'value' => '50V AC / 120V DC',
            ),
            372 => 
            array (
                'id' => 373,
                'value' => '51',
            ),
            373 => 
            array (
                'id' => 374,
                'value' => '51 мм',
            ),
            374 => 
            array (
                'id' => 375,
                'value' => '51.0',
            ),
            375 => 
            array (
                'id' => 376,
                'value' => '52',
            ),
            376 => 
            array (
                'id' => 377,
                'value' => '52 мм',
            ),
            377 => 
            array (
                'id' => 378,
                'value' => '52.0',
            ),
            378 => 
            array (
                'id' => 379,
                'value' => '53.5',
            ),
            379 => 
            array (
                'id' => 380,
                'value' => '54.0',
            ),
            380 => 
            array (
                'id' => 381,
                'value' => '54.0 мм',
            ),
            381 => 
            array (
                'id' => 382,
                'value' => '54.5',
            ),
            382 => 
            array (
                'id' => 383,
                'value' => '55',
            ),
            383 => 
            array (
                'id' => 384,
                'value' => '55.0',
            ),
            384 => 
            array (
                'id' => 385,
                'value' => '55.0 мм',
            ),
            385 => 
            array (
                'id' => 386,
                'value' => '56',
            ),
            386 => 
            array (
                'id' => 387,
                'value' => '56.0',
            ),
            387 => 
            array (
                'id' => 388,
                'value' => '57',
            ),
            388 => 
            array (
                'id' => 389,
                'value' => '57 мм',
            ),
            389 => 
            array (
                'id' => 390,
                'value' => '59',
            ),
            390 => 
            array (
                'id' => 391,
                'value' => '59.3 мм',
            ),
            391 => 
            array (
                'id' => 392,
                'value' => '5A',
            ),
            392 => 
            array (
                'id' => 393,
                'value' => '5x9 мм',
            ),
            393 => 
            array (
                'id' => 394,
                'value' => '6',
            ),
            394 => 
            array (
                'id' => 395,
                'value' => '6 - 10 mm²',
            ),
            395 => 
            array (
                'id' => 396,
                'value' => '6 - 12',
            ),
            396 => 
            array (
                'id' => 397,
                'value' => '6 - 12 мм',
            ),
            397 => 
            array (
                'id' => 398,
                'value' => '6 - 16 mm²',
            ),
            398 => 
            array (
                'id' => 399,
                'value' => '6 - 22 mm²',
            ),
            399 => 
            array (
                'id' => 400,
                'value' => '6 мм',
            ),
            400 => 
            array (
                'id' => 401,
                'value' => '6-12 мм',
            ),
            401 => 
            array (
                'id' => 402,
                'value' => '6.0',
            ),
            402 => 
            array (
                'id' => 403,
                'value' => '6.0 мм',
            ),
            403 => 
            array (
                'id' => 404,
                'value' => '6.0 мм²',
            ),
            404 => 
            array (
                'id' => 405,
                'value' => '6.5',
            ),
            405 => 
            array (
                'id' => 406,
                'value' => '6.5 мм',
            ),
            406 => 
            array (
                'id' => 407,
                'value' => '6.7',
            ),
            407 => 
            array (
                'id' => 408,
                'value' => '6+12+PE',
            ),
            408 => 
            array (
                'id' => 409,
                'value' => '6+36+PE',
            ),
            409 => 
            array (
                'id' => 410,
                'value' => '6+6+PE',
            ),
            410 => 
            array (
                'id' => 411,
                'value' => '6+PE',
            ),
            411 => 
            array (
                'id' => 412,
                'value' => '60',
            ),
            412 => 
            array (
                'id' => 413,
                'value' => '60 мм',
            ),
            413 => 
            array (
                'id' => 414,
                'value' => '61.5 мм',
            ),
            414 => 
            array (
                'id' => 415,
                'value' => '62.0',
            ),
            415 => 
            array (
                'id' => 416,
                'value' => '62.0 мм',
            ),
            416 => 
            array (
                'id' => 417,
                'value' => '63.0',
            ),
            417 => 
            array (
                'id' => 418,
                'value' => '63.0 мм',
            ),
            418 => 
            array (
                'id' => 419,
                'value' => '63.5',
            ),
            419 => 
            array (
                'id' => 420,
                'value' => '64+PE',
            ),
            420 => 
            array (
                'id' => 421,
                'value' => '65',
            ),
            421 => 
            array (
                'id' => 422,
                'value' => '65 мм',
            ),
            422 => 
            array (
                'id' => 423,
                'value' => '68.5 мм',
            ),
            423 => 
            array (
                'id' => 424,
                'value' => '690/400V',
            ),
            424 => 
            array (
                'id' => 425,
                'value' => '690V',
            ),
            425 => 
            array (
                'id' => 426,
                'value' => '690V AC',
            ),
            426 => 
            array (
                'id' => 427,
                'value' => '690V/160V AC',
            ),
            427 => 
            array (
                'id' => 428,
                'value' => '690V/250V AC',
            ),
            428 => 
            array (
                'id' => 429,
                'value' => '690V/400V AC',
            ),
            429 => 
            array (
                'id' => 430,
                'value' => '6B',
            ),
            430 => 
            array (
                'id' => 431,
                'value' => '6x3 мм',
            ),
            431 => 
            array (
                'id' => 432,
                'value' => '7 - 3',
            ),
            432 => 
            array (
                'id' => 433,
                'value' => '7 мм',
            ),
            433 => 
            array (
                'id' => 434,
                'value' => '7..12',
            ),
            434 => 
            array (
                'id' => 435,
                'value' => '7.0',
            ),
            435 => 
            array (
                'id' => 436,
                'value' => '7.0 мм',
            ),
            436 => 
            array (
                'id' => 437,
                'value' => '7.5',
            ),
            437 => 
            array (
                'id' => 438,
                'value' => '7.5 мм',
            ),
            438 => 
            array (
                'id' => 439,
                'value' => '7+PE',
            ),
            439 => 
            array (
                'id' => 440,
                'value' => '70',
            ),
            440 => 
            array (
                'id' => 441,
                'value' => '70.0 мм²',
            ),
            441 => 
            array (
                'id' => 442,
                'value' => '70.5 мм',
            ),
            442 => 
            array (
                'id' => 443,
                'value' => '70A',
            ),
            443 => 
            array (
                'id' => 444,
                'value' => '70A/16A',
            ),
            444 => 
            array (
                'id' => 445,
                'value' => '72+PE',
            ),
            445 => 
            array (
                'id' => 446,
                'value' => '73..144',
            ),
            446 => 
            array (
                'id' => 447,
                'value' => '74',
            ),
            447 => 
            array (
                'id' => 448,
                'value' => '75 Ом',
            ),
            448 => 
            array (
                'id' => 449,
                'value' => '77.5',
            ),
            449 => 
            array (
                'id' => 450,
                'value' => '8',
            ),
            450 => 
            array (
                'id' => 451,
                'value' => '8 - 14',
            ),
            451 => 
            array (
                'id' => 452,
                'value' => '8 - 14 мм',
            ),
            452 => 
            array (
                'id' => 453,
                'value' => '8 + экранирование',
            ),
            453 => 
            array (
                'id' => 454,
                'value' => '8 мм',
            ),
            454 => 
            array (
                'id' => 455,
                'value' => '8-14 мм',
            ),
            455 => 
            array (
                'id' => 456,
                'value' => '8.0',
            ),
            456 => 
            array (
                'id' => 457,
                'value' => '8.0 мм',
            ),
            457 => 
            array (
                'id' => 458,
                'value' => '8.5',
            ),
            458 => 
            array (
                'id' => 459,
                'value' => '8.5 мм',
            ),
            459 => 
            array (
                'id' => 460,
                'value' => '8+24+PE',
            ),
            460 => 
            array (
                'id' => 461,
                'value' => '8+PE',
            ),
            461 => 
            array (
                'id' => 462,
                'value' => '80+PE',
            ),
            462 => 
            array (
                'id' => 463,
                'value' => '80A',
            ),
            463 => 
            array (
                'id' => 464,
                'value' => '80A / 16A',
            ),
            464 => 
            array (
                'id' => 465,
                'value' => '80A/16A',
            ),
            465 => 
            array (
                'id' => 466,
                'value' => '830/400V',
            ),
            466 => 
            array (
                'id' => 467,
                'value' => '830V',
            ),
            467 => 
            array (
                'id' => 468,
                'value' => '830V AC',
            ),
            468 => 
            array (
                'id' => 469,
                'value' => '830V/400V AC',
            ),
            469 => 
            array (
                'id' => 470,
                'value' => '9',
            ),
            470 => 
            array (
                'id' => 471,
                'value' => '9 мм',
            ),
            471 => 
            array (
                'id' => 472,
                'value' => '9-16 мм',
            ),
            472 => 
            array (
                'id' => 473,
                'value' => '9.0',
            ),
            473 => 
            array (
                'id' => 474,
                'value' => '9.0 мм',
            ),
            474 => 
            array (
                'id' => 475,
                'value' => '9.5',
            ),
            475 => 
            array (
                'id' => 476,
                'value' => '9.5 мм',
            ),
            476 => 
            array (
                'id' => 477,
                'value' => '9.6 мм',
            ),
            477 => 
            array (
                'id' => 478,
                'value' => '92+PE',
            ),
            478 => 
            array (
                'id' => 479,
                'value' => 'A-B',
            ),
            479 => 
            array (
                'id' => 480,
                'value' => 'A-C',
            ),
            480 => 
            array (
                'id' => 481,
                'value' => 'A-D',
            ),
            481 => 
            array (
                'id' => 482,
                'value' => 'A-F',
            ),
            482 => 
            array (
                'id' => 483,
                'value' => 'HA, HE, HEE, HM, HK',
            ),
            483 => 
            array (
                'id' => 484,
                'value' => 'HC',
            ),
            484 => 
            array (
                'id' => 485,
                'value' => 'HD, HDD, HM, HQ, HK',
            ),
            485 => 
            array (
                'id' => 486,
                'value' => 'HM',
            ),
            486 => 
            array (
                'id' => 487,
                'value' => 'HM-RJ45-M',
            ),
            487 => 
            array (
                'id' => 488,
                'value' => 'HM, EMC-008, D-Sub',
            ),
            488 => 
            array (
                'id' => 489,
                'value' => 'HM, HK',
            ),
            489 => 
            array (
                'id' => 490,
                'value' => 'IP65',
            ),
            490 => 
            array (
                'id' => 491,
                'value' => 'IP68',
            ),
            491 => 
            array (
                'id' => 492,
                'value' => 'M12',
            ),
            492 => 
            array (
                'id' => 493,
                'value' => 'M12x1.5',
            ),
            493 => 
            array (
                'id' => 494,
                'value' => 'M14',
            ),
            494 => 
            array (
                'id' => 495,
                'value' => 'M16',
            ),
            495 => 
            array (
                'id' => 496,
                'value' => 'M16x1.5',
            ),
            496 => 
            array (
                'id' => 497,
                'value' => 'M18',
            ),
            497 => 
            array (
                'id' => 498,
                'value' => 'M18x1.5',
            ),
            498 => 
            array (
                'id' => 499,
                'value' => 'M20',
            ),
            499 => 
            array (
                'id' => 500,
                'value' => 'M20x1.5',
            ),
        ));
        \DB::table('property_values')->insert(array (
            0 => 
            array (
                'id' => 501,
                'value' => 'M22',
            ),
            1 => 
            array (
                'id' => 502,
                'value' => 'M22x1.5',
            ),
            2 => 
            array (
                'id' => 503,
                'value' => 'M24',
            ),
            3 => 
            array (
                'id' => 504,
                'value' => 'M24x1.5',
            ),
            4 => 
            array (
                'id' => 505,
                'value' => 'M25',
            ),
            5 => 
            array (
                'id' => 506,
                'value' => 'M25x1.5',
            ),
            6 => 
            array (
                'id' => 507,
                'value' => 'M30',
            ),
            7 => 
            array (
                'id' => 508,
                'value' => 'M32',
            ),
            8 => 
            array (
                'id' => 509,
                'value' => 'M32x1.5',
            ),
            9 => 
            array (
                'id' => 510,
                'value' => 'M36',
            ),
            10 => 
            array (
                'id' => 511,
                'value' => 'M36x1.5',
            ),
            11 => 
            array (
                'id' => 512,
                'value' => 'M40',
            ),
            12 => 
            array (
                'id' => 513,
                'value' => 'M40x1.5',
            ),
            13 => 
            array (
                'id' => 514,
                'value' => 'M48',
            ),
            14 => 
            array (
                'id' => 515,
                'value' => 'M48x1.5',
            ),
            15 => 
            array (
                'id' => 516,
                'value' => 'M50',
            ),
            16 => 
            array (
                'id' => 517,
                'value' => 'M50x1.5',
            ),
            17 => 
            array (
                'id' => 518,
                'value' => 'M56',
            ),
            18 => 
            array (
                'id' => 519,
                'value' => 'M63',
            ),
            19 => 
            array (
                'id' => 520,
                'value' => 'M63x1.5',
            ),
            20 => 
            array (
                'id' => 521,
                'value' => 'NBR',
            ),
            21 => 
            array (
                'id' => 522,
                'value' => 'PCM-3.0, PCF-3.0, PCFS-3.0, PCM-4.0, PCF-4.0, PCFS-4.0',
            ),
            22 => 
            array (
                'id' => 523,
                'value' => 'PCM-6.0, PCF-6.0, PCFS-6.0',
            ),
            23 => 
            array (
                'id' => 524,
                'value' => 'PG11',
            ),
            24 => 
            array (
                'id' => 525,
                'value' => 'PG13.5',
            ),
            25 => 
            array (
                'id' => 526,
                'value' => 'PG16',
            ),
            26 => 
            array (
                'id' => 527,
                'value' => 'PG21',
            ),
            27 => 
            array (
                'id' => 528,
                'value' => 'PG29',
            ),
            28 => 
            array (
                'id' => 529,
                'value' => 'PG36',
            ),
            29 => 
            array (
                'id' => 530,
                'value' => 'PG42',
            ),
            30 => 
            array (
                'id' => 531,
                'value' => 'PG48',
            ),
            31 => 
            array (
                'id' => 532,
                'value' => 'PG7',
            ),
            32 => 
            array (
                'id' => 533,
                'value' => 'PG9',
            ),
            33 => 
            array (
                'id' => 534,
                'value' => 'Quick Lock',
            ),
            34 => 
            array (
                'id' => 535,
                'value' => 'RJ45',
            ),
            35 => 
            array (
                'id' => 536,
                'value' => 'аксиальное винтовое',
            ),
            36 => 
            array (
                'id' => 537,
                'value' => 'аксиальное винтовое/винтовое',
            ),
            37 => 
            array (
                'id' => 538,
                'value' => 'алюминиевый сплав',
            ),
            38 => 
            array (
                'id' => 539,
                'value' => 'блочный',
            ),
            39 => 
            array (
                'id' => 540,
                'value' => 'блочный проходной',
            ),
            40 => 
            array (
                'id' => 541,
                'value' => 'блочный с крышкой',
            ),
            41 => 
            array (
                'id' => 542,
                'value' => 'боковой',
            ),
            42 => 
            array (
                'id' => 543,
            'value' => 'вилка ("папа")',
            ),
            43 => 
            array (
                'id' => 544,
            'value' => 'вилка («папа»)',
            ),
            44 => 
            array (
                'id' => 545,
                'value' => 'вилка и розетка',
            ),
            45 => 
            array (
                'id' => 546,
            'value' => 'вилочный («папа»)',
            ),
            46 => 
            array (
                'id' => 547,
                'value' => 'винтовое',
            ),
            47 => 
            array (
                'id' => 548,
                'value' => 'винты',
            ),
            48 => 
            array (
                'id' => 549,
                'value' => 'высокая',
            ),
            49 => 
            array (
                'id' => 550,
            'value' => 'гнездо («мама»)',
            ),
            50 => 
            array (
                'id' => 551,
                'value' => 'гнездо RJ45',
            ),
            51 => 
            array (
                'id' => 552,
            'value' => 'гнездовой держатель («мама»)',
            ),
            52 => 
            array (
                'id' => 553,
                'value' => 'два поперечных рычага',
            ),
            53 => 
            array (
                'id' => 554,
                'value' => 'два фиксатора под продольный рычаг',
            ),
            54 => 
            array (
                'id' => 555,
            'value' => 'для вилки (штекера)',
            ),
            55 => 
            array (
                'id' => 556,
            'value' => 'для розетки (гнезда)',
            ),
            56 => 
            array (
                'id' => 557,
                'value' => 'для стандартной витой пары',
            ),
            57 => 
            array (
                'id' => 558,
                'value' => 'до 8 бар / 116 psi',
            ),
            58 => 
            array (
                'id' => 559,
                'value' => 'заглушка',
            ),
            59 => 
            array (
                'id' => 560,
                'value' => 'кабель-кабель',
            ),
            60 => 
            array (
                'id' => 561,
                'value' => 'кабельный',
            ),
            61 => 
            array (
                'id' => 562,
                'value' => 'кабельный прямой',
            ),
            62 => 
            array (
                'id' => 563,
                'value' => 'круглый',
            ),
            63 => 
            array (
                'id' => 564,
                'value' => 'левосторонняя',
            ),
            64 => 
            array (
                'id' => 565,
                'value' => 'литой алюминий',
            ),
            65 => 
            array (
                'id' => 566,
                'value' => 'медный сплав',
            ),
            66 => 
            array (
                'id' => 567,
            'value' => 'нг (не поддерживает горение)',
            ),
            67 => 
            array (
                'id' => 568,
                'value' => 'нейлон',
            ),
            68 => 
            array (
                'id' => 569,
            'value' => 'нейлон (Nylon 6)',
            ),
            69 => 
            array (
                'id' => 570,
                'value' => 'нейлон 6',
            ),
            70 => 
            array (
                'id' => 571,
                'value' => 'нейлон и NBR',
            ),
            71 => 
            array (
                'id' => 572,
                'value' => 'неопрен',
            ),
            72 => 
            array (
                'id' => 573,
                'value' => 'низкая',
            ),
            73 => 
            array (
                'id' => 574,
                'value' => 'никелированная латунь',
            ),
            74 => 
            array (
                'id' => 575,
                'value' => 'нитрилкаучук',
            ),
            75 => 
            array (
                'id' => 576,
                'value' => 'обжимные контакты',
            ),
            76 => 
            array (
                'id' => 577,
                'value' => 'пластик',
            ),
            77 => 
            array (
                'id' => 578,
                'value' => 'пластиковые защелки',
            ),
            78 => 
            array (
                'id' => 579,
                'value' => 'под винт',
            ),
            79 => 
            array (
                'id' => 580,
                'value' => 'позолоченные',
            ),
            80 => 
            array (
                'id' => 581,
                'value' => 'позолоченный',
            ),
            81 => 
            array (
                'id' => 582,
                'value' => 'полиамид',
            ),
            82 => 
            array (
                'id' => 583,
                'value' => 'поликарбонат',
            ),
            83 => 
            array (
                'id' => 584,
                'value' => 'полипропилен',
            ),
            84 => 
            array (
                'id' => 585,
                'value' => 'посеребренные',
            ),
            85 => 
            array (
                'id' => 586,
                'value' => 'посеребренный',
            ),
            86 => 
            array (
                'id' => 587,
                'value' => 'правосторонняя',
            ),
            87 => 
            array (
                'id' => 588,
                'value' => 'продольный рычаг',
            ),
            88 => 
            array (
                'id' => 589,
                'value' => 'проходной',
            ),
            89 => 
            array (
                'id' => 590,
                'value' => 'проходной угловой',
            ),
            90 => 
            array (
                'id' => 591,
                'value' => 'пружинное',
            ),
            91 => 
            array (
                'id' => 592,
                'value' => 'пружинный зажим',
            ),
            92 => 
            array (
                'id' => 593,
                'value' => 'прямой',
            ),
            93 => 
            array (
                'id' => 594,
                'value' => 'розетка "мама"',
            ),
            94 => 
            array (
                'id' => 595,
            'value' => 'розетка («мама»)',
            ),
            95 => 
            array (
                'id' => 596,
            'value' => 'розеточный («мама»)',
            ),
            96 => 
            array (
                'id' => 597,
                'value' => 'с двумя кабельными вводами',
            ),
            97 => 
            array (
                'id' => 598,
                'value' => 'с закрытым вводом',
            ),
            98 => 
            array (
                'id' => 599,
                'value' => 'с одним кабельным вводом',
            ),
            99 => 
            array (
                'id' => 600,
                'value' => 'серебристый',
            ),
            100 => 
            array (
                'id' => 601,
                'value' => 'серебро',
            ),
            101 => 
            array (
                'id' => 602,
                'value' => 'серый',
            ),
            102 => 
            array (
                'id' => 603,
                'value' => 'соединение кабель-кабель',
            ),
            103 => 
            array (
                'id' => 604,
                'value' => 'термопластик',
            ),
            104 => 
            array (
                'id' => 605,
                'value' => 'угловой',
            ),
            105 => 
            array (
                'id' => 606,
                'value' => 'установка в модульные рамки',
            ),
            106 => 
            array (
                'id' => 607,
                'value' => 'черный',
            ),
            107 => 
            array (
                'id' => 608,
                'value' => 'четыре фиксатора под поперечные рычаги',
            ),
            108 => 
            array (
                'id' => 609,
                'value' => 'шестигранный',
            ),
            109 => 
            array (
                'id' => 610,
            'value' => 'штекер («папа»)',
            ),
            110 => 
            array (
                'id' => 611,
                'value' => 'штекер RJ45',
            ),
            111 => 
            array (
                'id' => 612,
            'value' => 'штекерный держатель («папа»)',
            ),
        ));
        
        
    }
}