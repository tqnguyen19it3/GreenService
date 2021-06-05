<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminDashboardController extends Controller
{
    //
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      //có đăng nhập ms có admin_id
            return Redirect::to('/admin-dashboard');              //sẽ đá về đường dẫn dashboard trỏ đến hàm show_dashboard
        }else return Redirect::to('/login')->send();   //hàm kiểm tra đăng nhập
    }

    public function admin_profile(){
    	$this->AuthLogin();
    	return view('admin.admin_profile');
    }

    public function admin_account(Request $request, $admin_id){
        $this->AuthLogin();

        $result = DB::table('tbl_admin')->WHERE('admin_id',$admin_id)->get();   

        return view('admin.admin_account')->with('result', $result);
    }

    public function update_admin_account(Request $request, $admin_id){
        $data = array();
        $data['admin_email'] = $request->adminEmail;
        $data['admin_name'] = $request->adminName;
        $data['admin_phone'] = $request->adminPhone;
        // $data['admin_password'] = md5($request->adminPassword);
        $data['admin_position'] = $request->adminPosition;

        $admin_id = DB::table('tbl_admin')->where('admin_id', $admin_id)->update($data);

        return Redirect::to('/login');
    }


    public function Error403(Request $request){

        return view('Error.403');//1
    }

    public function Error404(Request $request){

        return view('Error.404');//1
    }

    public function Error500(Request $request){

        return view('Error.500');//1
    }
}
