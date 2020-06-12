<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [];
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 15; $i++) {
            $items = [
                'title' => $faker->title,
                'body' => $faker->realText(250, 2),
                'author_id' => $faker->biasedNumberBetween($min = 1, $max = 5),
                'short_desc' => $faker->text($maxNbChars = 200),
            ];
            $posts[] = $items;
        }
        DB::table('posts')->insert($posts);
    }
}
