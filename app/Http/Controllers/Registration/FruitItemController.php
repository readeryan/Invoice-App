<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;


use App\Models\FruitCategory;
use App\Models\FruitItem;
use Illuminate\Http\Request;

class FruitItemController extends Controller
{
    public function create()
    {
        // dd(5);
        $categories = FruitCategory::all();
        $items = FruitItem::paginate(3);
        return view('fruit.item')->with(compact('categories', 'items'));
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'unit' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string'],
            'category' => ['required']
        ]);
        $category = FruitCategory::find($request->category);
        $category->item()->create([
            'name' => $request->name,
            'unit' => $request->unit,
            'price' => $request->price,
        ]);

        return redirect()->route("item");
    }
    public function edit($id)
    {

        $categories = FruitCategory::all();
        $item = FruitItem::find($id);

        return view("fruit.edit.item")->with(compact("item", 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $categories = FruitCategory::all();
        $category = $categories->find($id);

        $category->update([
            "name" => $request->name
        ]);
        $category->save();

        return redirect()->route("category");
    }

    public function delete($id)
    {
        $categories = FruitCategory::all();
        $category = $categories->find($id);
        $category->delete();

        return redirect()->route("category");
    }
}
