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

        
        $chartjs2 = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Label x', 'Label y'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                'data' => [69, 59]
            ]
        ])
        ->options([]);
        return view('pages.index',compact('total_product','total_commande','total_Price','total_permissions','chartjs','chartjs2'));
    }
}
