<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\PaginationServiceProvider;
use DB;
use App\Http\Requests;
use App\Models\CategoryNewsModels;
use App\Models\CategoryServiceModels;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryPostController extends Controller
{
    //
	public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      //có đăng nhập ms có admin_id
            return Redirect::to('/admin-dashboard');              //sẽ đá về đường dẫn dashboard trỏ đến hàm show_dashboard
        }else return Redirect::to('/login')->send();   //hàm kiểm tra đăng nhập
    }

    public function add_cate_posts(){
    	$this->AuthLogin();
    	return view('admin.category_posts.add_cate_posts');
    }

    public function save_cate_posts_news(Request $request){
    	$this->AuthLogin();

    	$data = $request->all();
    	$category_news = new CategoryNewsModels();
    	$category_news->cate_news_name = $data['news_name'];
    	$category_news->cate_news_slug = $data['news_slug'];
    	$category_news->cate_news_status = $data['news_status'];
    	$category_news->cate_news_desc = $data['news_desc'];
    	$category_news->save();

    	Session::put('message','Thêm danh mục tin tức thành công!');

    	return redirect()->back();
    }

    public function save_cate_posts_service(Request $request){
    	$this->AuthLogin();

    	$data = $request->all();
    	$category_service = new CategoryServiceModels();
    	$category_service->cate_service_name = $data['service_name'];
    	if (!function_exists('create_slug')) {
                                            function create_slug($string)
                                            {
                                                $search = array(
                                                    '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|ä)#',
                                                    '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
                                                    '#(ì|í|ị|ỉ|ĩ)#',
                                                    '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|ö)#',
                                                    '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|ü)#',
                                                    '#(ỳ|ý|ỵ|ỷ|ỹ)#',
                                                    '#(đ)#',
                                                    '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Ä)#',
                                                    '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
                                                    '#(Ì|Í|Ị|Ỉ|Ĩ)#',
                                                    '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ö)#',
                                                    '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|Ü)#',
                                                    '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
                                                    '#(Đ)#',
                                                    '#(ß)#',
                                                    "/[^a-zA-Z0-9\-\_]/",
                                                );
                                                $replace = array(
                                                    'a',
                                                    'e',
                                                    'i',
                                                    'o',
                                                    'u',
                                                    'y',
                                                    'd',
                                                    'A',
                                                    'E',
                                                    'I',
                                                    'O',
                                                    'U',
                                                    'Y',
                                                    'D',
                                                    'B',
                                                    '-',
                                                );
                                                $string = preg_replace($search, $replace, $string);
                                                $string = preg_replace('/(-)+/', '-', $string);
                                                $string = strtolower($string);
                                                return $string;
                                            }
                                        }
                                       $category_service->cate_service_slug = create_slug($data['service_name']);
    	// $category_service->cate_service_slug = $data['service_slug'];
    	$category_service->cate_service_status = $data['service_status'];
    	$category_service->cate_service_desc = $data['service_desc'];
    	$category_service->save();

    	Session::put('message','Thêm danh mục dịch vụ thành công!');

    	return redirect()->back();
    }

    public function all_cate_posts(){
        $this->AuthLogin();

        $category_news = CategoryNewsModels::orderBy('cate_news_id', 'DESC')->get();
        $category_service = CategoryServiceModels::orderBy('cate_service_id', 'DESC')->get();
    	
    	return view('admin.category_posts.all_cate_posts')->with(compact('category_news'))->with(compact('category_service'));
    }

    public function edit_cate_service($cate_service_id){
        $this->AuthLogin();

        $category_service = CategoryServiceModels::find($cate_service_id);
    	
    	return view('admin.category_posts.edit_cate_service')->with(compact('category_service'));
    }
    public function edit_cate_news($cate_news_id){
        $this->AuthLogin();

        $category_news = CategoryNewsModels::find($cate_news_id);
    	
    	return view('admin.category_posts.edit_cate_news')->with(compact('category_news'));
    }
    public function update_cate_posts_news(Request $request, $cate_news_id){

        $data = $request->all();
    	$category_news = CategoryNewsModels::find($cate_news_id);
    	$category_news->cate_news_name = $data['news_name'];
    	$category_news->cate_news_slug = $data['news_slug'];
    	$category_news->cate_news_status = $data['news_status'];
    	$category_news->cate_news_desc = $data['news_desc'];
    	$category_news->save();

    	Session::put('message','Đã cập nhật danh mục tin tức');

    	return redirect('/all-cate-posts');
    }
    public function update_cate_posts_service(Request $request, $cate_service_id){

        $data = $request->all();
    	$category_service = CategoryServiceModels::find($cate_service_id);
    	$category_service->cate_service_name = $data['service_name'];
    	$category_service->cate_service_slug = $data['service_slug'];
    	$category_service->cate_service_status = $data['service_status'];
    	$category_service->cate_service_desc = $data['service_desc'];
    	$category_service->save();

    	Session::put('message','Đã cập nhật danh mục dịch vụ');

    	return redirect('/all-cate-posts');
    }

    public function unactive_cate_posts_service($cate_service_id){
        $this->AuthLogin();
        DB::table('tbl_category_service')->where('cate_service_id', $cate_service_id)->update(['cate_service_status'=>0]);
        Session::put('message', 'Danh mục vừa bị ẩn!');
        return Redirect::to('/all-cate-posts');
    }
    public function active_cate_posts_service($cate_service_id){
        $this->AuthLogin();
        DB::table('tbl_category_service')->where('cate_service_id', $cate_service_id)->update(['cate_service_status'=>1]);
        Session::put('message', 'Danh mục vừa được hiển thị!');
        return Redirect::to('/all-cate-posts');
    }

    public function delete_cate_service($cate_service_id){

    	$category_service = CategoryServiceModels::find($cate_service_id);
    	$category_service->delete();
    	
    	Session::put('message', 'Đã xóa danh mục dịch vụ');
    	return redirect()->back();
    }
    public function delete_cate_news($cate_news_id){

    	$category_news = CategoryNewsModels::find($cate_news_id);
    	$category_news->delete();
    	
    	Session::put('message', 'Đã xóa danh mục tin tức');
    	return redirect()->back();
    }
}
