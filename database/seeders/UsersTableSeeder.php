<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'sponsor' => 'jlustre',
            'username' => 'jblustre',
            'role_id' => 3,
            'email' => 'lustre.joane@gmail.com',
            'password' => Hash::make('jocolus7'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'sponsor' => 'jblustre',
            'username' => 'jhayjhay',
            'role_id' => 1,
            'email' => 'jhayjhay@gmail.com',
            'password' => Hash::make('jocolus7'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);
    }
}
