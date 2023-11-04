<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage(){
        $n['products'] = Product::with(['category','subcat'])->take(8)->get();
        return view('frontend.pages.index',$n);
    }
}
