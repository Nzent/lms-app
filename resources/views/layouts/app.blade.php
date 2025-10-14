<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sterlin LMS')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-slate-900 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold flex items-center space-x-2">
                    <span><img src="{{ asset('icons/dual-screen.svg') }}" alt="Home" class="w-8 h-8"></span>
                    <span>
                        Sterlin LMS
                    </span>
                </a>
                <a href="/"
                    class="hover:opacity-80 duration-500 font-bold flex flex-col items-center justify-center">
                    <img src="{{ asset('icons/home.svg') }}" alt="Home" class="w-5 h-5">
                    <span>
                        Home
                    </span>
                </a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8 h-full">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-white text-center py-4 mt-8">
        <p>&copy; 2025 Sterlin LMS. All rights reserved.</p>
    </footer>
</body>

</html>
