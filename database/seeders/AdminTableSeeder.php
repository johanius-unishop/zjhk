<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Artisan;
use App\Models\Admin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $user = Admin::create([
            'name' => 'Иван',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$GuaoFnDw17nZcbNNDq6aO.1wZHpLr3hGyADjN14J0kj1yjrPxdHJm',                // 'password'
            'phone_number' => '790231323123',
            'is_admin' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Admin::find(1)->assignRole('super-admin');

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $user = Admin::create([
            'name' => 'gordi2001@mail.ru',
            'email' => 'gordi2001@mail.ru',
            'password' => Hash::make('gordi2001@mail.ru'),
            'phone_number' => '790231323123',
            'is_admin' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Admin::find(2)->assignRole('super-admin');
    }
}
