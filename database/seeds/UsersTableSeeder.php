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
        //
        DB::table('users')->insert([
            'name' => 'Ye Min Htut',
            'email' => 'ye.minhtut@travelogy.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
