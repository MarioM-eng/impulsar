<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'BANCAMIA S.A.',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO AGRARIO',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO AV VILLAS',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO BBVA COLOMBIA S.A.',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO CAJA SOCIAL',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO COOPERATIVO COOPCENTRAL',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO CREDIFINANCIERA',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO DAVIVIENDA',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO DE BOGOTA',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO DE OCCIDENTE',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO FALABELLA',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO GNB SUDAMERIS',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO ITAU',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO PICHINCHA S.A.',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO POPULAR',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO SANTANDER COLOMBIA',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCO SERFINANZA',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCOLOMBIA',
        ]);
        DB::table('banks')->insert([
            'name' => 'BANCOOMEVA S.A.',
        ]);
        DB::table('banks')->insert([
            'name' => 'CFA COOPERATIVA FINANCIERA',
        ]);
        DB::table('banks')->insert([
            'name' => 'CITIBANK',
        ]);
        DB::table('banks')->insert([
            'name' => 'COLTEFINANCIERA',
        ]);
        DB::table('banks')->insert([
            'name' => 'CONFIAR COOPERATIVA FINANCIERA',
        ]);
        DB::table('banks')->insert([
            'name' => 'COOFINEP COOPERATIVA FINANCIERA',
        ]);
        DB::table('banks')->insert([
            'name' => 'COTRAFA',
        ]);
        DB::table('banks')->insert([
            'name' => 'DALE',
        ]);
        DB::table('banks')->insert([
            'name' => 'DAVIPLATA',
        ]);
        DB::table('banks')->insert([
            'name' => 'IRIS',
        ]);
        DB::table('banks')->insert([
            'name' => ' LULO BANK',
        ]);
        DB::table('banks')->insert([
            'name' => 'MOVII S.A.',
        ]);
        DB::table('banks')->insert([
            'name' => 'NEQUI',
        ]);
        DB::table('banks')->insert([
            'name' => 'RAPPIPAY DAVIPLATA',
        ]);
        DB::table('banks')->insert([
            'name' => 'SCOTIABANK COLPATRIA',
        ]);
    }
}
