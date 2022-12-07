<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ORMLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('o_r_m_levels')->insert([
            'level' => '1',
            'rate' => '0.522',
        ]);
        DB::table('o_r_m_levels')->insert([
            'level' => '2',
            'rate' => '1.044',
        ]);
        DB::table('o_r_m_levels')->insert([
            'level' => '3',
            'rate' => '2.436',
        ]);
        DB::table('o_r_m_levels')->insert([
            'level' => '4',
            'rate' => '4.350',
        ]);
        DB::table('o_r_m_levels')->insert([
            'level' => '5',
            'rate' => '6.960',
        ]);
    }
}
