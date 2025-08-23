<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test1controler extends Controller
{
   function show($name){
       return view('test1');
       
   }
   // this function will receive a name parameter and return a greeting message
   // i used it in the route /test1/{name}
   // use as id 
   // path parameter
   function sayHello($name){
    // //    return "Hello, " . $name;
    //    return view('test1')->with('requestedName', $name);
    // //    lets try use json
    
    //    return response()->json(['message' => 'Hello, ' . $name]);
    // //    why json? because it allows us to return data in a structured format that can be easily consumed by client-side applications, such as those built with JavaScript frameworks.

//    lets try the authentication this just a test no input validation
        $isAuthenticated = ($name === 'fadel'); // Example condition
                if ($isAuthenticated) {
                    return "Welcome, " . $name . "! You are authenticated.";
                } else {

                    return response()->json(['error' => 'Unauthorized'], 401);
                    // return redirect('/login');
                }
    }

   function login(){
       return   '<h1>Login Page</h1>';
   }
}
   
