<?php

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

use Illuminate\Http\Request;
use App\Mail\SendMailable;
use App\Http\Controllers\FormRegisterController;

Route::get('/', function () {
	return view('home');
});

Route::get('/register', function () {
	return view('includes.form_register');
});

Route::get('/training', function () {
	return view('video');
});

Route::post('contact', function (Request $request) {
	if ((new FormRegisterController)->store($request)) {
		Mail::send(new SendMailable($request));
		return "MF010";
	}
});

Route::post('/formregister',function (Request $request) {
	Mail::send(new SendMailable($request));
	return view('includes.thanks');
});
