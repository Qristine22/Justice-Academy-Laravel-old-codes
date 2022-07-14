<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'login' => 'admin',
                'is_admin' => '1',
                'password' => '$2y$10$KL5rPHNPtPcUhhJZ3krwVOvMfZYP8mD/E.gntJl6xk4bXgOUwP3DO',
            ],
        ]);
    }
}
