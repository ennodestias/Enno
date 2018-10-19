<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{

//@return void
    public function run()
    {
    	$faker = Faker\Factory::create();

    	$limit = 10;

    	for ($i = 0; $i < $limit; $i++){
    		DB::table('mahasiswa')->insert([
    			'nama' => $faker->name,
    			'email' => $faker->unique()->email,
    			'nohp' => $faker->phoneNumber,
    			'alamat' => $faker->address,
    		]);
    	}
        // $this->call(UsersTableSeeder::class);
    }


}
