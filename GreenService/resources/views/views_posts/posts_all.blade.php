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
	<link rel="shortcut icon" href="{{asset('./public/front-end/Images/favicon.jpeg')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('./public/front-end/Css/home.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('./public/front-end/Css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="{{asset('./public/front-end/Js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('./public/front-end/Js/jquery-3.5.1.min.js')}}"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('./public/front-end/Css/gioithieu/gioithieu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./public/front-end/Css/lienhe.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./public/front-end/Css/dichvu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./public/front-end/Css/chitietdichvu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('./public/front-end/Css/chitietduan.css')}}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>

	<div class="top">
		<ul>
			<li>
				<i class="fas fa-phone"></i>
				<p>0935153292 - 0935153292</p>
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
				<li class="cool-link"><a href="{{URL::TO('/danh-sach-tin-tuc')}}">Tin tức</a></li>
				<li class="cool-link"><a href="{{URL::TO('/home')}}#Project">Dự án thực hiện</a></li>
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
			<li class="menu-item"><a href="{{URL::TO('/kinh-nghiem-nang-luc')}}">Kinh nghiệm năng lực</a></li>
			<li class="menu-item"><a href="{{URL::TO('/danh-sach-dich-vu')}}">Dịch vụ</a></li>
			<li class="menu-item"><a href="{{URL::TO('/danh-sach-tin-tuc')}}">Tin tức</a></li>
			<li class="menu-item"><a href="{{URL::TO('/home')}}#Project">Dự án thực hiện</a></li>
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


	<footer class="mainfooter" role="contentinfo">
		<div class="footer-middle">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="footer-pad">
							<h4 style="font-weight: bold;">VỀ CÔNG TY TNHH KHÁNH HUY</h4>
							<p style="text-align: justify;">Công ty TNHH Dịch vụ vệ sinh và Chăm sóc Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp, trồng và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,..</br> 
							Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-pad">
							<h4 style="font-weight: bold;">TẤT CẢ DỊCH VỤ</h4></br>
							<ol style="text-align: justify;" >
								<li>Thiết kế, thi công cảnh quan cây xanh, hệ thống tưới tự động.</li>
								<li>Chăm sóc, bảo dưỡng cảnh quan cây xanh, hệ thống tưới tự động.</li>
								<li>Vệ sinh công nghiệp và tư vấn trong lĩnh vực môi trường.</li>
								<li>Bán và cho thuê cây nội thất.</li>
							</ol>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-pad">
							<h4 style="font-weight: bold;">THỜI GIAN LÀM VIỆC</h4></br>
							<p>Từ 9:00 AM - 17:00 PM. Từ thứ 2 - 6 hàng tuần</p>
						</div>
						<div class="footer-pad">
							<h4 style="font-weight: bold;">LIÊN KẾT</h4>
							<ul class="list-unstyled" style="text-align: justify;" >
								<li><a href="{{URL::TO('/danh-sach-dich-vu')}}">Dịch vụ</a></li>
								<li><a href="{{URL::TO('/danh-sach-tin-tuc')}}">Tin tức</a></li>
								<li><a href="{{URL::TO('/home')}}#Project"">Dự án thực hiện</a></li>
								<li><a href="{{URL::TO('/lien-he')}}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<h4 style="font-weight: bold;">TRANG MẠNG XÃ HỘI</h4></br>
						<ul class="social-network social-circle">
							<li><a href="#" class="icoFacebook" title="Facebook"><span><i class="fa fa-facebook"></i></span> Facebook</a> </li>
							<li><a href="#" class="icoTwitter" title="Facebook"><span><i class="fa fa-twitter"></i></span> Twitter</a> </li>
							<li><a href="#" class="icoInstagram" title="Facebook"><span><i class="fa fa-instagram"></i></span> Instagram</a> </li>
							<li><a href="#" class="icoLinkedin" title="Linkedin"><span><i class="fa fa-linkedin"></i></span> Linkedin </a></li>
						</ul>				
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 copy">
						<p class="text-center">&copy; Copyright 2021 - Bản quyền thuộc Công ty TNHH Khánh Huy.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>