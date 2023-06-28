<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Passenger;
use App\Http\Controllers\TrainsController;
use App\Models\Trains;
use App\Http\Controllers\PassengerController;
use App\Models\Train_Manage;
use App\Models\Food_Manage;
use App\Models\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrainmanageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/register',[RegistrationController::class, 'index']);
Route::get('/login',[RegistrationController::class, 'login']);
Route::post('/register',[RegistrationController::class, 'register']);
Route::get('/trains',[TrainsController::class, 'index']);
Route::post('/trains',[TrainsController::class, 'store']);
Route::get('/trains/view',[TrainsController::class, 'view']);
Route::get('/trains/delete/{id}',[TrainsController::class, 'delete'])->name('trains.delete');
Route::get('/trains/edit/{id}',[TrainsController::class, 'edit'])->name('trains.edit');
Route::post('/trains/update/{id}',[TrainsController::class, 'update'])->name('trains.update');
Route::get('/Admin_registration', function (){
    return view('Admin_registration');
});
Route::view('/admin','admin.admincreate');
Route::view('/adminhome','admin.home');
Route::post('/admin',[AdminController::class, 'store']);
Route::view('/foodManage','foodManage');
Route::post('/foodManage',[TrainsController::class, 'foodManage']);
Route::get('/foodOrdering',[PassengerController::class,'food']);
Route::get('/foodBuy/{id}',[PassengerController::class,'foodOrder']);
Route::get('/listUser',[PassengerController::class,'list']);
Route::get('/delete/{id}',[PassengerController::class,'deletePass']);
Route::view('/trainManage','trainManage');
Route::post('/trainManage',[TrainsController::class, 'trainManage']);
Route::view('addticket','addticket');
Route::post('addticket',[TrainsController::class, 'insert']);
Route::get('/ticketBooking',[PassengerController::class,'ticket']);
Route::get('/ticketBuy/{id}',[PassengerController::class,'buy']);
Route::get('/Numberofticket',[PassengerController::class, 'valueticket'])->name('Numberofticket');
Route::get('/homePass',[PassengerController::class,'home']);
Route::get('/trainView',[PassengerController::class,'train']);
Route::get('/passengers',[PassengerController::class,'index']);
Route::get('/loginAuth',[PassengerController::class,'loginAuth'])->middleware('alreadyLoggedIn');
Route::post('login-user',[PassengerController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[PassengerController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[PassengerController::class,'logout']);
Route::get('/add-passengers',[PassengerController::class,'create'])->middleware('alreadyLoggedIn');
Route::post('/add-passengers',[PassengerController::class,'store']);
Route::get('/edit-passenger/{id}',[PassengerController::class,'edit']);
Route::put('/update-passenger',[PassengerController::class,'update']);


