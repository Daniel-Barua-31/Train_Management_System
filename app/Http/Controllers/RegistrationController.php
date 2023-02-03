<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }
    public function register(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' =>  'required|confirmed',
                'password_confirmation' => 'required',
                'gender' => 'required',
                'address' => 'required',
            ]
        );
        echo "<pre>";
        print_r($request->all());
        $passenger = new Passenger;
        $passenger->Passenger_name = $request['name'];
        $passenger->email = $request['email'];
        $passenger->Password = $request['password'];
        $passenger->gender = $request['gender'];
        $passenger->Address = $request['address'];
        $passenger->save();
    }
}
