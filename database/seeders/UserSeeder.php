<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superuser = User::create([
            'name' => 'superuser',
            'email' => 'superuser@mail.com',
            'password' => bcrypt('superuserpassword'),
            'phonenumber' => 123412341234,
            'address' => 'indonesia',
        ]);
        $superuser->assignRole('superuser');

        $staff = User::create([
            'name' => 'staff',
            'email' => 'staff@mail.com',
            'password' => bcrypt('staffpassword'),
            'phonenumber' => 123412341234,
            'address' => 'indonesia',
        ]);
        $staff->assignRole('staff');

        $reporter = User::create([
            'name' => 'reporter',
            'email' => 'reporter@mail.com',
            'password' => bcrypt('reporterpassword'),
            'phonenumber' => 123412341234,
            'address' => 'indonesia',
        ]);
        $reporter->assignRole('reporter');

        $userone = User::create([
            'name' => 'userone',
            'email' => 'userone@mail.com',
            'password' => bcrypt('useronepassword'),
            'phonenumber' => 123412341234,
            'address' => 'indonesia',
        ]);
        $userone->assignRole('user');
    }
}
