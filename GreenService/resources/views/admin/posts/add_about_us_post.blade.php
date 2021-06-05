@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Thêm bài giới thiệu</h3>
            </div>
          </div>
          <div class="clearfix"></div>
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
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Bài giới thiệu</h2>
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
                  <form id="demo-form2" action="{{URL::TO('/save-posts-about-us')}}" enctype="multipart/form-data" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 label-align" for="exampleInputImage1">Hình ảnh cho bài giới thiệu</label>
                        <input type="file" name="about_us_post_img" class="form-control" id="exampleInputImage1" style="border: none;">
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Nội dung bài giới thiệu <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="5" id="ckeditor" name="about_us_post_content" required="required" placeholder=""></textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 label-align" for="exampleInputImage1">Meta từ khóa <span class="required">*</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" name="about_us_post_metakeyword" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Meta nội dung <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="5" name="about_us_post_metadesc" required="required" placeholder=""></textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 ">
                        <select name="about_us_post_status" class="form-control">
                          <option value="1">Hiển thị giới thiệu</option>
                          <option value="0">Ẩn giới thiệu</option>
                        </select>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-9 col-sm-9 offset-md-3">
                        <button class="btn btn-primary" type="reset">Hủy giới thiệu</button>
                        <button type="submit" class="btn btn-success">Tạo giới thiệu</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection