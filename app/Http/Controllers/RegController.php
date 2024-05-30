<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class RegController extends Controller
{
    public function create()
    {
        return view('/register');
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

        $path = 'public/img/users/' . $request->email;
        Storage::makeDirectory($path);

        Auth::login($user);

        return redirect('/market');
    }
}
