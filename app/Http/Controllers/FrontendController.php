<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage(){
        $product = Product::with(['category','subcat'])->orderBy('view','desc')->get();
        $n['new_products'] = $product->whereBetween('created_at',[Carbon::today()->subDays(7+1),Carbon::today()->addDay()]);
        $n['top_rated'] = $product->take(4);
        $n['features'] = $product->where('created_at','<', Carbon::today()->subDays(7));
        // $n['all'] = $product;
        // dd($n);

        return view('frontend.pages.index',$n);
    }

    public function cart(){
        
        $n['carts'] = Cart::with(['product','user'])->get();
        return view('frontend.pages.cart',$n);
    }
}
