<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Garage-API</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>


<div class="bg-gray-100">
      <header class="sticky top-0 z-30 w-full px-2 py-4 bg-white shadow-xl shadow-blue-600/20 sm:px-4">
        <div class="flex items-center justify-between mx-auto max-w-7xl">
          <a href="#">
            <span class="text-2xl font-extrabold text-blue-600">Garage API</span>
          </a>
          <div class="flex items-center space-x-1">
            <ul class="hidden space-x-2 md:inline-flex">
              <li><a href="#" class="px-4 py-2 font-semibold text-gray-600 rounded">Home</a></li>
              <li><a href="#" class="px-4 py-2 font-semibold text-gray-600 rounded">About Us</a></li>
              <li><a href="#" class="px-4 py-2 font-semibold text-gray-600 rounded">Contact Us</a></li>
            </ul>
            <div class="inline-flex md:hidden" x-data="{ open: false }">
              <button class="flex-none px-2 " @click="open = true">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                </svg>
                <span class="sr-only">Open Menu</span>
              </button>
              <div
                class="absolute top-0 left-0 right-0 z-50 flex flex-col p-2 pb-4 m-2 space-y-3 bg-white rounded shadow"
                x-show.transition="open" @click.away="open = false" x-cloak>
                <button class="self-end flex-none px-2 ml-2" @click="open = false">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                  <span class="sr-only">Close Menu</span>
                </button>
                <ul class="space-y-2">
                  <li><a href="#" class="px-4 py-2 font-semibold text-gray-600 rounded">Home</a></li>
                  <li><a href="#" class="px-4 py-2 font-semibold text-gray-600 rounded">Blogs</a></li>
                  <li><a href="#" class="px-4 py-2 font-semibold text-gray-600 rounded">About Us</a></li>
                  <li><a href="#" class="px-4 py-2 font-semibold text-gray-600 rounded">Contact Us</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="p-4 mx-auto max-w-7xl">
        <div class="mx-auto font-sans">
          <h1 class="text-2xl font-bold">Big data keep in safe </h1>
          <p>Call 010 500 xx to join us ....</p>
        </div>
      </section>
    </div>

  <main class="h-screen w-screen py-6 bg-yellow-50 flex items-center justify-center flex-wrap">
    <!--     primera card -->
    <div class="bg-white w-72 h-96 shadow-md rounded m-3">
      <div class="h-3/4 w-full">
        <img class="w-full h-full object-cover rounded-t" src="https://images.pexels.com/photos/1592384/pexels-photo-1592384.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="piña">
      </div>
      <div class="w-full h-1/4 p-3">
        <a href="#" class=" hover:text-yellow-600 text-gray-700">
          <span class="text-lg font-semibold uppercase tracking-wide ">Start from small</span>
        </a>
        <p class="text-gray-600 text-sm leading-5 mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <!--     segunda card -->
    <div class="bg-white w-72 h-96 shadow-md rounded m-3">
      <div class="h-3/4 w-full">
        <img class="w-full h-full object-cover rounded-t" src="https://images.pexels.com/photos/7658388/pexels-photo-7658388.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="piña">
      </div>
      <div class="w-full h-1/4 p-3">
        <a href="#" class=" hover:text-yellow-600 text-gray-700">
          <span class="text-lg font-semibold uppercase tracking-wide ">Call Center</span>
        </a>
        <p class="text-gray-600 text-sm leading-5 mt-1">Team work online.</p>
      </div>
    </div>
    <!--     tercera card -->
    <div class="bg-white w-72 h-96 shadow-md rounded m-3">
      <div class="h-3/4 w-full">
        <img class="w-full h-full object-cover rounded-t" src="https://images.pexels.com/photos/4489704/pexels-photo-4489704.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="piña">
      </div>
      <div class="w-full h-1/4 p-3">
        <a href="#" class=" hover:text-yellow-600 text-gray-700">
          <span class="text-lg font-semibold uppercase tracking-wide ">Garage</span>
        </a>
        <p class="text-gray-600 text-sm leading-5 mt-1">Call me 010 500 xxx.</p>
      </div>
    </div>

    

  </main>
</body>

</html>