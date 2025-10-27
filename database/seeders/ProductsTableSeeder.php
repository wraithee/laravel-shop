<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Mechanical Keyboard', 'price' => 120.50, 'category_id' => 1, 'description' => 'Nice mechanical', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Optical Mouse', 'price' => 40.00, 'category_id' => 2, 'description' => 'Ergonomic', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '24" Monitor', 'price' => 220.00, 'category_id' => 3, 'description' => 'Full HD', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
