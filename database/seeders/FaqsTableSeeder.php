<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'Первый вопрос',
                'answer' => '<p>Первый ответ</p>',
                'order_column' => 1,
                'published' => 1,
                'created_at' => '2024-10-07 11:29:12',
                'updated_at' => '2024-10-07 11:29:12',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'Второй вопрос',
                'answer' => '<p>Второй ответ<br></p>',
                'order_column' => 2,
                'published' => 1,
                'created_at' => '2024-10-07 11:29:25',
                'updated_at' => '2024-10-07 11:29:25',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => 'Третий вопрос',
                'answer' => '<p>Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;Третий вопрос&nbsp;</p>',
                'order_column' => 3,
                'published' => 1,
                'created_at' => '2024-10-07 11:29:47',
                'updated_at' => '2024-10-07 11:29:47',
            ),
        ));
        
        
    }
}