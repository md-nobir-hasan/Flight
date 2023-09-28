<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendControllers extends Controller
{
    public function homePage() {
        return view("frontend.layout.app");
    }
}
