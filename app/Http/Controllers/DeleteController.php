<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($model, $id){
        $model_path = "App\\Models\\$model";
        $data = $model_path::find($id)->delete();
        return back()->with('success',"$model deleted successfully");
    }
}
