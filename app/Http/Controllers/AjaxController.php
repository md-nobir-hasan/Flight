<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function fetch(Request $request){
        $model = "App\\Models\\$request->mt";
        $data = $model::where('category_id',$request->id)->get();
        return response()->json($data);
    }

    public function dataSave(Request $request){
        $model = "App\\Models\\$request->mt";
        $data = $model::create([
            'product_id' => $request->id,
            'user_id' => Auth::user()->id
        ]);
        if($data){
            return true;
        }else return false;
        // return response()->json($data);

    }
}
