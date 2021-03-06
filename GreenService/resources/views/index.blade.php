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

    <link rel="shortcut icon" href="{{asset('./public/front-end/Images/favicon.jpeg')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="{{asset('./public/front-end/Css/home.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('./public/front-end/Css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600"> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="{{asset('./public/front-end/Js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('./public/front-end/Js/jquery-3.5.1.min.js')}}"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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
				<i class="fas fa-calendar-alt"></i>
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

	<div class="slide-show" id="sls-addid">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
		 		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				@php
					$i = 0;
				@endphp
				@foreach($slider as $key => $slide)
				@if($slide->slider_status == 1)
					@php
					 $i++;
					@endphp
					<div class="carousel-item {{$i == 1 ? 'active' : '' }}">
						<img src="{{URL::TO('./public/uploads/PostsBannerImg/'.$slide->slider_img)}}" class="d-block w-100" alt="slide desc img">
						<div class="carousel-caption d-none d-md-block">
							<h5 style="text-shadow: 1px 1px 10px black, 0 0 25px blue, 0 0 10px darkblue; text-align: center;align-items: center; font-weight: 900;">{{$slide->slider_name}}</h5>
						</div>
					</div>
				@endif
				@endforeach
			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div class="dich-vu-home">
		<div class="title-dich-vu" data-aos="fade-up" data-aos-duration="1000">
			<h3>D???ch v??? c???a ch??ng t??i</h3>
			<div class="img-dich-vu">
			    <img src="{{ asset('./public/front-end/Images/home/heading-line.png')}}">
		    </div>
		</div>
		<div class="list-block-dich-vu block-dich-vu-1">
			<div class="top-block-dich-vu">
				<div class="img-block-dv">
					<i class="far fa-lightbulb icon-hv-dv"></i>
				</div>
				<h3>V??? sinh c??ng nghi???p</h3>
			</div>
			<div class="bottom-block-dich-vu">
				<p>V??? sinh c??ng nghi???p l?? l??nh v???c l??m s???ch v?? cung c???p trang thi???t b???, h??a ch???t s??? d???ng trong ng??nh c??ng nghi???p l??m s???ch. Cung c???p d???ch v??? l??m s???ch cho c??c b???nh vi???n, v??n ph??ng, kh??ch s???n, t??a nh?? cao t???ng, tr?????ng h???c, h??? th???ng si??u th???, nh?? m??y, khu c??ng nghi???p</p>
			</div>
		</div>
		<div class="list-block-dich-vu block-dich-vu-2">
			<div class="top-block-dich-vu">
				<div class="img-block-dv">
					<i class="far fa-lightbulb icon-hv-dv"></i>
				</div>
				<h3>V??? sinh k??nh</h3>
			</div>
			<div class="bottom-block-dich-vu">
				<p>Nh???ng t??a nh?? cao t???ng, v???i h??ng ng??n m2 k??nh c???n ???????c v??? sinh ?????nh k??? ????? tr??nh c??c h?? h???ng, ??? m??u g??y m???t th???m m??? v?? l??m h??? th???p gi?? tr??? c???a t??a nh??.S??? d???ng d???ch v??? v??? sinh lau k??nh t??a nh?? l?? c??ch t???t nh???t ????? b???o v??? t??a nh?? c???a b???n tr??nh ???????c c??c h?? h???i kh??ng ????ng c?? trong qu?? tr??nh s??? d???ng</p>
			</div>
		</div>
		<div class="list-block-dich-vu block-dich-vu-3">
			<div class="top-block-dich-vu">
				<div class="img-block-dv">
					<i class="far fa-lightbulb icon-hv-dv"></i>
				</div>
				<h3>Tr???ng c??? nhung Nh???t</h3>
			</div>
			<div class="bottom-block-dich-vu">
				<p>C??c c??ng ty hay m???t s??? doanh nghi???p ng??y nay th?????ng s??? d???ng c??? Nhung Nh???t ????? l??m ?????p cho khu??n vi??n c???a ????n v??? m??nh. ????y l?? lo???i c??? ???????c d??ng ph??? bi???n v?? r???ng r??i, n?? l?? lo???i r???t d??? s???ng nh??ng ????? t???o ra ???????c ch???t l?????ng c??? ?????p th?? b???n c???n ph???i t??m ?????n nh???ng d???ch v??? tr???ng c??? t???i B??nh D????ng chuy??n nghi???p v?? h??? l??m ????ng theo quy tr??nh.</p>
			</div>
		</div>
		<div class="list-block-dich-vu block-dich-vu-4">
			<div class="top-block-dich-vu">
				<div class="img-block-dv">
					<i class="far fa-lightbulb icon-hv-dv"></i>
				</div>
				<h3>Tr???ng c??y & duy tr?? c???nh quan</h3>
			</div>
			<div class="bottom-block-dich-vu">
				<p>????? t???o ra ???????c m???t khu v?????n ?????p l?? ?????u kh??ng h??? d??? d??ng n?? y??u c???u ph???i c?? t??nh t??? m??? v?? k??? n??ng c???a m???t ng?????i th???, ph???i ph???i h???p h??i ho?? gi???a c???nh quan v?? b???i c???nh b??n ngo??i c?? s??? nh???t qu??n chung ????? t???o ???????c m???t kh??ng gian tho???i m??i, ?????p v?? cu???n h??t</p>
			</div>
		</div>
	</div>

	<div class="banner-1">
		<h3 data-aos="fade-up" data-aos-duration="800">M???c ti??u</h3>
		<span class="icon-banner-1" data-aos="flip-up" data-aos-duration="1700">
			<i class="fas fa-quote-left"></i> <i class="fas fa-quote-right"></i>
		</span>
		<div class="muc-tieu-banner-1" data-aos="flip-up" data-aos-duration="1700">
			<p>"V???i ph????ng ch??m ?????t ch???t l?????ng l??n h??ng ?????u, ch??ng t??i c??? g???ng mang ?????n cho qu?? kh??ch h??ng nh???ng s???n ph???m c?? ch???t l?????ng cao, d???ch v??? t???t v?? mang l???i cho qu?? kh??ch s??? h??i l??ng ti???n l???i, kinh t???."</p>
		</div>
	</div>

	<div class="li-do">
		<div class="li-do-top" data-aos="fade-up" data-aos-duration="900">
			<h3>T???i sao ch???n ch??ng t??i</h3>
			<span class="icon-li-do">
				<i class="fas fa-asterisk"></i>
			</span>
		</div>
		<div class="li-do-bottom">
			<div class="li-do-bottom-ngang ngang-1">
				<div class="block-ngang block-ngang-1-left">
					<img src="{{asset('./public/front-end/Images/home/select1.jpg')}}">
					<div class="bg-content-1-left"></div>
					<div class="content-ngang-block content-1-left">
					</div>
					<p class="tt-ld-bt-1">???????c c???p ph??p v?? b???o hi???m</p>				
				</div>
				<div class="block-ngang block-ngang-1-right">
					<img src="{{asset('./public/front-end/Images/home/select2.jpg')}}">
					<div class="bg-content-1-right"></div>
					<div class="content-ngang-block content-1-right">
					</div>
					<p class="tt-ld-bt-2">D???ch v??? tin c???y</p>					
				</div>
			</div>
			<div class="li-do-bottom-ngang ngang-2">
				<div class="block-ngang block-ngang-2-left  content-2-left">
					<img src="{{asset('./public/front-end/Images/home/select3.jpg')}}">
					<div class="bg-content-2-left"></div>
					<div class="content-ngang-block content-2-left">
					</div>
					<p class="tt-ld-bt-3">K??? s?? l??nh ngh???</p>
				</div>
				<div class="block-ngang  block-ngang-2-right  content-2-right">
					<img src="{{asset('./public/front-end/Images/home/select4.jpg')}}">
					<div class="bg-content-2-right"></div>
					<div class="content-ngang-block content-2-right">					
					</div>
					<p class="tt-ld-bt-4">C??ng ty chuy??n bi???t</p>
				</div>
			</div>
		</div>
	</div>

	<div class="count-box">
		<div class="list-count-box" data-aos="flip-up" data-aos-duration="500">
			<div class="count-icon">
				<i class="fas fa-check-circle"></i>
			</div>
			<div class="count-text">
				<h3></h3>
				<p><font id="text-ct">1311 +</font> <br>C???nh quan th???c hi???n</p>
			</div>
		</div>
		<div class="list-count-box" data-aos="flip-up" data-aos-duration="1200">
			<div class="count-icon">
				<i class="fas fa-comments"></i>
			</div>
			<div class="count-text">
				<h3></h3>
				<p><font id="text-ct">200 %</font> <br>Kh??ch h??ng h??i l??ng</p>
			</div>
		</div>
		<div class="list-count-box" data-aos="flip-up" data-aos-duration="1700">
			<div class="count-icon">
				<i class="fas fa-leaf"></i>	
			</div>
			<div class="count-text">
				<h3></h3>
				<p><font id="text-ct">4820 m2</font> <br>C??? thi??n nhi??n</p>
			</div>
		</div>
		<div class="list-count-box" data-aos="flip-up" data-aos-duration="1700">
			<div class="count-icon">
				<i class="fas fa-users"></i>
			</div>
			<div class="count-text">
				<h3></h3>
				<p><font id="text-ct">500 +</font> <br>?????i ng?? k??? s??</p>
			</div>
		</div>
	</div>

	<div class="du-an" id="Project">
		<div class="du-an-top" data-aos="fade-up" data-aos-duration="900">
			<h3>D??? ??n c???a ch??ng t??i</h3>
			<span class="icon-du-an">
				<i class="fas fa-asterisk"></i>
			</span>
		</div>
		<div class="du-an-line">
			@foreach($all_posts_project as $key => $all_project)
				@if($all_project->post_project_status == 1)
					<div class="da-line-block">
						<a style="text-decoration: none;" href="{{URL::TO('/du-an/'.$all_project->post_project_slug.'/'.$all_project->post_project_id)}}">
						<div class="line-block-img">
							<img src="{{URL::TO('./public/uploads/PostsProjectImg/'.$all_project->post_project_img)}}">
						</div>				
						<h3>{{$all_project->post_project_title}}</h3>
						</a>
						<hr>
					</div>
				@endif
			@endforeach
		</div>

	</div>

	<div class="lien-he-home">
		<h3>Nh??n vi??n c??ng ty THHH Kh??nh Huy ???????c ????o t???o ch???t l?????ng cao</h3>
		<div class="p-text-lh-home">
			<p>N???u b???n c???n d???ch v??? v??? sinh c??ng nghi???p, tr???ng c??? nhung nh???t, tr???ng v?? duy tr?? c???nh quang h??y g???i cho ch??ng t??i 0935153292 - 0935153292 <br> <font id="or-t">HO???C</font></p>
		</div>
        <a href="{{URL::TO('/lien-he')}}">
        	<div class="contact-home">
	        	<p>Li??n h??? <i class="fas fa-envelope"></i></p>
	        </div>
        </a>
	</div>

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

	
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>

	
</body>
</html>