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
    public function search(Request $request)
    {
        if($request->ajax())
        {
        $output="";
        $search = $request->search;
        $products=Product::with('marque', 'category')->where('reference','LIKE','%'.$search."%")
        ->orWhere('nom', 'like', '%' . $search . '%')
        ->orWhere('quantite', 'like', '%' . $search . '%')
        ->orWhere('prix', 'like', '%' . $search . '%')
            ->orWhereHas('marque', function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%');
            })
            ->orWhereHas('Category', function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%');
            })
        ->paginate(5);
        if($products)
        {
        foreach ($products as $key => $product) {
        $output.='<tr class="border-b text-tablecolor">'.
        '<th scope="row" class="px-6 py-4  whitespace-nowrap ">'.$product->reference.'</th>'.
        '<td class="px-6 py-4">'.$product->nom.'</td>'.
        '<td class="px-6 py-4">'.$product->marque->name .'</td>'.
        '<td class="px-6 py-4">'.$product->Category->name.'</td>'.
        '<td class="px-6 py-4">'.$product->quantite.'</td>'.
        '<td class="px-6 py-4">'.$product->prix.'</td>'.
        '<td class="px-6 py-4">
            <div class="flex items-center">
                <button data-product-id="'.$product->id.'" data-modal-target="edit-productModal"
                    class="text-green-500 cursor-pointer edit-productInfo">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>                                                      
                </button>
                    
                <button onclick="deleteProduct('.$product->id.')" data-modal-target="delete-product" data-modal-toggle="delete-product"  class="text-red-600 cursor-pointer delete-product">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>                                                      
                </button>
                </form>
            </div>
        </td>'.
        '</tr>';
        }
        return Response($output);
        }
        }
    }


}
