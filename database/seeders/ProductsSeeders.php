<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->faker = \Faker\Factory::create();



        for ($i=1; $i <= 50 ; $i++) {
            DB::table('products')->insert([
                'name' => $this->faker->name(),
                'price' => rand(500000, 5000000),
                'description' => $this->faker->text(),
                'image' => $this->faker->imageUrl(),
                'viewers' => rand(100, 1000),
                'id_category' => rand(1, 10),
                'status' => rand(0, 1),
                'created_at' => $this->faker->dateTime()
            ]);
        }
    }
}
