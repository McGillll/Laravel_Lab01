<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="h-full flex flex-col justify-center items-center bg-gradient-to-r from-teal-500 to-green-500">
    <header class=" top-0 left-0 w-full py-4 bg-white shadow-md">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-800">About Us</a>
            <ul class="flex justify-between items-center">
                <li class="mr-4"><a href="/" class="text-gray-600 hover:text-gray-900">Home</a></li>
                <li class="mr-4"><a href="/about" class="text-gray-600 hover:text-gray-900">About</a></li>
                <li><a href="/contact" class="text-gray-600 hover:text-gray-900">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="container flex flex-col items-center justify-center mx-auto p-4">
        <section class="container flex flex-wrap justify-between mt-8 mb-4">
            <div class="flex flex-col items-center shadow-md rounded-xl w-full md:w-1/2 xl:w-1/3 p-4">
                <img src="https://th.bing.com/th/id/R.c9c9904d93d37519ff2dc20a5d49822d?rik=%2b8eGxeUiX6ieLw&riu=http%3a%2f%2fstatic6.businessinsider.com%2fimage%2f56055b87dd0895cb7b8b4645-2400%2felon-musk-387.jpg&ehk=yx7rWOWwuAqxzomXOnkBGh%2bBSK18QWQB8ZwlnXvYDrw%3d&risl=&pid=ImgRaw&r=0" 
                alt="Team Member 1" class="rounded-full w-40 h-40 mb-4 object-cover">
                <h2 class="text-xl font-bold text-gray-800">Elon Musk</h2>
                <p class="text-base text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col items-center shadow-md rounded-xl w-full md:w-1/2 xl:w-1/3 p-4">
                <img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t39.30808-6/271894051_4612684378779566_8728840590266399118_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=TCnM2hCTa8gQ7kNvgGQTdxt&_nc_ht=scontent.fmnl4-3.fna&_nc_gid=AoAKzRtxztdwESqw5X-GI_e&oh=00_AYBb6waN7cpU4ocSTRpk9vIUBqy12o1Kt7_2j2DYG98DgQ&oe=670AB843" 
                alt="Team Member 2" class="rounded-full w-40 h-40 mb-4 object-cover">
                <h2 class="text-xl font-bold text-gray-800">Stephen Gabion</h2>
                <p class="text-base text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col items-center shadow-md rounded-xl w-full md:w-1/2 xl:w-1/3 p-4">
                <img src="https://th.bing.com/th/id/OIP.e908rermoeQsuZ7Ld1i7gwAAAA?pid=ImgDet&w=185&h=185&c=7" 
                alt="Team Member 3" class="rounded-full w-40 h-40 mb-4 object-cover">
                <h2 class="text-xl font-bold text-gray-800">Elon's Cat</h2>
                <p class="text-base text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </section>
        <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Learn More</button>
    </main>
    <footer class="absolute bottom-0 left-0 w-full py-4 bg-white shadow-md">
        <p class="text-gray-600 text-center">Copyright 2023 Creative Homepage. All rights reserved.</p>
    </footer>
</body>
</html>