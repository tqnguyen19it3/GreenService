<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\CategoryNewsModels;
use App\Models\CategoryServiceModels;
use App\Models\ManageBannerModels;
use App\Models\PostProjectModels;
use App\Models\PostServiceModels;
use App\Models\PostAboutUsModels;
use App\Models\PostCriteriaModels;
use App\Models\PostNewsModels;
session_start();

class HomeController extends Controller
{
    
    public function index(Request $request){

    	$slider = ManageBannerModels::orderBy('slider_id', 'DESC')->where('slider_status' , '1')->take(3)->get();
    	$all_posts_project = PostProjectModels::orderBy('post_project_id', 'DESC')->where('post_project_status' , '1')->get();
    	$all_criteria = PostCriteriaModels::orderBy('post_criteria_id', 'DESC')->take(3)->get();

        // SEO
        $meta_desc = "Công ty TNHH Dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp; trồng và duy trì cảnh quang,..Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp; Dịch vụ chăm sóc và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,...";
        $meta_keywords = "green service, dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy, dich vu ve sinh va cham soc cay xanh Khanh Huy, Công ty TNHH Khanh Huy, Cong ty TNHH Khanh Huy, Khánh Huy, Khanh Huy, Dịch vụ chăm sóc và duy trì cảnh quang, dich vu cham soc va duy tri canh quan";
        $meta_title = "Công ty TNHH Khánh Huy";
        $url_canonical = $request->url();
        // END SEO

    	return view('index')->with(compact('all_posts_project'))->with(compact('slider'))->with(compact('all_criteria'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }

    public function thong_tin_du_an(Request $request, $post_project_slug ,$post_project_id){

    	$post_project = PostProjectModels::find($post_project_id);

        // SEO
        $meta_desc = $post_project->post_project_metadesc;
        $meta_title = $post_project->post_project_title;
        $meta_keywords = $post_project->post_project_metakeyword;
        $url_canonical = $request->url();
        //END SEO

        $right_news = PostNewsModels::orderBy('post_news_id', 'DESC')->limit(5)->get();

    	return view('views_posts.home_post_project')->with(compact('post_project'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('right_news'));
    }

    public function gioi_thieu(Request $request){

  		$all_posts_about_us = PostAboutUsModels::orderBy('post_about_us_id', 'DESC')->where('post_about_us_status', '1')->first();
        // SEO
        $meta_desc = "Công ty TNHH Dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp; trồng và duy trì cảnh quang,..Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp; Dịch vụ chăm sóc và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,...";
        $meta_keywords = "Giới thiệu Công ty TNHH Khánh Huy, gioi thieu Khanh Huy, green service, dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy, dich vu ve sinh va cham soc cay xanh Khanh Huy, Công ty TNHH Khanh Huy, Cong ty TNHH Khanh Huy, Khánh Huy, Khanh Huy, Dịch vụ chăm sóc và duy trì cảnh quang, dich vu cham soc va duy tri canh quan";
        $meta_title = "Giới thiệu | Công ty TNHH Khánh Huy";
        $url_canonical = $request->url();
        //END SEO

        $right_news = PostNewsModels::orderBy('post_news_id', 'DESC')->limit(5)->get();

    	return view('views_posts.home_post_about_us')->with(compact('all_posts_about_us'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('right_news'));
    }

    public function kinh_nghiem_nang_luc(Request $request){

        $all_posts_criteria = PostCriteriaModels::orderBy('post_criteria_id', 'DESC')->where('post_criteria_status', '1')->first();
        // SEO
        $meta_desc = "Công ty TNHH Dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp; trồng và duy trì cảnh quang,..Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp; Dịch vụ chăm sóc và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,...";
        $meta_keywords = "Kinh nghiệm năng lực công ty TNHH Khánh Huy, hồ sơ năng lực công ty Khánh Huy, Giới thiệu Công ty TNHH Khánh Huy, gioi thieu Khanh Huy, dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy, dich vu ve sinh va cham soc cay xanh Khanh Huy,";
        $meta_title = "Kinh nghiệm năng lực | Công ty TNHH Khánh Huy";
        $url_canonical = $request->url();
        //END SEO

        $right_news = PostNewsModels::orderBy('post_news_id', 'DESC')->limit(5)->get();

        return view('views_posts.home_post_criteria')->with(compact('all_posts_criteria'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('right_news'));
    }

    public function list_news(Request $request){

		$all_posts_news = PostNewsModels::orderBy('post_news_id', 'DESC')->where('post_news_status' , '1')->get();

        // SEO
        $meta_desc = "Công ty TNHH Dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp; trồng và duy trì cảnh quang,..Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp; Dịch vụ chăm sóc và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,...";
        $meta_keywords = "Tin tức Công ty TNHH Khánh Huy, tin tuc Khanh Huy, tin tuc green service, dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy, dich vu ve sinh va cham soc cay xanh Khanh Huy, Công ty TNHH Khanh Huy, Cong ty TNHH Khanh Huy, Khánh Huy, Khanh Huy, Dịch vụ chăm sóc và duy trì cảnh quang, dich vu cham soc va duy tri canh quan";
        $meta_title = "Tin tức | Công ty TNHH Khánh Huy";
        $url_canonical = $request->url();
        //END SEO

        $right_news = PostNewsModels::orderBy('post_news_id', 'DESC')->limit(5)->get();

    	return view('views_posts.list_post_news')->with(compact('all_posts_news'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('right_news'));
    }

    public function tin_tuc(Request $request, $post_news_slug ,$post_news_id){

    	$post_news = PostNewsModels::find($post_news_id);

        // SEO
        $meta_desc = $post_news->post_news_desc;
        $meta_title = $post_news->post_news_title;
        $meta_keywords = $post_news->post_news_metakeyword;
        $url_canonical = $request->url();
        //END SEO
        $right_news = PostNewsModels::orderBy('post_news_id', 'DESC')->limit(5)->get();

    	return view('views_posts.home_post_news')->with(compact('post_news'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('right_news'));
    }

    public function list_service(Request $request){

        $all_posts_service = PostServiceModels::orderBy('post_service_id', 'DESC')->where('post_service_status' , '1')->get();

        // SEO
        $meta_desc = "Công ty TNHH Dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp; trồng và duy trì cảnh quang,..Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp; Dịch vụ chăm sóc và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,...";
        $meta_keywords = "Dịch vụ Công ty TNHH Khánh Huy, dich vu Khanh Huy, dich vu green service, dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy, dich vu ve sinh va cham soc cay xanh Khanh Huy, Dịch vụ chăm sóc và duy trì cảnh quang, dich vu cham soc va duy tri canh quan";
        $meta_title = "Dịch vụ | Công ty TNHH Khánh Huy";
        $url_canonical = $request->url();
        //END SEO

        $right_news = PostNewsModels::orderBy('post_news_id', 'DESC')->limit(5)->get();

        return view('views_posts.list_post_service')->with(compact('all_posts_service'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('right_news'));
    }

    public function dich_vu(Request $request, $post_service_slug ,$post_service_id){

        $post_service = PostServiceModels::find($post_service_id);

        // SEO
        $meta_desc = $post_service->post_service_desc;
        $meta_title = $post_service->post_service_title;
        $meta_keywords = $post_service->post_service_metakeyword;
        $url_canonical = $request->url();
        //END SEO

        $right_news = PostNewsModels::orderBy('post_news_id', 'DESC')->limit(5)->get();

        return view('views_posts.home_post_service')->with(compact('post_service'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('right_news'));
    }

    public function lien_he(Request $request) {

        // SEO
        $meta_desc = "Công ty TNHH Dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp; trồng và duy trì cảnh quang,..Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp; Dịch vụ chăm sóc và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,...";
        $meta_keywords = "Liên hệ công ty TNHH Khánh Huy, lien he cong ty Khanh Huy, Dịch vụ Công ty TNHH Khánh Huy, dich vu Khanh Huy, dich vu green service, dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy, dich vu ve sinh va cham soc cay xanh Khanh Huy, Dịch vụ chăm sóc và duy trì cảnh quang, dich vu cham soc va duy tri canh quan";
        $meta_title = "Liên hệ | Công ty TNHH Khánh Huy";
        $url_canonical = $request->url();
        //END SEO

        return view('views_posts.contact')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
}
