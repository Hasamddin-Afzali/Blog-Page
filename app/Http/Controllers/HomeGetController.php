<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeGetController extends Controller
{
    public function home(){
        return view("front.home");
    }
}
