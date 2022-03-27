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
			<h3>Dịch vụ của chúng tôi</h3>
			<div class="img-dich-vu">
			    <img src="{{ asset('./public/front-end/Images/home/heading-line.png')}}">
		    </div>
		</div>
		<div class="list-block-dich-vu block-dich-vu-1">
			<div class="top-block-dich-vu">
				<div class="img-block-dv">
					<i class="far fa-lightbulb icon-hv-dv"></i>
				</div>
				<h3>Vệ sinh công nghiệp</h3>
			</div>
			<div class="bottom-block-dich-vu">
				<p>Vệ sinh công nghiệp là lĩnh vực làm sạch và cung cấp trang thiết bị, hóa chất sữ dụng trong ngành công nghiệp làm sạch. Cung cấp dịch vụ làm sạch cho các bệnh viện, văn phòng, khách sạn, tòa nhà cao tầng, trường học, hệ thống siêu thị, nhà máy, khu công nghiệp</p>
			</div>
		</div>
		<div class="list-block-dich-vu block-dich-vu-2">
			<div class="top-block-dich-vu">
				<div class="img-block-dv">
					<i class="far fa-lightbulb icon-hv-dv"></i>
				</div>
				<h3>Vệ sinh kính</h3>
			</div>
			<div class="bottom-block-dich-vu">
				<p>Những tòa nhà cao tầng, với hàng ngàn m2 kính cần được vệ sinh định kỳ để tránh các hư hỏng, ố màu gây mất thẩm mỹ và làm hạ thấp giá trị của tòa nhà.Sử dụng dịch vụ vệ sinh lau kính tòa nhà là cách tốt nhất để bảo vệ tòa nhà của bạn tránh được các hư hại không đáng có trong quá trình sử dụng</p>
			</div>
		</div>
		<div class="list-block-dich-vu block-dich-vu-3">
			<div class="top-block-dich-vu">
				<div class="img-block-dv">
					<i class="far fa-lightbulb icon-hv-dv"></i>
				</div>
				<h3>Trồng cỏ nhung Nhật</h3>
			</div>
			<div class="bottom-block-dich-vu">
				<p>Các công ty hay một số doanh nghiệp ngày nay thường sử dụng cỏ Nhung Nhật để làm đẹp cho khuân viên của đơn vị mình. Đây là loại cỏ được dùng phổ biến và rộng rãi, nó là loại rất dễ sống nhưng để tạo ra được chất lượng cỏ đẹp thì bạn cần phải tìm đến những dịch vụ trồng cỏ tại Bình Dương chuyên nghiệp vì họ làm đúng theo quy trình.</p>
			</div>
		</div>
		<div class="list-block-dich-vu block-dich-vu-4">
			<div class="top-block-dich-vu">
				<div class="img-block-dv">
					<i class="far fa-lightbulb icon-hv-dv"></i>
				</div>
				<h3>Trồng cây & duy trì cảnh quan</h3>
			</div>
			<div class="bottom-block-dich-vu">
				<p>Để tạo ra được một khu vườn đẹp là đều không hề dễ dàng nó yêu cầu phải có tính tỉ mỉ và kỹ năng của một người thợ, phải phối hợp hài hoà giữa cảnh quan và bối cảnh bên ngoài có sự nhất quán chung để tạo được một không gian thoải mái, đẹp và cuốn hút</p>
			</div>
		</div>
	</div>

	<div class="banner-1">
		<h3 data-aos="fade-up" data-aos-duration="800">Mục tiêu</h3>
		<span class="icon-banner-1" data-aos="flip-up" data-aos-duration="1700">
			<i class="fas fa-quote-left"></i> <i class="fas fa-quote-right"></i>
		</span>
		<div class="muc-tieu-banner-1" data-aos="flip-up" data-aos-duration="1700">
			<p>"Với phương châm đặt chất lượng lên hàng đầu, chúng tôi cố gắng mang đến cho quý khách hàng những sản phẩm có chất lượng cao, dịch vụ tốt và mang lại cho quý khách sự hài lòng tiện lợi, kinh tế."</p>
		</div>
	</div>

	<div class="li-do">
		<div class="li-do-top" data-aos="fade-up" data-aos-duration="900">
			<h3>Tại sao chọn chúng tôi</h3>
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
					<p class="tt-ld-bt-1">Được cấp phép và bảo hiểm</p>				
				</div>
				<div class="block-ngang block-ngang-1-right">
					<img src="{{asset('./public/front-end/Images/home/select2.jpg')}}">
					<div class="bg-content-1-right"></div>
					<div class="content-ngang-block content-1-right">
					</div>
					<p class="tt-ld-bt-2">Dịch vụ tin cậy</p>					
				</div>
			</div>
			<div class="li-do-bottom-ngang ngang-2">
				<div class="block-ngang block-ngang-2-left  content-2-left">
					<img src="{{asset('./public/front-end/Images/home/select3.jpg')}}">
					<div class="bg-content-2-left"></div>
					<div class="content-ngang-block content-2-left">
					</div>
					<p class="tt-ld-bt-3">Kỹ sư lành nghề</p>
				</div>
				<div class="block-ngang  block-ngang-2-right  content-2-right">
					<img src="{{asset('./public/front-end/Images/home/select4.jpg')}}">
					<div class="bg-content-2-right"></div>
					<div class="content-ngang-block content-2-right">					
					</div>
					<p class="tt-ld-bt-4">Công ty chuyên biệt</p>
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
				<p><font id="text-ct">1311 +</font> <br>Cảnh quan thực hiện</p>
			</div>
		</div>
		<div class="list-count-box" data-aos="flip-up" data-aos-duration="1200">
			<div class="count-icon">
				<i class="fas fa-comments"></i>
			</div>
			<div class="count-text">
				<h3></h3>
				<p><font id="text-ct">200 %</font> <br>Khách hàng hài lòng</p>
			</div>
		</div>
		<div class="list-count-box" data-aos="flip-up" data-aos-duration="1700">
			<div class="count-icon">
				<i class="fas fa-leaf"></i>	
			</div>
			<div class="count-text">
				<h3></h3>
				<p><font id="text-ct">4820 m2</font> <br>Cỏ thiên nhiên</p>
			</div>
		</div>
		<div class="list-count-box" data-aos="flip-up" data-aos-duration="1700">
			<div class="count-icon">
				<i class="fas fa-users"></i>
			</div>
			<div class="count-text">
				<h3></h3>
				<p><font id="text-ct">500 +</font> <br>Đội ngũ kỹ sư</p>
			</div>
		</div>
	</div>

	<div class="du-an" id="Project">
		<div class="du-an-top" data-aos="fade-up" data-aos-duration="900">
			<h3>Dự án của chúng tôi</h3>
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
		<h3>Nhân viên công ty THHH Khánh Huy được đào tạo chất lượng cao</h3>
		<div class="p-text-lh-home">
			<p>Nếu bạn cần dịch vụ vệ sinh công nghiệp, trồng cỏ nhung nhật, trồng và duy trì cảnh quang hãy gọi cho chúng tôi 0935153292 - 0935153292 <br> <font id="or-t">HOẶC</font></p>
		</div>
        <a href="{{URL::TO('/lien-he')}}">
        	<div class="contact-home">
	        	<p>Liên hệ <i class="fas fa-envelope"></i></p>
	        </div>
        </a>
	</div>

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

	
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>

	
</body>
</html>