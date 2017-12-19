<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Pclassify;

class IndexController extends Controller{


    public function index(){
        $NavProductClssifys = Pclassify::get();
        return view('home.pages.index',['title_item' => 'Index','nav_product_clssifys' => $NavProductClssifys]);
    }
}