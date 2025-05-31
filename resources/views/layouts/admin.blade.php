<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Dugg Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800">
            <div class="flex items-center justify-center h-16 bg-gray-900">
                <span class="text-white text-lg font-semibold">Dugg Coffee Admin</span>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('admin.menus.index') }}" class="flex items-center px-6 py-3 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('admin.menus.*') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-utensils mr-3"></i>
                    Menu
                </a>
                <a href="{{ route('admin.blogs.index') }}" class="flex items-center px-6 py-3 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('admin.blogs.*') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-blog mr-3"></i>
                    Blog
                </a>
                <a href="{{ route('admin.reviews.index') }}" class="flex items-center px-6 py-3 text-gray-100 hover:bg-gray-700 {{ request()->routeIs('admin.reviews.*') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-star mr-3"></i>
                    Reviews
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Top Navigation -->
            <div class="bg-white shadow">
                <div class="flex items-center justify-between h-16 px-6">
                    <div>
                        <!-- Hamburger menu for mobile -->
                        <button class="text-gray-500 hover:text-gray-600 lg:hidden">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <div class="flex items-center">
                        <div class="relative">
                            <button class="flex items-center text-gray-700 hover:text-gray-900">
                                <span class="mr-2">{{ auth()->user()->name }}</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Toggle dropdown menu
        document.querySelector('.relative button').addEventListener('click', function() {
            document.querySelector('.relative div').classList.toggle('hidden');
        });

        // Toggle mobile menu
        document.querySelector('.lg\\:hidden').addEventListener('click', function() {
            document.querySelector('.w-64').classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html> 