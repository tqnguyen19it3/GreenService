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
				<p>C??ng ty</p>
			</div>
			<div class="menu-name-2">
				<h3>Kh??nh Huy</h3>
			</div>
		</div>
		<div class="menu-tags">
			<ul>
				<li class="home"><a href="{{URL::TO('/home')}}">Trang ch???</a></li>
				<li class="cool-link">
					<a style="cursor: pointer;">Gi???i thi???u</a>
					<ul class="nav-sub">
						<li>
							<a href="{{URL::TO('/gioi-thieu')}}">Gi???i thi???u chung</a>
						</li>
						<li>
							<a href="{{URL::TO('/kinh-nghiem-nang-luc')}}">Kinh nghi???m n??ng l???c</a>
						</li>
					</ul>
				</li>
				<li class="cool-link"><a href="{{URL::TO('/danh-sach-dich-vu')}}">D???ch V???</a></li>
				<li class="cool-link"><a href="{{URL::TO('/danh-sach-tin-tuc')}}">Tin t???c</a></li>
				<li class="cool-link"><a href="{{URL::TO('/home')}}#Project">D??? ??n th???c hi???n</a></li>
				<li class="cool-link"><a href="{{URL::TO('/lien-he')}}">Li??n h???</a></li>
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
			<li class="menu-item"><a href="{{URL::TO('/home')}}">Trang ch???</a></li>
			<li class="menu-item"><a href="{{URL::TO('/gioi-thieu')}}">Gi???i thi???u</a></li>
			<li class="menu-item"><a href="{{URL::TO('/kinh-nghiem-nang-luc')}}">Kinh nghi???m n??ng l???c</a></li>
			<li class="menu-item"><a href="{{URL::TO('/danh-sach-dich-vu')}}">D???ch v???</a></li>
			<li class="menu-item"><a href="{{URL::TO('/danh-sach-tin-tuc')}}">Tin t???c</a></li>
			<li class="menu-item"><a href="{{URL::TO('/home')}}#Project">D??? ??n th???c hi???n</a></li>
			<li class="menu-item"><a href="{{URL::TO('/lien-he')}}">Li??n h???</a></li>
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
							<h4 style="font-weight: bold;">V??? C??NG TY TNHH KH??NH HUY</h4>
							<p style="text-align: justify;">C??ng ty TNHH D???ch v??? v??? sinh v?? Ch??m s??c Kh??nh Huy l?? m???t c??ng ty chuy??n ng??nh v??? d???ch v??? v??? sinh c??ng nghi???p, tr???ng v?? duy tr?? c???nh quang, t?? v???n trong l??nh v???c m??i tr?????ng,..</br> 
							???????c th??nh l???p theo gi???y ph??p s??? 4001168316 c???a S??? K??? ho???ch v?? ?????u t?? Qu???ng Nam, trong c??c l??nh v???c v??? sinh c??ng nghi???p.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-pad">
							<h4 style="font-weight: bold;">T???T C??? D???CH V???</h4></br>
							<ol style="text-align: justify;" >
								<li>Thi???t k???, thi c??ng c???nh quan c??y xanh, h??? th???ng t?????i t??? ?????ng.</li>
								<li>Ch??m s??c, b???o d?????ng c???nh quan c??y xanh, h??? th???ng t?????i t??? ?????ng.</li>
								<li>V??? sinh c??ng nghi???p v?? t?? v???n trong l??nh v???c m??i tr?????ng.</li>
								<li>B??n v?? cho thu?? c??y n???i th???t.</li>
							</ol>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-pad">
							<h4 style="font-weight: bold;">TH???I GIAN L??M VI???C</h4></br>
							<p>T??? 9:00 AM - 17:00 PM. T??? th??? 2 - 6 h??ng tu???n</p>
						</div>
						<div class="footer-pad">
							<h4 style="font-weight: bold;">LI??N K???T</h4>
							<ul class="list-unstyled" style="text-align: justify;" >
								<li><a href="{{URL::TO('/danh-sach-dich-vu')}}">D???ch v???</a></li>
								<li><a href="{{URL::TO('/danh-sach-tin-tuc')}}">Tin t???c</a></li>
								<li><a href="{{URL::TO('/home')}}#Project"">D??? ??n th???c hi???n</a></li>
								<li><a href="{{URL::TO('/lien-he')}}">Li??n h???</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<h4 style="font-weight: bold;">TRANG M???NG X?? H???I</h4></br>
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
						<p class="text-center">&copy; Copyright 2021 - B???n quy???n thu???c C??ng ty TNHH Kh??nh Huy.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>