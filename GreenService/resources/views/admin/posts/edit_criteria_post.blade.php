@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Cập nhật kinh nghiệm năng lực làm việc</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Cập nhật kinh nghiệm năng lực <small>Làm việc</small></h2>
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
                  <form id="demo-form2" action="{{URL::TO('/update-posts-criteria/'.$post_criteria->post_criteria_id)}}" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="criteria img">Hình ảnh kinh nghiệm năng lực <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="file" name="criteria_post_img" class="form-control" id="exampleInputImage1" style="border: none;"> 
                        <img src="{{URL::TO('./public/uploads/PostsCriteriaImg/'.$post_criteria->post_criteria_img)}}" alt="IMG Criteria" style="margin-top: 10px;" height="100" width="100">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Nội dung kinh nghiệm năng lực <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="3" id="ckeditor4" name="criteria_post_content" placeholder="">{{$post_criteria->post_criteria_content}}</textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 ">
                        <select name="criteria_post_status" class="form-control">
                          @if($post_criteria->post_criteria_status == 1)
                            <option selected value="1">Hiển thị kinh nghiệm năng lực</option>
                            <option value="0">Ẩn kinh nghiệm năng lực</option>
                          @else
                            <option value="1">Hiển thị kinh nghiệm năng lực</option>
                            <option selected value="0">Ẩn kinh nghiệm năng lực</option>
                          @endif
                        </select>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-9 col-sm-9 offset-md-3">
                        <button class="btn btn-primary" type="reset">Hủy kinh nghiệm năng lực</button>
                        <button type="submit" class="btn btn-success">Cập nhật kinh nghiệm năng lực</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection