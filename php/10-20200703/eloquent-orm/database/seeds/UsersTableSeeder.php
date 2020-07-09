<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name'=>$faker->name(),
            'email'=>$faker->freeEmail,
            'password'=>bcrypt($faker->password),
            'address'=>$faker->streetAddress
        ]);
    }
}
