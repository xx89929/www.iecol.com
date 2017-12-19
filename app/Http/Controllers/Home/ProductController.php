<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{

    public function index(Request $request){
        if($request->has('class_key')){
            $product_classify = $request->input('class_key');
            $res = Product::select('id','product_ch_name','product_en_name','pic_path')->where('product_classify',$product_classify)->orderBy('id','desc')->paginate(12);
            return view('home.pages.product',['title_item'=>'Product','product_list' => $res,'classify_key' => $product_classify]);
        }else{
            $res = Product::select('id','product_ch_name','product_en_name','pic_path')->orderBy('id','desc')->paginate(12);
            return view('home.pages.product',['title_item'=>'Product','product_list' => $res]);
        }
    }

    public function search_proudct(Request $request){
        if($request->has('worlds_key') && $request->input('worlds_key') != ''){
            $worlds_key = $request->input('worlds_key');
            $res = Product::select('id','product_ch_name','product_en_name','pic_path')->where('product_en_name','like','%'.$worlds_key.'%')->orWhere('product_ch_name','like','%'.$worlds_key.'%')->orderBy('id','desc')->paginate(12);
            return view('home.pages.product',['title_item'=>'Product','product_list' => $res,'worlds_key' => $worlds_key]);
        }else{
            return back();
        }
    }
}
