@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h2>Thay đổi tài khoản</h2>
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
                  <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h5 style="font-weight: bold;">Lưu ý!</h5> Bạn có thể thay đổi thông tin mà không cần phải thay đổi mật khẩu mới.
                  </div>
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
                       echo "<div class='alert alert-danger alert-dismissible fade show'>";
                        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>" ;
                        echo "<h5>Lỗi! </h5>".$messageError;
                      echo "</div>";
                      Session::put('messageError', null);
                    }
                  ?>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" action="{{URL::TO('/update-admin-account/'.$result->admin_id)}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Admin Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{$result->admin_name}}" name="adminName" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Admin Phonenumber <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{$result->admin_phone}}" name="adminPhone" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Admin Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="email" value="{{$result->admin_email}}" id="adminEmail" name="adminEmail" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Admin Old Password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="password" placeholder="********************" id="adminPasswordOld" required="required" name="adminPasswordOld" class="form-control">
                      </div>
                      <button type="button" id="showPasswordOld" value="show"><i class='fa fa-eye'></i></button>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Admin New Password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="password" placeholder="********************" id="adminPasswordNew" name="adminPasswordNew" class="form-control">
                      </div>
                      <button type="button" id="showPasswordNews"><i class='fa fa-eye'></i></button>
                    </div>
{{--                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Admin Position <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{$result->admin_position}}" name="adminPosition" required="required" class="form-control">
                      </div>
                    </div> --}}
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-success">Thay đổi tài khoản</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
<script type="text/javascript">
          // Check javascript has loaded
  $(document).ready(function(){
   
    // Click event of the showPassword button
    $('#showPasswordNews').on('click', function(){
   
      // Get the password field
      var passwordField = $('#adminPasswordNew');
   
      // Get the current type of the password field will be password or text
      var passwordFieldType = passwordField.attr('type');
   
      // Check to see if the type is a password field
      if(passwordFieldType == 'password')
      {
          // Change the password field to text
          passwordField.attr('type', 'text');
   
          // Change the Text on the show password button to Hide
          $(this).val('Hide');
      } else {
          // If the password field type is not a password field then set it to password
          passwordField.attr('type', 'password');
   
          // Change the value of the show password button to Show
          $(this).val('Show');
      }
    });
  });

    $(document).ready(function(){
   
    // Click event of the showPassword button
    $('#showPasswordOld').on('click', function(){
   
      // Get the password field
      var passwordField = $('#adminPasswordOld');
   
      // Get the current type of the password field will be password or text
      var passwordFieldType = passwordField.attr('type');
   
      // Check to see if the type is a password field
      if(passwordFieldType == 'password')
      {
          // Change the password field to text
          passwordField.attr('type', 'text');
   
          // Change the Text on the show password button to Hide
          $(this).val('Hide');
      } else {
          // If the password field type is not a password field then set it to password
          passwordField.attr('type', 'password');
   
          // Change the value of the show password button to Show
          $(this).val('Show');
      }
    });
  });

</script>
@endsection