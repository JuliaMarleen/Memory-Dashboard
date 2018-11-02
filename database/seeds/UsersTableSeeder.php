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
            'name' => 'Marleen',
            'email' => 'mm@mm.com',
            'password' => bcrypt('123456'),
            'admin' => '0',
        ],
        [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'admin' => '1',
        ]);
    }
}
