<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Carbon\Carbon;

class ClientController extends Controller
{
    public function index(){
        $time = Carbon::now()->format('l j  F Y');
        return view('index',compact('time'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $save = new Client;
        $save->name = $request->name;
        $save->first_name = $request->first_name;
        $save->id_number = $request->id_number;
        $save->date_of_birth = $request->date_of_birth;
        $save->partner_name = $request->partner_name;
        $save->partner_first_name = $request->partner_first_name;
        $save->partner_id = $request->partner_id;
        $save->partner_dob = $request->partner_dob;
        $save->po_box = $request->po_box;
        $save->street = $request->street;
        $save->area_name = $request->area_name;
        $save->postal_code = $request->postal_code;
        $save->phone = $request->phone;
        $save->phone2 = $request->phone2;
        $save->status = $request->status;

        $save->save();
        return redirect()->back()->with('Success', "Successfully Created");
    }


    public function post(Request $request){
        $time = Carbon::now()->format('l j  F Y');
        $request->validate([
            'id_number' => 'required',
            'captcha' => 'required|captcha',
        ]);
        try {
            $id = $request->id_number;
            $client = Client::where('id_number',$id)->first();
            if (!empty($client)) {
                return view('client',compact('client','time'));
            }
            else{
                return redirect()->back()->with('message', 'ID Number is Incorrect!');
            }

        } catch(\Exception $e) {
            return redirect()->back();
        }
    }


    public function reloadCaptcha(){
        return response()->json(['captcha' =>captcha_img()]);
    }

    public function update( Request $request){
        $time = Carbon::now()->format('l j  F Y');
        $id = $request->id_number;
        $client = Client::where('id_number',$id)->first();
        $save = Client::where('id_number',$id)->first();

        $save->partner_name = $request->partner_name;
        $save->partner_first_name = $request->partner_first_name;
        $save->partner_id = $request->partner_id;
        $save->partner_dob = $request->partner_dob;
        $save->po_box = $request->po_box;
        $save->street = $request->street;
        $save->area_name = $request->area_name;
        $save->postal_code = $request->postal_code;
        $save->phone = $request->phone;
        $save->phone2 = $request->phone2;

        $save->save();
        return view('client',compact('client','time'))->with('message', 'Information updated Successfully');
    }
}
