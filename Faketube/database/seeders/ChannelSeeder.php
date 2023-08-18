<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ChannelSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('channels')->insert([
                'ChannelName' => $faker->company,
                'Description' => $faker->sentence,
                'SubscribersCount' => $faker->numberBetween(1000, 1000000),
                'URL' => $faker->url,
                'Created_At' => now(),
                'Updated_At' => now(),
            ]);
        }
    }
}
