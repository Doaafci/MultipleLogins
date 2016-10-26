<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;
use DB;
use Auth;
use Redirect;
use Session;
use View;

use App\User;

class resetpasswordcontroller extends Controller
{
   public function index()
   {
   	return view('forgetpassword');
   }
   public function resetform()
   {
   	return view('resetpassword');
   }
  	public function resetpasswordemail(Request $request )
  	{
  		$data['email']=$email=$request['email'];
  		$user = DB::table('users')->where('email','=',$email)->get();
  		if(count($user))
  		{
  			$data['fname']=$user[0]->fname;
  				Mail::send('resetpassordEmail',['data'=>$data],function($mail)use($data){
                    $mail->to($data['email'],$data['fname'])->from('testtaskconfirmation@gmail.com')->subject('Reset Password Mail');
            });
         return redirect()->route('home')->withErrors([ 'Please Check your email for the reset password link']);
  		}
  		else
  		{
  		return redirect()->route('home')->withErrors([ 'you do not have an account with this Email']);
  		}

  	}
  	public function resetpasswordDB(Request $request)
  	{
  		 
 $update=DB::table('users')->where('email', $request['email'])->update (['password'=>bcrypt($request['password'])]);

  		 if($update)
  		 {
  		 	 return redirect()->route('home')->withErrors([ 'your password  reset successfully .please login with your new password']);

  		 }
  	}

}
