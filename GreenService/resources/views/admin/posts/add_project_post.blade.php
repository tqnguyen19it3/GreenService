@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Thêm bài viết về dự án</h3>
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
                  <h2>Bài viết <small>Dự án</small></h2>
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
                  <form id="demo-form2" action="{{URL::TO('/save-posts-project')}}" enctype="multipart/form-data" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Name">Tên dự án <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" id="slug" onkeyup="ChangeToSlug()" name="project_post_title" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" id="convert_slug" name="project_post_slug" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Tóm tắt dự án <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="3" name="project_post_desc" placeholder="" required=""></textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 label-align" for="exampleInputImage1">Hình ảnh dự án</label>
                        <input type="file" name="project_post_img" class="form-control" id="exampleInputImage1" required="" style="border: none;">
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Nội dung dự án <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="5" id="ckeditor3" name="project_post_content" required="" placeholder=""></textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="keyword">Meta từ khóa dự án <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" name="project_post_metakeyword" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 ">
                        <select name="project_post_status" class="form-control">
                          <option value="1">Hiển thị dự án</option>
                          <option value="0">Ẩn dự án</option>
                        </select>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-9 col-sm-9 offset-md-3">
                        <button class="btn btn-primary" type="reset">Hủy bài viết dự án</button>
                        <button type="submit" class="btn btn-success">Tạo bài viết dự án</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection