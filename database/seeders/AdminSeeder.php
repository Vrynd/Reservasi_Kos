<?php

namespace Database\Seeders;


use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'name' => 'Admin',
            'email' => 'admin185@gmail.com',
            'password' => 'admin#185',
            'role' => 'admin'
        ]);
    }
}
