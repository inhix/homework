<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $this->validate($request, [
            'title' => 'required',//обязательно
            'icon' => 'nullable|image'
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required', //обязательно
//            'icon' => 'nullable|image'
        ]);

        $category = Category::find($id);

        $category->update($request->all());
        $category->uploadIcon($request->file('icon'));

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
    }
}
