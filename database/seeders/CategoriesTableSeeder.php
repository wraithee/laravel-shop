<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Keyboards', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mice', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Monitors', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
