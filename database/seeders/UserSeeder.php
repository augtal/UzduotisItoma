<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'testUser',
            'email' => 'testUser@gmail.com',
            'role' => 1,
            'password' => Hash::make('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'adminUser',
            'email' => 'adminUser@gmail.com',
            'role' => 65,
            'password' => Hash::make('adminadmin'),
        ]);
    }
}
