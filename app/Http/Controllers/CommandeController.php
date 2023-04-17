<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Marque;
use App\Models\Commande;


class CommandeController extends Controller
{
    public function index()
    {
        $products = Product::with('marque', 'category')->paginate(5); // Eager load the Marques and Categories relationships
        $marques = Marque::all();
        $categories = Category::all();
        return view('pages.commande', compact('products', 'marques', 'categories'));
    }
    public function CreateCommande(Request $request)
    {
    
        $references = $request->input('references');
        $quantities = $request->input('quantity');
        $nom = $request->input('nom');
        $prix = $request->input('prix');
        $marques = $request->input('marques');
        $categories = $request->input('categories');
        $items = $request->items;
        $data = [];
        
        foreach ($items as $i => $item) {
    
            // if($request->has($items[$i])) {
                $data[] = [
                    'reference' => $references[$i],
                    'quantity' => $quantities[$i],
                    'nom' => $nom[$i],
                    'prix' => $prix[$i],
                    'marque' => $marques[$i],
                    'categorie' => $categories[$i],
                ];
            // }
        }
        $comande = Commande::create([
            'user_name' => auth()->user()->name,
            'status' => 'en cours',
            'data' => json_encode($data),
        ]);

        return response()->json(['message' => 'Commande created successfully.']);
    }
}
