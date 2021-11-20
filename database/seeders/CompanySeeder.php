<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => "Imone1",
            'email' => "imone1@imone.lt",
            'URL' => 'imone1.lt',
            'image' => 'imone1',
        ]);

        DB::table('companies')->insert([
            'name' => "Imone2",
            'email' => "imone2@imone.lt",
            'URL' => 'imone2.lt',
            'image' => 'imone2',
        ]);

        DB::table('companies')->insert([
            'name' => "Imone3",
            'email' => "imone3@imone.lt",
            'URL' => 'imone3.lt',
            'image' => 'imone3',
        ]);
    }
}
