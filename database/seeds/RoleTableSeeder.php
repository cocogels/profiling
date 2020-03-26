<?php


use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $roles = ['SuperAdmin', 'Admin', 'HumanResource', 'AcademicHead', 'SchoolAdmin', 'Services', 'Lecturer', 'Student'];

        // foreach( $roles as $role ){
        //     $data[] = [
        //         'name' => $role,
        //         'guard_name' => 'web',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ];
        // }

        // DB::table('roles')->insert($data);


        $superAdmin = Role::create([
            'name' => 'SuperAdmin',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $admin = Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); 

        $hr = Role::create([
                'name' => 'Human-Resource',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);


        $acadhead = Role::create([
                'name' => 'Academic-Head',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);


        $schoolAdmin = Role::create([
                'name' => 'School-Admin',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);  


       $services = Role::create([
                'name' => 'Services',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);


        $lecturer = Role::create([
                'name' => 'Lecturer',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);


        $student = Role::create([
                'name' => 'Student',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);        
     
 
    }
}
