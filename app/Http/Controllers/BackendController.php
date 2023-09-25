<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboard(){
        return view('pages.dashboard');
    }
    public function profile(){
        return view('pages.profile');
    }
}
