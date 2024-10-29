<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest; 

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =Category::all();
        return view("category.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        // asi es manualmente : Category::create(["descripcion"->$request->description])
       Category::create($request->all()); 
       return  redirect(route("category.index"))->with("message","It has been added new Category successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view("category.show",compact('category'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("category.edit",compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
          // asi es manualmente : Category::create(["descripcion"->$request->description]) 
       $category->update($request->all());   
       return  redirect(route("category.index"))->with("message","It has been update Category successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete($category); 
        return  redirect(route("category.index"))->with("message","It has been delete Category successfully");
    }
}
