<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank_types')->insert([
            'name' => 'Cuenta Corriente',
        ]);
        DB::table('banks')->insert([
            'name' => 'Cuenta De Ahorros',
        ]);
        DB::table('banks')->insert([
            'name' => 'Cuenta de Nómina',
        ]);
    }
}
