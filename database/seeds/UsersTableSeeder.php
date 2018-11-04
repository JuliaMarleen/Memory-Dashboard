<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'Marleen',
            'email' => 'mm@mm.com',
            'password' => bcrypt('123456'),
            'admin' => '0',
            'color'=> '1',
        ],
        [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'admin' => '1',
            'color' => '2',
        ]
        ]);
        DB::table('spanish')->insert([[
            'userId' => '1',
            'word' => 'Mesa',
            'translation' => 'Tafel',
        ],
        [
            'userId' => '1',
            'word' => 'Gato',
            'translation' => 'Kat',
        ],
        [
            'userId' => '1',
            'word' => 'Ordenador',
            'translation' => 'Computer',
        ]]);
        DB::table('slogan')->insert([
            'title' => 'Motivational Quote',
            'slogan' => 'Een dag geen vitamine, is een dag korter leven',
            'image' => '1',
        ]);
    }
}
