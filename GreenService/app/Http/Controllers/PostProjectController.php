<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\PostProjectModels;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class PostProjectController extends Controller
{
    //hàm kiểm tra đăng nhập
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      
            return Redirect::to('/admin-dashboard');            
        }else return Redirect::to('/login')->send();   
    }

    public function file_browser3(Request $request){
        
        $paths = glob(public_path('../public/uploads/PostsProjectImg/IMGckeditor/*'));
        $fileNames = array();
        foreach ($paths as $path) {
            array_push($fileNames, basename($path));
        }
        $data = array(
            'fileNames' =>  $fileNames
        );
        return view('admin.posts.ckeditorimg.file_browser3')->with( $data);
    }

    public function add_posts_project(){
    	$this->AuthLogin();
    	return view('admin.posts.add_project_post');
    }

    public function save_posts_project(Request $request){
    	$this->AuthLogin();

    	$data = $request->all();
    	$post_project = new PostProjectModels();
    	$post_project->post_project_title = $data['project_post_title'];
    	$post_project->post_project_slug = $data['project_post_slug'];
    	$post_project->post_project_desc = $data['project_post_desc'];
    	$post_project->post_project_metakeyword = $data['project_post_metakeyword'];
    	$post_project->post_project_content = $data['project_post_content'];
    	$post_project->post_project_status = $data['project_post_status'];

        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
        $post_project->post_project_date = $today;

    	$get_image = $request->file('project_post_img');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_custom_name_image = $name_image.'('.rand(0,99).trim(date('Y-m-d', time())).rand(0,99).')'.'.'.$get_image->getClientOriginalExtension();  
            $get_image->move('./public/uploads/PostsProjectImg', $new_custom_name_image);
            $post_project->post_project_img = $new_custom_name_image;
            $post_project->save();
            Session::put('message', 'Đã thêm mới bài viết dự án');
            return redirect()->back();
        }else{
        	Session::put('messageError','Làm ơn hãy thêm hình ảnh vào bài viết dự án!');
        	return redirect()->back();
        }
    }
 
    public function all_posts_project(){
        $this->AuthLogin();

        $all_posts_project = PostProjectModels::orderBy('post_project_id', 'DESC')->paginate(4);

        return view('admin.posts.all_project_post')->with(compact('all_posts_project'));
    }

    public function edit_posts_project($post_project_id){
        $this->AuthLogin();

        $post_project = PostProjectModels::find($post_project_id);
    	
    	return view('admin.posts.edit_project_post')->with(compact('post_project'));
    }

    public function update_posts_project(Request $request, $post_project_id){

        $data = $request->all();
    	$post_project = PostProjectModels::find($post_project_id);
    	$post_project->post_project_title = $data['projectpostTitle'];
    	$post_project->post_project_slug = $data['projectpostSlug'];
    	$post_project->post_project_metakeyword = $data['projectpostMetakeyword'];
    	$post_project->post_project_content = $data['projectpostContent'];
    	$post_project->post_project_status = $data['projectpostStatus'];
    	$get_image1 = $request->file('projectpostImg');

        if($get_image1){
            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current(explode('.', $get_name_image1));
            $new_custom_name_image1 = $name_image1.'('.rand(0,99).trim(date('Y-m-d', time())).rand(0,99).')'.'.'.$get_image1->getClientOriginalExtension();  
            $get_image1->move('./public/uploads/PostsProjectImg', $new_custom_name_image1);
            $post_project->post_project_img = $new_custom_name_image1;
            $post_project->save();
            Session::put('message', 'Đã cập nhật mới bài viết dự án');
            return Redirect::to('/all-posts-project');

        }else{

	        $post_project->save();
	    	Session::put('message','Hình ảnh cho bài viết dự án chưa được làm mới!');
            return Redirect::to('/all-posts-project');
        }
    }

    public function unactive_posts_project($post_project_id){
        $this->AuthLogin();
        DB::table('tbl_post_project')->where('post_project_id', $post_project_id)->update(['post_project_status'=>0]);
        Session::put('message', 'Bài viết dự án vừa bị ẩn!');
        return Redirect::to('/all-posts-project');

    }
    public function active_posts_project($post_project_id){
        $this->AuthLogin();
        DB::table('tbl_post_project')->where('post_project_id', $post_project_id)->update(['post_project_status'=>1]);
        Session::put('message', 'Bài viết dự án vừa được hiển thị!');
        return Redirect::to('/all-posts-project');
    }

    public function delete_posts_project($post_project_id){

    	$posts_project = PostProjectModels::find($post_project_id);
    	$posts_project_img = $posts_project->post_project_img;

    	//===CHỖ NÀY ĐỂ XÓA LUÔN ẢNH TRONG FOLDER KHI XÓA BÀI VIẾT===//

    	if($posts_project_img){
    		$path = './public/uploads/PostsProjectImg/'.$posts_project_img;
    		unlink($path);
    	}

    	$posts_project->delete();
    	
    	Session::put('message', 'Đã xóa bài viết dự án này.');
    	return redirect()->back();
    }

    public function view_posts_project($post_project_id){
        $this->AuthLogin();

        $view_posts_project = PostProjectModels::find($post_project_id);
        return view('admin.posts.view_project_post')->with(compact('view_posts_project'));
    }

    public function ckeditor_image3(Request $request){
        
        if($request->hasFile('upload')){

            $originName = $request->file('upload')->getClientOriginalName();

            $fileName =  pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move('./public/uploads/PostsProjectImg/IMGckeditor', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('./public/upload/PostsProjectImg/IMGckeditor/'.$fileName);
            $msg = 'Tải ảnh thành công';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url','$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;

        }
    }
}
