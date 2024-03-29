<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\CategoryNewsModels;
use App\Models\CategoryServiceModels;
use App\Models\PostServiceModels;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
session_start();

class PostServiceController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      
            return Redirect::to('/admin-dashboard');            
        }else return Redirect::to('/login')->send();   
    }

    public function file_browser1(Request $request){
        
        $paths = glob(public_path('../public/uploads/PostsServiceImg/IMGckeditor/*'));
        $fileNames = array();
        foreach ($paths as $path) {
            array_push($fileNames, basename($path));
        }
        $data = array(
            'fileNames' =>  $fileNames
        );
        return view('admin.posts.ckeditorimg.file_browser1')->with( $data);
    }


    public function add_posts_service(){
    	$this->AuthLogin();

    	return view('admin.posts.add_service_post');
    }

    public function save_posts_service(Request $request){
    	$this->AuthLogin();

    	$data = $request->all();
    	$post_service = new PostServiceModels();
    	$post_service->post_service_title = $data['service_post_title'];
    	$post_service->post_service_slug = $data['service_post_slug'];
    	$post_service->post_service_desc = $data['service_post_desc'];
    	$post_service->post_service_content = $data['service_post_content'];
    	$post_service->post_service_metakeyword = $data['service_post_metakeyword'];
    	$post_service->post_service_status = $data['service_post_status'];

        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
        $post_service->post_service_date = $today;

    	$get_image = $request->file('service_post_img');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_custom_name_image = $name_image.'('.rand(0,99).trim(date('Y-m-d', time())).rand(0,99).')'.'.'.$get_image->getClientOriginalExtension();   
            $get_image->move('./public/uploads/PostsServiceImg', $new_custom_name_image);
            $post_service->post_service_img = $new_custom_name_image;
            $post_service->save();
            Session::put('message', 'Đã thêm bài viết cho dịch vụ này');
            return redirect()->back();
        }else{
        	Session::put('messageError','Làm ơn hãy thêm hình ảnh vào bài viết!');
        	return redirect()->back();
        }
    }

    public function all_posts_service(){
        $this->AuthLogin();

        $all_posts_service = PostServiceModels::orderBy('post_service_id', 'DESC')->paginate(4);
    	
    	return view('admin.posts.all_service_post')->with(compact('all_posts_service'));
    }

    public function edit_posts_service($post_service_id){
        $this->AuthLogin();

        $post_service = PostServiceModels::find($post_service_id);
        
        return view('admin.posts.edit_service_post')->with(compact('post_service'));
    }

    public function update_posts_service(Request $request, $post_service_id){

        $data = $request->all();
        $post_service = PostServiceModels::find($post_service_id);
        $post_service->post_service_title = $data['servicepostTitle'];
        $post_service->post_service_slug = $data['servicepostSlug'];
        $post_service->post_service_desc = $data['servicepostDesc'];
        $post_service->post_service_content = $data['servicepostContent'];
        $post_service->post_service_metakeyword = $data['servicepostMetakeyword'];
        $post_service->post_service_status = $data['servicepostStatus'];
        $get_image1 = $request->file('servicepostImg');

        if($get_image1){
            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current(explode('.', $get_name_image1)); 
            $new_custom_name_image1 = $name_image1.'('.rand(0,99).trim(date('Y-m-d', time())).rand(0,99).')'.'.'.$get_image1->getClientOriginalExtension();  
            $get_image1->move('./public/uploads/PostsServiceImg', $new_custom_name_image1);
            $post_service->post_service_img = $new_custom_name_image1;
            $post_service->save();
            Session::put('message', 'Đã cập nhật mới bài viết dịch vụ');
            return Redirect::to('/all-posts-service');

        }else{

            $post_service->save();
            Session::put('message','Hình ảnh dịch vụ chưa được làm mới!');
            return Redirect::to('/all-posts-service');
        }
    }

    public function unactive_posts_service($post_service_id){
        $this->AuthLogin();
        DB::table('tbl_post_service')->where('post_service_id', $post_service_id)->update(['post_service_status'=>0]);
        Session::put('message', 'Bài viết dịch vụ vừa bị ẩn!');
        return Redirect::to('/all-posts-service');
    }

    public function active_posts_service($post_service_id){
        $this->AuthLogin();
        DB::table('tbl_post_service')->where('post_service_id', $post_service_id)->update(['post_service_status'=>1]);
        Session::put('message', 'Bài viết dịch vụ vừa được hiển thị!');
        return Redirect::to('/all-posts-service');
    }


    public function delete_posts_service($post_service_id){

    	$posts_service = PostServiceModels::find($post_service_id);
    	$posts_service_img = $posts_service->post_service_img;

    	//===CHỖ NÀY ĐỂ XÓA LUÔN ẢNH TRONG FOLDER KHI XÓA BÀI VIẾT===//

    	if($posts_service_img){
    		$path = './public/uploads/PostsServiceImg/'.$posts_service_img;
    		unlink($path);
    	}

    	$posts_service->delete();
    	
    	Session::put('message', 'Đã xóa bài viết dịch vụ này.');
    	return redirect()->back();
    }

    public function view_posts_service($post_service_id){
        $this->AuthLogin();

        $view_posts_service = PostServiceModels::find($post_service_id);
    	
    	return view('admin.posts.view_service_post')->with(compact('view_posts_service'));
    }

    public function ckeditor_image1(Request $request){
        
        if($request->hasFile('upload')){

            $originName = $request->file('upload')->getClientOriginalName();

            $fileName =  pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move('./public/uploads/PostsServiceImg/IMGckeditor', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('./public/upload/PostsServiceImg/IMGckeditor/'.$fileName);
            $msg = 'Tải ảnh thành công';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url','$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;

        }
    }
}
