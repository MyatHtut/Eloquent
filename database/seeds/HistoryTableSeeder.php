<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $table =["hsitorys"];

    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 30) as $index) {
            DB::table('items')->insert([
                'item_id' => $faker->(10),
                'user_id' => $faker->id(10),
            ]);
        }
    }
}
