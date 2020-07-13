<?php

use Illuminate\Database\Seeder;
use App\Phone;
class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            ['name'=>'Iphone','price'=>rand(5000000,20000000),'color'=>'black'],
            ['name'=>'Samsung','price'=>rand(5000000,20000000),'color'=>'white'],
            ['name'=>'Bphone','price'=>rand(5000000,20000000),'color'=>'red'],
            ['name'=>'LG','price'=>rand(5000000,20000000),'color'=>'green'],
            ['name'=>'Nokia','price'=>rand(5000000,20000000),'color'=>'yellow'],

        ]);
    }
}
