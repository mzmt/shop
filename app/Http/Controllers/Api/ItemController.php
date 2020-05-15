<?php

namespace App\Http\Controllers\Api;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('index', ['items' => $items]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
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
