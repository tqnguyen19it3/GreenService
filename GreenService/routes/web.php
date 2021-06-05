<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//===START ADMIN LOGIN AND REGISTER===//
Route::get('/login', 'App\Http\Controllers\AdminController@login');
Route::get('/register', 'App\Http\Controllers\AdminController@register');
Route::post('/admin-login', 'App\Http\Controllers\AdminController@admin_login');
Route::post('/admin-register', 'App\Http\Controllers\AdminController@admin_register');
Route::get('/admin-dashboard', 'App\Http\Controllers\AdminController@admin_dashboard');
Route::get('/admin-logout', 'App\Http\Controllers\AdminController@admin_logout');

Route::get('/profile-admin', 'App\Http\Controllers\AdminDashboardController@admin_profile');
Route::get('/admin-account/{admin_id}', 'App\Http\Controllers\AdminDashboardController@admin_account');
Route::post('/update-admin-account/{admin_id}', 'App\Http\Controllers\AdminDashboardController@update_admin_account');
//===END ADMIN LOGIN AND REGISTER===//


//===START ADMIN DASHBOARD CATEGORY===//
Route::get('/add-cate-posts', 'App\Http\Controllers\CategoryPostController@add_cate_posts');
Route::get('/all-cate-posts', 'App\Http\Controllers\CategoryPostController@all_cate_posts');
Route::post('/save-cate-posts-news', 'App\Http\Controllers\CategoryPostController@save_cate_posts_news');
Route::get('/edit-cate-news/{cate_news_id}', 'App\Http\Controllers\CategoryPostController@edit_cate_news');
Route::post('/update-cate-posts-news/{cate_news_id}', 'App\Http\Controllers\CategoryPostController@update_cate_posts_news');
Route::get('/delete-cate-news/{cate_news_id}', 'App\Http\Controllers\CategoryPostController@delete_cate_news');
Route::post('/save-cate-posts-service', 'App\Http\Controllers\CategoryPostController@save_cate_posts_service');
Route::get('/edit-cate-service/{cate_service_id}', 'App\Http\Controllers\CategoryPostController@edit_cate_service');
Route::post('/update-cate-posts-service/{cate_service_id}', 'App\Http\Controllers\CategoryPostController@update_cate_posts_service');
Route::get('/unactive-cate-posts-service/{cate_service_id}', 'App\Http\Controllers\CategoryPostController@unactive_cate_posts_service');
Route::get('/active-cate-posts-service/{cate_service_id}', 'App\Http\Controllers\CategoryPostController@active_cate_posts_service');
Route::get('/delete-cate-service/{cate_service_id}', 'App\Http\Controllers\CategoryPostController@delete_cate_service');
//===END ADMIN DASHBOARD CATEGORY===//



//===START ADMIN DASHBOARD POST===//

Route::post('/upload-ckeditor1', 'App\Http\Controllers\PostServiceController@ckeditor_image1');
Route::get('/file-browser1', 'App\Http\Controllers\PostServiceController@file_browser1');
Route::post('/upload-ckeditor2', 'App\Http\Controllers\PostNewsController@ckeditor_image2');
Route::get('/file-browser2', 'App\Http\Controllers\PostNewsController@file_browser2');
Route::post('/upload-ckeditor3', 'App\Http\Controllers\PostProjectController@ckeditor_image3');
Route::get('/file-browser3', 'App\Http\Controllers\PostProjectController@file_browser3');
Route::post('/upload-ckeditor4', 'App\Http\Controllers\PostCriteriaController@ckeditor_image4');
Route::get('/file-browser4', 'App\Http\Controllers\PostCriteriaController@file_browser4');
Route::post('/upload-ckeditor', 'App\Http\Controllers\PostAboutUsController@ckeditor_image');
Route::get('/file-browser', 'App\Http\Controllers\PostAboutUsController@file_browser');


//POSTS SERVICE
Route::get('/add-posts-service', 'App\Http\Controllers\PostServiceController@add_posts_service');
Route::post('/save-posts-service', 'App\Http\Controllers\PostServiceController@save_posts_service');
Route::get('/all-posts-service/{id_pdv}', 'App\Http\Controllers\PostServiceController@all_posts_service');
Route::get('/edit-posts-service/{post_service_id}', 'App\Http\Controllers\PostServiceController@edit_posts_service');
Route::post('/update-posts-service/{post_service_id}', 'App\Http\Controllers\PostServiceController@update_posts_service');
Route::get('/unactive-posts-service/{post_service_id}', 'App\Http\Controllers\PostServiceController@unactive_posts_service');
Route::get('/active-posts-service/{post_service_id}', 'App\Http\Controllers\PostServiceController@active_posts_service');
Route::get('/delete-posts-service/{post_service_id}', 'App\Http\Controllers\PostServiceController@delete_posts_service');
Route::get('/view-posts-service/{post_service_id}', 'App\Http\Controllers\PostServiceController@view_posts_service');

//POSTS NEWS
Route::get('/add-posts-news', 'App\Http\Controllers\PostNewsController@add_posts_news');
Route::post('/save-posts-news', 'App\Http\Controllers\PostNewsController@save_posts_news');
Route::get('/all-posts-news/{id_pn}', 'App\Http\Controllers\PostNewsController@all_posts_news');
Route::get('/edit-posts-news/{post_news_id}', 'App\Http\Controllers\PostNewsController@edit_posts_news');
Route::post('/update-posts-news/{post_news_id}', 'App\Http\Controllers\PostNewsController@update_posts_news');
Route::get('/unactive-posts-news/{post_news_id}', 'App\Http\Controllers\PostNewsController@unactive_posts_news');
Route::get('/active-posts-news/{post_news_id}', 'App\Http\Controllers\PostNewsController@active_posts_news');
Route::get('/delete-posts-news/{post_news_id}', 'App\Http\Controllers\PostNewsController@delete_posts_news');
Route::get('/view-posts-news/{post_news_id}', 'App\Http\Controllers\PostNewsController@view_posts_news');

//POSTS CRITERIA
Route::get('/add-posts-criteria', 'App\Http\Controllers\PostCriteriaController@add_posts_criteria');
Route::post('/save-posts-criteria', 'App\Http\Controllers\PostCriteriaController@save_posts_criteria');
Route::get('/all-posts-criteria', 'App\Http\Controllers\PostCriteriaController@all_posts_criteria');
Route::get('/edit-posts-criteria/{post_criteria_id}', 'App\Http\Controllers\PostCriteriaController@edit_posts_criteria');
Route::post('/update-posts-criteria/{post_criteria_id}', 'App\Http\Controllers\PostCriteriaController@update_posts_criteria');
Route::get('/unactive-posts-criteria/{post_criteria_id}', 'App\Http\Controllers\PostCriteriaController@unactive_posts_criteria');
Route::get('/active-posts-criteria/{post_criteria_id}', 'App\Http\Controllers\PostCriteriaController@active_posts_criteria');
Route::get('/delete-posts-criteria/{post_criteria_id}', 'App\Http\Controllers\PostCriteriaController@delete_posts_criteria');

//POSTS ABOUT US
Route::get('/add-posts-about-us', 'App\Http\Controllers\PostAboutUsController@add_posts_about_us');
Route::post('/save-posts-about-us', 'App\Http\Controllers\PostAboutUsController@save_posts_about_us');
Route::get('/view-posts-about-us', 'App\Http\Controllers\PostAboutUsController@view_posts_about_us');
Route::get('/edit-posts-about-us/{post_about_us_id}', 'App\Http\Controllers\PostAboutUsController@edit_posts_about_us');
Route::post('/update-posts-about-us/{post_about_us_id}', 'App\Http\Controllers\PostAboutUsController@update_posts_about_us');
Route::get('/delete-posts-about-us/{post_about_us_id}', 'App\Http\Controllers\PostAboutUsController@delete_posts_about_us');


//POSTS PROJECT
Route::get('/add-posts-project', 'App\Http\Controllers\PostProjectController@add_posts_project');
Route::post('/save-posts-project', 'App\Http\Controllers\PostProjectController@save_posts_project');
Route::get('/all-posts-project/{cr_posts_project}', 'App\Http\Controllers\PostProjectController@all_posts_project');
Route::get('/edit-posts-project/{post_project_id}', 'App\Http\Controllers\PostProjectController@edit_posts_project');
Route::post('/update-posts-project/{post_project_id}', 'App\Http\Controllers\PostProjectController@update_posts_project');
Route::get('/unactive-posts-project/{post_project_id}', 'App\Http\Controllers\PostProjectController@unactive_posts_project');
Route::get('/active-posts-project/{post_project_id}', 'App\Http\Controllers\PostProjectController@active_posts_project');
Route::get('/delete-posts-project/{post_project_id}', 'App\Http\Controllers\PostProjectController@delete_posts_project');
Route::get('/view-posts-project/{post_project_id}', 'App\Http\Controllers\PostProjectController@view_posts_project');
//===END ADMIN DASHBOARD POST===//



//===START SLIDER BANNER===//
Route::get('/add-slider', 'App\Http\Controllers\ManageBannerController@add_slider');
Route::post('/save-slider', 'App\Http\Controllers\ManageBannerController@save_slider');
Route::get('/manage-slider', 'App\Http\Controllers\ManageBannerController@manage_slider');
Route::get('/unactive-slider/{slider_id}', 'App\Http\Controllers\ManageBannerController@unactive_slider');
Route::get('/active-slider/{slider_id}', 'App\Http\Controllers\ManageBannerController@active_slider');
Route::get('/delete-slider/{slider_id}', 'App\Http\Controllers\ManageBannerController@delete_slider');
//===END SLIDER BANNER===//


//===START HOME===//
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::get('/du-an/{post_project_slug}/{post_project_id}', 'App\Http\Controllers\HomeController@thong_tin_du_an');
Route::get('/gioi-thieu', 'App\Http\Controllers\HomeController@gioi_thieu');
Route::get('/kinh-nghiem-nang-luc', 'App\Http\Controllers\HomeController@kinh_nghiem_nang_luc');
Route::get('/danh-sach-dich-vu', 'App\Http\Controllers\HomeController@list_service');
Route::get('/dich-vu/{post_news_slug}/{post_news_id}', 'App\Http\Controllers\HomeController@dich_vu');
Route::get('/danh-sach-tin-tuc', 'App\Http\Controllers\HomeController@list_news');
Route::get('/tin-tuc/{post_news_slug}/{post_news_id}', 'App\Http\Controllers\HomeController@tin_tuc');
Route::get('/lien-he', 'App\Http\Controllers\HomeController@lien_he');
//===END HOME===//


//===ERROR===//
Route::get('/403', 'App\Http\Controllers\AdminDashboardController@Error403');
Route::get('/404', 'App\Http\Controllers\AdminDashboardController@Error404');
Route::get('/500', 'App\Http\Controllers\AdminDashboardController@Error500');