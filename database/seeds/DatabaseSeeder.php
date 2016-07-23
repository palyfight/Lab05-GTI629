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

    }
}
