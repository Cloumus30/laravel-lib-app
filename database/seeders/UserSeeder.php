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
            'nama_foto' => null,
            'link_foto' => null,
            'role_id' => 1,
            'status' => true,
        ]);
        User::create([
            'nama' => 'cloudias',
            'username' => 'cloudias',
            'password' => Hash::make('123456'),
            'email' => 'cloudias@gmail.com',
            'nama_foto' => null,
            'link_foto' => null,
            'role_id' => 2,
            'status' => true,
        ]);
    }
}
