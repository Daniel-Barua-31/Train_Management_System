<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class TrainsController extends Controller
{
    public function index(){
        return view('trains');
    }
    public function store(Request $request){
        $request->validate(
            [
                'trains_name' => 'required',
                'Available_seats' =>  'required',
                'Trains_leaving' => 'required',
                'Trains_Destination' => 'required',
                'Time' => 'required',
            ]
        );
        echo "<pre>";
        print_r($request->all());
        $trains = new Trains;
        $trains-> Trains_name = $request['trains_name'];
        $trains-> Available_seats= $request['Available_seats'];
        $trains-> Trains_leaving= $request['Trains_leaving'];
        $trains->Trains_Destination= $request['Trains_Destination'];
        $trains->Time= $request['Time'];
        $trains->save();
        return redirect('trains/view');
    }
    public function view(){
        $trains=Trains::all();
        $data=compact('trains');
        return view('trains_view')->with($data);
    }
    public function delete($id){
        $trains=Trains::find($id)->delete();
        return redirect()-> back();
    }
}
