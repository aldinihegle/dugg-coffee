@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="text-gray-600 text-lg mb-8">
        <a href="{{ route('admin.dashboard') }}" class="hover:text-blue-400 transition-colors">Home</a> 
        <span class="mx-2">/</span>
        <span class="text-blue-400">Dashboard</span>
    </div>

    <h1 class="text-4xl font-bold mb-8">Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Total Menu Card -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-book-open text-2xl text-green-500"></i>
                </div>
                <h3 class="text-3xl font-bold">{{ $menuCount }}</h3>
            </div>
            <h4 class="text-lg font-semibold text-gray-700">Total Menu</h4>
            <a href="{{ route('admin.menus.index') }}" class="text-sm text-gray-500 hover:text-blue-500 mt-2 inline-block">
                View Details
            </a>
        </div>
        
        <!-- Total Blog Card -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-newspaper text-2xl text-red-500"></i>
                </div>
                <h3 class="text-3xl font-bold">{{ $blogCount }}</h3>
            </div>
            <h4 class="text-lg font-semibold text-gray-700">Total Blog</h4>
            <a href="{{ route('admin.blogs.index') }}" class="text-sm text-gray-500 hover:text-blue-500 mt-2 inline-block">
                View Details
            </a>
        </div>
        
        <!-- Total Review Card -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-star text-2xl text-yellow-500"></i>
                </div>
                <h3 class="text-3xl font-bold">{{ $reviewCount }}</h3>
            </div>
            <h4 class="text-lg font-semibold text-gray-700">Total Review</h4>
            <a href="{{ route('admin.reviews.index') }}" class="text-sm text-gray-500 hover:text-blue-500 mt-2 inline-block">
                View Details
            </a>
        </div>
    </div>
    
    <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Recent Activity</h2>
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($recentActivities as $activity)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $activity['action'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $activity['item'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $activity['date']->format('Y-m-d') }}</td>
                    </tr>
                    @empty
                    <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-gray-500">No recent activities found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 