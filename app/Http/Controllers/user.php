<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class user extends Controller
{

  public function index(Request $request){

    return User :: Select('*')->where([
    ['email','=',$request->email],
    ['password','=',$request->password]
  
    ])-get();
    $request->session()->put('logdata',[$request->input()]);
    return redirect('Sign');
   }
   public function login()
   {
   return view('login');
   }
   public function Sign()
   {
   return view('Sign');
   }

  public function loginsub(Request $request){
    return $request->all();
   }
 public function sinsub(Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
    $data=array('name'=>$name,"email"=>$email,"password"=>$password);
    $qu=DB::table('users')->insert($data);
   if($qu){
  	 return view('login');
  	} else{
  		return view('Sign');
  	}
}


}
