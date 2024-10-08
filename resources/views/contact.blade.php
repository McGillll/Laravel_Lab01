<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class=" flex flex-col justify-center items-center bg-gradient-to-r from-teal-500 to-green-500">
    <header class=" top-0 left-0 w-full py-4 bg-white shadow-md">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-800">More Information</a>
            <ul class="flex justify-between items-center">
                <li class="mr-4"><a href="/" class="text-gray-600 hover:text-gray-900">Home</a></li>
                <li class="mr-4"><a href="/about" class="text-gray-600 hover:text-gray-900">About</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-900">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto p-4">
        <div class="flex flex-col pt-2 pb-5">
            <h1 class="text-4xl font-bold text-gray-800">Get in Touch</h1>
            <p class="text-lg text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
        </div>
        <form class="max-w-md mx-auto p-4 bg-white shadow-md rounded mb-5">
            <label for="name" class="block text-gray-800 text-lg">Name</label>
            <input type="text" id="name" class="w-full p-2 pl-3 text-gray-600 border border-gray-300 rounded">
            <label for="email" class="block text-gray-800 text-lg">Email</label>
            <input type="email" id="email" class="w-full p-2 pl-3 text-gray-600 border border-gray-300 rounded">
            <label for="message" class="block text-gray-800 text-lg">Message</label>
            <textarea id="message" class="w-full p-2 pl-3 text-gray-600 border border-gray-300 rounded"></textarea>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Send Message</button>
        </form>
        <section class="flex flex-wrap justify-center">
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h2 class="text-xl font-bold text-gray-800">Address</h2>
                <p class="text-base text-gray-600">123 Davao City, Davao del Sur, Philippines</p>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h2 class="text-xl font-bold text-gray-800">Phone</h2>
                <p class="text-base text-gray-600">+63 995-010-2110</p>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <h2 class="text-xl font-bold text-gray-800">Email</h2>
                <p class="text-base text-gray-600">sti.davao.440@gmail.com</p>
            </div>
        </section>
    </main>
    <footer class=" bottom-0 left-0 w-full pb-2 bg-white shadow-md">
        <p class="text-gray-600 text-center">Copyright 2023 Creative Homepage. All rights reserved.</p>
    </footer>
</body>
</html>