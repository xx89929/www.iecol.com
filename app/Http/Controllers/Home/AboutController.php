<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Pclassify;

class AboutController extends Controller{

    public function index(){
        $NavProductClssifys = Pclassify::get();
        return view('home.pages.about',['title_item'=>'About','nav_product_clssifys' => $NavProductClssifys]);
    }
}
