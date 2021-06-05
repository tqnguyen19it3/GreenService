@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h2>Thay đổi tài khoản</h2>
              <?php
                      $message = Session::get('message');
                      $messageError = Session::get('messageError');
                      if($message){
                        echo "<div class='alert alert-success alert-dismissible fade show'>";
                          echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>" ;
                          echo "<strong>Thành Công! </strong>".$message;
                        echo "</div>";
                        Session::put('message', null);
                      }elseif($messageError){
                         echo "<div class='alert alert-warning alert-dismissible fade show'>";
                          echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>" ;
                          echo "<strong>Lỗi! </strong>".$messageError;
                        echo "</div>";
                        Session::put('messageError', null);
                      }
                  ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Thay đổi tài khoản Admin</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  @foreach($result as $key => $val)
                  <form id="demo-form2" action="{{URL::TO('/update-admin-account/'.$val->admin_id)}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Service Name">Admin Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{$val->admin_name}}" name="adminName" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Admin Phonenumber <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{$val->admin_phone}}" name="adminPhone" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Admin Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="email" value="{{$val->admin_email}}" name="adminEmail" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Admin Password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="password" disabled value="{{$val->admin_password}}" name="adminPassword" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Admin Position <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{$val->admin_position}}" name="adminPosition" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-success">Thay đổi tài khoản</button>
                      </div>
                    </div>

                  </form>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection