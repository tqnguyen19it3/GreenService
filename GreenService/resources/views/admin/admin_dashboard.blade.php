@extends('admin_layout')
@section('admin_content')
<style type="text/css">
	ul .list_views{
		margin: 10px 0;
		color: #fff;
	}
	ul .list_views a{
		color: #8086c2;
		font-weight: 400;
		font-size: 20px;
	}
</style>
<?php
    $name = Session::get('admin_name');
    if($name){
?>
        <div style="margin-top: 55px;" class="alert alert-success alert-dismissible">
		    <button type="button" class="close" data-dismiss="alert">&times;</button>
		    <strong>Thành công!</strong> <?php echo $name; ?> đã đăng nhập vào hệ thống ADMIN.
		</div>
<?php }?>
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-12 col-xs-12">
			<h1 class="text-center">Thống kê các bài viết</h1>
			<div id="donut_chart" class="morris-donut-inverse"></div>
		</div>
		{{-- Đếm views --}}
		<div class="col-md-4 col-xs-4">
			<h2 class="text-center" style="color: #ff5162;">Dịch vụ xem nhiều</h2>
			<ol class="list_views">
				@foreach($post_service_views as $key => $service_views)
					<li>
						<a target="_blank" href="{{URL::TO('/dich-vu/'.$service_views->post_service_slug.'/'.$service_views->post_service_id)}}">{{$service_views->post_service_title}} | <span style="color: #ff5162">{{$service_views->post_service_views}}</span></a>
					</li>
				@endforeach
			</ol>
		</div>
		<div class="col-md-4 col-xs-4">
			<h2 class="text-center" style="color: #ff8e51;">Tin tức xem nhiều</h2>
			<ol class="list_views">
				@foreach($post_news_views as $key => $news_views)
					<li>
						<a target="_blank" href="{{URL::TO('/tin-tuc/'.$news_views->post_news_slug.'/'.$news_views->post_news_id)}}">{{$news_views->post_news_title}} | <span style="color: #ff8e51">{{$news_views->post_news_views}}</span></a>
					</li>
				@endforeach
			</ol>
		</div>
		<div class="col-md-4 col-xs-4">
			<h2 class="text-center" style="color: #be6de3;">Dự án xem nhiều</h2>
			<ol class="list_views">
				@foreach($post_project_views as $key => $project_views)
					<li>
						<a target="_blank" href="{{URL::TO('/du-an/'.$project_views->post_project_slug.'/'.$project_views->post_project_id)}}">{{$project_views->post_project_title}} | <span style="color: #be6de3">{{$project_views->post_project_views}}</span></a>
					</li>
				@endforeach
			</ol>
		</div>
	</div>
@endsection