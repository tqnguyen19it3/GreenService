<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\ManageBannerModels;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ManageBannerController extends Controller
{
    //hàm kiểm tra đăng nhập
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      
            return Redirect::to('/admin-dashboard');            
        }else return Redirect::to('/login')->send();   
    }

    public function add_slider(){
    	$this->AuthLogin();
    	return view('admin.banner.add_slider');
    }

    public function save_slider(Request $request){
    	$this->AuthLogin();

    	$data = $request->all();
    	$post_slider = new ManageBannerModels();
    	$post_slider->slider_name = $data['sliderName'];
    	$post_slider->slider_status = $data['sliderStatus'];

    	$get_image = $request->file('sliderImg');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image = $name_image.'('.rand(0,99).')'.'.'.$get_image->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image->move('./public/uploads/PostsBannerImg', $new_custom_name_image);
            $post_slider->slider_img = $new_custom_name_image;
            $post_slider->save();
            Session::put('message', 'Đã thêm mới slider');
            return redirect()->back();
        }else{
        	Session::put('messageError','Làm ơn hãy thêm hình ảnh slider!');
        	return redirect()->back();
        }
    }
    public function manage_slider(){
    	$this->AuthLogin();
    	$all_slider = ManageBannerModels::orderBy('slider_id','DESC')->get();
    	return view('admin.banner.manage_slider')->with(compact('all_slider'));
    }

    public function unactive_slider($slider_id){
        $this->AuthLogin();
    	DB::table('tbl_manage_slider')->where('slider_id', $slider_id)->update(['slider_status'=>0]);
    	Session::put('message', 'Slider đã bị ẩn ở trang chính!');
    	return Redirect::to('/manage-slider');
    }
    public function active_slider($slider_id){
        $this->AuthLogin();
    	DB::table('tbl_manage_slider')->where('slider_id', $slider_id)->update(['slider_status'=>1]);
    	Session::put('message', 'Slider đã được cho hiển thị ở trang chính!');
    	return Redirect::to('/manage-slider');
    }

    public function delete_slider($slider_id){

    	$posts_slider = ManageBannerModels::find($slider_id);
    	$posts_slider_img = $posts_slider->slider_img;

    	//===CHỖ NÀY ĐỂ XÓA LUÔN ẢNH TRONG FOLDER KHI XÓA BÀI VIẾT===//

    	if($posts_slider_img){
    		$path = './public/uploads/PostsBannerImg/'.$posts_slider_img;
    		unlink($path);
    	}

    	$posts_slider->delete();
    	
    	Session::put('message', 'Đã xóa slider.');
    	return redirect()->back();
    }
}
