<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Laravel App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        laravel: '#FF2D20',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .float {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
    <div class="min-h-screen flex flex-col">
        <header class="bg-gradient-to-r from-purple-600 to-blue-600 text-white">
            <nav class="container mx-auto px-6 py-3">
                <div class="flex justify-between items-center">
                    <a href="#" class="text-2xl font-bold">My Laravel App</a>
                    <button id="darkModeToggle" class="p-2 rounded-full hover:bg-white/20 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                </div>
            </nav>
            <div class="container mx-auto px-6 py-16 text-center">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-2">Welcome to My Laravel App</h1>
                <p class="text-xl md:text-2xl mb-8">Empowering your web development journey</p>
                <a href="#features" class="bg-white text-purple-600 hover:bg-purple-100 transition-colors duration-300 font-bold py-3 px-6 rounded-full text-lg shadow-lg hover:shadow-xl">Explore Features</a>
            </div>
        </header>

        <main class="flex-grow">
            <section id="features" class="py-20 bg-white dark:bg-gray-800">
                <div class="container mx-auto px-6">
                    <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-8">Key Features</h2>
                    <div class="grid gap-8 lg:grid-cols-3">
                        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-2">
                            <div class="p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-2">Manage Employers</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">Efficiently add, view, and manage employers in your system.</p>
                                <a href="{{ route('employers.index') }}" class="inline-block bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">Go to Employers</a>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-2">
                            <div class="p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-2">Manage Employees</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">Easily add, view, and manage employees under each employer.</p>
                                <a href="{{ route('employees.index', 1) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">Go to Employees</a>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-2">
                            <div class="p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white mb-2">Documentation</h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">Explore the comprehensive Laravel documentation to learn more.</p>
                                <a href="https://laravel.com/docs" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">View Docs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-gray-100 dark:bg-gray-800 py-8">
            <div class="container mx-auto px-6 text-center">
                <p class="text-gray-600 dark:text-gray-400 mb-2">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </p>
                <p class="text-gray-500 dark:text-gray-500">&copy; 2024 My Laravel App. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const html = document.documentElement;

        darkModeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
        });
    </script>
</body>

</html>