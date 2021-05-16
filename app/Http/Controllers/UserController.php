<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
 function login(Request $rqst){


    $user=User::where(['email'=>$rqst->email])->first();

    if (!$user || !Hash::check($rqst->password,$user->password)){

        return redirect('password_missmatch');
    }
    else{
         $rqst->session()->put('user',$user);
        return redirect('/');
    }
 }

 public function register(Request $rqs){

    $user= new User;
    $user->name=$rqs->name;
     $user->email=$rqs->email;
  $user->password=Hash::make($rqs->password);
   $user->save();
  return redirect('/register_done');


 }

 public function registerD(){
     return view ('register_done');
 }
    public function password_miss(){
        return view ('password_missmatch');
    }


}
