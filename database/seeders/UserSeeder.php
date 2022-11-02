<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        \App\Models\User::updateOrCreate([
            'name' => 'Gerard',
            'email' => 'gerard.szymanski1@gmail.com',], [
            'password' => Hash::make('1qazxsw2'),
        ]);
    }
}
