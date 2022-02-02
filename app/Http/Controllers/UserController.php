<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data["title"] = "All USERS";
        $data["users"] = User::all();

        return view("users.index",$data);

    }
}
