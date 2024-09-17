<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'id' => (string) Str::uuid(),
            'categoryName' => 'Short',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id' => (string) Str::uuid(),
            'categoryName' => 'Shirt',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id' => (string) Str::uuid(),
            'categoryName' => 'T-shirt',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id' => (string) Str::uuid(),
            'categoryName' => 'Pant',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id' => (string) Str::uuid(),
            'categoryName' => 'Jeans',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id' => (string) Str::uuid(),
            'categoryName' => 'Short',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
