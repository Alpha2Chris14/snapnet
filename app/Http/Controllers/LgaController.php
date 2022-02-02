<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lga;
use App\Models\state;
class LgaController extends Controller
{
    //verifies if user is login
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data["title"] = "All LGA";
        $data["lgas"] = lga::all();

        return view("lga.index",$data);

    }

    public function create(){
        $data["title"] = "Snapnet | add a new Local Gov Area";
        $data["states"] = state::all();
        return view("lga.create",$data);
    }


    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'state'=>'required',
        ]);

        $lga = new lga();
        $lga->name = $request->name;
        $lga->state_id = $request->state;

        $lga->save();

        echo("Successfully submitted the lga");

    }
}
