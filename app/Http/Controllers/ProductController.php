<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Marque;


class ProductController extends Controller
{
    public function _construct()
    {
       $this->middleware('auth');   
    }
    public function index()
    {
        $products = Product::with('marque', 'category')->paginate(5); // Eager load the Marques and Categories relationships
        $marques = Marque::all();
        $categories = Category::all();
    
        return view('pages.products', compact('products', 'marques', 'categories'));
    }
    public function showProductForm()
    {
        return view('pages.create-product');
    }
    public function createProduct(Request $request)
    {
        
        $validated = $request->validate([
        'nom' => 'required|max:20|min:2',
        'reference' => 'required|max:20|min:2',       
        'quantite' => 'required|numeric|min:0',
        'prix' => 'required|numeric|min:0',

        ]);
        Product::create([
            'reference' => $request->reference,
            'nom' =>  $request->nom,
            'quantite' => $request->quantite,
            'prix' => $request->prix,
            'category_id' => $request->category_id,
            'marque_id' => $request->marque_id
        ]);
        return response()->json(['message' => 'le produit a été bien créer']);
    }
}
