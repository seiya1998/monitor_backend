<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $account = [
            'login_id' => 'admin',
            'name' => '管理者用アカウント',
            'email' => 'fukushi@reno-m.jp',
            'password' => bcrypt('admin2345'),
        ];
        User::create($account);
    }
}
