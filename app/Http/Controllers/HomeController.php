<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    function home(){
        $data = Product::all();
        return view('home', ['products'=>$data]);
    }
}
