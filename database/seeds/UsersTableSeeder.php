<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades;
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
        $password  = Hash::make('123456');
//        $users = [
//            'name' => 'Huu tai',
//            'email' => 'admin@gmail.com',
//            'password' => $password,
//        ];

        for ($i = 0 ; $i < 15; $i++) {
            $items = [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ];
            $users[] = $items;
        }
        DB::table('users')->insert($users);
    }
}
