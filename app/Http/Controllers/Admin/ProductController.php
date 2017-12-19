<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pclassify;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.index',['web_title' => '产品列表']);
    }


    public function get_product(Request $request){
        $page = $request->input('page');
        $limit= $request->input('limit');
        $cout = Product::count();
        $res = Product::with('pclass')->skip(($page-1)*$limit)->take(10)->get();
        foreach($res as $k => $v){
            $data['data'][$k]['id'] = $v->id;
            $data['data'][$k]['product_en_name'] = $v->product_en_name;
            $data['data'][$k]['product_ch_name'] = $v->product_ch_name;
            $data['data'][$k]['product_param'] = $v->product_param;
            $data['data'][$k]['created_at'] = $v->created_at->format('Y-m-d H:i:s');
            $data['data'][$k]['updated_at'] = $v->updated_at->format('Y-m-d H:i:s');
            $data['data'][$k]['product_classify'] = $v->pclass->pro_class_name;
        }
        $data['code'] = 0;
        $data['msg'] = '';
        $data['count'] = $cout;
//        $data['data'] = $res;
        return $data;
    }

    public function create(Request $request)
    {
        if($request->input('product')){
            $data = $request->input('product');
            $product = new Product();
            $product->product_en_name = $data['product_en_name'];
            $product->product_ch_name = $data['product_ch_name'];
            $product->product_param = $data['product_param'];
            $product->product_classify = $data['product_classify'];
            if(!empty($data['product_file'])){
                $product->pic_path =  $data['product_file'];
            }
            $res = $product->save();
            if($res == false){
                return response()->json(['msg' => '添加失败']);
            }else{
                return response()->json(['msg' => '添加成功']);
            }
        }
        $Pro_class = Pclassify::where('is_display',1)->get();
        return view('admin/product/add',['web_title' => '添加产品','pro_class_list' => $Pro_class]);
    }


    public function update(Request $request , $id){
        $update = Product::find($id);
        if($request['product']){
            $data = $request['product'];
            $update->product_en_name = $data['product_en_name'];
            $update->product_ch_name = $data['product_ch_name'];
            $update->product_param = $data['product_param'];
            $update->product_classify = $data['product_classify'];
            $update->pic_path = $data['product_file'];
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
        $Pro_class = Pclassify::where('is_display',1)->get();
        return view('admin/product/edit',['web_title' => '修改','edit' => $update,'pro_class_list' => $Pro_class]);
    }

    public function put_files(Request $request){
        if($request->hasFile('product_file')){
            $file_path = Storage::put('public/product_file',$request->file('product_file'));
            $count=strpos($file_path,"public/");
            $pic_path=substr_replace($file_path,"storage/",$count,7);
            $data['code'] = 0;
            $data['msg'] = '';
            $data['data'] = $pic_path;
            return response($data, 200)
                ->header('Content-Type', 'text/html');
        }else{

            if($request->file()){
                $file_path = Storage::put('public/layedit_images',$request->file('file'));
                $count = strpos($file_path,"public/");
                $pic_path = substr_replace($file_path,"storage/",$count,7);
                $files_data['msg'] = '成功';
                $files_data['code'] = 0;
                $files_data['data']['src'] = url($pic_path);
                $files_data['data']['title'] = 'test';
                return response($files_data, 200)
                    ->header('Content-Type', 'text/html');
            }else{
                $files_data['msg'] = '失败';
                $files_data['code'] = 1;
                $files_data['data']['src'] = 'test_src';
                $files_data['data']['title'] = 'test_title';
                return $files_data;
            }
        }
    }


    /**
     * @param Request $request
     * 删除
     */
    public function del($id){
        $id = explode(",",$id);
        $res = Product::destroy($id);
        if($res == false){
            return response()->json(['msg' => '删除失败']);
        }else{
            return response()->json(['msg' => '删除成功']);
        }
    }
}
