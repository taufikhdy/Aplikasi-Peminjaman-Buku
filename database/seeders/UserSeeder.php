<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Fahri Anargya Yusuf',
            'username' => 'fahrii',
            'email' => 'fhryy@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Rio Adrian Sidik',
            'username' => 'Rioo',
            'email' => 'RioAdrn@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
    }
}
