<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginFunction(Request $request)
    {

        $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ],[
            'username.required' => 'Username is required!!',
            'username.email' => 'Username must be a valid email',
            'password.required' => 'Password is required!!'
        ]);
        $user = User::where('email', $request->username)->first();
        if ($user) {
            session(['id' => $user->id]);
            session(['password' => $user->password]);
            session(['email' => $user->email]);
            return (view('index'));
        } else {
            return redirect('login')->with('message', 'Invalid Credentials');
        }
    }
    public function logoutFunction()
    {
        session()->flush();
        return redirect('login');
    }
}
