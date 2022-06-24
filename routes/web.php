<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor;

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
<<<<<<< Updated upstream
=======
//used to redirect to  register page for vendor and user
Route::get('/register/{id}', function ($id) {
    if($id=="vendor")
    {
        return view('vendor');
    }
    else
    {
        return view('user');
    }
})->name('register');

//used to redirect insert vendor 
Route::post("/insert_vendo",'App\Http\Controllers\Vendor@insert_vendor')->name('insert');

//login view loading  
Route::get('login/{id}', function ($id) {
    if($id=="vendor")
    {
        return view('login',['role'=>'vendor']);
    }
    else
    {
        return view('login',['role'=>'user']);
    }
})->name('login');

//used to check login username and password
Route::post("/login_check",'App\Http\Controllers\Vendor@login_check')->name('logincheck');

//used to check user exists or not
Route::get('/usercheck','App\Http\Controllers\Vendor@user_check'); 

>>>>>>> Stashed changes
