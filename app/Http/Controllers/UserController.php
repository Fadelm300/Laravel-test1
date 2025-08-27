<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\User;
class UserController extends Controller
{
    


    function createRandomUser(Request $request){
        // to create random user we will use faker library
        // first we need to install it via composer
        // composer require fakerphp/faker
        // then we can use it in our controller
    // ((( Fake  هو بيسوي )))
    //     $faker = \Faker\Factory::create();

    //     $user = [
    //         'name' => $faker->name,
    //         'email' => $faker->unique()->safeEmail,
    //         'address' => $faker->address,
    //         'phone' => $faker->phoneNumber,
    //     ];

    //     return response()->json($user);
    // }
    // now we go to post man and enter the url http://127.0.0.1:8001/api/createRandomUser
    //then we can send a POST request to this URL and will see the random user data in the response
    // example for postman
    // {
    //     "name": "Fadel Mohammad",
    //     "email": "fadel@example.com",
    //     "address": "123 bh",
    //     "phone": "33333333"
    // }

    $user = User::create([
        'name' => 'Fadel Mohammad',
        'email' => 'fadel@example.com',
        'password' => '1234567'
       
    ]);
    return $user;
    // This action creates a new User record with hard-coded name, email and password.
    // In a real application you should:
    //  - validate incoming request data (use $request->validate(...))
    //  - hash passwords with Illuminate\Support\Facades\Hash::make()
    //  - avoid hard-coded credentials and use request input or factories for testing
    // Example to accept input securely:
    // $data = $request->validate([
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|email|unique:users,email',
    //     'password' => 'required|string|min:8',
    // ]);
    // $data['password'] = \Hash::make($data['password']);
    // $user = User::create($data);


    
}

}
