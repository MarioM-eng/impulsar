<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ORMStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('o_r_m_states')->insert([
            'level' => '1',
            'ibc' => '0.522',
        ]);
        DB::table('o_r_m_states')->insert([
            'level' => '2',
            'ibc' => '1.044',
        ]);
        DB::table('o_r_m_states')->insert([
            'level' => '3',
            'ibc' => '2.436',
        ]);
        DB::table('o_r_m_states')->insert([
            'level' => '4',
            'ibc' => '4.350',
        ]);
        DB::table('o_r_m_states')->insert([
            'level' => '5',
            'ibc' => '6.960',
        ]);
    }
}
