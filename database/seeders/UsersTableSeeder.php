<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        $users = array(
            ['id' => 1, 'name' => 'User', 'email' => 'test123@mail.com', 'password' => Hash::make('123')]
        );

        DB::table('users')->insert($users);
    }
}
