<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ISuser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd("hello");
        $name = $request->route('name');
     $isAuthenticated = ($name === 'fadel'); // Example condition
                if ($isAuthenticated) {
                    return response("Welcome, " . $name . "! You are authenticated.", 200);
                } else {

                    return response()->json(['error' => 'Unauthorized'], 401);
    
                    // return redirect('/login');
                }
        return $next($request);
    }
}
