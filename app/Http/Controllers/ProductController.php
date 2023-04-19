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
use App\Notifications\AlimenterStock;
use App\Notifications\FeedDecline;
use App\Notifications\FeedAccept;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

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
        return Response($products);
        }
        }
    }

    public function allimenterStock(Request $request)
    {
        $references = $request->input('references');
        $quantities = $request->input('quantity');
        $changedProducts = [];
        $user = User::find(1);
        foreach ($references as $i => $reference) {
            
            $product = Product::where('reference', $reference)->first();
            if ($product) {
                $data = [
                    'quantity' => $quantities[$i],
                    'user_id'  => auth()->user()->id,
                    'status'   => 'pending'
                ];
                $userAuth = [ 'id' => auth()->user()->id];
                $productData = json_decode($product->data, true);
                $userData = json_decode($product->user_id, true);
                $productData[] = $data;
                $userData[] = $userAuth;
                $product->data = json_encode($productData);
                $product->user_id = json_encode($userData);
                $changedProducts[] = $product;
                $product->save();
                $user_id = auth()->user()->id;
            }
        }
        Notification::send($user, new AlimenterStock($changedProducts,$user_id));
        return response()->json(['message' => 'Nous informons que cette opération doit être validée par l\'admin']);
    }
    
   
    public function userStock($id)
    {
    $user = $id;
    $data =  Product::all();
    $products = [];
    $quantity = [];
    foreach ($data as $items) {
        if($items->user_id){
            $decodedData = json_decode($items->data);
            foreach ($decodedData as $i => $item) {
                $mydata = json_decode($items->data);
                if ($mydata[$i]->user_id == $id && $item->status == 'accepted') {
                    $quantity[] = $mydata[$i]->quantity;
                    $products[] = $items;
                }
            }
        }
       
    }
    return view('pages.userStock', compact('user', 'products','quantity'));       
    }
    public function acceptOperation(Request $request)
    {
        $notification = DB::table('notifications')->where('notifiable_id', $request->notifId)->first();
         if($notification){
            foreach (json_decode($notification->data)->product  as $i => $items) {
                // dd(json_decode($notification->data)->user_id);
                $product = Product::find($items->id);
                $productData = json_decode($product->data, true);
                foreach($productData as $key=>$value ){
                    if($value['user_id'] == json_decode($notification->data)->user_id ){
                        $productData[$key]['status'] =  'accepted';
                        $usernotify = User::find($value['user_id']);
                        // dd($usernotify);
                        $product->quantite -= json_decode($items->data)[0]->quantity;
                        $product->data = json_encode($productData); 
                        $product->save();
                    }
                }
            }
         }
         $user = auth()->user();
         $notification = $user->notifications()->where('notifiable_id', $request->notifId)->first();
         Notification::send($usernotify, new FeedAccept());
         $notification->delete();
         return redirect()->back()->with('succès','le stock a été alimenter ');
    }
    public function declineOperation(Request $request)
    {
        $user = auth()->user();
        $notification = $user->notifications()->where('notifiable_id', $request->notifId)->first();
        $usernotify  = User::find($notification->data['user_id']);
        Notification::send($usernotify, new FeedDecline());
         if($notification){
            $notification->delete();
         }
         return redirect()->back()->with('succès','l\'alimentation de stock a été refuser');
    }

}
