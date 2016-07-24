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
            'config_name' => "password_length",
            'config_value' => "8"
            ]);

        DB::table('app_settings')->insert([
            'config_name' => "nb_log_attempts",
            'config_value' => "3"
            ]);

        DB::table('app_settings')->insert([
            'config_name' => "auth_delais",
            'config_value' => "60"
            ]);

        DB::table('app_settings')->insert([
            'config_name' => "block_auth_attempts",
            'config_value' => "1"
            ]);

        DB::table('app_settings')->insert([
            'config_name' => "periodic_changement",
            'config_value' => "1"
            ]);

        DB::table('app_settings')->insert([
            'config_name' => "regx_complexity",
            'config_value' => "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}"
            ]);
    }
}