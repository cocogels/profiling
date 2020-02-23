<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $superadmin = User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('sample1234')
        ]);

        $superadmin->assignRole('SuperAdmin');


    }
}
