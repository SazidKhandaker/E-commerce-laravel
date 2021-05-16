<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function login(Request $request)
    {


        $request->validate([
            'email' => ['required', 'email', 'min:3', 'max:255'],
            'password' => ['required', 'min:3', 'max:255'],
        ]);

        $attempt = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (!$attempt) {
            return redirect('/password_missmatch');
        }

        return redirect()->route('home');
    }

    public function register(Request $rqs)
    {
        $rqs->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'min:3', 'max:255'],
            'password' => ['required', 'min:3', 'max:255'],
        ]);

        $user = new User;
        $user->name = $rqs->name;
        $user->email = $rqs->email;
        $user->password = Hash::make($rqs->password);
        $user->save();

        return redirect('/register_done');
    }

    public function registerD()
    {
        return view('register_done');
    }

    public function password_miss()
    {
        return view('password_missmatch');
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.login');
    }


}
