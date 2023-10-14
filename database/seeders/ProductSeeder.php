<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Hamburguesas
            array(
                'name' => 'Hamburguesa de pollo crispy',
                'quantity' => 20,
                'price' => 7.5,
                'image' => 'hamburguesa_pollo',
                'status' => true,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Hamburguesa de carne',
                'quantity' => 10,
                'price' => 6.5,
                'image' => 'hamburguesa_carne',
                'status' => true,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Hamburguesa de papas',
                'quantity' => 5,
                'price' => 5,
                'image' => 'hamburguesa_papas',
                'status' => false,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            // Pizzas
            array(
                'name' => 'Pizza de Pepperoni',
                'quantity' => 18,
                'price' => 10,
                'image' => 'pizza_pepperoni',
                'status' => true,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Pizza Vegetariana',
                'quantity' => 30,
                'price' => 12,
                'image' => 'pizza_vegetariana',
                'status' => true,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name' => 'Pizza de Jamon y Maiz',
                'quantity' => 5,
                'price' => 6,
                'image' => 'pizza_jamon_maiz',
                'status' => true,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            // Pepitos
            array(
                'name' => 'Doritos',
                'quantity' => 35,
                'price' => 3,
                'image' => 'doritos',
                'status' => true,
                'category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];
        
        DB::table('products')->insert($data);
    }
}
