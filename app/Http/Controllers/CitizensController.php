<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizen;
use App\Models\ward;

class CitizensController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data["title"] = "All Citizens";
        $data["citizens"] = citizen::all();

        return view("citizens.index",$data);

    }

    public function create(){
        $data["title"] = "Snapnet | add a new citizen";
        $data['wards'] = ward::all();
        return view("citizens.create",$data);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'ward' => 'required',
        ]);

        $citizen = new citizen();
        $citizen->name = $request->name;
        $citizen->gender = $request->gender;
        $citizen->address = $request->address;
        $citizen->phone = $request->phone;
        $citizen->ward_id = $request->ward;

        $citizen->save();

        // return view("citizens.show");
        
        return redirect()->route('citizen');

    }
}
