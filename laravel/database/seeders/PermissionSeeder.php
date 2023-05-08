<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = Role::create(['name' => 'admin']);
        $authorRole = Role::create(['name' => 'author']);

        Permission::create(['name' => 'users.*']);
        Permission::create(['name' => 'users.list']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.read']);
        Permission::create(['name' => 'users.delete']);

        Permission::create(['name' => 'roles.*']);
        Permission::create(['name' => 'roles.list']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.update']);
        Permission::create(['name' => 'roles.read']);
        Permission::create(['name' => 'roles.delete']);

        Permission::create(['name' => 'permissions.*']);
        Permission::create(['name' => 'permissions.list']);
        Permission::create(['name' => 'permissions.create']);
        Permission::create(['name' => 'permissions.update']);
        Permission::create(['name' => 'permissions.read']);
        Permission::create(['name' => 'permissions.delete']);

        Permission::create(['name' => 'artists.*']);
        Permission::create(['name' => 'artists.list']);
        Permission::create(['name' => 'artists.create']);
        Permission::create(['name' => 'artists.update']);
        Permission::create(['name' => 'artists.read']);
        Permission::create(['name' => 'artists.delete']);

        Permission::create(['name' => 'songs.*']);
        Permission::create(['name' => 'songs.list']);
        Permission::create(['name' => 'songs.create']);
        Permission::create(['name' => 'songs.update']);
        Permission::create(['name' => 'songs.read']);
        Permission::create(['name' => 'songs.delete']);

        Permission::create(['name' => 'events.*']);
        Permission::create(['name' => 'events.list']);
        Permission::create(['name' => 'events.create']);
        Permission::create(['name' => 'events.update']);
        Permission::create(['name' => 'events.read']);
        Permission::create(['name' => 'events.delete']);

        // mirar si pongo ticket o orders

        $adminRole->givePermissionTo([ 'users.*', 'roles.*', 'permissions.*', 'artists.*', 'songs.*', 'events.*' ]);

        $authorRole->givePermissionTo([ 'events.list', 'events.read' ]);


        // $name  = config('admin.name');
        // $admin = User::where('name', $name)->first();
        // $admin->assignRole('admin');

    }
}
