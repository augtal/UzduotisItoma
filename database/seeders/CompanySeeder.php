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
            'url' => 'imone1.lt',
            'logo' => 'imone1',
        ]);

        DB::table('companies')->insert([
            'name' => "Imone2",
            'email' => "imone2@imone.lt",
            'url' => 'imone2.lt',
            'logo' => 'imone2',
        ]);

        DB::table('companies')->insert([
            'name' => "Imone3",
            'email' => "imone3@imone.lt",
            'url' => 'imone3.lt',
            'logo' => 'imone3',
        ]);
    }
}
