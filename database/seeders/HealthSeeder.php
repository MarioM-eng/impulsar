<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HealthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('healths')->insert([
            'name' => 'No tiene',
        ]);DB::table('healths')->insert([
            'name' => 'CAJACOPI',
        ]);
        DB::table('healths')->insert([
            'name' => 'COMFASUCRE',
        ]);
        DB::table('healths')->insert([
            'name' => 'COOSALUD',
        ]);
        DB::table('healths')->insert([
                'name' => 'MUTUAL SER',
        ]);
        DB::table('healths')->insert([
                'name' => 'NUEVA EPS',
        ]);
        DB::table('healths')->insert([
                'name' => 'SALUD TOTAL',
        ]);
        DB::table('healths')->insert([
                'name' => 'SANITAS',
        ]);
    }
}
