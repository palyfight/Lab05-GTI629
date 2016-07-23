<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_settings')->insert([
            'nb_log_attempts' => 3,
            'auth_delais' => 60,
            'block_auth_attempts' => 1,
            'periodic_changement' => 1,
            'regx_complexity' => "",
        ]);
    }
}
