@extends('views_posts.posts_all')
@section('home_posts_content')
	<div class="top-dich-vu">
		<ul>
			<li>TRANG CHỦ</li>
			<li><i class="fas fa-chevron-right"></i></li>
			<li>DỊCH VỤ</li>
			<li><i class="fas fa-chevron-right"></i></li>
			@foreach($post_service as $key => $service_post)
			<li style="text-transform: uppercase;">{{$service_post->post_service_title}}</li>
		</ul>
	</div>
	<div class="bottom-dich-vu">
		<div class="block-dich-vu">
			
			@if($service_post->post_service_status == 1)
			<div class="title-block-dich-vu">
				<h3><span style="font-weight: 900">Bài viết:</span> {{$service_post->post_service_title}}</h3>
			</div>
			<div class="content-block-dich-vu">
				<img class="embed-responsive" alt="IMG Description" src="{{URL::TO('./public/uploads/PostsServiceImg/'.$service_post->post_service_img)}}">
				{!!$service_post->post_service_content!!}
			</div>
			@endif
			@endforeach
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
				<h2 class="i-title">Bài viết liên quan</h2>
				@foreach($related_service as $rel_service)
					@if($rel_service->post_service_status == 1)
				<div class="rg-post clearfix">
					<a href="{{URL::TO('/tin-tuc/'.$rel_service->post_service_slug.'/'.$rel_service->post_service_id)}}" class="img">
						<img class="embed-responsive" alt="IMG Description" src="{{URL::TO('./public/uploads/PostsServiceImg/'.$rel_service->post_service_img)}}">
					</a>
					<h3 class="title">
						<a href="{{URL::TO('/dich-vu/'.$rel_service->post_service_slug.'/'.$rel_service->post_service_id)}}">{{$rel_service->post_service_title}}</a>
					</h3>
				</div>
					@endif
				@endforeach
			</div>		
		</div>
	</div>
@endsection