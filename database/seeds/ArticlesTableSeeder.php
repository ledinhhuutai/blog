<?php

use Illuminate\Database\Seeder;
use App\Article;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [];
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 15; $i++) {
            $items = [
                'title' => $faker->sentence,
                'body'  => $faker->paragraph,
            ];
            $articles[] = $items;
        }
        DB::table('articles')->insert($articles);
    }
}
