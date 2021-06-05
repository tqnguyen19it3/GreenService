<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\PostAboutUsModels;
use App\Models\PostNewsModels;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();
class PostAboutUsController extends Controller
{
    //hàm kiểm tra đăng nhập
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      
            return Redirect::to('/admin-dashboard');            
        }else return Redirect::to('/login')->send();   
    }

    public function file_browser(Request $request){
        
        $paths = glob(public_path('../public/uploads/PostsAboutUsImg/IMGckeditor/*'));
        $fileNames = array();
        foreach ($paths as $path) {
            array_push($fileNames, basename($path));
        }
        $data = array(
            'fileNames' =>  $fileNames
        );

        return view('admin.posts.ckeditorimg.file_browser')->with( $data);
    }

    public function add_posts_about_us(){
    	$this->AuthLogin();
    	return view('admin.posts.add_about_us_post');
    }

    public function save_posts_about_us(Request $request){
    	$this->AuthLogin();

    	$data = $request->all();
    	$post_about_us = new PostAboutUsModels();
    	$post_about_us->post_about_us_content = $data['about_us_post_content'];
    	$post_about_us->post_about_us_metakeyword = $data['about_us_post_metakeyword'];
    	$post_about_us->post_about_us_metadesc = $data['about_us_post_metadesc'];
    	$post_about_us->post_about_us_status = $data['about_us_post_status'];

    	$get_image = $request->file('about_us_post_img');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image = $name_image.'('.rand(0,99).')'.'.'.$get_image->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image->move('./public/uploads/PostsAboutUsImg', $new_custom_name_image);
            $post_about_us->post_about_us_img = $new_custom_name_image;
            $post_about_us->save();
            Session::put('message', 'Đã thêm bài viết giới thiệu');
            return redirect()->back();
        }else{
        	Session::put('messageError','Làm ơn hãy thêm hình ảnh vào bài viết!');
        	return redirect()->back();
        }
    }

    public function view_posts_about_us(){
        $this->AuthLogin();

        $all_posts_about_us = PostAboutUsModels::orderBy('post_about_us_id', 'DESC')->get();

    	return view('admin.posts.view_about_us_post')->with(compact('all_posts_about_us'));
    }

    public function edit_posts_about_us($post_about_us_id){
        $this->AuthLogin();

        $post_about_us = PostAboutUsModels::find($post_about_us_id);
        
        return view('admin.posts.edit_about_us_post')->with(compact('post_about_us'));
    }
    public function update_posts_about_us(Request $request, $post_about_us_id){

        $data = $request->all();
        $post_about_us = PostAboutUsModels::find($post_about_us_id);
        $post_about_us->post_about_us_content = $data['about_us_post_content'];
        $post_about_us->post_about_us_metadesc = $data['about_us_post_metadesc'];
        $post_about_us->post_about_us_metakeyword = $data['about_us_post_metakeyword'];
        $post_about_us->post_about_us_status = $data['about_us_post_status'];
        $get_image1 = $request->file('about_us_post_img');

        if($get_image1){
            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current(explode('.', $get_name_image1)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image1 = $name_image1.'('.rand(0,99).')'.'.'.$get_image1->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image1->move('./public/uploads/PostsAboutUsImg', $new_custom_name_image1);
            $post_about_us->post_about_us_img = $new_custom_name_image1;
            $post_about_us->save();
            Session::put('message', 'Đã cập nhật mới bài viết giới thiệu');
            return redirect('/view-posts-about-us');
        }else{

            $post_about_us->save();
            Session::put('message','Hình ảnh giới thiệu chưa được làm mới!');
            return redirect('/view-posts-about-us');
        }
    }

    public function delete_posts_about_us($post_about_us_id){

    	$posts_about_us = PostAboutUsModels::find($post_about_us_id);
    	$posts_about_us_img = $posts_about_us->post_about_us_img;

    	//===CHỖ NÀY ĐỂ XÓA LUÔN ẢNH TRONG FOLDER KHI XÓA BÀI VIẾT===//

    	if($posts_about_us_img){
    		$path = './public/uploads/PostsAboutUsImg/'.$posts_about_us_img;
    		unlink($path);
    	}

    	$posts_about_us->delete();
    	
    	Session::put('message', 'Đã xóa bài viết giới thiệu này.');
    	return redirect()->back();
    }

    public function ckeditor_image(Request $request){
        
        if($request->hasFile('upload')){

            $originName = $request->file('upload')->getClientOriginalName();

            $fileName =  pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move('./public/uploads/PostsAboutUsImg/IMGckeditor', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('./public/upload/PostsAboutUsImg/IMGckeditor/'.$fileName);
            $msg = 'Tải ảnh thành công';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url','$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;

        }
    }
}
