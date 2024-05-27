<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('/login');
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/userstable');
        }
    }

    public function show(User $user)
    {
        return view('/profile');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
}
