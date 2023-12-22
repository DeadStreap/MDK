<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $items = Item::all();

        return view('items.index', compact('items'));
    }

    public function create(): View
    {
        return view('items.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Item::create($request->all());
        
        return redirect()->route('items.index')->with('success', 'item create successfully');
    }

    public function edit(Item $item): View
    {
        return view('items.edit',compact('item'));   
    }

    public function update(Request $request, Item $item): RedirectResponse
    {
        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'item updated successfully');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')->with('success','item has been deleted successfully');
    }
    
    public function show(Item $item): View
    {
        return view('items.show',compact('item'));   
    }

}

