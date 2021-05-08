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
        return 'Miss matched';
    }
    else{
         $rqst->session()->put('user',$user);
        return redirect('/');
    }
 }
}
