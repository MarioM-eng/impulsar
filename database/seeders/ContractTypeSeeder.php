<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contract_types')->insert([
            'name' => 'obra o labor',
        ]);
        DB::table('contract_types')->insert([
            'name' => 'Trabajo a término fijo',
        ]);
        DB::table('contract_types')->insert([
            'name' => 'Trabajo a término indefinido',
        ]);
        DB::table('contract_types')->insert([
            'name' => 'Contrato por obra o labor',
        ]);
        DB::table('contract_types')->insert([
            'name' => 'Aaprendizaje',
        ]);
        DB::table('contract_types')->insert([
            'name' => 'Temporal, ocasional o accidental',
        ]);
    }
}
