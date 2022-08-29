<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeders extends Seeder
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

        for ($i=1; $i <= 10 ; $i++) {
            DB::table('categories')->insert([
                'name' => $this->faker->unique()->name(),
                'image' => $this->faker->imageUrl(),
                'created_at' => $this->faker->dateTime(),
            ]);
        }
    }
}
