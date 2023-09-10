<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;


use App\Models\FruitCategory;
use Illuminate\Http\Request;

class FruitCategoryController extends Controller
{
    public function create()
    {
        // dd(5);
        $categories = FruitCategory::orderBy("name")->paginate(3);
        return view('fruit.category')->with('categories', $categories);
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
        ]);
        // dd($request->name);
        $category = FruitCategory::create([
            'name' => $request->name,
        ]);

        notify()->success('Fruit Category Successfully Created ⚡️');


        return redirect()->route("category");
    }

    public function edit($id)
    {
        $categories = FruitCategory::all();
        $category = $categories->find($id);

        return view("fruit.edit.category")->with("category", $category);
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

        notify()->success('Fruit Category Successfully Updated ⚡️');


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
