<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 30) as $index) {
            DB::table('items')->insert([
                'name' => $faker->title(10),
            ]);
        }
    }
}
