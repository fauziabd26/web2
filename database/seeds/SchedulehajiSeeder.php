<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class SchedulehajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data faker indonesia
        $faker = Faker::create('id_ID');

        //membuat data dummy sebanyak 10 record
        for ($x=1; $x <=10; $x++) { 
        	DB::table('schedulehaji')->insert([
        		'nama_Acara' => $faker->name,
        		'tempat' => $faker->address,
        	]);
        }

    }
}
