<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
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
            $n['carts'] = Cart::with(['product','user'])->where('user_id',$user->id)->orderBy('id','desc')->get();
            $n['all_total'] = $n['carts']->sum('product.price');
            // dd($n);
            return view('frontend.pages.cart',$n);
        }else{
            return to_route('login');
        }
    }
    public function productDetails($id){

            $n['product'] = Product::with('category.product')->find($id);
            // dd($n);
            $n['product']->update([
                'view' => ($n['product']->view + 1)
            ]);
            return view('frontend.pages.product-details',$n);

    }

    public function checkout(Request $request){
       $order = Order::create([
            'user_id' => Auth::user()->id,
            "total" => $request->total,
        ]);

        foreach($request->p as $pd){
            // dd($pd);
            OrderItem::create([
                'product_id' => $pd['product_id'],
                'qty' => $pd['qty'],
                'order_id'=>$order->id,
            ]);
        }
        $n['order'] = $order;
        return to_route('checkout.view',$order->id);
    }

    public function checkoutView($id){
        $n['order']=Order::find($id);
        return view('frontend.pages.checkout', $n);
    }
}
