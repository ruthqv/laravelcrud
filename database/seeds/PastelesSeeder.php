<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PastelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            \DB::table('pasteles')->insert(array(
                   'nombre' => 'Pastel ' . $faker->firstNameFemale . ' ' . $faker->lastName,
                   'sabor'  => $faker->randomElement(['chocolate','vainilla','cheesecake']),
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}