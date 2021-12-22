<?php

namespace Database\Seeders;

use App\Models\User;
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
        //
        User::create([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'admin@admin.com',
            'foto' => 'img',
            'role_id' => 1
        ]);
        User::create([
            'nama' => 'cloudias',
            'username' => 'cloudias',
            'password' => Hash::make('123456'),
            'email' => 'cloudias@gmail.com',
            'foto' => 'img',
            'role_id' => 2
        ]);
    }
}
