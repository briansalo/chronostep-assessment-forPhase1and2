<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'first_name' => 'brian',
            'last_name' => 'salo',
            'email' => 'briansalo@gmail.com',
            'birth_date' => '1997-04-04',    
            'password' => Hash::make('password'),
        ]);
    }
}
