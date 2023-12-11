<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        /**DB::table('contacts') adalah dua class seeder */
        DB::table('contacts')->truncate();

        $faker= Faker::create();
        $contacts= [];

        foreach (range(1,20) as $index)
        {
            $contacts[] =[
                'name'=> $faker->name,
                'email'=> $faker->email,
                'phone'=> $faker->phoneNumber,
                'address'=> "{$faker->streetName} {$faker->postcode} {$faker->city}",
                'company'=> $faker-> company,
                'group_id'=> rand(1, 3),
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ];
        }

        DB::table('contacts')->insert($contacts);
    }
}
