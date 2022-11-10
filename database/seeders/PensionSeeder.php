<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pensions')->insert([
            'name' => 'No tiene',
        ]);
        DB::table('pensions')->insert([
            'name' => 'COLPENSIONES',
        ]);
        DB::table('pensions')->insert([
            'name' => 'PORVENIR',
        ]);
        DB::table('pensions')->insert([
            'name' => 'PROTECCION',
        ]);
    }
}
