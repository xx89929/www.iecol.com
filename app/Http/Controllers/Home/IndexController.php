<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Pclassify;

class IndexController extends Controller{


    public function index(){
        return view('home.pages.index',['title_item' => 'Index']);
    }

    public function nav_pro_class(){
        $res = Pclassify::get();
        return $res;
    }
}