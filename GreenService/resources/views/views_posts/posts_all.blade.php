<!DOCTYPE html>
<html lang="en">
<head>

	<title>{{$meta_title}}</title>

    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    
    {{-- <meta property="og:image" content="{{$image_og}}" /> --}}
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="{{$meta_title}}" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="{{asset('./public/front-end/Css/home.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('./public/front-end/Css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="{{asset('./public/front-end/Js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('./public/front-end/Js/jquery-3.5.1.min.js')}}"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('./public/front-end/Css/gioithieu/gioithieu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./public/front-end/Css/lienhe.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./public/front-end/Css/dichvu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./public/front-end/Css/chitietdichvu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./public/front-end/Css/chitietduan.css')}}">
</head>
<body>

	<div class="top">
		<ul>
			<li>
				<i class="fas fa-phone"></i>
				<p>0935153292-0935153292</p>
			</li>
			<li>
				<i class="fas fa-envelope"></i>
				<p>ngocmtqn@gmail.com</p>
			</li>
			<li>
				<i class="far fa-clock"></i>
				<p>Mon - Fri: 9:00 AM - 5:00 PM</p>
			</li>
		</ul>
	</div>
	<div class="menu">
		<div class="menu-logo">
			<a href="{{URL::TO('/home')}}"><img src="{{asset('./public/front-end/Images/home/logo.jpeg')}}"></a>
		</div>
		<div class="menu-name">
			<div class="menu-name-1">
				<p>Công ty</p>
			</div>
			<div class="menu-name-2">
				<h3>Khánh Huy</h3>
			</div>
		</div>
		<div class="menu-tags">
			<ul>
				<li class="home"><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
				<li class="cool-link">
					<a style="cursor: pointer;">Giới thiệu</a>
					<ul class="nav-sub">
						<li>
							<a href="{{URL::TO('/gioi-thieu')}}">Giới thiệu chung</a>
						</li>
						<li>
							<a href="{{URL::TO('/kinh-nghiem-nang-luc')}}">Kinh nghiệm năng lực</a>
						</li>
					</ul>
				</li>
				<li class="cool-link"><a href="{{URL::TO('/danh-sach-dich-vu')}}">Dịch Vụ</a></li>
				<li class="cool-link"><a href="{{URL::TO('/home')}}#Project">Dự án thực hiện</a></li>
				<li class="cool-link"><a href="{{URL::TO('/danh-sach-tin-tuc')}}">Tin tức</a></li>
				<li class="cool-link"><a href="{{URL::TO('/lien-he')}}">Liên hệ</a></li>
			</ul>
		</div>
	</div>

	<script type="text/javascript">
		$(window).scroll(function() {
			if($(window).scrollTop() > $(window).height() - 200) {
				$('.menu').addClass('fixed');
				//document.getElementById('imgscrhd').style.display = 'block';
			} else {
				$('.menu').removeClass('fixed');
				//document.getElementById('imgscrhd').style.display = 'none';
			}
		});	
	</script>

	<div class="menu-moblie-hd">
		<div class="burger-container">
		<div id="burger">
			<div class="bar topBar"></div>
			<div class="bar btmBar"></div>
		</div>
	</div>

	<div class="img-header">
		<img src="{{asset('./public/front-end/Images/home/logo.jpeg')}}">
	</div>

	<div class="header">		
		<ul class="menu-moblie">
			<li class="menu-item"><a href="{{URL::TO('/home')}}">Trang chủ</a></li>
			<li class="menu-item"><a href="{{URL::TO('/gioi-thieu')}}">Giới thiệu</a></li>
			<li class="menu-item"><a href="#">Dịch vụ cây xanh</a></li>
			<li class="menu-item"><a href="{{URL::TO('/home')}}#Project">Dự án thực hiện</a></li>
			<li class="menu-item"><a href="{{URL::TO('/danh-sach-tin-tuc')}}">Tin tức</a></li>
			<li class="menu-item"><a href="{{URL::TO('/lien-he')}}">Liên hệ</a></li>
		</ul>
	</div>
	</div>

	<script type="text/javascript">
		(function(){
			var burger = document.querySelector('.burger-container'),
			header = document.querySelector('.header');

			sls = document.querySelector('.slide-show');

			burger.onclick = function() {
				header.classList.toggle('menu-opened');
			}
		}());
	</script>

	<section>
		@yield('home_posts_content')
	</section>
	<div class="footer">
		<div class="ft-block ft-block-1">
			<div class="title-ft-block">
				<h3>Công ty TNHH Khánh Huy</h3>
			</div>
			<div class="content-ft-block">
				<p>Công ty TNHH Dịch vụ vệ sinh và Chăm sóc Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp; trồng và duy trì cảnh quang,..Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp; Dịch vụ chăm sóc và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,...</p>
			</div>
		</div>
		<div class="ft-block ft-block-2">
			<div class="title-ft-block">
				<h3>Dịch Vụ</h3>
			</div>
			<div class="content-ft-block">
				<ul>
					<li>
						<p>Tất cả dịch vụ</p>
					</li>
					<li>
						<p>- Thiết kế, thi công cảnh quan cây xanh, hệ thống tưới tự động</p>
					</li>
					<li>
						<p>- Chăm sóc, bảo dưỡng cảnh quan cây xanh, hệ thống tưới tự động</p>
					</li>
					<li>
						<p>- Bán và cho thuê cây nội thất</p>
					</li>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>