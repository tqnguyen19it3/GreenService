<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | GreenService</title>
    <link rel="shortcut icon" href="{{asset('./public/front-end/Images/favicon.jpeg')}}">

    <!-- Bootstrap -->
    <link href="{{asset('./public/back-end/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('./public/back-end/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('./public/back-end/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('./public/back-end/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('./public/back-end/build/css/custom.min.css')}}" rel="stylesheet">

    {{-- morris chart --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{URL::TO('/admin-dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>GreenService!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('./public/back-end/images/logo.jpeg')}}" alt="avatar" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Chào mừng</span>
                <h2><?php
                        $admin_id = Session::get('admin_id');
                        $name = Session::get('admin_name');
                        if($name){
                            echo $name;
                        }
                    ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Trang chủ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::TO('/admin-dashboard')}}">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tags"></i> Quản lý giới thiệu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::TO('/add-posts-about-us')}}">Thêm bài giới thiệu</a></li>
                      <li><a href="{{URL::TO('/view-posts-about-us')}}">Quản lý giới thiệu</a></li>
                      <li><a href="{{URL::TO('/add-posts-criteria')}}">Thêm kinh nghiệm làm việc</a></li>
                      <li><a href="{{URL::TO('/all-posts-criteria')}}">Kinh nghiệm làm việc</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Bài đăng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::TO('/add-posts-service')}}">Thêm dịch vụ</a></li>
                      <li><a href="{{URL::TO('/all-posts-service')}}">Bài đăng dịch vụ</a></li>
                      <li><a href="{{URL::TO('/add-posts-news')}}">Thêm tin tức</a></li>
                      <li><a href="{{URL::TO('/all-posts-news')}}">Bài đăng tin tức</a></li>
                      <li><a href="{{URL::TO('/add-posts-project')}}">Thêm dự án</a></li>
                      <li><a href="{{URL::TO('/all-posts-project')}}">Bài đăng dự án</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>Quản lý Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::TO('/add-slider')}}">Thêm slider</a></li>
                      <li><a href="{{URL::TO('/manage-slider')}}">Quản lý slider</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Trang bổ sung <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::TO('/profile-admin/'.$admin_id)}}">Hồ sơ</a></li>
                      <li><a href="{{URL::TO('403')}}">403 Error</a></li>
                      <li><a href="{{URL::TO('404')}}">404 Error</a></li>
                      <li><a href="{{URL::TO('500')}}">500 Error</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset('./public/back-end/production/images/picture.jpg')}}" alt="avatar"><?php
                        $name = Session::get('admin_name');
                        if($name){
                            echo $name;
                        }
                    ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="{{URL::TO('/profile-admin/'.$admin_id)}}"> Hồ sơ</a>
                      <a class="dropdown-item"  href="{{URL::TO('/admin-account/'.$admin_id)}}">Đổi tài khoản</a>
                      <a class="dropdown-item"  href="{{URL::TO('/admin-logout')}}"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">1</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset('./public/back-end/production/images/picture.jpg')}}" alt="Profile Image" /></span>
                          <span>
                            <span><?php echo $name ?></span>
{{--                             <span class="time">3 mins ago</span> --}}
                          </span>
                          <span class="message">
                            Bạn vừa đăng nhập thành công vào hệ thống!
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>Xem tất cả thông báo</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
            @yield('admin_content')
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            GreenService - <a href="{{URL::TO('/admin-dashboard')}}">Dịch vụ vệ sinh & chăm sóc cây xanh Khánh Huy</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('./public/back-end/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('./public/back-end/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- FastClick -->
    <script src="{{asset('./public/back-end/vendors/fastclick/lib/fastclick.js')}}"></script>

    <!-- NProgress -->
    <script src="{{asset('./public/back-end/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('./public/back-end/vendors/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('./public/back-end/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{asset('./public/back-end/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
    <script src="{{asset('./public/back-end/vendors/switchery/dist/switchery.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('./public/back-end/build/js/custom.min.js')}}"></script>
    <script src="{{asset('./public/back-end/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript"> //morris donut
        var colorDanger = "#FF1744";
        var donut = Morris.Donut({
          element: 'donut_chart',
          resize: true,
          colors: [
            '#FF5162',
            '#FF8E51',
            '#BE6DE3',
            '#00CBFF'
          ],
          //labelColor:"#cccccc", // text color
          //backgroundColor: '#333333', // border color
          data: [
            {label:"Dịch vụ", value:<?php echo $post_service_donut; ?>},
            {label:"Tin tức", value:<?php echo $post_news_donut; ?>},
            {label:"Dự án", value:<?php echo $post_project_donut; ?>},
            {label:"Slider", value:<?php echo $banner_slider_donut; ?>}
          ]
    });
    </script>
    <script type="text/javascript">
      CKEDITOR.replace('ckeditor',{

        filebrowserImageUploadUrl : "{{url('upload-ckeditor?_token='.csrf_token())}}",
        filebrowserBrowseUrl : "{{url('file-browser?_token='.csrf_token())}}",
        filebrowserUploadMethod : 'form' 

      });
      CKEDITOR.replace('ckeditor1',{

        filebrowserImageUploadUrl : "{{URL('upload-ckeditor1?_token='.csrf_token())}}",
        filebrowserBrowseUrl : "{{URL('file-browser1?_token='.csrf_token())}}",
        filebrowserUploadMethod : 'form' 

      });
      CKEDITOR.replace('ckeditor2',{

        filebrowserImageUploadUrl : "{{url('upload-ckeditor2?_token='.csrf_token())}}",
        filebrowserBrowseUrl : "{{url('file-browser2?_token='.csrf_token())}}",
        filebrowserUploadMethod : 'form' 
        
      });

      CKEDITOR.replace('ckeditor3',{

        filebrowserImageUploadUrl : "{{url('upload-ckeditor3?_token='.csrf_token())}}",
        filebrowserBrowseUrl : "{{url('file-browser3?_token='.csrf_token())}}",
        filebrowserUploadMethod : 'form' 
        
      });

      CKEDITOR.replace('ckeditor4',{

        filebrowserImageUploadUrl : "{{url('upload-ckeditor4?_token='.csrf_token())}}",
        filebrowserBrowseUrl : "{{url('file-browser4?_token='.csrf_token())}}",
        filebrowserUploadMethod : 'form' 
        
      });

      CKEDITOR.replace('ckeditor5',{

        filebrowserImageUploadUrl : "{{url('upload-ckeditor5?_token='.csrf_token())}}",
        filebrowserBrowseUrl : "{{url('file-browser5?_token='.csrf_token())}}",
        filebrowserUploadMethod : 'form' 
        
      });
    </script>

    <script type="text/javascript">
    function ChangeToSlug()
        {
            var slug;
         
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|ä/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ö|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|ü/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');

                slug = slug.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Ä/gi, 'A');
                slug = slug.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/gi, 'E');
                slug = slug.replace(/Ì|Í|Ị|Ỉ|Ĩ/gi, 'I');
                slug = slug.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ö/gi, 'O');
                slug = slug.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|Ü/gi, 'U');
                slug = slug.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/gi, 'Y');
                slug = slug.replace(/Đ/gi, 'D');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <script type="text/javascript">
        $(document).ready(function() {
            
            company_profile_load();

            function company_profile_load(){
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url:"{{url('/select-company-profile')}}",
                    method:"POST",
                    data:{_token:_token},
                    success:function(data){

                        $('#company_profile_load').html(data);

                    }
                });
            }

            $(document).on('blur', '.edit_name_manager', function(){
                var com_pro_id = $('.edit_name_manager').data('company_id');
                var com_pro_name = $('.edit_name_manager').text();
                var _token = $('input[name="_token"]').val();
                // alert(com_pro_id);
                // alert(com_pro_name);
                $.ajax({
                    url:"{{url('/update-name-manager-company-profile')}}",
                    method:"POST",
                    data:{com_pro_id:com_pro_id,com_pro_name:com_pro_name,_token:_token},
                    success:function(data){

                        company_profile_load();
                        // $('#error_gal_pro').html('<strong class="text-success">Cập nhật tên thành công!</strong>');
                        alert('Cập nhật thành công!');
                    }
                }); 
            });

            $(document).on('blur', '.edit_email_manager', function(){
                var com_pro_id = $('.edit_email_manager').data('company_id');
                var com_pro_email = $('.edit_email_manager').text();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url:"{{url('/update-email-manager-company-profile')}}",
                    method:"POST",
                    data:{com_pro_id:com_pro_id,com_pro_email:com_pro_email,_token:_token},
                    success:function(data){

                        company_profile_load();
                        alert('Cập nhật thành công!');

                    }
                }); 
            });

            $(document).on('blur', '.edit_phone_manager', function(){
                var com_pro_id = $('.edit_phone_manager').data('company_id');
                var com_pro_phone = $('.edit_phone_manager').text();
                var _token = $('input[name="_token"]').val();
                // alert(com_pro_id);
                // alert(com_pro_name);
                $.ajax({
                    url:"{{url('/update-phone-manager-company-profile')}}",
                    method:"POST",
                    data:{com_pro_id:com_pro_id,com_pro_phone:com_pro_phone,_token:_token},
                    success:function(data){

                        company_profile_load();
                        alert('Cập nhật thành công!');

                    }
                }); 
            });

            $(document).on('blur', '.edit_position_manager', function(){
                var com_pro_id = $('.edit_position_manager').data('company_id');
                var com_pro_position = $('.edit_position_manager').text();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url:"{{url('/update-position-manager-company-profile')}}",
                    method:"POST",
                    data:{com_pro_id:com_pro_id,com_pro_position:com_pro_position,_token:_token},
                    success:function(data){

                        company_profile_load();
                        alert('Cập nhật thành công!');

                    }
                }); 
            });

            $(document).on('blur', '.edit_desc_manager', function(){
                var com_pro_id = $('.edit_desc_manager').data('company_id');
                var com_pro_desc = $('.edit_desc_manager').text();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url:"{{url('/update-desc-manager-company-profile')}}",
                    method:"POST",
                    data:{com_pro_id:com_pro_id,com_pro_desc:com_pro_desc,_token:_token},
                    success:function(data){

                        company_profile_load();
                        alert('Cập nhật thành công!');

                    }
                }); 
            });
        });
</script>
  </body>
</html>
