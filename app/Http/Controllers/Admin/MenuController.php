<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $items = $menu->items;
        return view('admin.menus.edit', compact('menu', 'items'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        // update all menu items
        $menu->items()->delete();

        foreach ($request->items as $index => $item) {
            MenuItem::create([
                'menu_id' => $menu->id,
                'label' => $item['label'],
                'url' => $item['url'],
                'sort_order' => $index,
            ]);
        }

        return redirect()->back()->with('success', 'Menu updated.');
    }
}