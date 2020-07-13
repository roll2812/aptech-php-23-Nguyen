<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $title = $faker->sentence(rand(3,6));
        Article::create([
            'title'=>$title,
            'slug'=>Str::slug($title,'-'),
            'description'=>$faker->text(rand(100,300)),
            'content'=>$faker->realText(rand(1000,2000))
        ]);
    }
}
