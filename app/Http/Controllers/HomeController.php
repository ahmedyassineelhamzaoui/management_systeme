<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Commande;
use App\Models\Marque;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Fx3costa\LaravelChartJs\ChartJsBuilder;
use App\Models\stockFeeding;

class HomeController extends Controller
{


    public function showDashboard(){
        $commercials = User::role('commercial')->get();
        $tendances = [];
        $check_user = false;

        $admintendancesProduct = [];
        $auth_username = User::role('admin')->first();
        if(auth()->user() == $auth_username){
          $check_user = true;
        }

        foreach ($commercials as $i => $commercial) {
            $product_tendance ='';

            $stock = StockFeeding::where('user_id', $commercial->id)->get()->groupBy('product_id');
            $products = [];
            $number = 0;
            foreach ($stock as $i => $feedings) {
                $product = Product::findOrFail($i);
                $quantity = $feedings->sum('quantity');
                if($quantity>$number){
                    $number = $quantity;
                    $product_tendance = $product->nom;
                }
                $products[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                ];
            }
            $tendances[] =  $product_tendance;
            $admintendancesProduct []=[
                'name' => $product_tendance,
                'quantity_number' => $number
            ];
        }
        $max_quantity = 0;
        foreach ($admintendancesProduct as $product) {
            if ($product['quantity_number'] > $max_quantity) {
                $max_quantity = $product['quantity_number'];
                $max_product_name = $product['name'];
            }
        }

        $labels = ['Lundi', 'Mardi', 'Mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
        
        $datasets = [];
        $backgroud = ["rgba(38, 185, 154, 0.31)","rgb(143, 139, 24)","rgba(230, 22, 199, 0.31)"];
        $borderColor = ["rgba(38, 185, 153, 0.969)","rgb(220, 213, 3)","rgba(117, 0, 117, 0.969)"];

        foreach ($commercials as $i => $commercial) {
            $stock = StockFeeding::where('user_id',$commercial->id)->get();
            $data = [];
            foreach ($stock as $key => $value) {
                $data []=$value['quantity'];
                
            }
            $datasets[] = [
                "label" => "Commercial " . $commercial->name,
                'backgroundColor' => $backgroud[$i],
                'borderColor' => $borderColor[$i],
                "pointBorderColor" => $backgroud[$i],
                "pointBackgroundColor" => $backgroud[$i],
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => $data,
            ];
        }
        $chartjs = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels($labels)
            ->datasets($datasets)
            ->options([
                'scales' => [
                    'xAxes' => [[
                        'scaleLabel' => [
                            'display' => true,
                            'labelString' => 'Month'
                        ]
                    ]]
                ]
            ]);
        $total_product = Product::count();
        $total_commande = Commande::count();
        $total_Price = DB::table('products')->sum(DB::raw('prix * quantite'));
        $total_permissions =  Permission::count();

        $label_users = [];
        $price = [];
        $commandes = [];
        $stockProduct = [];
        foreach ($commercials as $commercial) {
            $commande = Commande::where('user_name',$commercial->name)->get();
            $stock = StockFeeding::where('user_id', $commercial->id)
            ->select('product_id')
            ->distinct()
            ->get();
            $stockProduct[]= count($stock);
            $commandes[]=count($commande);
            $label_users[] = $commercial->name;
            $stock = StockFeeding::where('user_id', $commercial->id)->get();
            $total_price = 0;
        
            foreach ($stock as $item) {
                $product = Product::find($item->product_id);
                $total_price += $item->quantity * $product->prix;
            }
        
            $price[] = $total_price;
        }
        $colors = ['rgba(38, 185, 153, 0.969)','rgb(220, 213, 3)','rgba(117, 0, 117, 0.969)'];
        $chartjs2 = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])
        ->labels($label_users)
        ->datasets([
            [
                'backgroundColor' => $colors,
                'hoverBackgroundColor' => $colors,
                'data' => $price
            ]
        ])
        ->options([]);

        return view('pages.index',compact('total_product','total_commande','total_Price','total_permissions','chartjs','chartjs2','commercials','price','commandes','stockProduct','tendances','max_product_name','check_user'));
    }
}
