@extends('admin_layout')
@section('admin_content')  
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Cập nhật bài viết về tin tức</h3>
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
                  <h2>Cập nhật <small>Tin tức</small></h2>
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
                  <form id="demo-form2" action="{{URL::TO('/update-posts-news/'.$post_news->post_news_id)}}" enctype="multipart/form-data" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Name">Tên tin tức <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" id="slug" onkeyup="ChangeToSlug()" name="news_post_title" value="{{$post_news->post_news_title}}" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="slug">Slug <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" id="convert_slug" name="news_post_slug" value="{{$post_news->post_news_slug}}" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Tóm tắt tin tức <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="3" name="news_post_desc" placeholder="" required="">{{$post_news->post_news_desc}}</textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 label-align" for="exampleInputImage1">Hình ảnh tin tức</label>
                        <div class="col-md-9 col-sm-9">
                          <input type="file" name="news_post_img" class="form-control" id="exampleInputImage1" style="border: none;">
                          <img src="{{URL::TO('./public/uploads/PostsNewsImg/'.$post_news->post_news_img)}}" alt="IMG" style="margin-top: 10px;" height="100" width="100">
                        </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Nội dung tin tức <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="5" id="ckeditor2" name="news_post_content" required="required" placeholder="">{{$post_news->post_news_content}}</textarea>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="news keyword">Meta từ khóa tin tức <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" id="news keyword" value="{{$post_news->post_news_metakeyword}}" name="news_post_metakeyword" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 label-align">Trạng thái <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 ">
                        <select name="news_post_status" class="form-control">
                          @if($post_news->post_news_status == 1)
                            <option selected value="1">Hiển thị tin tức</option>
                            <option value="0">Ẩn tin tức</option>
                          @else
                            <option value="1">Hiển thị tin tức</option>
                            <option selected value="0">Ẩn tin tức</option>
                          @endif
                        </select>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-9 col-sm-9 offset-md-3">
                        <button class="btn btn-primary" type="reset">Hủy cập nhật</button>
                        <button type="submit" class="btn btn-success">Cập nhật</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection