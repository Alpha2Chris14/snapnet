<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citizen;
use App\Models\ward;
use App\Models\state;
use App\Models\lga;

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

    public function filterByWard($id){
        $data["title"] = "FIlter By Ward";
        $data["citizens"] = citizen::where('ward_id',$id)->get();
        return view("citizens.index",$data);   
    }

    public function filterBylocal($id){
        $data["title"] = "FIlter By LGA";
        $ward = ward::where("lga_id",'=',$id)->first();
        $data["citizens"] = citizen::where('ward_id',$ward->id)->get();
        return view("citizens.index",$data);   
    }

    public function filterByState($id){
        $data["title"] = "FIlter By State";
        
        $state = state::find($id);
        $lga = lga::find($state->id);
        $ward = ward::find($lga->id);
        // echo $ward->id;
        $data["citizens"] = citizen::where('ward_id',$ward->id)->get();
        return view("citizens.index",$data); 
    }
}
