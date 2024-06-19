<?php

namespace App\Http\Controllers\Blog;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
  
    public function index()
    {
        $categories = Category::paginate();
        return view('admin.categories.categories', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }
   

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()
            ->route('categories.index')
            ->with('success', 'Categoria criada com sucesso!');
    }


    public function show(string $id)
    {
        dd('categories/show');
    }

  
    public function edit(string $id)
    {
        dd('categories/edit');
    }

  
    public function update(Request $request, string $id)
    {
        dd('categories/update');
    }

 
    public function destroy(string $id)
    {
        dd('categories/destroy');
    }
}
