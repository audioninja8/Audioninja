<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Audioninja</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            </style>
        @endif
        
        <!-- Updated scrollbar styles with more specific rules -->
        <style>
            /* Hide default scrollbar */
            .custom-scrollbar {
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* IE and Edge */
            }

            .custom-scrollbar::-webkit-scrollbar {
                width: 4px;
                height: 4px;
                background-color: transparent;
            }

            .custom-scrollbar::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.4);
                border-radius: 10px;
            }

            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgb(147, 51, 234);
                border-radius: 10px;
                border: none;
            }

            .custom-scrollbar::-webkit-scrollbar-corner {
                background: transparent;
            }

            /* Ensure the container has padding for the scrollbar */
            .scrollbar-container {
                padding-right: 4px;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gradient-to-b from-purple-600 via-purple-800 to-purple-900 text-white min-h-screen relative overflow-hidden">
            <div class="relative w-full max-w-[1024px] mx-auto">
                <header class="flex justify-between items-center py-10 px-24">
                    <h1 class="font-figtree text-4xl font-bold text-white tracking-tight">Audioninja</h1>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                    Log in
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <div class="scrollbar-container">
    <div class="p-24 h-[700px] mx-12 my-2 shadow bg-white rounded-md relative overflow-y-auto custom-scrollbar">
        <div class="absolute top-0 left-0 right-0 mt-8 flex justify-center">
            <h1 class="font-figtree text-2xl font-bold text-gray-500 tracking-tight bg-white px-6">
                Have a listen from our list of recently uploaded samples.
            </h1>
        </div>
        
        <div class="-ml-12 -mr-12 p-6 h-24 mt-2 bg-gray-300 shadow rounded-md"></div>
        <div class="-ml-12 -mr-12 p-6 h-24 mt-8 bg-gray-300 shadow rounded-md"></div>
        <div class="-ml-12 -mr-12 p-6 h-24 mt-8 bg-gray-300 shadow rounded-md"></div>
        <div class="-ml-12 -mr-12 p-6 h-24 mt-8 bg-gray-300 shadow rounded-md"></div>
        <div class="-ml-12 -mr-12 p-6 h-24 mt-8 bg-gray-300 shadow rounded-md"></div>
    </div>
</div>
                </div>
            </div>
        </div>
    </body>
</html>