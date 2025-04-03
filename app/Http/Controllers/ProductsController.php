<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   
    public function index()
    {
        return response()->json(Products::all());


    }

   
    public function store(Request $request)
    {
        $products = Products::create($request->all());
        return response()->json($products, 201);
    }

   
    public function show(string $id)
    {
        return response()->json(Products::find($id));

    }

  
    public function update(Request $request, string $id)
    {
        Products::find($id)->update($request->all());
    }

   
    public function destroy(string $id)
    {
        Products::destroy($id);
    }
}
