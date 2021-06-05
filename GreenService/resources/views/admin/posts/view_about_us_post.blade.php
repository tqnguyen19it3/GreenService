@extends('admin_layout')
@section('admin_content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Xem Bài Đăng Giới thiệu</h3>
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
            @foreach($all_posts_about_us as $key => $apau)
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      
                      <h2><strong>Bài giới thiệu {{$apau->post_about_us_id}}:</strong> <small>Dịch vụ vệ sinh và chăm sóc cây xanh Khánh Huy</small></h2>
                      
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="col-md-7 col-sm-7 ">
                        <div class="product-image">
                          <img src="{{asset('./public/uploads/PostsAboutUsImg/'.$apau->post_about_us_img)}}" alt="IMG" />
                        </div>
                        <div class="product_gallery">
                          <div class="">
                            <div class="product_price">
                              <h3 style="font-weight: 400; color: #26B99A; margin: 0;">Từ khóa chuẩn SEO</h3>
                              <span class="price-tax">{{$apau->post_about_us_metakeyword}}</span>
                              <br>
                              <h3 style="font-weight: 400; color: #26B99A; margin: 0;">Meta Desc SEO</h3>
                              <span class="price-tax">{{$apau->post_about_us_metadesc}}</span>
                              <br>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                        <h3 class="prod_title">Tổng quan bài giới thiệu công ty</h3>
                        
                        <p>{!!$apau->post_about_us_content!!}.</p>
                        <br />

                      </div>
                      <a href="{{URL::TO('/edit-posts-about-us/'.$apau->post_about_us_id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa Bài</a>
                      <a href="{{URL::TO('/delete-posts-about-us/'.$apau->post_about_us_id)}}" onclick="return confirm('Bạn có chắc muốn xóa bài viết giới thiệu này?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa Bài</a>
                      
                      @if($apau->post_about_us_status == 0)
                      <button type="button" class="btn btn-xs" disabled><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Đang bị ẩn</i></button>
                      @else
                      <button type="button" class="btn btn-xs" disabled><i class="fa fa-toggle-on" style="font-size: 25px; color: green;"> Đang hiển thị</i></button>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
@endsection