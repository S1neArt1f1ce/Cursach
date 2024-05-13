<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegController extends Controller
{
    public function create()
    {
        return view('/reg');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:all_users'],
            'password' => ['required', 'confirmed', 'min:8'],
            'status' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'status' => $request->status
        ]);

        Auth::login($user);

        return redirect('/userstable');
    }
}
