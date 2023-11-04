<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        if($user){
            $n['carts'] = Cart::with(['product','user'])->where('user_id',$user->id)->get();
            return view('frontend.pages.cart',$n);
        }else{
            return to_route('login');
        }
    }
}
