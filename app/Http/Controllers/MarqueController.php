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
        if(!$user->hasPermissionTo('marque-list')){
           return view('errors.403');
        }
        $brands = Marque::paginate(5);
        return view('pages.brand',compact('brands'));
    }
    public function ajouterMarque(Request $request)
    {
        $user = auth()->user();
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
}
