<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\models\Category;


class CategorieController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $categories=Category::all();
        return view('pages.categories',compact('categories'));
    }
    public function createCategory(Request $request)
    {
        $user = auth()->user();
        if(!$user->hasPermissionTo('categorie-create')){
            return view('errors.403');
        }
        $validated = $request->validate([
        'nom' => 'required|max:20|min:2'
        ]);
        $categorie = Category::where('name', $request->nom)->first();
        if ($categorie) {
           return redirect()->route('category')->with('errors','la catégorie que tu as entré existe déja');
        } else {
           $categorie = Category::create([
              'name' => $request->nom 
           ]);
           return redirect()->route('category')->with('succès','catégorie creé avec succès'); 
        }

    }
    public function updateCategory(Request $request)
    {
        $user = auth()->user();
        if(!$user->hasPermissionTo('categorie-edit')){
            return view('errors.403');
        }
      $request->validate([
         'name' => 'required|string'
      ]);
      $categorie = Categorie::find($request->id);
      dd($categorie);
      if ($categorie) {
         $categorie->name = $request->nom;
         $categorie->save();
         return redirect()->route('category')->with('succès','catégorie a été mis à jour');
      }
         return  view('errors.404');
    }
}
