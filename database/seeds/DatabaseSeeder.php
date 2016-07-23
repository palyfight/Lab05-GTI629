<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /****************** Users *******************/

        DB::table('users')->insert([
            'firstname' => "David",
            'lastname' => "Delva",
            'email' => 'dd@gmail.com',
            'password' => bcrypt('random'),
            'role' => "Admin",
            'locked' => 0 
            ]);

        DB::table('users')->insert([
            'firstname' => "Bob",
            'lastname' => "Gratton",
            'email' => 'bg@gmail.com',
            'password' => bcrypt('random'),
            'role' => "prepCercle",
            'locked' => 0 
            ]);

        DB::table('users')->insert([
            'firstname' => "Pernal Karl",
            'lastname' => "Subban",
            'email' => '76@gmail.com',
            'password' => bcrypt('random'),
            'role' => "prepCarre",
            'locked' => 0 
            ]);

        /****************** Admin Configurations *******************/

        DB::table('configurations')->insert([
            'config_name' => "password_length",
            'config_value' => "8"
            ]);

        DB::table('configurations')->insert([
            'config_name' => "timeout_before_login",
            'config_value' => "300"
            ]);

        DB::table('configurations')->insert([
            'config_name' => "max_attempts",
            'config_value' => "3"
            ]);

        DB::table('configurations')->insert([
            'config_name' => "password_has_lower",
            'config_value' => "true"
            ]);

        DB::table('configurations')->insert([
            'config_name' => "password_has_upper",
            'config_value' => "true"
            ]);

        DB::table('configurations')->insert([
            'config_name' => "password_has_digit",
            'config_value' => "true"
            ]);

        DB::table('configurations')->insert([
            'config_name' => "password_has_special",
            'config_value' => "true"
            ]);

        DB::table('configurations')->insert([
            'config_name' => "cannot_reuse_last_x_passwords",
            'config_value' => "3"
            ]);
    }
}