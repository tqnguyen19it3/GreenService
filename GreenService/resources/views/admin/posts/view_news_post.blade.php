@extends('admin_layout')
@section('admin_content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Xem Bài Đăng Về Tin Tức</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <h2><strong>Tin Tức:</strong> <small>{{$view_posts_news->post_news_title}}</small></h2>

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
                        <img src="{{asset('./public/uploads/PostsNewsImg/'.$view_posts_news->post_news_img)}}" alt="news IMG" />
                      </div>
                      <div class="product_gallery">
                        <div class="">
                          <div class="product_price">
                            <h3 style="font-weight: 400; color: #26B99A; margin: 0;">Từ khóa chuẩn SEO</h3>
                            <span class="price-tax">{{$view_posts_news->post_news_metakeyword}}</span>
                            <br>
                            <h3 style="font-weight: 400; color: #26B99A; margin: 0;">Meta Desc SEO</h3>
                            <span class="price-tax">{{$view_posts_news->post_news_desc}}</span>
                            <br>
                          </div>
                        </div>
                      </div>
                    @if($view_posts_news->post_news_status == 0)
                      <button type="button" class="btn btn-xs" disabled><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Đang bị ẩn</i></button>
                    @else
                      <button type="button" class="btn btn-xs" disabled><i class="fa fa-toggle-on" style="font-size: 25px; color: green;"> Đang hiển thị</i></button>
                    @endif
                    </div>
                    
                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
                     
                      <h3 class="prod_title">{{$view_posts_news->post_news_title}}</h3>

                      
                      <div class="product_price">
                        <span class="price-tax">{{$view_posts_news->post_news_desc}}</span>
                      </div>
                      <p>{!!$view_posts_news->post_news_content!!}.</p>
                      <br />

                      

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection