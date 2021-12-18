<?php

use App\Http\Controllers\AssignVehicleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TypeVehicleController;
use App\Http\Controllers\VehicleController;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;


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
    //return view('welcome');
    //return Vehicle::identification('1850830')->get();

    return redirect('login');
    
});




Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/seach', [App\Http\Controllers\HomeController::class, 'search_vechicles'])->name('search');



Route::group(['middleware' => 'auth'],function () {
    Route::resource('vehicles', VehicleController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('type_vehicles', TypeVehicleController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('assign_vehicles', AssignVehicleController::class);
    Route::view('logic_test', 'logic_test.index')->name('logic.test');
});
