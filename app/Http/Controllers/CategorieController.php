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
           return redirect()->route('category')->with('error','catégorie existe déja');
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
            'nom_update' => 'required|string'
        ]);
        $categorie = Category::find($request->id);
        if ($categorie) {
            $categorie->name = $request->nom_update;
            $mycategory = Category::where('name', $request->nom_update)->first();
                if ($mycategory) {
                      return redirect()->route('category')->with('info','la catégorie que tu as entré existe déja');
                }
            $categorie->save();
            return redirect()->route('category')->with('succès','catégorie a été mis à jour');
        }
            return  view('errors.404');
    }
    public function deleteCategory(Request $request)
    {
        $user = auth()->user();
        if(!$user->hasPermissionTo('categorie-delete')){
            return view('errors.404');
        }
        $categorie = Category::find($request->id);
        if ($categorie) {
            $categorie->delete();
            return redirect()->route('category')->with('succès','la catégorie a été supprimer');
        } 
            return redirect()->route('category')->with('error','categorie n\'existe pas');
    }
}
