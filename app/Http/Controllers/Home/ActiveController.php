<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actives;
use Illuminate\Http\Request;

class ActiveController extends Controller{

    public function index(Request $request){
        $active_list = Actives::orderBy('id','desc')->select('id','act_title')->take(10)->get();
        $id = Actives::max('id');
        if($request->input('act_id')){
            $id = $request->input('act_id');
        }
        $res = Actives::find($id);
//        dd($res);exit;
        return view('home.pages.active',['title_item'=>'active','act_info' => $res,'active_list' => $active_list]);
    }
}
