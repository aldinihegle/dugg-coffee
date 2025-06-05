<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') - Dugg Coffee</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo/logo1.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <!-- Logo -->
            <div class="p-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                    <img src="{{ asset('images/logo/LOGO2.png') }}" alt="Dugg Coffee" class="h-8">
                </a>
            </div>

            <!-- Navigation -->
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-100' : '' }}">
                    <i class="fas fa-th-large w-5"></i>
                    <span class="ml-3">Dashboard</span>
                </a>

                <a href="{{ route('admin.menus.index') }}" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100 {{ request()->routeIs('admin.menus.*') ? 'bg-gray-100' : '' }}">
                    <i class="fas fa-utensils w-5"></i>
                    <span class="ml-3">Menus</span>
                </a>

                <a href="{{ route('admin.blogs.index') }}" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100 {{ request()->routeIs('admin.blogs.*') ? 'bg-gray-100' : '' }}">
                    <i class="fas fa-newspaper w-5"></i>
                    <span class="ml-3">Blogs</span>
                </a>

                <a href="{{ route('admin.reviews.index') }}" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100 {{ request()->routeIs('admin.reviews.*') ? 'bg-gray-100' : '' }}">
                    <i class="fas fa-star w-5"></i>
                    <span class="ml-3">Reviews</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex justify-between items-center px-6 py-4">
                    <h1 class="text-xl font-semibold text-gray-800">@yield('header', 'Dashboard')</h1>
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-500 hover:text-gray-600">
                            <i class="fas fa-bell"></i>
                        </button>
                        <div class="relative">
                            <button onclick="toggleDropdown()" class="text-gray-500 hover:text-gray-600">
                                <i class="fas fa-cog"></i>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                        <i class="fas fa-sign-out-alt mr-2"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>

                        <script>
                            function toggleDropdown() {
                                const dropdown = document.getElementById('dropdownMenu');
                                dropdown.classList.toggle('hidden');
                            }

                            // Close dropdown when clicking outside
                            window.addEventListener('click', function(e) {
                                const dropdown = document.getElementById('dropdownMenu');
                                if (!e.target.closest('.relative')) {
                                    dropdown.classList.add('hidden');
                                }
                            });
                        </script>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html> 