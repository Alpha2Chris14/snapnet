<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state;

class StateController extends Controller
{
    //verifies if user is login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data["title"] = "All LGA";
        $data["states"] = state::all();

        return view("state.index",$data);

    }

    public function create(){
        $data["title"] = "Snapnet | add a new state";
        return view("state.create",$data);
    }


    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $state = new state();
        $state->name = $request->name;

        $state->save();

        return redirect()->route("state");

    }
}
