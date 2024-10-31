<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'superadmin@gmail.com',
        //     'password' => encrypt('1234567890')
        // ])->assignRole('Admin');

       $Admin = user::create([
            'name' => 'Admin Felipe',
            'email' => 'adminfelipe888@gmail.com',
            'password' => bcrypt('1234567890')
        ]);
        $Admin->assignRole('Admin');

        $Comprador = user::create([
            'name' => 'Duban',
            'email' => 'dubancaro888@gmail.com',
            'password' => bcrypt('1234567890')
        ]);
        $Comprador->assignRole('Comprador');


    }

}
