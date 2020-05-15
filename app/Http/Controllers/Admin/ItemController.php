<?php

namespace App\Http\Controllers\Admin;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items/index', ['items' => $items]);
    }

    public function create()
    {
        return view('items/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'name' => ['required', 'unique:post', 'max:255'],
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        // nested paramsは '.' で取得する
        // e.g. 'author.description' => 'required'
        $item =  new Item;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->save();
        return redirect('admin/items');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
