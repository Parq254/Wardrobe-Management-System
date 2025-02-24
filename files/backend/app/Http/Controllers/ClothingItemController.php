<?php

namespace App\Http\Controllers;

use App\Models\ClothingItem;
use Illuminate\Http\Request;

class ClothingItemController extends Controller
{
    public function index()
    {
        return ClothingItem::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        $item = ClothingItem::create($request->all());

        return response()->json(['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $item = ClothingItem::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'category' => 'sometimes|required|string|max:255',
        ]);

        $item->update($request->all());

        return response()->json(['item' => $item]);
    }

    public function destroy($id)
    {
        $item = ClothingItem::findOrFail($id);
        $item->delete();

        return response()->json(['message' => 'Item deleted successfully']);
    }
}