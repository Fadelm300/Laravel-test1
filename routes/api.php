<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Note: this is the API route. To test, use /api/hello
// In Postman test: http://127.0.0.1:8001/api/hello
// You can change the "api" prefix in app/Providers/RouteServiceProvider.php
//لاتنسى انتبه لازم تكتب قبل الرابط api
//ملاحظه انه ذي الطريقة الي تقدر تربط الفرونت في الباك اند لو كل واحد بروح مثلا لو استخدمت رياكت بتطرش له jason 

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, Get API']);
});

//=================================
Route::post('/hello', function () {

    return response()->json(['message' => 'Hello, POST API']);
});
// if request()
// i add in post man data in body raw json and send it to see the request 
// // example output from post man
// {
//     "name":"fadel",
//     "id":"202000000"
// }
Route::post('/hello', function (Request $request) {
    return $request->all();
});

//=================================


Route::put('/hello', function () {

    return response()->json(['message' => 'Hello, PUT API']);
});
//=================================


Route::patch('/hello', function () {

    return response()->json(['message' => 'Hello, PATCH API']);
});
//=================================

// will go to userControler php and will use the createRandomUser method
Route::post('/createRandomUser', [UserController::class, 'createRandomUser']);

// another way to define the route
// Route::post('/createRandomUser', UserController::class, '@createRandomUser');
//to create UserController in terminal with
// php artisan make:controller UserController