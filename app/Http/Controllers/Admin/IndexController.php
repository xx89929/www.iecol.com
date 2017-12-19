<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * 首页显示
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('admin/welcome/index',['UserName' => $user['name'],'web_title' => 'IECOL后台管理系统']);
    }


    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }else{
            die('500:非法操作');
        }
        return redirect()->route('login');
    }
}