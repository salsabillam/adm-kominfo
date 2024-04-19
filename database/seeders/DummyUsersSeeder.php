<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Mas Operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'username' => 'operator',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Mas Super Admin',
                'email' => 'superadmin@gmail.com',
                'role' => 'superadmin',
                'username' => 'superadmin',
                'password' => bcrypt('12345')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
