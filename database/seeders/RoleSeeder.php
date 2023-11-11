<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $permissions = Permission::all();
        Role::updateOrCreate([
            'name'      => 'Super Admin',
            'slug'      => 'super-admin',
            'deletable' => false
        ])->permissions()->sync($permissions->pluck('id'));

        Role::updateOrCreate([
            'name'      => 'Doctor',
            'slug'      => 'doctor',
            'deletable' => true
        ])->permissions()->sync($permissions->pluck('id'));

        Role::updateOrCreate([
            'name'      => 'Assistant',
            'slug'      => 'assistant',
            'deletable' => true
        ]);
    }
}
