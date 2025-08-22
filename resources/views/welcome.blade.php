<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel - Welcome</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-red-600 via-red-500 to-red-700 min-h-screen flex flex-col items-center justify-center text-white">


<div class="animate-bounce mb-6 bg-black p-4 rounded-full">
  <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" class="w-24 h-24">
</div>


  <h1 class="text-4xl font-extrabold tracking-wide drop-shadow-lg">Welcome to Laravel</h1>

  <p class="mt-4 text-lg max-w-xl text-center animate-pulse">
    A powerful PHP framework for modern web applications.  
    Build amazing apps faster with elegant syntax, tools, and an active ecosystem.
  </p>

  <div class="flex justify-center mt-8 space-x-4">
    <a href="{{ url('/about') }}" 
       class="px-6 py-3 rounded-xl bg-white text-red-600 font-semibold shadow-lg hover:bg-gray-100 transition transform hover:scale-105">
       About Me
    </a>
    <a href="{{ url('/contact') }}" 
       class="px-6 py-3 rounded-xl bg-yellow-400 text-gray-900 font-semibold shadow-lg hover:bg-yellow-300 transition transform hover:scale-105">
       Contact
    </a>
  </div>

  <footer class="absolute bottom-4 text-sm opacity-80">
    Powered by <span class="font-bold">Fadel</span>
  </footer>

</body>
</html>
