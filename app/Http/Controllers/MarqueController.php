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
        $brands = Marque::paginate(5);
        return view('pages.brand',compact('brands'));
    }
}
