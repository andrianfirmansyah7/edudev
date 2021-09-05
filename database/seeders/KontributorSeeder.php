<?php

use Illuminate\Database\Seeder;
 
use Faker\Factory as Faker;

class KontributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($x = 1;$x <= 10;$x++){
            DB::table('kontributor')->insert([
                'nama_kontributor' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'deskripsi' => $faker->address,
            ]);
        }
    }
}
