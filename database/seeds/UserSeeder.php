<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'      => 'Bong bong Marcos',
            'email'     => 'admin@yahoo.com',
            'contact'   => '09093434343',
            'address'   => 'Northern Luzon',
            'password'  => bcrypt('admin')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name'      => 'Leila Delima',
            'email'     => 'client@yahoo.com',
            'contact'   => '09093434343',
            'address'   => 'Northern Luzon',
            'password'  => bcrypt('client')
        ]);

        $user->assignRole('client');
    }
}
