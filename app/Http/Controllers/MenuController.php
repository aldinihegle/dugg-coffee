<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        $query = Menu::where('is_active', true);
        
        if ($category === 'Beverages') {
            // Jika kategori Beverages, tampilkan Seasonal dan Signature
            $query->whereIn('category', Menu::beverageCategories());
        } elseif ($category && $category !== 'all') {
            // Jika kategori lain dipilih
            $query->where('category', $category);
        }
        // Jika tidak ada kategori, tampilkan semua menu
        
        $menuItems = $query->get();
        $categories = Menu::categories();
        
        return view('menu', compact('menuItems', 'categories', 'category'));
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        $relatedMenus = Menu::where('id', '!=', $id)
            ->where('category', $menu->category)
            ->where('is_active', true)
            ->take(3)
            ->get();
            
        return view('menu_detail', compact('menu', 'relatedMenus'));
    }

    public function create()
    {
        return view('admin.menus.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/menus', $filename);
            $validated['image'] = 'storage/menus/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['is_featured'] = $request->has('is_featured');

        Menu::create($validated);

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menus.form', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($menu->image && Storage::exists('public/' . str_replace('storage/', '', $menu->image))) {
                Storage::delete('public/' . str_replace('storage/', '', $menu->image));
            }

            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/menus', $filename);
            $validated['image'] = 'storage/menus/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['is_featured'] = $request->has('is_featured');

        $menu->update($validated);

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->image && Storage::exists('public/' . str_replace('storage/', '', $menu->image))) {
            Storage::delete('public/' . str_replace('storage/', '', $menu->image));
        }

        $menu->delete();

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu deleted successfully.');
    }
}
