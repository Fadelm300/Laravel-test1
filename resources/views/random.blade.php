<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blade Examples</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6 bg-gray-100 text-gray-800">

    <h1 class="text-3xl font-bold mb-6">Blade Examples</h1>

    <!-- 1️⃣ IF / ELSE -->
    <h2 class="text-xl font-semibold mt-4">1. If / Else</h2>
    @php $num = 5; @endphp
    @if($num > 10)
        <p>$num is greater than 10</p>
    @else
        <p>$num is 10 or less</p>
    @endif



    <!-- 2️⃣ IF / ELSEIF / ELSE -->
    <h2 class="text-xl font-semibold mt-4">2. If / ElseIf / Else</h2>
    @php $score = 75; @endphp
    @if($score >= 90)
        <p>Grade: A</p>
    @elseif($score >= 70)
        <p>Grade: B</p>
    @else
        <p>Grade: C</p>
    @endif

    <!-- 3️⃣ FOR Loop -->
    <h2 class="text-xl font-semibold mt-4">3. For Loop</h2>
    @for($i = 1; $i <= 5; $i++)
        <p>Iteration {{ $i }}</p>
    @endfor

    <!-- 4️⃣ FOREACH Loop -->
    <h2 class="text-xl font-semibold mt-4">4. Foreach Loop</h2>
    @php 
        $fruits = ['Apple', 'Banana', 'Orange']; 
    @endphp
    @foreach($fruits as $FR)
        <p>Fruit: {{ $FR }}</p>
    @endforeach
    {{-- NOTE this will not work if you did not add as $FR 
    @foreach($fruits )
        <p>Fruit: {{ $fruits }}</p>
    @endforeach
    ((because Blade will not recognize the variable $fruits ))
    --}}

    <!-- 5️⃣ WHILE Loop -->
    <h2 class="text-xl font-semibold mt-4">5. While Loop</h2>
    @php $count = 1; @endphp
    @while($count <= 3)
        <p>Count: {{ $count }}</p>
        @php $count++; @endphp
    @endwhile
 {{-- WHILE Loop will not work if you did not add @php $count++; @endphp
because it will be an infinite loop --}}

    <!-- 6️⃣ SWITCH / CASE -->
    <h2 class="text-xl font-semibold mt-4">6. Switch / Case</h2>
    @php $day = 'Tuesday'; @endphp
    @switch($day)
        @case('Monday')
            <p>Start of the week</p>
            @break
        @case('Tuesday')
            <p>Second day</p>
            @break
        @default
            <p>Another day</p>
    @endswitch
        {{-- //switch depend on the value of $day will determine which case to execute --}}




    <!-- 7️⃣ INCLUDE Blade partial -->
    <h2 class="text-xl font-semibold mt-4">7. Include Partial</h2>
    {{-- Assuming you have a partial file at resources/views/partial.blade.php --}}
    
    {{-- @include('partial') --}} 

    {{-- مفيد لإعادة استخدام القوالب مثل الـ header أو footer --}}



    <!-- 8️⃣ FORELSE (foreach مع else إذا فارغ) -->
    <h2 class="text-xl font-semibold mt-4">8. Forelse</h2>
    @php $users = []; @endphp
    @forelse($users as $user_ar)
        <p>User: {{ $user_ar }}</p>
    @empty
        <p>No users found</p>
    @endforelse

    <!-- 9️⃣ CSRF في Form -->
    {{-- csrf مهم لحماية الفورمات من الهجمات
    CSRF (Cross-Site Request Forgery)--}}
    {{-- will add token to make sure the request is legitimate --}}
    <h2 class="text-xl font-semibold mt-4">9. CSRF Example</h2>
    <form action="#" method="POST" class="mb-4">
        @csrf
        <input type="text" name="name" placeholder="Name" class="border p-1">
        <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded">Submit</button>
    </form>



    <!-- 🔟 Comments -->
    <h2 class="text-xl font-semibold mt-4">10. Blade Comments</h2>
    {{-- هذا تعليق في Blade ولن يظهر في HTML النهائي --}}
    <p>Check the source code to see Blade comments</p>


    <!-- 1️⃣1️⃣ Raw PHP -->
    <h2 class="text-xl font-semibold mt-4">11. Raw PHP</h2>
    @php
        $message = "Hello from PHP inside Blade!";
    @endphp
    <p>{{ $message }}</p>
{{-- مفيد للعمليات الصغيرة أو تعريف المتغيرات --}}



    <!-- 1️⃣2️⃣ Escaping / Raw Output -->
    <h2 class="text-xl font-semibold mt-4">12. Raw Output</h2>
    @php $html = "<strong>Bold Text</strong>"; @endphp
    <p>Escaped: {{ $html }}</p> <!-- يظهر كنص -->
    <p>Raw: {!! $html !!}</p> <!-- يظهر HTML -->
{{-- استخدم {!! !!} بحذر لتجنب XSS --}}
{{-- XSS - Cross Site Scripting
المتصفح رح ينفذ الجافاسكربت مباشرة → وهنا الخطر!
<script>alert('I hacked you!');</script>
If the variable $variable comes from an external user (for example, someone wrote text in a comment or filled out a form),
 they could insert malicious JavaScript --}}

    <!-- 1️⃣3️⃣ Loop Variables -->
    <h2 class="text-xl font-semibold mt-4">13. Loop Variables</h2>
    @php 
        $items = ['Item 1', 'Item 2', 'Item 3']; 
    @endphp
    @foreach($items as $item)
        <p>{{ $loop->iteration }}: {{ $item }} 
        @if($loop->first) (First) @endif
        @if($loop->last) (Last) @endif
        </p>
    @endforeach
{{-- Loop Variables help track the state of the loop (first, last, index, etc.) --}}

    

</body>
</html>
