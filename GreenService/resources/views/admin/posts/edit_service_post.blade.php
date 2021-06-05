@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Cập nhật bài viết về dịch vụ</h3>
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
                  <h2>Cập nhật <small>Dịch vụ</small></h2>
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
                  <form id="demo-form2" action="{{URL::TO('/update-posts-service/'.$post_service->post_service_id)}}" enctype="multipart/form-data" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Service Name">Tên nội dung dịch vụ <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" id="slug" onkeyup="ChangeToSlug()" name="servicepostTitle" value="{{$post_service->post_service_title}}" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Service slug">Slug <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" id="convert_slug" name="servicepostSlug" value="{{$post_service->post_service_slug}}" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Tóm tắt dịch vụ <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="3" name="servicepostDesc" placeholder="" required="">{{$post_service->post_service_desc}}</textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="criteria img">Hình ảnh dịch vụ <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="file" name="servicepostImg" class="form-control" id="exampleInputImage1" style="border: none;"> 
                        <img src="{{URL::TO('./public/uploads/PostsServiceImg/'.$post_service->post_service_img)}}" alt="IMG" style="margin-top: 10px;" height="100" width="100">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Nội dung dịch vụ <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="5" id="ckeditor1" name="servicepostContent" required="" placeholder="">{{$post_service->post_service_content}}</textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Service keyword">Meta từ khóa dịch vụ <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" id="Service keyword" name="servicepostMetakeyword" required="required" value="{{$post_service->post_service_metakeyword}}" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 ">
                        <select name="servicepostStatus" class="form-control">
                          @if($post_service->post_service_status == 1)
                            <option selected value="1">Hiển thị dịch vụ</option>
                            <option value="0">Ẩn dịch vụ</option>
                          @else
                            <option value="1">Hiển thị dịch vụ</option>
                            <option selected value="0">Ẩn dịch vụ</option>
                          @endif
                        </select>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-9 col-sm-9 offset-md-3">
                        <button class="btn btn-primary" type="reset">Hủy dịch vụ</button>
                        <button type="submit" class="btn btn-success">Cập nhật dịch vụ</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection