<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pclassify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProClassifyController extends Controller
{
    public function index(){
        return view('admin.pro_class.index',['web_title' => '产品分类']);
    }

    public function get_pro_class(Request $request){
        $page = $request->input('page');
        $limit= $request->input('limit');
        $cout = Pclassify::count();
        $res = Pclassify::skip(($page-1)*$limit)->take(10)->get();
        foreach($res as $k => $v){
            $data['data'][$k]['id'] = $v->id;
            $data['data'][$k]['p_class_id'] = $v->p_class_id;
            $data['data'][$k]['pro_class_name'] = $v->pro_class_name;
            $data['data'][$k]['is_display'] = $v->is_display == 1 ? '显示' : '不显示';
        }
        $data['code'] = 0;
        $data['msg'] = '';
        $data['count'] = $cout;
//        $data['data'] = $res;
        return $data;
    }


    public function create(Request $request)
    {
        if($request->input('product_class')){
            $data = $request->input('product_class');
//            return $request->input();exit;
            $pro_class = new Pclassify();
            $pro_class->pro_class_name = $data['pro_class_name'];
            $pro_class->is_display = $data['is_display'];
            $res = $pro_class->save();
            if($res == false){
                return response()->json(['msg' => '添加失败']);
            }else{
                return response()->json(['msg' => '添加成功']);
            }
        }
        return view('admin/pro_class/add',['web_title' => '添加产品分类']);
    }


    public function update(Request $request , $id){
        $update = Pclassify::find($id);

        if($request['product_class']){
            $data = $request['product_class'];
            $update->pro_class_name = $data['pro_class_name'];
            $update->is_display = $data['is_display'];
            $res = $update->save();
            if($res == false){
                return response()->json(['msg' => '更新失败']);
            }else{
                return response()->json(['msg' => '更新成功']);
            }
//            if($res == false){
//                return redirect('admin/business/index')->with('error','更新失败');
//            }else{
//                return redirect('admin/business/index')->with('success','更新成功');
//            }
        }
        return view('admin/pro_class/edit',['web_title' => '修改','edit' => $update]);
    }

    public function del($id){
        $id = explode(",",$id);
        $res = Pclassify::destroy($id);
        if($res == false){
            return response()->json(['msg' => '删除失败']);
        }else{
            return response()->json(['msg' => '删除成功']);
        }
    }
}
