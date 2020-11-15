<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use Auth;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('item/index', ["items" => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = \App\Category::all();
        return view('item.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = new Item;
        $item->item_name = $request->name;
        $item->item_description = $request->description;
        $item->item_quantity = $request->quantity;

        $category = \App\Category::where('category_name', $request->category)->get()[0];
        $item->category_id = $category->id;

        $item->save();

        return redirect()->route('showitem')->with('create_success', 'Item berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Item::find($id);
        return view('item.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemRequest $request, $id)
    {
        $item = $request->validated();
        $category = \App\Category::where('category_name', $item['category'])->get()[0];
        $item['category_id'] = $category->id;

        $editedItem = Item::find($id)->update($item);
        return redirect()->route('showitem')->with('status', 'Item successfully updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $item = Item::find($id);
        $categories = \App\Category::all();
        return view('item.edit', ['item' => $item, 'categories' => $categories]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deletedItem = Item::find($id)->delete();
        return redirect()->route('showitem')->with('status', 'Item successfully deleted');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        return view('item.delete', ['item' => $item]);
    }
}
