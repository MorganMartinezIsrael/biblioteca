<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'lgjulianrmz2912@gmail.com';
        $user->password = bcrypt('cambio123');
        $user->save();
        $user->roles()->attach($role_admin);
        /*
        $role_user = Role::where('name', 'user')->first();
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
        $user = new User();
       */
    }
}
