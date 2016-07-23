<?php

use Illuminate\Database\Seeder;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'display_name' => 'User Admintrator',
            'description' => 'User is allowed to modify configuration'
        ]);

        DB::table('roles')->insert([
            'name' => 'square',
            'display_name' => 'User Square',
            'description' => 'User is allowed to see square'
        ]);

        DB::table('roles')->insert([
            'name' => 'circle',
            'display_name' => 'User Circle',
            'description' => 'User is allowed to see circle'
        ]);

        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);

        DB::table('role_user')->insert([
            'user_id' => '2',
            'role_id' => '3'
        ]);

        DB::table('role_user')->insert([
            'user_id' => '3',
            'role_id' => '2'
        ]);

        DB::table('permissions')->insert([
            'name' => 'see-circle',
            'display_name' => 'See Circle',
            'description' => 'User can see circle'
        ]);

        DB::table('permissions')->insert([
            'name' => 'see-square',
            'display_name' => 'See square',
            'description' => 'User can see square'
        ]);

        DB::table('permissions')->insert([
            'name' => 'admin-power',
            'display_name' => 'admin power',
            'description' => 'User has admin power'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => '3',
            'role_id' => '1'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => '2',
            'role_id' => '2'
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => '1',
            'role_id' => '3'
        ]);


    }
}
