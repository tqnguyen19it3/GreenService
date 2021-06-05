@extends('views_posts.posts_all')
@section('home_posts_content')
	<div class="dich-vu">
		<div class="top-dich-vu">
			<ul>
				<li>Trang chủ</li>
				<li><i class="fas fa-chevron-right"></i></li>
				<li>Tin tức</li>
			</ul>
		</div>
		<div class="bottom-dich-vu">

			<div class="left-dich-vu">
				<div class="title-ldva">
					<h1 class="ldv-title">Danh sách tin tức</h1>
				</div>
				@foreach($all_posts_news as $key => $post_news)
				@if($post_news->post_news_status == 1)
				<div class="line-block-dv clearfix">
					<a href="{{URL::TO('/tin-tuc/'.$post_news->post_news_slug.'/'.$post_news->post_news_id)}}" class="img">
						<img src="{{URL::TO('./public/uploads/PostsNewsImg/'.$post_news->post_news_img)}}">
					</a>
					<div class="title-block-dv">
						<h2 class="title">
							<a href="{{URL::TO('/tin-tuc/'.$post_news->post_news_slug.'/'.$post_news->post_news_id)}}">{{$post_news->post_news_title}}</a>
						</h2>
						<time>Thu bay</time>
						<div class="simpleconten">
							{{$post_news->post_news_desc}}
						</div>
						<a href="{{URL::TO('/tin-tuc/'.$post_news->post_news_slug.'/'.$post_news->post_news_id)}}" class="more">Xem chi tiet</a>
					</div>
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
						<a href="#" class="img">
							<img class="embed-responsive" alt="IMG Description" src="{{URL::TO('./public/uploads/PostsNewsImg/'.$post_right_new->post_news_img)}}">
						</a>
						<h3 class="title">
							<a href="{{URL::TO('/tin-tuc/'.$post_right_new->post_news_slug.'/'.$post_right_new->post_news_id)}}">{{$post_right_new->post_news_title}}</a>
						</h3>
					</div>
					@endif
					@endforeach
				</div>	
			</div>
		</div>
	</div>
@endsection