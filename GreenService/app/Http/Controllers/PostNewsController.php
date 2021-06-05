<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\CategoryServiceModels;
use App\Models\CategoryNewsModels;
use App\Models\PostServiceModels;
use App\Models\PostNewsModels;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();
class PostNewsController extends Controller
{
    //hàm kiểm tra đăng nhập
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      
            return Redirect::to('/admin-dashboard');            
        }else return Redirect::to('/login')->send();   
    }

    public function file_browser2(Request $request){
        
        $paths = glob(public_path('../public/uploads/PostsNewsImg/IMGckeditor/*'));
        $fileNames = array();
        foreach ($paths as $path) {
            array_push($fileNames, basename($path));
        }
        $data = array(
            'fileNames' =>  $fileNames
        );
        return view('admin.posts.ckeditorimg.file_browser2')->with( $data);
    }

    public function add_posts_news(){
    	$this->AuthLogin();

    	return view('admin.posts.add_news_post');
    }

    public function save_posts_news(Request $request){
    	$this->AuthLogin();

    	$data = $request->all();
    	$post_news = new PostNewsModels();
        $post_news->post_news_title = $data['news_post_title'];
        $post_news->post_news_slug = $data['news_post_slug'];
    	$post_news->post_news_desc = $data['news_post_desc'];
    	$post_news->post_news_content = $data['news_post_content'];
    	$post_news->post_news_metakeyword = $data['news_post_metakeyword'];
    	$post_news->post_news_status = $data['news_post_status'];

    	$get_image = $request->file('news_post_img');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image = $name_image.'('.rand(0,99).')'.'.'.$get_image->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image->move('./public/uploads/PostsNewsImg', $new_custom_name_image);
            $post_news->post_news_img = $new_custom_name_image;
            $post_news->save();
            Session::put('message', 'Đã thêm bài viết cho tin tức này');
            return redirect()->back();
        }else{
        	Session::put('messageError','Làm ơn hãy thêm hình ảnh vào bài viết!');
        	return redirect()->back();
        }
    }

    public function all_posts_news($id_pn){
        $this->AuthLogin();

        $num_start = $id_pn;

        $countrow = PostNewsModels::count();

        $currentPage = $num_start ? $num_start : 1;

        $pageShow = 4;

        $countPage = ceil($countrow / $pageShow);

        if ($currentPage > $countPage) {
            $currentPage = $countPage;
        }
        if ($currentPage < 1) {
            $currentPage = 1;
        }

        $pageStart = ($currentPage - 1) * $pageShow;

        $all_posts_news = PostNewsModels::orderBy('post_news_id', 'DESC')->offset($pageStart)->limit($pageShow)->get();

    	return view('admin.posts.all_news_post')->with(compact('all_posts_news'))->with('currentPage', $currentPage)->with('countPage', $countPage);
    }

    public function edit_posts_news($post_news_id){
        $this->AuthLogin();

        $post_news = PostNewsModels::find($post_news_id);
        
        return view('admin.posts.edit_news_post')->with(compact('post_news'));
    }
    public function update_posts_news(Request $request, $post_news_id){

        $data = $request->all();
        $post_news = PostNewsModels::find($post_news_id);
        $post_news->post_news_title = $data['news_post_title'];
        $post_news->post_news_slug = $data['news_post_slug'];
        $post_news->post_news_content = $data['news_post_content'];
        $post_news->post_news_desc = $data['news_post_desc'];
        $post_news->post_news_metakeyword = $data['news_post_metakeyword'];
        $post_news->post_news_status = $data['news_post_status'];
        $get_image1 = $request->file('news_post_img');

        if($get_image1){
            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current(explode('.', $get_name_image1)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image1 = $name_image1.'('.rand(0,99).')'.'.'.$get_image1->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image1->move('./public/uploads/PostsNewsImg', $new_custom_name_image1);
            $post_news->post_news_img = $new_custom_name_image1;
            $post_news->save();
            Session::put('message', 'Đã cập nhật mới bài viết tin tức');
            $num_start = 1;

            $countrow = PostNewsModels::count();

            $currentPage = $num_start ? $num_start : 1;

            $pageShow = 4;

            $countPage = ceil($countrow / $pageShow);

            if ($currentPage > $countPage) {
                $currentPage = $countPage;
            }
            if ($currentPage < 1) {
                $currentPage = 1;
            }

            $pageStart = ($currentPage - 1) * $pageShow;

            $all_posts_news = PostNewsModels::orderBy('post_news_id', 'DESC')->offset($pageStart)->limit($pageShow)->get();

            return view('admin.posts.all_news_post')->with(compact('all_posts_news'))->with('currentPage', $currentPage)->with('countPage', $countPage);
            // return redirect('/all-posts-news');
        }else{

            $post_news->save();
            Session::put('message','Hình ảnh tin tức chưa được làm mới!');
            $num_start = 1;

            $countrow = PostNewsModels::count();

            $currentPage = $num_start ? $num_start : 1;

            $pageShow = 4;

            $countPage = ceil($countrow / $pageShow);

            if ($currentPage > $countPage) {
                $currentPage = $countPage;
            }
            if ($currentPage < 1) {
                $currentPage = 1;
            }

            $pageStart = ($currentPage - 1) * $pageShow;

            $all_posts_news = PostNewsModels::orderBy('post_news_id', 'DESC')->offset($pageStart)->limit($pageShow)->get();

            return view('admin.posts.all_news_post')->with(compact('all_posts_news'))->with('currentPage', $currentPage)->with('countPage', $countPage);
            // return redirect('/all-posts-news');
        }
    }

    public function unactive_posts_news($post_news_id){
        $this->AuthLogin();
        DB::table('tbl_post_news')->where('post_news_id', $post_news_id)->update(['post_news_status'=>0]);
        Session::put('message', 'Bài viết tin tức vừa bị ẩn!');
        $num_start = 1;

        $countrow = PostNewsModels::count();

        $currentPage = $num_start ? $num_start : 1;

        $pageShow = 4;

        $countPage = ceil($countrow / $pageShow);

        if ($currentPage > $countPage) {
            $currentPage = $countPage;
        }
        if ($currentPage < 1) {
            $currentPage = 1;
        }

        $pageStart = ($currentPage - 1) * $pageShow;

        $all_posts_news = PostNewsModels::orderBy('post_news_id', 'DESC')->offset($pageStart)->limit($pageShow)->get();

        return view('admin.posts.all_news_post')->with(compact('all_posts_news'))->with('currentPage', $currentPage)->with('countPage', $countPage);
        // return Redirect::to('/all-posts-news');
    }
    public function active_posts_news($post_news_id){
        $this->AuthLogin();
        DB::table('tbl_post_news')->where('post_news_id', $post_news_id)->update(['post_news_status'=>1]);
        Session::put('message', 'Bài viết tin tức vừa được hiển thị!');
        $num_start = 1;

        $countrow = PostNewsModels::count();

        $currentPage = $num_start ? $num_start : 1;

        $pageShow = 4;

        $countPage = ceil($countrow / $pageShow);

        if ($currentPage > $countPage) {
            $currentPage = $countPage;
        }
        if ($currentPage < 1) {
            $currentPage = 1;
        }

        $pageStart = ($currentPage - 1) * $pageShow;

        $all_posts_news = PostNewsModels::orderBy('post_news_id', 'DESC')->offset($pageStart)->limit($pageShow)->get();

        return view('admin.posts.all_news_post')->with(compact('all_posts_news'))->with('currentPage', $currentPage)->with('countPage', $countPage);
        // return Redirect::to('/all-posts-news');
    }

    public function delete_posts_news($post_news_id){

    	$posts_news = PostNewsModels::find($post_news_id);
    	$posts_news_img = $posts_news->post_news_img;

    	//===CHỖ NÀY ĐỂ XÓA LUÔN ẢNH TRONG FOLDER KHI XÓA BÀI VIẾT===//

    	if($posts_news_img){
    		$path = './public/uploads/PostsNewsImg/'.$posts_news_img;
    		unlink($path);
    	}

    	$posts_news->delete();
    	
    	Session::put('message', 'Đã xóa bài viết tin tức này.');
    	return redirect()->back();
    }

    public function view_posts_news($post_news_id){
        $this->AuthLogin();

        $view_posts_news = PostNewsModels::find($post_news_id);
    	return view('admin.posts.view_news_post')->with(compact('view_posts_news'));
    }

    public function ckeditor_image2(Request $request){
        
        if($request->hasFile('upload')){

            $originName = $request->file('upload')->getClientOriginalName();

            $fileName =  pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move('./public/uploads/PostsNewsImg/IMGckeditor', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('./public/upload/PostsNewsImg/IMGckeditor/'.$fileName);
            $msg = 'Tải ảnh thành công';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url','$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;

        }
    }
}  
