<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
    /**
     * 业务范围显示
     */
    public function index()
    {

        return view('admin/business/index',['web_title' => '业务范围管理']);
    }

    public function get_business(Request $request){
        if (!$request->has('page')) {
            return false;
        } else {
            $page = $request->input('page');
            $limit= $request->input('limit');
            $cout = Business::count();
            $res = Business::skip(($page-1)*$limit)->take(10)->get();
            $data['code'] = 0;
            $data['msg'] = '';
            $data['count'] = $cout;
            $data['data'] = $res->toArray();
            for ($i = 0; $i < count($data['data']); $i++) {
                $data['data'][$i]['created_at'] = date('Y-m-d H:i:s', $data['data'][$i]['created_at']);
                $data['data'][$i]['updated_at'] = date('Y-m-d H:i:s', $data['data'][$i]['updated_at']);
            }
            return $data;
        }
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 添加页面、存储
     */
    public function create(Request $request)
    {
        if($request->input('business')){

            $data = $request->input('business');
            $business = new Business();
            $business->bus_name = $data['name'];
            $business->bus_content = $data['content'];
            $res = $business->save();
            if($res == false){
                return response()->json(['msg' => '添加失败']);
            }else{
                return response()->json(['msg' => '添加成功']);
            }
        }
        return view('admin/business/add',['web_title' => '添加业务']);
    }

    /**
     * @param Request $request
     * @param $id
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 修改页面、更新
     */

    public function update(Request $request , $id){
        $update = Business::find($id);

        if($request['business']){
            $data = $request['business'];
            $update->bus_name = $data['name'];
            $update->bus_content = $data['content'];
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
        return view('admin/business/edit',['web_title' => '修改','edit' => $update]);
    }


    /**
     * @param Request $request
     * 删除
     */
    public function del($id){
        $id = explode(",",$id);
        $res = Business::destroy($id);
        if($res == false){
            return response()->json(['msg' => '删除失败']);
        }else{
            return response()->json(['msg' => '删除成功']);
        }
    }
}