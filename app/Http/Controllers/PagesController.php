<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages/index');
    }

    public function cart(){
        return view('pages/cart');
    }

    public function category(){
        return view('pages/category');
    }

    public function checkout(){
        return view('pages/checkout');
    }

    public function contact(){
        return view('pages/contact');
    }

}
