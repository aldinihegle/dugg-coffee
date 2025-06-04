@extends('layouts.admin')

@section('title', 'Edit Menu')
@section('header', 'Edit Menu')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold mb-6">Edit Menu Item</h1>

            <form action="{{ route('admin.menus.update', $menu) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" value="{{ old('name', $menu->name) }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                    <select name="category" id="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('category') border-red-500 @enderror" required>
                        <option value="">Select Category</option>
                        <option value="Coffee" {{ old('category', $menu->category) == 'Coffee' ? 'selected' : '' }}>Coffee</option>
                        <option value="Non-Coffee" {{ old('category', $menu->category) == 'Non-Coffee' ? 'selected' : '' }}>Non-Coffee</option>
                        <option value="Food" {{ old('category', $menu->category) == 'Food' ? 'selected' : '' }}>Food</option>
                        <option value="Snack" {{ old('category', $menu->category) == 'Snack' ? 'selected' : '' }}>Snack</option>
                    </select>
                    @error('category')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price (Rp)</label>
                    <input type="number" name="price" id="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') border-red-500 @enderror" value="{{ old('price', $menu->price) }}" min="0" step="1000" required>
                    @error('price')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea name="description" id="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror">{{ old('description', $menu->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="sub_title" class="block text-gray-700 text-sm font-bold mb-2">Sub Title</label>
                    <input type="text" name="sub_title" id="sub_title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('sub_title') border-red-500 @enderror" value="{{ old('sub_title', $menu->sub_title) }}">
                    @error('sub_title')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="sub_description" class="block text-gray-700 text-sm font-bold mb-2">Sub Description</label>
                    <textarea name="sub_description" id="sub_description" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('sub_description') border-red-500 @enderror">{{ old('sub_description', $menu->sub_description) }}</textarea>
                    @error('sub_description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                    @if($menu->image)
                        <div class="mb-2">
                            <img src="{{ asset($menu->image) }}" alt="{{ $menu->name }}" class="w-32 h-32 object-cover rounded">
                        </div>
                    @endif
                    <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror" accept="image/*">
                    @error('image')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_active" class="form-checkbox" value="1" {{ old('is_active', $menu->is_active) ? 'checked' : '' }}>
                        <span class="ml-2 text-gray-700">Active</span>
                    </label>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update Menu Item
                    </button>
                    <a href="{{ route('admin.menus.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 