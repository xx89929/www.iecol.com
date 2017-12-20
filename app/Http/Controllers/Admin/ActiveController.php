<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actives;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActiveController extends Controller
{
    public function index(){
        return view('admin.active.index',['web_title' => '活动列表']);
    }


    public function get_active(Request $request){
        $page = $request->input('page');
        $limit= $request->input('limit');
        $cout = Actives::count();
        $res = Actives::skip(($page-1)*$limit)->take(10)->select('id','act_title','created_at','updated_at')->get();
        foreach($res as $k => $v){
            $data['data'][$k]['id'] = $v->id;
            $data['data'][$k]['act_title'] = $v->act_title;
            $data['data'][$k]['act_content'] = $v->act_content;
            $data['data'][$k]['created_at'] = $v->created_at->format('Y-m-d H:i:s');
            $data['data'][$k]['updated_at'] = $v->updated_at->format('Y-m-d H:i:s');
        }
        $data['code'] = 0;
        $data['msg'] = '';
        $data['count'] = $cout;
//        $data['data'] = $res;
        return $data;
    }

    public function create(Request $request)
    {
        if($request->input('active')){
            $data = $request->input('active');
            $actives = new Actives();
            $actives->act_title = $data['act_title'];
            $actives->act_content = $data['act_content'];
            $res = $actives->save();
            if($res == false){
                return response()->json(['msg' => '添加失败']);
            }else{
                return response()->json(['msg' => '添加成功']);
            }
        }

        return view('admin/active/add',['web_title' => '添加活动']);
    }


    public function update(Request $request , $id){
        $update = Actives::find($id);
        if($request['active']){
            $data = $request['active'];
            $update->act_title = $data['act_title'];
            $update->act_content = $data['act_content'];
            $res = $update->save();
            if($res == false){
                return response()->json(['msg' => '更新失败']);
            }else{
                return response()->json(['msg' => '更新成功']);
            }

        }
        return view('admin/active/edit',['web_title' => '修改','edit' => $update]);
    }


    /**
     * @param Request $request
     * 删除
     */
    public function del($id){
        $id = explode(",",$id);
        $res = Actives::destroy($id);
        if($res == false){
            return response()->json(['msg' => '删除失败']);
        }else{
            return response()->json(['msg' => '删除成功']);
        }
    }
}
