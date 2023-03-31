<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

//
//
//

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//
//
//

//
//
//

//
//
//

// ASTA ITI AFISEAZA DACA USERUL ESTE LOGAT SAU NU

// http://127.0.0.1:8000/check/

// Route::get('/check', function(){

// if(Auth::check()){

// return "the user is logged in";

// } else {

// return "the user is not logged in";

// }

// });

//
//
//

// ASTA ESTE O ABERATIE DE A LU EDWIN

// http://127.0.0.1:8000/admin/

// Route::get('/admin', function(){

// $email="admin@admin.com";
// $password="admin";

// if(Auth::attempt(['email'=>$email, 'password'=>$password])){

// return redirect()->intended('/admin');

// }

// });

//
//
//

// ASTA AR TREBUI SA TE DELOGHEZE

// Auth::logout();