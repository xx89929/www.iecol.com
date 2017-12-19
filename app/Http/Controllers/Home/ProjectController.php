<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Pclassify;
use App\Models\Product;
use Illuminate\Http\Request;

class ProjectController extends Controller{

    public function index(Request $request){
        $NavProductClssifys = Pclassify::get();
        if($request->has('id')) {
            $id = $request->input('id');
            $res = Product::with('pclass')->find($id);
//            dd($res->product_en_name);exit;
//            foreach($res as $k => $v){
//                $test[$k]['en_name'] = $v->product_en_name;
//                $data[$k]['ch_name'] = $v->product_ch_name;
//                $data[$k]['param'] = $v->param;
//                $data[$k]['image'] = $v->pic_path;
//            }
//            dd($data);exit;
            return view('home.pages.project', ['title_item' => 'Project','vo' => $res,'nav_product_clssifys' => $NavProductClssifys]);
        }
        echo 333;exit;
    }
}
