<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hamburguesas
        DB::table('categories')->insert([
            'name' => 'Hamburguesas',
            'icon' => 'burguer-icon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // Pizzas
        DB::table('categories')->insert([
            'name' => 'Pizzas',
            'icon' => 'pizza-icon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // Pepitos
        DB::table('categories')->insert([
            'name' => 'Pepitos',
            'icon' => 'pepito-icon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
