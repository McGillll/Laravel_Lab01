<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="h-screen flex items-center bg-gradient-to-r from-teal-500 to-green-500">
    <header class="absolute top-0 left-0 w-full py-4 bg-white shadow-md">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-800">Laboratory Exercise</a>
            <ul class="flex justify-between items-center">
                <li class="mr-4"><a href="/" class="text-gray-600 hover:text-gray-900">Home</a></li>
                <li class="mr-4"><a href="/about" class="text-gray-600 hover:text-gray-900">About</a></li>
                <li><a href="/contact" class="text-gray-600 hover:text-gray-900">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto p-4 flex flex-col gap-5">
        <div class="flex flex-col gap-2 text-center">
            <h1 class="text-4xl font-bold text-gray-800">Welcome to our Creative Homepage!</h1>
            <p class="text-lg text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor,<br>vestibulum magna sed, convallis ex.</p>
        </div>
        <div class="container flex justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Get Started</button>
        </div>
    </main>
    <footer class="absolute bottom-0 left-0 w-full py-4 bg-white shadow-md">
        <p class="text-gray-600 text-center">Copyright 2023 Creative Homepage. All rights reserved.</p>
    </footer>
</body>
</html>