<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Marque;

class HomeController extends Controller
{
    public function showDashboard(){
        return view('pages.index');
    }
}
