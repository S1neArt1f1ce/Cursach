<?php

namespace App\Http\Controllers;

use App\Models\AllUsers as ModelsAllUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\DB;

class AllUsersController extends Controller
{
    //
    public function index()
    {
        $data = ModelsAllUsers::all();
        return view('DBdisplay', ['data' => $data]);
    }

    public function delete_user($id)
    {
        DB::table('all_users')->where('id', $id)->delete();
        return back();
    }

    public function add_user()
    {
        Auth::logout();
        return view('/register');
    }
}
