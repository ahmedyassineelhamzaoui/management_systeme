<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Marque;
use App\Exports\ExportProduct;
use App\Imports\UploadProduct;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Facades\Excel;



class ProductController extends Controller
{
    public function __construct()
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
    public function getProductInfo($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $marques = Marque::all();

        if ($product) {
            return response()->json([
                'product_id' => $product->id,
                'categories' => $categories,
                'marques' => $marques,
                'reference_updated' => $product->reference,
                'nom_updated' => $product->nom,
                'marque_name' => $product->marque->name,
                'category_name' => $product->category->name,
                'quantiteupdated' => $product->quantite,
                'prixupdated' => $product->prix,
            ]);
        } 
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
    public function updateProductInfo(Request $request)
    {

        $request->validate([
            'nom_updated' => 'required|max:20|min:2',
            'reference_updated' => 'required|max:20|min:2',
            'quantiteupdated' => 'required|numeric|min:0',
            'prixupdated' => 'required|numeric|min:0',
        ]);
        $product =Product::find($request->product_formId);
           
            $product->reference = $request->reference_updated;
            $product->nom =  $request->nom_updated;
            $product->quantite = $request->quantiteupdated;
            $product->prix = $request->prixupdated;
            $product->category_id = $request->ctegory_idupdated;
            $product->marque_id = $request->marque_idupdated;
            $product->save();
        
        return response()->json(['message' => 'les informations a été bien modifier']);
    }
    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->product_deletedId);
        if($product){
            $product->delete();
            return redirect()->back()->with('succès','le produit a été bien supprimer');
        }
    }

    public function export() 
    {
        return Excel::download( new ExportProduct, 'products.xlsx');
    }
       
    public function import() 
    {
        $file = request()->file('product_file');

        if (!$file || $file->getSize() === 0) {
            return redirect()->route('products')->with('error','The file is empty.');
        }
        try {
            Excel::import(new UploadProduct, $file, null, \Maatwebsite\Excel\Excel::XLSX);
        } catch (ValidationException $e) {
            $errors = $e->errors();
            return redirect()->route('products')->with('error', $errors['reference'][0]);
        }
        Excel::import(new UploadProduct, $file, null, \Maatwebsite\Excel\Excel::XLSX);
    
        return redirect()->route('products')->with('succès','The file is uploaded successfuly');    
    }
}
