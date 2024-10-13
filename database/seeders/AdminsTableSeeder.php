<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Иван',
                'last_name' => 'Иванов',
                'patronymic' => 'Иванович',
                'email' => 'admin@admin.com',
                'phone_number' => '790231323123',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 1,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'gordi2001@mail.ru',
                'last_name' => 'gordi2001@mail.ru',
                'patronymic' => 'gordi2001@mail.ru',
                'email' => 'gordi2001@mail.ru',
                'phone_number' => '790231323123',
                'email_verified_at' => NULL,
                'password' => '$2y$12$XvI.sAJTctVQJnCdJ5.NA.o0UN86yRaUPKv274TkZRng37YzjrGqy',
                'is_admin' => 1,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Регина',
                'last_name' => 'Хохлова',
                'patronymic' => 'Александрович',
                'email' => 'user1@admin.com',
                'phone_number' => '+79819947334',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Макар',
                'last_name' => 'Цветков',
                'patronymic' => 'Александровна',
                'email' => 'user2@admin.com',
                'phone_number' => '+79153066389',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Егор',
                'last_name' => 'Крылова',
                'patronymic' => 'Львовна',
                'email' => 'user3@admin.com',
                'phone_number' => '+79296760083',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Зоя',
                'last_name' => 'Назаров',
                'patronymic' => 'Борисовна',
                'email' => 'user4@admin.com',
                'phone_number' => '+79404636701',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Полина',
                'last_name' => 'Бобылёва',
                'patronymic' => 'Максимович',
                'email' => 'user5@admin.com',
                'phone_number' => '+79351092236',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Рената',
                'last_name' => 'Никонова',
                'patronymic' => 'Андреевна',
                'email' => 'user7@admin.com',
                'phone_number' => '+79822518436',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Руслан',
                'last_name' => 'Наумов',
                'patronymic' => 'Львовна',
                'email' => 'user8@admin.com',
                'phone_number' => '+79174935283',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Юлий',
                'last_name' => 'Фомичёва',
                'patronymic' => 'Ивановна',
                'email' => 'user9@admin.com',
                'phone_number' => '+79832655441',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Мария',
                'last_name' => 'Пономарёв',
                'patronymic' => 'Евгеньевич',
                'email' => 'user11@admin.com',
                'phone_number' => '+79418885326',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Никодим',
                'last_name' => 'Воронцова',
                'patronymic' => 'Борисовна',
                'email' => 'user12@admin.com',
                'phone_number' => '+79053365073',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',
                'is_admin' => 0,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-10-11 05:54:44',
                'updated_at' => '2024-10-11 05:54:44',
            ),
        ));
        
        
    }
}