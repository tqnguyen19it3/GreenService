@extends('views_posts.posts_all')
@section('home_posts_content')
	<div class="top-gioi-thieu">
		<ul>
			<li>TRANG CHỦ</li>
			<li><i class="fas fa-chevron-right"></i></li>
			<li>TIN TỨC</li>
			<li><i class="fas fa-chevron-right"></i></li>
			@foreach($post_news as $key => $news_post)
			<li style="text-transform: uppercase;">{{$news_post->post_news_title}}</li>
		</ul>
	</div>
	<div class="bottom-gioi-thieu">
		<div class="block-gioi-thieu">
			<div class="title-block-gioi-thieu">
				<h3><span style="font-weight: 900">Bài viết:</span> {{$news_post->post_news_title}}</h3>
			</div>
			
				@if($news_post->post_news_status == 1)
					<div class="content-block-gioi-thieu">
						<img class="embed-responsive" alt="IMG Description" src="{{URL::TO('./public/uploads/PostsNewsImg/'.$news_post->post_news_img)}}">
						{!!$news_post->post_news_content!!}
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

			<div class="right-danh-muc">
				<h2 class="i-title">Bài viết liên quan</h2>
				@foreach($related_news as $rel_news)
					@if($rel_news->post_news_status == 1)
				<div class="rg-post clearfix">
					<a href="{{URL::TO('/tin-tuc/'.$rel_news->post_news_slug.'/'.$rel_news->post_news_id)}}" class="img">
						<img class="embed-responsive" alt="IMG Description" src="{{URL::TO('./public/uploads/PostsNewsImg/'.$rel_news->post_news_img)}}">
					</a>
					<h3 class="title">
						<a href="{{URL::TO('/tin-tuc/'.$rel_news->post_news_slug.'/'.$rel_news->post_news_id)}}">{{$rel_news->post_news_title}}</a>
					</h3>
				</div>
					@endif
				@endforeach
			</div>		
		</div>
	</div>
@endsection