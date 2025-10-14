<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel LMS')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold">LMS Dashboard</a>
                <a href="/" class="hover:text-blue-200">Home</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center py-6 mt-12">
        <p>&copy; 2025 Laravel LMS. All rights reserved.</p>
    </footer>
</body>

</html>
