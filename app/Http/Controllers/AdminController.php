<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller {

   public function index()
    {
        return view('admin');
    }

    public function save(Request $request)
    {
    	$password_length = $request->input('password_length');
    	\DB::table('app_settings')->where('config_name', 'password_length')->update(['config_value' => $password_length]);

    	$nb_log_attempts = $request->input('nb_log_attempts');
    	\DB::table('app_settings')->where('config_name', 'nb_log_attempts')->update(['config_value' => $nb_log_attempts]);

    	$auth_delais = $request->input('auth_delais');
    	\DB::table('app_settings')->where('config_name', 'auth_delais')->update(['config_value' => $auth_delais]);

    	$block_auth_attempts = $request->input('block_auth_attempts');
    	\DB::table('app_settings')->where('config_name', 'block_auth_attempts')->update(['config_value' => $block_auth_attempts]);

    	$periodic_changement = $request->input('periodic_changement');
    	\DB::table('app_settings')->where('config_name', 'periodic_changement')->update(['config_value' => $periodic_changement]);

    	$regx_complexity = $request->input('regx_complexity');
    	\DB::table('app_settings')->where('config_name', 'regx_complexity')->update(['config_value' => $regx_complexity]);

        return view('admin');
    }

}