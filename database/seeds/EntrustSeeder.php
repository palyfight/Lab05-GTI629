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
    }
}
