<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\isNull;

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

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function edit(Request $newdata)
    {
        return view('/editprofile');
    }

    public function savedit(Request $newdata)
    {
        // dd($newdata->all());

        $filename = '';

        if ($newdata->hasFile('img')) {
            $filename = $newdata->getSchemeAndHttpHost() . '/storage/img/users/' . Auth::user()->email . '.' . $newdata->img->extension();

            $newdata->img->move(public_path('/storage/img/users/' . Auth::user()->email), $filename);
        }
        $user = User::find(Auth::user()->id);

        if (isset($newdata->name)) {
            $user->name = $newdata->name;
        };

        // if (isset($newdata->email)) {
        //     $user->email = $newdata->email;
        // };

        $user->save();
        return redirect()->route('profile');
    }
}
