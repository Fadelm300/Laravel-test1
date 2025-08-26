<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
  


   <section class="text-center">  
    {{-- <h1>test1 {{$requestedName }}</h1> --}}
    {{-- just for test if exists will work --}}
    <h1>
    test1
    @isset($requestedName)
        {{$requestedName}}
    @endisset
    
</h1>

      <a href="{{ url('/') }}" 
         class="px-6 py-2 rounded-lg shadow bg-blue-500 text-white font-semibold transition transform hover:bg-blue-600 hover:scale-105">
         Back to Home
      </a>
    </section>
</body>
</html>