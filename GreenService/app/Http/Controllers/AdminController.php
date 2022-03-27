<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\PostProjectModels;
use App\Models\PostServiceModels;
use App\Models\PostNewsModels;
use App\Models\ManageBannerModels;
session_start();

class AdminController extends Controller
{
    //

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      //có đăng nhập ms có admin_id
            return Redirect::to('/admin-dashboard');              //sẽ đá về đường dẫn dashboard trỏ đến hàm show_dashboard
        }else return Redirect::to('/login')->send();   //hàm kiểm tra đăng nhập
    }

    public function register(){
    	return view('admin_register');
    }

    public function admin_register(Request $request){
    	$data = array();
		$data['admin_email'] = $request->admin_email;
		$data['admin_name'] = $request->admin_name;
		$data['admin_phone'] = $request->admin_phonenumber;
		$data['admin_password'] = md5($request->admin_password);
        $data['admin_position'] = $request->admin_position;

		$admin_id = DB::table('tbl_admin')->insertGetId($data);

		return Redirect::to('/login');
    }

    public function login(){
    	return view('admin_login');
    }
    
    public function admin_login(Request $request){
    	$admin_email = $request->adminEmail;
    	$admin_password = md5($request->adminPassword);

    	$result = DB::table('tbl_admin')->WHERE('admin_email',$admin_email)->WHERE('admin_password',$admin_password)->first();
    	if($result){
    		Session::put('admin_name', $result->admin_name);
    		Session::put('admin_id', $result->admin_id);
    		return Redirect::to('/admin-dashboard');
    	}else{
    		Session::put('message', 'Tài Khoản hoặc mật khẩu không hợp lệ');
    		return Redirect::to('/login');
    	}
    }

    public function admin_dashboard(Request $request){
        $this->AuthLogin();

        //total
        $post_service_donut = PostServiceModels::all()->count();
        $post_news_donut = PostNewsModels::all()->count();
        $post_project_donut = PostProjectModels::all()->count();
        $banner_slider_donut = ManageBannerModels::all()->count();

        $post_service_views = PostServiceModels::orderBy('post_service_views', 'DESC')->take(20)->get();
        $post_news_views = PostNewsModels::orderBy('post_news_views', 'DESC')->take(20)->get();
        $post_project_views = PostProjectModels::orderBy('post_project_views', 'DESC')->take(20)->get();

    	return view('admin.admin_dashboard')->with(compact('post_service_donut', 'post_news_donut', 'post_project_donut', 'banner_slider_donut','post_service_views','post_news_views','post_project_views'));
    }

    public function admin_logout(){
        $this->AuthLogin();
    	Session::put('admin_name', null);
    	Session::put('admin_id', null);
    	return Redirect::to('/login');
    }
}
