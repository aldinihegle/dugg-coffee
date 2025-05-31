@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-xl font-semibold mb-4">Menu Items</h3>
            <p class="text-4xl font-bold text-blue-600">{{ $menuCount }}</p>
            <a href="{{ route('admin.menus.index') }}" class="text-sm text-blue-500 hover:text-blue-700 mt-2 inline-block">
                <i class="fas fa-arrow-right mr-1"></i> View All
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-xl font-semibold mb-4">Blog Posts</h3>
            <p class="text-4xl font-bold text-blue-600">{{ $blogCount }}</p>
            <a href="{{ route('admin.blogs.index') }}" class="text-sm text-blue-500 hover:text-blue-700 mt-2 inline-block">
                <i class="fas fa-arrow-right mr-1"></i> View All
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-xl font-semibold mb-4">Reviews</h3>
            <p class="text-4xl font-bold text-blue-600">{{ $reviewCount }}</p>
            <a href="{{ route('admin.reviews.index') }}" class="text-sm text-blue-500 hover:text-blue-700 mt-2 inline-block">
                <i class="fas fa-arrow-right mr-1"></i> View All
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