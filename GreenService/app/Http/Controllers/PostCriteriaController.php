<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\PostCriteriaModels;
use Session;
use Illuminate\Support\Facades\Redirect;

class PostCriteriaController extends Controller
{
    //hàm kiểm tra đăng nhập
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      
            return Redirect::to('/admin-dashboard');            
        }else return Redirect::to('/login')->send();   
    }

    public function file_browser4(Request $request){
        
        $paths = glob(public_path('../public/uploads/PostsCriteriaImg/IMGckeditor/*'));
        $fileNames = array();
        foreach ($paths as $path) {
            array_push($fileNames, basename($path));
        }
        $data = array(
            'fileNames' =>  $fileNames
        );
        return view('admin.posts.ckeditorimg.file_browser4')->with( $data);
    }

    public function add_posts_criteria(){
    	$this->AuthLogin();
    	return view('admin.posts.add_criteria_post');
    }

    public function save_posts_criteria(Request $request){
    	$this->AuthLogin();

    	$data = $request->all();
    	$post_criteria = new PostCriteriaModels();
    	$post_criteria->post_criteria_content = $data['criteria_post_content'];
    	$post_criteria->post_criteria_status = $data['criteria_post_status'];

    	$get_image = $request->file('criteria_post_img');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image = $name_image.'('.rand(0,99).')'.'.'.$get_image->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image->move('./public/uploads/PostsCriteriaImg', $new_custom_name_image);
            $post_criteria->post_criteria_img = $new_custom_name_image;
            $post_criteria->save();
            Session::put('message', 'Đã thêm mới kinh nghiệm năng lực làm việc');
            return redirect()->back();
        }else{
        	Session::put('messageError','Làm ơn hãy thêm hình ảnh vào kinh nghiệm năng lực làm việc!');
        	return redirect()->back();
        }
    }

    public function all_posts_criteria(){
        $this->AuthLogin();

        $all_posts_criteria = PostCriteriaModels::orderBy('post_criteria_id', 'DESC')->get();
    	
    	return view('admin.posts.all_criteria_post')->with(compact('all_posts_criteria'));
    }

    public function edit_posts_criteria($post_criteria_id){
        $this->AuthLogin();

        $post_criteria = PostCriteriaModels::find($post_criteria_id);
    	
    	return view('admin.posts.edit_criteria_post')->with(compact('post_criteria'));
    }
    public function update_posts_criteria(Request $request, $post_criteria_id){

        $data = $request->all();
    	$post_criteria = PostCriteriaModels::find($post_criteria_id);
    	$post_criteria->post_criteria_content = $data['criteria_post_content'];
    	$post_criteria->post_criteria_status = $data['criteria_post_status'];
    	$get_image1 = $request->file('criteria_post_img');

        if($get_image1){
            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current(explode('.', $get_name_image1)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image1 = $name_image1.'('.rand(0,99).')'.'.'.$get_image1->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image1->move('./public/uploads/PostsCriteriaImg', $new_custom_name_image1);
            $post_criteria->post_criteria_img = $new_custom_name_image1;
            $post_criteria->save();
            Session::put('message', 'Đã cập nhật mới kinh nghiệm năng lực làm việc');
            return redirect('/all-posts-criteria');
        }else{

	        $post_criteria->save();
	    	Session::put('message','Hình ảnh kinh nghiệm năng lực chưa được làm mới!');
	    	return redirect('/all-posts-criteria');
	    }
    }

    public function unactive_posts_criteria($post_criteria_id){
        $this->AuthLogin();
        DB::table('tbl_post_criteria')->where('post_criteria_id', $post_criteria_id)->update(['post_criteria_status'=>0]);
        Session::put('message', 'Bài viết kinh nghiệm năng lực làm việc vừa bị ẩn!');
        return Redirect::to('/all-posts-criteria');
    }
    public function active_posts_criteria($post_criteria_id){
        $this->AuthLogin();
        DB::table('tbl_post_criteria')->where('post_criteria_id', $post_criteria_id)->update(['post_criteria_status'=>1]);
        Session::put('message', 'Bài viết kinh nghiệm năng lực làm việc vừa được hiển thị!');
        return Redirect::to('/all-posts-criteria');
    }

    public function delete_posts_criteria($post_criteria_id){

    	$posts_criteria = PostCriteriaModels::find($post_criteria_id);
    	$posts_criteria_img = $posts_criteria->post_criteria_img;

    	//===CHỖ NÀY ĐỂ XÓA LUÔN ẢNH TRONG FOLDER KHI XÓA BÀI VIẾT===//

    	if($posts_criteria_img){
    		$path = './public/uploads/PostsCriteriaImg/'.$posts_criteria_img;
    		unlink($path);
    	}

    	$posts_criteria->delete();
    	
    	Session::put('message', 'Đã xóa kinh nghiệm năng lực làm việc.');
    	return redirect()->back();
    }

    public function ckeditor_image4(Request $request){
        
        if($request->hasFile('upload')){

            $originName = $request->file('upload')->getClientOriginalName();

            $fileName =  pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move('./public/uploads/PostsCriteriaImg/IMGckeditor', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('./public/upload/PostsCriteriaImg/IMGckeditor/'.$fileName);
            $msg = 'Tải ảnh thành công';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url','$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;

        }
    }
}
