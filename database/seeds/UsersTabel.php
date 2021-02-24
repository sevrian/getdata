<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class UsersTabel extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create('id_ID');
    for ($i = 1; $i <= 50; $i++) {
      DB::table('users')->insert([
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'remember_token' => Str::random(10),
      ]);
    }
  }
}
