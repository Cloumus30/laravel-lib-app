<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'nama_role'=> 'super Admin'
        ]);
        Role::create([
            'nama_role'=> 'librarian'
        ]);
    }
}
