<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;
use App\Models\Trains;
use App\Models\Train_Manage;
use App\Models\Food_Manage;
use Illuminate\Support\Facades\File;
use Hash;
use Session;


class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passenger = Passenger::all();
        return view ('passenger.index',['passenger'=>$passenger]);
    }
    public function home(){

        return view ('passenger.home');
    }
    public function train(){

        $data = Trains::all();
        return view ('passenger.trainView',['trainsData'=>$data]);
    }
    public function ticket(){
        $data= Train_Manage::all();
        return view ('passenger.ticketBooking',['ticketPricing'=>$data]);
    }
    public function food(){
        $data= Food_Manage::all();
        return view ('passenger.foodOrdering',['foodOrder'=>$data]);
    }
    public function foodOrder($id){
        Food_Manage::where('Food_id',$id)->decrement('Available_Food',1);
        return redirect ('foodOrdering');
    }
    public function buy($id){
        Train_Manage::where('Trains_id',$id)->decrement('Available_seats',1);
        return redirect ('ticketBooking');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('passenger.create');
    }
    public function loginAuth()
    {
        return view('passenger.login'); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
            'gender' => 'required', 
            'address' => 'required',
        ]);
        $passenger = new Passenger; 
        $passenger->Passenger_name = $request->name;
        $passenger->Password = Hash::make($request->password);
        $passenger->email = $request->email;
        $passenger->gender = $request->gender;
        $passenger->Address = $request->address;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/passengers',$filename);
            $passenger->image = $filename;
        }
        $res=$passenger->save();
        if($res){
            return back() ->with('success','You have registered successfully');    
        }
        else{
            return back()->with('fail','Something is worng');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $passenger = Passenger:: where('email','=',$request->email)->first();
        if($passenger){
            if(Hash::check($request->password, $passenger->Password)){
                $request->session()->put('loginId', $passenger->Passenger_id);
                return redirect ('homePass');
            }
            else{
                return back()->with('fail','Passoword not matches.');
            }
        }
        else{
            return back() ->with('fail','This email is not registered');
        }
    }
    public function list(){
        $data = Passenger :: all();
        return view('listofuser',['passData'=>$data]);
    }
    public function deletePass($id){
        $data = Passenger :: find($id);
        $data->delete();
        return redirect('listUser');
    }
    public function dashboard()
    {
        $data= array();
        if(session::has('loginId')){
            $data = Passenger::where('Passenger_id','=',session::get('loginId'))->first();
        }
        return view ('dashboard',compact('data'));
    }
    public function logout(){

        if (session::has('loginId')){
            session::pull('loginId');
            return redirect('loginAuth');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $passenger = Passenger::find($id);
        return view ('passenger.edit',['passenger'=>$passenger]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $passenger = Passenger::find($id);

        $passenger->Passenger_name = $request->name;
        $passenger->Password = $request->password;
        $passenger->email = $request->email;
        $passenger->gender = $request->gender;
        $passenger->Address = $request->address;
        if($request->hasfile('image')){
            $destination='uploads/passengers'. $passenger->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/passengers',$filename);
            $passenger->image = $filename;
        }
        $passenger->update();
        return redirect('update-passenger')->back()->with('status','Passengers Updated Succesfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
