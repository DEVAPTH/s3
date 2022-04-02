<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('pgsql_third')->table('users')->insert([
            'name' => 'APTH',
            'email' =>'aungphone.dev@gmail.com',
            'password' => Hash::make('testadmin'),
            'type' => 'admin',
        ]);
    }
}
