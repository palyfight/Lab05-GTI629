<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;

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

    public function createuser()
    {
        return view('createuser');
    }

    public function saveuser(Request $request)
    {
    	$name = explode(",", $request->input('name'));
        $user = User::create([
            'firstname' => $name[0],
            'lastname' => $name[1],
            'email' =>  $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $this->getRole($request->input('role')),
        ]);

        $user->attachRole($this->getRoleId($request->input('role')));

        return view('admin');
    }

    private function getRole($role_num){
    	if(strcmp($role_num, "0"))
    		return "prepCarre";
    	else if(strcmp($role_num, "1"))
    		return "prepCercle";
    	else if(strcmp($role_num, "2"))
    		return "Admin";
    }

    private function getRoleId($role_num){
    	if(strcmp($role_num, "0"))
    		return 2;
    	else if(strcmp($role_num, "1"))
    		return 3;
    	else if(strcmp($role_num, "2"))
    		return 1;
    }
}