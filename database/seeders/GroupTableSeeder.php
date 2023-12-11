<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0'), ditambahkan untuk handle issue foreign key constraint
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // DB::table('groups')->truncate();

        // $groups=[
        //     ['id'=>1, 'name'=>'Family', 'created_at'=>new now(), 'updated_at'=>new now()],
        //     ['id'=>2, 'name'=>'Friends', 'created_at'=>new now(), 'updated_at'=>new now()],
        //     ['id'=>2, 'name'=>'Clients', 'created_at'=>new now(), 'updated_at'=>new now()],
        // ];

        // DB::table('groups')->insert($groups);
        DB::table("groups")->insert([
            // "id" => 1,
            "name" => "Family",
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);

        DB::table("groups")->insert([
            // "id" => 2,
            "name" => "Friends",
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);

        DB::table("groups")->insert([
            // "id" => 3,
            "name" => "Clients",
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
    }
}
