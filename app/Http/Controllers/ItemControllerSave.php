<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('inventory.index',[
            'items'=>Item::all()
        ]);
    }
    public function create()
    {
        return view('inventory.create');
    }
    public function show($id){
        $item=Item::findOrFail($id);
        return view('inventory.show',['item'=>$item]);
    }
    public function destroy($id)
    {
        $item=Item::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view("inventory.edit",['item'=>$item]);
    }
    public function update($id,Request $request)
    {
        $item=Item::findOrFail($id);
        $item->name=$request->item_name;
        $item->price=$request->item_price;
        $item->stock=$request->item_stock;
        $item->update();
        return redirect()->route('item.index');
    }
    public function store(Request $request){
        // dd($request->url());
        $item=new Item();
        $item->name=$request->item_name;
        $item->price=$request->item_price;
        $item->stock=$request->item_stock;
        $item->save();

        return redirect()->route("item.index");
    }
}
