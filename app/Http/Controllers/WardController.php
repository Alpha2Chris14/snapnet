<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ward;
use App\Models\lga;

class WardController extends Controller
{
    //verifies if user is login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data["title"] = "All Wards";
        $data["wards"] = ward::all();

        return view("ward.index",$data);

    }

    public function create(){
        $data["title"] = "Snapnet | add a new ward";
        $data["lgas"] = lga::all();
        return view("ward.create",$data);
    }


    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'lga' => 'required',
        ]);

        $ward = new ward();
        $ward->name = $request->name;
        $ward->lga_id = $request->lga;

        $ward->save();

        // return view("citizens.show");
        echo "ward saved successfully";

    }
}
