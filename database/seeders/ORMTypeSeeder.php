<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ORMTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('o_r_m_types')->insert([
            'name' => 'POSITIVA',
        ]);
        DB::table('o_r_m_types')->insert([
            'name' => 'AXA COLPATRIA S.A',
        ]);
        DB::table('o_r_m_types')->insert([
            'name' => 'COLMENA SEGUROS',
        ]);
        DB::table('o_r_m_types')->insert([
            'name' => 'COMPAÑÍA DE SEGUROS DE VIDA AURORA S.A.',
        ]);
        DB::table('o_r_m_types')->insert([
            'name' => 'LA EQUIDAD SEGUROS DE VIDA',
        ]);
        DB::table('o_r_m_types')->insert([
            'name' => 'LIBERTY SEGUROS DE VIDA S.A.',
        ]);
        DB::table('o_r_m_types')->insert([
            'name' => 'MAPFRE SEGUROS',
        ]);
        DB::table('o_r_m_types')->insert([
            'name' => 'SEGUROS BOLÍVAR S.A',
        ]);
        DB::table('o_r_m_types')->insert([
            'name' => 'SEGUROS DE VIDA ALFA S.A.',
        ]);
        DB::table('o_r_m_types')->insert([
            'name' => 'SURATEP SA',
        ]);
    }
}
