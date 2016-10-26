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

class confirmationController extends Controller
{
    public function index()
    {
    	return view('registration.signup');
    }
     public function home()
    {
        return view('home');
    }
    public function signin()
    {
         return view('registration.signin');

    }
    public function postdashboard(){
        $input = Input::get();
            $role = $input['role'];
             Session::set('role', $role);

        return view('dashboard');
    }
    public function getdashboard(){
        return view('dashboard');
    }
    public function logout()
    {
        Auth::logout();
         Session::flush();
        return redirect()->route('home');

    }
    
    public function signincheck(Request $request){
        $email = $request['email'];
        
        $password = $request['password'];    

        if (Auth::attempt(['email' => $request['email'], 'password' =>  $request['password']])) {
            $users = DB::table('users')->where('email','=',$email)->get();
             Session::set('email', $users[0]->email);
            Session::set('fname', $users[0]->fname);
             Session::set('gender', $users[0]->gender);
              Session::set('surname', $users[0]->surname);
               Session::set('password', $users[0]->password);

            if ( !empty($users[0]->role1) && !empty($users[0]->role1))
            {               
             
            return View::make('registration.chooserole')->with('users',$users);
            }
            else{

             if ( empty($users[0]->role1))
                {
                Session::set('role', $users[0]->role2);

                   return redirect()->route('gdashboard');
               }
               else if ( empty($users[0]->role2))
                    {
                    Session::set('role', $users[0]->role1);

                   return redirect()->route('gdashboard');
               }
                }
        }
        
    }
    public function createRegister(Request $request)
    {
    	$user=new User();
    	$data['email']=$user->email = $request['email'];
        $data['fname']=$user->fname = $request['fname'];
        $user->surname = $request['surname'];
        $user->gender = $request['gender'];
        $user->role = $request['role'];
        $user->password = bcrypt($request['password']);

        $user = DB::table('users')->select('role1')->select('role2')->where('email','=',$user->email)->get();
        
      
       
     if(count($user)){
    
        //role1 is Musician
            if ( ! empty($user->role1) )
            {
               
                return Redirect::back()->withErrors([ 'You have already an account with '+$request['role']+' role']);    
                
            }
            else if (empty($user->role1 )) {
                DB::table('users')->where('email', $request['email'])->update(['role1' =>$request['role'] ]);
                return redirect()->route('home')->withErrors([ 'signed up successfuly ']);
            } 
        }


        else{

         $save=DB::table('users')->insert(
     ['email' => $request['email'], 'fname' => $request['fname'],'surname'=>$request['surname']
    ,'gender'=>$request['gender'],'role1'=>$request['role'],'password'=>bcrypt($request['password'] ),'created_at' => date("Y-m-d H:i:s")]);  
        {
            Mail::send('registration.ConfirmationMail',['data'=>$data],function($mail)use($data){
                    $mail->to($data['email'],$data['fname'])->from('testtaskconfirmation@gmail.com')->subject('Confirmation Mail');
            });
         return redirect()->route('home')->withErrors([ 'Please Check your email for the confirmation link']);

        }
        }
         }
        
      
        
    public function createOrchestraRegister(Request $request)
    {
        $user=new User();
        $data['email']=$user->email = $request['email'];
        $data['fname']=$user->fname = $request['fname'];
        $user->surname = $request['surname'];
        $user->gender = $request['gender'];
        $user->role = $request['role'];
        $user->orchestraname = $request['orchestraname'];
        $user->password = bcrypt($request['password']);

        $user = DB::table('users')->select('role1')->select('role2')->where('email','=',$user->email)->get();
        
      
       
     if(count($user)){
    
        //role2 is orchestra officer
            if ( ! empty($user->role2))
            {
               
                return Redirect::back()->withErrors([ 'You have already an account with '+$request['role']+' role']);    
                
            }
            else if (empty($user->role2 )) {
                DB::table('users')->where('email', $request['email'])->update(['role2' =>$request['role'] ]);
                return redirect()->route('home')->withErrors([ 'signed up successfuly please signin']);
            } 
        }


        else{

         $save=DB::table('users')->insert(
     ['email' => $request['email'], 'fname' => $request['fname'],'surname'=>$request['surname']
    ,'gender'=>$request['gender'],'orchestraname'=>$request['orchestraname'],'role2'=>$request['role'],'password'=>bcrypt($request['password'] ),'created_at' => date("Y-m-d H:i:s")]);  
        if($save)
        {
            Mail::send('registration.ConfirmationMail',['data'=>$data],function($mail)use($data){
                    $mail->to($data['email'],$data['fname'])->from('testtaskconfirmation@gmail.com')->subject('Confirmation Mail');
            });
         return redirect()->route('home')->withErrors([ 'Please Check your email for the confirmation link']);

        }
        }
         
               
        }
}
