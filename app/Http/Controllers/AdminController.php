<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use Hash;


class AdminController extends Controller
{
    public function store(Request $request) {
        $AdminData = new Admin;
        $AdminData->Admin_name = $request->input('Admin_name');
        $AdminData->Password = Hash::make($request->input('Password'));
        $AdminData->email  = $request->input('email');
        $AdminData->gender = $request->input('gender');
        $AdminData->Address  = $request->input('Address');
        $AdminData->save();
        return redirect('admin')->with('status',"Data inserted Successfully");
    }
}
