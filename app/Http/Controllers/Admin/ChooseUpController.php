<?php

namespace App\Http\Controllers\Admin;


use App\ChooseUp;
use App\Http\Controllers\Controller;
use App\Models\Choose;
use Illuminate\Http\Request;


class ChooseUpController extends Controller
{
    public function index(){
        return view('admin/chooseup/index',['web_title' => '预约服务']);
    }


    public function get_chooseup(Request $request){
        if (!$request->has('page')) {
            return false;
        } else {
            $page = $request->input('page');
            $limit= $request->input('limit');
            $cout = Choose::count();
            $res = Choose::skip(($page-1)*$limit)->take(10)->get();
            $data['code'] = 0;
            $data['msg'] = '';
            $data['count'] = $cout;
            $data['data'] = $res->toArray();
            for ($i = 0; $i < count($data['data']); $i++) {
                $data['data'][$i]['created_at'] = date('Y-m-d H:i:s', $data['data'][$i]['created_at']);
                $data['data'][$i]['updated_at'] = date('Y-m-d H:i:s', $data['data'][$i]['updated_at']);
                $data['data'][$i]['services'] = json_decode($data['data'][$i]['services']);
                $data['data'][$i]['region'] = json_decode($data['data'][$i]['region']);
                $data['data'][$i]['request_type'] = json_decode($data['data'][$i]['request_type']);
            }
            return $data;
        }
    }


    public function create(Request $request)
    {

        if($request->input('choose')){

            $data = $request->input('choose');

            $data['services'] = implode(',',$data['services']);
            //$data['region'] = implode(',',$data['region']);

            $choose = new Choose();
            $choose->client_name = $data['client_name'];
            $choose->client_phone = $data['client_phone'];
            $choose->services = json_encode($data['services']);
            $choose->region= json_encode($data['region']);
            $choose->request_type= json_encode($data['request_type']);
            $res = $choose->save();
            if($res == false){
                return response()->json(['msg' => '添加失败']);
            }else{
                return response()->json(['msg' => '添加成功']);
            }
        }
        return view('admin/chooseup/add',['web_title' => '添加预约服务']);
    }


    public function update(Request $request , $id){
        $update = Choose::find($id);

        if($result = $request->input('choose')){
            $update->client_name = $result['client_name'];
            $update->client_phone = $result['client_phone'];
            $update->services = json_encode(implode(',',$result['services']));
            $update->region = json_encode($result['region']);
            $update->request_type = json_encode($result['request_type']);
            $res = $update->save();
            if($res == false){
                return response()->json(['msg' => '更新失败']);
            }else{
                return response()->json(['msg' => '更新成功']);
            }
        }

        $update->services = explode(',',json_decode($update->services));
        $update->region = json_decode($update->region);
        return view('admin/chooseup/edit',['web_title' => '修改','edit' => $update]);
    }


    public function del($id){
        $id = explode(",",$id);
        $res = Choose::destroy($id);
        if($res == false){
            return response()->json(['msg' => '删除失败']);
        }else{
            return response()->json(['msg' => '删除成功']);
        }
    }

}