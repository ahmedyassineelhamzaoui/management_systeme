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


class HomeController extends Controller
{

    public function showDashboard(){
        $total_product = Product::count();
        $total_commande = Commande::count();
        $total_Price = DB::table('products')->sum(DB::raw('prix * quantite'));
        $total_permissions =  Permission::count();
        return view('pages.index',compact('total_product','total_commande','total_Price','total_permissions'));
    }
}
