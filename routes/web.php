<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/hello', function () {
return 'مرحبا يا فاضل! Laravel شغال';
});
Route::get('/', function () {
    return view('welcome');
});
// try to pass data to about view from here and create about.blade.php in views folder
//just pass my name to about view and display it there
route::get('/about', function () {
    $name = 'Fadel';
    return view('about')->with('my_name', $name);
});

Route::get('/contact', function () {
    return view('contact');
});

//random route to test loops and condition in blade and some other things
Route::get('/random', function () {
    $val=10;
    $students=['ahmed','mohamed','sara','aya','ali'];
    return view('random')->with('value',$val)->with('students',$students);
});

