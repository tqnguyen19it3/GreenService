@extends('views_posts.posts_all')
@section('home_posts_content')
	<div class="top-du-an">
		<ul>
			<li>TRANG CHỦ</li>
			<li><i class="fas fa-chevron-right"></i></li>
			<li>THÔNG TIN {{$post_project->post_project_title}}</li>
		</ul>
	</div>
	<div class="bottom-du-an">
		<div class="block-du-an">
			<div class="title-block-du-an">
				<h3>Chi tiết dự án</h3>
			</div>
			<div class="content-block-du-an">
				@if($post_project->post_project_status == 1)
					<img class="embed-responsive" alt="IMG Description" src="{{URL::TO('./public/uploads/PostsProjectImg/'.$post_project->post_project_img)}}">
					{!!$post_project->post_project_content!!}
					
				@endif
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
@endsection