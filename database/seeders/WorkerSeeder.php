<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers')->insert([
            'name' => 'Darbuotojas11',
            'email' => 'darbuotojas11@gmail.com',
            'phone' => '+37061111111',
            'company' => 1,
        ]);
        DB::table('workers')->insert([
            'name' => 'Darbuotojas12',
            'email' => 'darbuotojas12@gmail.com',
            'phone' => '+37061111112',
            'company' => 1,
        ]);
        DB::table('workers')->insert([
            'name' => 'Darbuotojas21',
            'email' => 'darbuotojas21@gmail.com',
            'phone' => '+37062222221',
            'company' => 2,
        ]);
        DB::table('workers')->insert([
            'name' => 'Darbuotojas22',
            'email' => 'darbuotojas22@gmail.com',
            'phone' => '+37062222222',
            'company' => 2,
        ]);
        DB::table('workers')->insert([
            'name' => 'Darbuotojas23',
            'email' => 'darbuotojas23@gmail.com',
            'phone' => '+37062222223',
            'company' => 2,
        ]);
        DB::table('workers')->insert([
            'name' => 'Darbuotojas31',
            'email' => 'darbuotojas31@gmail.com',
            'phone' => '+37063333331',
            'company' => 3,
        ]);
    }
}
