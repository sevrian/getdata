<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $faker = Faker::create('id_ID');

          	for($i = 1; $i <= 50; $i++){
          	      // insert data ke table pegawai menggunakan Faker
          		DB::table('email')->insert([
          			'email' => $faker->email,
          			'no_tlp' => $faker->phoneNumber,
          			'nama' => $faker->name,
          		]);

          	}
    }
}
