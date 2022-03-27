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
        if($admin_id){                                     
            return Redirect::to('/admin-dashboard');              
        }else return Redirect::to('/login')->send();   
    }

    public function admin_profile(Request $request, $admin_id){
    	$this->AuthLogin();

        $result = DB::table('tbl_admin')->WHERE('admin_id',$admin_id)->first();

    	return view('admin.admin_profile')->with('result', $result);
    }

    public function admin_account(Request $request, $admin_id){
        $this->AuthLogin();

        $result = DB::table('tbl_admin')->WHERE('admin_id',$admin_id)->first();   

        return view('admin.admin_account')->with('result', $result);
    }

    public function update_admin_account(Request $request, $admin_id){
        $data = array();
        $data['admin_email'] = $request->adminEmail;
        $data['admin_name'] = $request->adminName;
        $data['admin_phone'] = $request->adminPhone;

        $passwordOld = md5($request->adminPasswordOld);
        $checkAdmin = DB::table('tbl_admin')->WHERE('admin_id',$admin_id)->WHERE('admin_password',$passwordOld)->first();

        $passwordNew = $request->adminPasswordNew;

        if($checkAdmin) {
            if($passwordNew == NULL){
                $admin_id = DB::table('tbl_admin')->where('admin_id', $admin_id)->update($data);
                return Redirect::to('/login');
            }else{
                $data['admin_password'] = md5($passwordNew);
                $admin_id = DB::table('tbl_admin')->where('admin_id', $admin_id)->update($data);
                return Redirect::to('/login');
            }
        }else{
            return Redirect::to('/admin-account/'.$admin_id)->with('messageError', 'Mật khẩu cũ không hợp lệ, vui lòng nhập đúng mật khẩu cũ để thực hiện hành động này.');
        }
        
        // $data['admin_position'] = $request->adminPosition;

    }

    public function select_company_profile(Request $request){

        $company_profile = DB::table('tbl_company_profile')->first();
        $output = '<form>'.csrf_field().'
                    <div class="col-md-7 col-sm-7 ">
                        <div class="product-image">
                            <img src="'.url("./public/back-end/images/logo.jpeg").'" alt="AVATAR" />
                        </div>
                        <br>';
        if($company_profile){
            $output .= '<div class="product_price">
                            <h1 class="price">Người đại diện pháp luật</h1>
                            <span class="price-tax">Họ và tên: </span><span contenteditable class="price-tax edit_name_manager" data-company_id="'.$company_profile->company_profile_id.'">'.$company_profile->company_profile_manager.'</span><br>
                            <span class="price-tax">E-mail: </span><span contenteditable class="price-tax edit_email_manager" data-company_id="'.$company_profile->company_profile_id.'">'.$company_profile->company_profile_email.'</span><br>
                            <span class="price-tax">Điện thoại: </span><span contenteditable class="price-tax edit_phone_manager" data-company_id="'.$company_profile->company_profile_id.'">'.$company_profile->company_profile_phone.'</span><br>
                            <span class="price-tax">Chức danh: </span><span contenteditable class="price-tax edit_position_manager" data-company_id="'.$company_profile->company_profile_id.'">'.$company_profile->company_profile_position.'</span>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
                        <h3 class="prod_title">Giới thiệu</h3>
                        <p style="text-align: justify;" contenteditable class="edit_desc_manager" data-company_id="'.$company_profile->company_profile_id.'">'.$company_profile->company_profile_desc.'</p>
                        <div class="product_social">
                          <ul class="list-inline display-layout">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                            </li>
                            <li style="margin-left: 10px;"><a href="#"><i class="fa fa-twitter-square"></i></a>
                            </li>
                            <li style="margin-left: 10px;"><a href="#"><i class="fa fa-envelope-square"></i></a>
                            </li>
                            <li style="margin-left: 10px;"><a href="#"><i class="fa fa-rss-square"></i></a>
                            </li>
                          </ul>
                          <ul class="list-inline display-layout">
                            <li><a href="#"><i class="fa fa-cc"></i></a>
                            </li>
                            <li style="margin-left: 10px;"><a href="#"><i class="fa fa-cc-amex"></i></a>
                            </li>  
                            <li style="margin-left: 10px;"><a href="#"><i class="fa fa-cc-mastercard"></i></a>
                            </li>
                            <li style="margin-left: 10px;"><a href="#"><i class="fa fa-cc-paypal"></i></a>
                            </li>
                            <li style="margin-left: 10px;"><a href="#"><i class="fa fa-cc-visa"></i></a>
                            </li>
                          </ul>
                        </div>
                    </div>';
            }
        $output .='</form>';
        echo $output;

    }

    public function update_name_manager_company_profile(Request $request){

        $data = array();
        $company_profile_id = $request->com_pro_id;
        $data['company_profile_manager'] = $request->com_pro_name;

        $update = DB::table('tbl_company_profile')->where('company_profile_id', $company_profile_id)->update($data);
    }

    public function update_email_manager_company_profile(Request $request){

        $data = array();
        $company_profile_id = $request->com_pro_id;
        $data['company_profile_email'] = $request->com_pro_email;

        $update = DB::table('tbl_company_profile')->where('company_profile_id', $company_profile_id)->update($data);
    }

    public function update_phone_manager_company_profile(Request $request){

        $data = array();
        $company_profile_id = $request->com_pro_id;
        $data['company_profile_phone'] = $request->com_pro_phone;

        $update = DB::table('tbl_company_profile')->where('company_profile_id', $company_profile_id)->update($data);
    }

    public function update_position_manager_company_profile(Request $request){

        $data = array();
        $company_profile_id = $request->com_pro_id;
        $data['company_profile_position'] = $request->com_pro_position;

        $update = DB::table('tbl_company_profile')->where('company_profile_id', $company_profile_id)->update($data);
    }

    public function update_desc_manager_company_profile(Request $request){

        $data = array();
        $company_profile_id = $request->com_pro_id;
        $data['company_profile_desc'] = $request->com_pro_desc;

        $update = DB::table('tbl_company_profile')->where('company_profile_id', $company_profile_id)->update($data);
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
