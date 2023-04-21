<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;

class MarqueController extends Controller
{
    public function __constuct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = auth()->user();
        if(!$user){
           return view('errors.404');
        }
        if(!$user->hasPermissionTo('marque-list')){
           return view('errors.403');
        }
        $brands = Marque::paginate(5);
        return view('pages.brand',compact('brands'));
    }
    public function ajouterMarque(Request $request)
    {
        $user = auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('marque-create')){
           return view('errors.403');
        }
        $validateData=$request->validate([
            'name_brand' => 'required|string|min:2|unique:marques,name'
        ]);
        Marque::create([
            'name' => $request->name_brand
        ]);
        return redirect()->back()->with('succès','la marque a été bien ajouter');
    }
    public function deleteBrand(Request $request)
    {
        $user = auth()->user();
        if(!$user){
            return view('errors.404');
         }
        if(!$user->hasPermissionTo('marque-delete')){
           return view('errors.403');
        }
        $brand = Marque::find($request->id);
        $brand->delete();
        if(!$brand){
            return redirect()->back()->with('error','quelque chose s\'est mal passé');
        }
        return redirect()->back()->with('succès','la marque a été bien supprimer');
    }
    public function updateMarque(Request $request)
    {
        $user= auth()->user();
        if(!$user){
            return view('errors.404');
        }
        if(!$user->hasPermissionTo('marque-edit')){
            return view('errors.403');
        }
        $request->validate([
            'nom' => 'required|string|min:2'
        ]);
        $marque = Marque::find($request->id);
        if(!$marque){
            return view('errors.404');
        }
        if($marque->name == $request->nom){
            return redirect()->back()->with('info','marque existe déja');
        }
        $marque->name = $request->nom;
        $marque->save();
        return redirect()->back()->with('succès','la marque a été bien Modifier');
    }
}
