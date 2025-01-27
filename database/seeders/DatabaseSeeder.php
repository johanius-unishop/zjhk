<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(class: AdminTableSeeder::class);


        $this->call(CategoriesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(AnalogVendorsTableSeeder::class);
        $this->call(DeliveryMethodsTableSeeder::class);
        $this->call(AnalogiesTableSeeder::class);
        $this->call(RelatedProductTypesTableSeeder::class);
        
        $this->call(ProductsTableSeeder::class);
        
        $this->call(ProductTypeCompositeElementsTableSeeder::class);
        
        $this->call(FaqsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        
        
    }
}
