<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    protected $categories = [
        'Beverages',
        'Seasonal',
        'Signature',
        'Snack',
        'Main Course'
    ];

    public function index()
    {
        $menus = Menu::latest()->paginate(10);
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $categories = $this->categories;
        return view('admin.menus.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'sub_description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|in:' . implode(',', $this->categories),
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/menu'), $imageName);
            $data['image'] = 'images/menu/' . $imageName;
        }

        Menu::create($data);

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        $categories = $this->categories;
        return view('admin.menus.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'sub_description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|in:' . implode(',', $this->categories),
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/menu'), $imageName);
            $data['image'] = 'images/menu/' . $imageName;
        }

        $menu->update($data);

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu item deleted successfully.');
    }
} 