<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me - Fadel Mohammad</title>
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex items-center justify-center p-6">

  <div class="max-w-3xl w-full">

  <div class="text-center mb-8">
      <h1 class="text-4xl font-bold text-blue-700">Fadel Mohammad</h1>
      <p class="text-lg text-gray-600">Software Engineer | Front-End & Full-Stack Developer</p>
    </div>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-blue-600 mb-2">Profile</h2>
      <p class="leading-relaxed">
        A software engineer with a strong focus on front-end development and design, and experience as a full-stack developer. 
        Proficient in HTML, React, and CSS for the front end, and skilled in JavaScript, Python, Django, PHP, SQL, and MongoDB for the backend. 
        Passionate about creating captivating and inspiring projects through thoughtful design and seamless functionality.
      </p>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-blue-600 mb-2">Skills</h2>
      <ul class="list-disc list-inside space-y-1">
        <li><strong>Languages:</strong> HTML, CSS, PHP, JavaScript, React</li>
        <li><strong>Databases:</strong> SQL, NoSQL (MongoDB)</li>
        <li><strong>Frameworks:</strong> Bootstrap, EJS, Express</li>
        <li><strong>Tools:</strong> Visual Studio, GitHub, VS Code</li>
        <li><strong>Languages:</strong> Arabic (Native), English (Intermediate)</li>
      </ul>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-blue-600 mb-2">Highlighted Projects</h2>
      <ul class="list-disc list-inside space-y-1">
        <li><strong>Memory Cards Game:</strong> A fun memory game built with JavaScript, HTML, CSS.</li>
        <li><strong>Car Blogs:</strong> Blogging platform for car enthusiasts using HTML, CSS, JavaScript, NoSQL.</li>
        <li><strong>UniClub App:</strong> A React + Express + MongoDB app for university  communities.</li>
      </ul>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold text-blue-600 mb-2">Contact</h2>
      <p><strong>Email:</strong> <a href="mailto:fadel.m200@gmail.com" class="text-blue-500 hover:underline">fadel.m200@gmail.com</a></p>
      <p><strong>Phone:</strong> +973 333333333</p>
      <p><strong>LinkedIn:</strong> <a href="http://www.linkedin.com/in/fadel-mohammad-b70662151" class="text-blue-500 hover:underline">linkedin.com/in/fadel-mohammad</a></p>
      <p><strong>GitHub:</strong> <a href="https://github.com/Fadelm300" class="text-blue-500 hover:underline">github.com/Fadelm300</a></p>
    </section>

    <section class="text-center">
      <a href="{{ url('/') }}" 
         class="px-6 py-2 rounded-lg shadow bg-blue-500 text-white font-semibold transition transform hover:bg-blue-600 hover:scale-105">
         Back to Home
      </a>
    </section>
  </div>

</body>
</html>
