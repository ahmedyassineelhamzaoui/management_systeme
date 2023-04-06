<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function _construct()
    {
       $this->middleware('auth');   
    }
    public function index()
    {
        $products = Product::all();
        return view('pages.products',compact('products'));
    }
    public function showProductForm()
    {
        return view('pages.create-product');
    }
    public function productCreate(Request $request)
    {

    }
}
