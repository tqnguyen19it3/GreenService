@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h2>Cập nhật danh mục <small>Dịch vụ</small></h2>
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
                  <h2>Cập nhật danh mục <small>Dịch vụ</small></h2>
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
                  <form id="demo-form2" action="{{URL::TO('/update-cate-posts-service/'.$category_service->cate_service_id)}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Service Name">Tên danh mục dịch vụ <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="slug" onkeyup="ChangeToSlug()" value="{{$category_service->cate_service_name}}" name="service_name" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="convert_slug" value="{{$category_service->cate_service_slug}}" name="service_slug" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 ">
                        <select name="service_status" class="form-control">
                        	@if($category_service->cate_service_status == 1)
	                          	<option selected value="1">Hiển thị dịch vụ</option>
	                          	<option value="0">Ẩn dịch vụ</option>
	                        @else
	                        	<option value="1">Hiển thị dịch vụ</option>
	                        	<option selected value="0">Ẩn dịch vụ</option>
	                        @endif
                        </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Mô tả dịch vụ <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea class="form-control" rows="3" name="service_desc" placeholder="">{{$category_service->cate_service_desc}}</textarea>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
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