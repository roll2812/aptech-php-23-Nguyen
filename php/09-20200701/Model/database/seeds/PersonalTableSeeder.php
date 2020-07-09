<?php

use Illuminate\Database\Seeder;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('personal')->insert([
                'name'=> $faker->name(),
                'age' => rand(20,80),
                'address' =>$faker->streetAddress,
                'phone-number' => $faker->phoneNumber,
                'email' => $faker->freeEmail,
                'mastercard'=> $faker->creditCardNumber
            ]);

        }
    }
}
