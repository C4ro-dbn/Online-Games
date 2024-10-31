<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Permission::create(['name'=>'menuAdmin.index']);
        Permission::create(['name'=>'perfilUsu.index']);

        Permission::create(['name'=>'producto.create']);
        Permission::create(['name'=>'producto.index']);
        Permission::create(['name'=>'producto.edit']);

        Permission::create(['name'=>'create role']);
        Permission::create(['name'=>'read role']);
        Permission::create(['name'=>'update role']);
        Permission::create(['name'=>'delete role']);

        Permission::create(['name'=>'create permission']);
        Permission::create(['name'=>'read permission']);
        Permission::create(['name'=>'update permission']);
        Permission::create(['name'=>'delete permission']);

        $role = Role::create(['name'=>'Admin']);
        $role -> givePermissionTo([Permission::all()]);

        $role = Role::create(['name'=>'Comprador']);
        $role -> givePermissionTo(['perfilUsu.index']); 

    }

}
