<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            'id' => (string) Str::uuid(),
            'name' => 'Gucci',
            'description'=>'The House of Gucci, or Gucci for short, is a fashion icon owned by Italy and France, a well-known leather goods brand. Gucci was founded in 1921 by Guccio Gucci in Florence, Tuscany.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('brands')->insert([
            'id' => (string) Str::uuid(),
            'name' => 'Chanel',
            'description'=>'Chanel is a French luxury fashion house founded in 1910 by Coco Chanel in Paris. It is privately owned by the Wertheimer family and has been headquartered in London since 2018.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('brands')->insert([
            'id' => (string) Str::uuid(),
            'name' => 'Dior',
            'description'=>'The company was founded in 1946 by French fashion designer Christian Dior. Haute couture is under the Christian Dior Couture division. Delphine Arnault has been the CEO of Christian Dior Couture since 2023.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('brands')->insert([
            'id' => (string) Str::uuid(),
            'name' => 'Louis Vuitton',
            'description'=>'The Louis Vuitton Company is a French luxury fashion company and brand, headquartered in Paris, France. It is a division of the French joint stock company LVMH Louis Vuitton Moët Hennessy S.A.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('brands')->insert([
            'id' => (string) Str::uuid(),
            'name' => 'Yves Saint Laurent',
            'description'=>'Yves Saint Laurent SAS, also known as Saint Laurent and YSL, is a French luxury fashion house founded in 1962 by Yves Saint Laurent and his partner, Pierre Bergé. The company specializes in haute couture, ready-to-wear, leather accessories, and footwear.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
