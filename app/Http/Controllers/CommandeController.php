<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Marque;
use App\Models\Commande;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CreateCommandeNotification;
use App\Models\StockFeeding;

class CommandeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $stock = StockFeeding::where('user_id', auth()->user()->id)->get();
        // $quantite = [];
        // dd($stock);
        // foreach($stock as $stoc){
        //     $quantite= 0;
        //     foreach($stock as $product){
        //         $quantite +=$product->quantity; 
        //     }
        //     $quantité[] = $quantite;
        // }
         $stock = StockFeeding::where('user_id', auth()->user()->id)
        ->groupBy('product_id')
        ->selectRaw('sum(quantity) as total_quantity, product_id')
        ->get();
         $products = [];
         foreach ($stock as $key => $value) {
            $product = Product::find($value->product_id);
            $products []=$product;
         }
        $quantities = [];
        
        foreach ($stock as $item) {
            $quantities[$item->product_id] = $item->total_quantity;
        }
        $marques = Marque::all();
        $categories = Category::all();
        $commandes = Commande::paginate(4);
        return view('pages.commande', compact('products','quantities','marques','categories','commandes'));
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
    
                $data[] = [
                    'reference' => $references[$i],
                    'quantity' => $quantities[$i],
                    'nom' => $nom[$i],
                    'prix' => $prix[$i],
                    'marque' => $marques[$i],
                    'categorie' => $categories[$i],
                ];
        }
        $comande = Commande::create([
            'user_name' => auth()->user()->name,
            'status' => 'en cours',
            'data' => json_encode($data),
        ]);
        $user = User::find(1);
        $userAuth =  auth()->user()->name;
        Notification::send($user, new CreateCommandeNotification($userAuth));
        return response()->json(['message' => 'La Commande a été bien créer .']);
    }
    public function deleteCommande(Request $request)
    {
        $commande = Commande::find($request->commande_deletedId);
        if($commande){
            $commande->delete();
            return redirect()->back()->with('succès','la commande a été bien supprimer');
        }
    }
    public function updateCommande(Request $request)
    {

        
        $commande =Commande::find($request->comande_updatedId);
            $commande->status = $request->commande_status;
            $commande->save();
        
        return redirect()->back()->with('succès','la commande a été bien modifier');
    }
    public function getCommande($id)
    {
        $commande = Commande::find($id);
        if ($commande) {
            return response()->json([
                'commande_status' => $commande->status,
            ]);
        } 
    }
    public function downloadCommande(Request $request)
    {
        $commande  = Commande::find($request->id);

        $data = json_decode($commande->data);
        $prixtotale = 0;
        foreach($data as $items){
            $prixtotale +=$items->prix * $items->quantity;
        }
        
        // dd($data);
        $dompdf = new Dompdf();
    
        // Render the view as HTML
        $html = view('pages.commandepdf', compact('commande','data','prixtotale'))->render();
        
        // Load the HTML into dompdf
        $dompdf->loadHtml($html);
        
        // Set the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        
        // Render the PDF
        $dompdf->render();
        $output = $dompdf->output();
        return response($output, 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'attachment; filename="commande.pdf"');
        return redirect()->back()->with('succès','votre commande a été bien télecharger');
        
    }
}
