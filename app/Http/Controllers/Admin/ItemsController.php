<?php

namespace App\Http\Controllers\Admin;

use App\Item;
use App\Http\Requests\ItemCreate;
use App\Http\Requests\ItemEdit;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();
        $q = $request->input('q');
        if(!empty($q)){
            $items = Item::where('description','like','%'.$q.'%')->get();
        }
        return view('items/index', ['items' => $items]);
    }

    public function create()
    {
        return view('items/create');
    }

    public function store(ItemCreate $request)
    {
        $item =  new Item;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->save();
        return redirect('admin/items');
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('items/show', ['item' => $item]);
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('items/edit', ['item' => $item]);
    }

    public function update(ItemEdit $request, $id)
    {
        $item = Item::find($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->save();
        return view('items/show', ['item' => $item]);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('admin/items');
    }
}
