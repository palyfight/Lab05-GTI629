<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;
use Auth;
use Validator;

class PasswordController extends Controller {

   public function index(){
  		return view('password/changepassword');
   }

   public function newpassword(Request $request) {
   		$user_email = Auth::user()->email;
   		$old_pw = $request->input('password');
   		$password = bcrypt($old_pw);
   		
   		if (Auth::attempt(['email' => $user_email, 'password' => $old_pw])) {
   			$request->session()->put('second_validation', true);
   			return view('password/newpassword');
   		}
   		else{
   			return redirect('changepassword')->with('status', 'Wrong password');
   		}
    }

    public function setpassword(Request $request) {
    	if ( $request->session()->get('second_validation') ) {
    		$request->session()->put('second_validation', false);
	    	$input = $request->input();
	    	$regex = \DB::table('app_settings')->where('config_name', 'regx_complexity')->first();
	    	$rules = array(
		        'password' => ['required','min:8','max:20','Confirmed', 'regex:/' . $regex->config_value .'/'],
		        'password_confirmation'=> ['required','min:8','max:20', 'regex:/' . $regex->config_value .'/'],
	        );

	        $v = Validator::make($input, $rules);

	        if( $v->passes() ) {
	        	$user = User::findOrFail(Auth::user()->id);
				$password = bcrypt($request->input('password'));
		        $user->password = $password;
		        $user->save();
		        return redirect('/admin')->with('status', 'Password Changed');
			} else { 
			    return redirect('changepassword')->with('status', 'No valid password was sent');
			}
		} else {
			return redirect('changepassword');
		}
	}
}
//Etmmt!44 //$request->session()->put('key', 'value');