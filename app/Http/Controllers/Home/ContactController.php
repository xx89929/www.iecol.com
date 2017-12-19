<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Pclassify;

class ContactController extends Controller{

    public function index(){
        $NavProductClssifys = Pclassify::get();
        return view('home.pages.contact',['title_item'=>'Contact','nav_product_clssifys' => $NavProductClssifys]);
    }
}

