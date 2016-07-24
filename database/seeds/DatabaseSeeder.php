<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'firstname' => "David",
            'lastname' => "Delva",
            'email' => 'dd@gmail.com',
            'password' => bcrypt('Etsmt!c4'),
            'role' => "Admin",
            'locked' => 0 
        ]);

        DB::table('users')->insert([
            'firstname' => "Bob",
            'lastname' => "Gratton",
            'email' => 'bg@gmail.com',
            'password' => bcrypt('Etsmt!c4'),
            'role' => "prepCercle",
            'locked' => 0 
        ]);

        DB::table('users')->insert([
            'firstname' => "Pernal Karl",
            'lastname' => "Subban",
            'email' => '76@gmail.com',
            'password' => bcrypt('Etsmt!c4'),
            'role' => "prepCarre",
            'locked' => 0 
        ]);
    }
}
