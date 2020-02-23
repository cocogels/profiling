<?php


use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['SuperAdmin', 'Admin', 'HumanResource', 'AcademicHead', 'SchoolAdmin', 'Services', 'Lecturer', 'Student'];

        foreach( $roles as $role ){
            $data[] = [
                'name' => $role,
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        DB::table('roles')->insert($data);
    }
}
