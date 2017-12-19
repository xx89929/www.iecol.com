<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class AboutController extends Controller{

    public function index(){
        return view('home.pages.about',['title_item'=>'About']);
    }
}
