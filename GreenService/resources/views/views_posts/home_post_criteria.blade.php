@extends('views_posts.posts_all')
@section('home_posts_content')
	<div class="top-gioi-thieu">
		<ul>
			<li>TRANG CHỦ</li>
			<li><i class="fas fa-chevron-right"></i></li>
			<li>KINH NGHIỆM NĂNG LỰC</li>
		</ul>
	</div>
	<div class="bottom-gioi-thieu">
		<div class="block-gioi-thieu">
			<div class="title-block-gioi-thieu">
				<h3>Kinh nghiệm năng lực công ty Khánh Huy</h3>
			</div>
			<div class="content-block-gioi-thieu" style="clear: right;">
				@foreach($all_posts_criteria as $key => $val)
				<img class="col-sm-12 col-md-12" style="width: 300px;" alt="IMG Description" src="{{URL::TO('./public/uploads/PostsCriteriaImg/'.$val->post_criteria_img)}}">
				{!!$val->post_criteria_content!!}
				@endforeach
			</div>
		</div>
		<div class="right-hien-thi">
			<div class="right-danh-muc">
				<h2 class="i-title">Danh mục</h2>
				<ul>
					<li><a href="{{URL::TO('/gioi-thieu')}}" title="">Giới thiệu</a>
					</li>
					<li><a href="{{URL::TO('/kinh-nghiem-nang-luc')}}" title="">Kinh nghiệm năng lực</a>
					</li>
					<li><a href="{{URL::TO('/danh-sach-dich-vu')}}" title="">Dịch vụ</a>
					</li>
					<li><a href="{{URL::TO('/danh-sach-tin-tuc')}}" title="">Tin tức</a>
					</li>
					<li><a href="{{URL::TO('/home')}}#Project" title="">Dự án</a>
					</li>
				</ul>
			</div>

			<div class="right-danh-muc">
				<h2 class="i-title">Tin tức</h2>
				@foreach($right_news as $post_right_new)
					@if($post_right_new->post_news_status == 1)
				<div class="rg-post clearfix">
					<a href="{{URL::TO('/tin-tuc/'.$post_right_new->post_news_slug.'/'.$post_right_new->post_news_id)}}" class="img">
						<img class="embed-responsive" alt="IMG Description" src="{{URL::TO('./public/uploads/PostsNewsImg/'.$post_right_new->post_news_img)}}">
					</a>
					<h3 class="title">
						<a href="{{URL::TO('/tin-tuc/'.$post_right_new->post_news_slug.'/'.$post_right_new->post_news_id)}}">{{$post_right_new->post_news_title}}</a>
					</h3>
				</div>
					@endif
				@endforeach
			</div>

			<div class="right-danh-muc">
				<h2 class="i-title">Dịch vụ</h2>
				@foreach($right_service as $post_right_service)
					@if($post_right_service->post_service_status == 1)
				<div class="rg-post clearfix">
					<a href="{{URL::TO('/dich-vu/'.$post_right_service->post_service_slug.'/'.$post_right_service->post_service_id)}}" class="img">
						<img class="embed-responsive" alt="IMG Description" src="{{URL::TO('./public/uploads/PostsServiceImg/'.$post_right_service->post_service_img)}}">
					</a>
					<h3 class="title">
						<a href="{{URL::TO('/dich-vu/'.$post_right_service->post_service_slug.'/'.$post_right_service->post_service_id)}}">{{$post_right_service->post_service_title}}</a>
					</h3>
				</div>
					@endif
				@endforeach
			</div>
	
		</div>
	</div>
@endsection