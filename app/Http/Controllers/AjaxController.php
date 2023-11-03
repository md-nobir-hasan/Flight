<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function fetch(Request $request){
        $model = "App\\Models\\$request->mt";
        $data = $model::where('category_id',$request->id)->get();
        return response()->json($data);
    }
}
