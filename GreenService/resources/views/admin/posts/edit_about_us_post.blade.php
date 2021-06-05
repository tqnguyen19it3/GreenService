@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Cập nhật bài viết giới thiệu</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Cập nhật bài viết <small>Giới thiệu</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
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
                  <br />
                  <form id="demo-form2" action="{{URL::TO('/update-posts-about-us/'.$post_about_us->post_about_us_id)}}" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="img">Hình ảnh giới thiệu <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="file" name="about_us_post_img" class="form-control" id="exampleInputImage1" style="border: none;"> 
                        <img src="{{URL::TO('./public/uploads/PostsAboutUsImg/'.$post_about_us->post_about_us_img)}}" alt="IMG" style="margin-top: 10px;" height="100" width="100">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Nội dung bài giới thiệu <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="3" id="ckeditor" name="about_us_post_content" placeholder="">{{$post_about_us->post_about_us_content}}</textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Name">Meta từ khóa <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text"  name="about_us_post_metakeyword" value="{{$post_about_us->post_about_us_metakeyword}}" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Meta bài giới thiệu <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="3" name="about_us_post_metadesc" placeholder="">{{$post_about_us->post_about_us_metadesc}}</textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 ">
                        <select name="about_us_post_status" class="form-control">
                          @if($post_about_us->post_about_us_status == 1)
                            <option selected value="1">Hiển thị giới thiệu</option>
                            <option value="0">Ẩn giới thiệu</option>
                          @else
                            <option value="1">Hiển thị giới thiệu</option>
                            <option selected value="0">Ẩn giới thiệu</option>
                          @endif
                        </select>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-9 col-sm-9 offset-md-3">
                        <button class="btn btn-primary" type="reset">Hủy giới thiệu</button>
                        <button type="submit" class="btn btn-success">Cập nhật giới thiệu</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection