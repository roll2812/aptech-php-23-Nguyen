<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        User::create([
            'name'=>$faker->name(),
            'email'=>$faker->freeEmail,
            'password'=>bcrypt('$faker->password')
        ]);
    }
}
