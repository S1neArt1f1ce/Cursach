<?php

namespace App\Http\Controllers;

use App\AllUsers;
use App\Models\AllUsers as ModelsAllUsers;
use Illuminate\Http\Request;

class AllUsersController extends Controller
{
    //
    public function index()
    {
        $data = ModelsAllUsers::all();
        return view('DBdisplay', ['data' => $data]);
    }
}
