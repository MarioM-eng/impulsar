<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'cc' => '000000000',
            'name' => 'Admin',
            'last_name' => 'Impulsar',
            'date_of_birth' => now(),
            'email' => 'impulsar@gmail.com',
            'password' => Hash::make('impulsar123'),
        ]);
    }
}
