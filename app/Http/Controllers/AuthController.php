<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
       $request->validate([
        //    'username' => 'required|max:50',
           'email' => 'required|email|max:50',
           'password' => 'required|min:8',
       ]);

       if(Auth::attempt($request->only('email', 'password'), $request->has('remember'))) {
           if(Auth::user()->role == 'editor'){
               return redirect('/posts');
           }
           return redirect('/dashboard');
       }
       return back()->with('failed', 'email atau password salah');

    }

    public function logout(Request $request) {
        Auth::logout(Auth::user());
        return redirect('/login');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required|min:8|max:50',
            'confirm_password' => 'required|min:8|max:50|same:password',
        ]);

        $request['status'] = 'active';
        $user = User::create($request->all());

        Auth::login($user);
        return redirect('/login');
    }
}
