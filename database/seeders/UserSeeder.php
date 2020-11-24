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
        ]);
        $superuser->assignRole('superuser');

        $staff = User::create([
            'name' => 'staff',
            'email' => 'staff@mail.com',
            'password' => bcrypt('staffpassword'),
        ]);
        $staff->assignRole('staff');

        $reporter = User::create([
            'name' => 'reporter',
            'email' => 'reporter@mail.com',
            'password' => bcrypt('reporterpassword'),
        ]);
        $reporter->assignRole('reporter');

        $userone = User::create([
            'name' => 'userone',
            'email' => 'userone@mail.com',
            'password' => bcrypt('useronepassword'),
        ]);
        $userone->assignRole('user');
    }
}
