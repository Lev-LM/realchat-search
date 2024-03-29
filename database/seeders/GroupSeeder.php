<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // for ($i=0; $i < 10; $i++) {


        //     DB::table('groups')->insert([

        //         'name'=> Str::random(10),
        //         'number'=> rand(1111111, 22222222),


        //     ]);

        // }

        // $faker = Faker\Factory::create('ru_RU');
        // $faker->realText;

        \App\Models\Group::factory(10)->create();




    }
}
