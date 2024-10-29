<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request; 
use App\Http\Requests\ProductRequest;
use App\Models\Category;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::join("categories", "categories.id", "=", "products.id_category") 
            ->select("products.*", "categories.description as name_category") 
            ->orderby("products.id") 
            ->get();
            // Esto hace primero ago una union con el id de la categoria a la id de producto  
            // hago un select que quiero todo los datos de productos y un campo adicional que seria categories descripcion y hago otra celda llamado 
            //Name category
        return view("product.index", compact("products"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("product.create",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    { 
        Product::create($request->all());
        return  redirect(route("product.index"))->with("message","It has been added new Product successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    { 

        return view("product.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
