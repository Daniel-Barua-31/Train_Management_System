<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Passenger;
use App\Http\Controllers\TrainsController;
use App\Models\Trains;

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
Route::get('/register',[RegistrationController::class, 'index']);
Route::post('/register',[RegistrationController::class, 'register']);
Route::get('/trains',[TrainsController::class, 'index']);
Route::post('/trains',[TrainsController::class, 'store']);
Route::get('/trains/view',[TrainsController::class, 'view']);
Route::get('/trains/delete/{id}',[TrainsController::class, 'delete'])->name('trains.delete');
Route::get('/Admin_registration', function () {
    return view('Admin_registration');
});