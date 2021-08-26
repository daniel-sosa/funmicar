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
use App\Mail\ContactanosMailable;

Route::get('/', function () {
    return view('index');
});
Route::get('contactanos', function(){
    $correo = new  ContactanosMailable;
    Mail::to('daniel.sosa.ds22@gmail.com')->send($correo);
    return "mensaje enviado";
});
