<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inventory.index', [
            'items' => Item::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_name'=>"required|min:3|max:50|unique:items,name",
            'item_price'=>"required|gte:50|lte:100000|numeric",
            'item_stock'=> "required|gte:2|lte:100|numeric"
        ]);
        $item = new Item();
        $item->name = $request->item_name;
        $item->price = $request->item_price;
        $item->stock = $request->item_stock;
        $item->save();

        return redirect()->route("item.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('inventory.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view("inventory.edit", compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $item->name = $request->item_name;
        $item->price = $request->item_price;
        $item->stock = $request->item_stock;
        $item->update();
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->back();
    }
}
