@extends('admin_layout')
@section('admin_content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hồ sơ tổ chức</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Thông tin hồ sơ</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 ">
                      <div class="product-image">
                        <img src="{{asset('./public/back-end/production/images/picture.jpg')}}" alt="..." />
                      </div>
                      <br>
                      <div class="">
                        <div class="product_price">
                          <h1 class="price">Người đại diện pháp luật</h1>
                          <span class="price-tax">Họ và tên: Huỳnh Thị Mỹ Lệ<br> Chức danh: Giám  đốc  công ty<br>Điện thoại:  0917.00 54 93 - 0912.090 313.</span>
                          <br>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title">Giới thiệu</h3>
                      <p>Công ty TNHH Dịch vụ vệ sinh và Chăm sóc Khánh Huy là một công ty chuyên ngành về dịch vụ vệ sinh công nghiệp; trồng và duy trì cảnh quang,..Được thành lập theo giấy phép số 4001168316 của Sở Kế hoạch và Đầu tư Quảng Nam, trong các lĩnh vực vệ sinh công nghiệp; Dịch vụ chăm sóc và duy trì cảnh quang, tư vấn trong lĩnh vực môi trường,...<br><br>
                      Công ty TNHH Dịch vụ vệ sinh và Chăm sóc Khánh Huy là tập hợp một đội ngủ có kinh , với hơn 50 nhân viên có kinh nghiệm nhiều năm, có năng lực và luôn làm việc tận tâm, có trách nhiệm, công ty chúng tôi đã và đang đáp ứng nhu cầu đa dạng của Khách hàng với chất lượng và chi phí hợp lý nhất.
                      </p>
                      <div class="">
                        <h2>Thành lập</h2>
                        <p>Theo giấy chứng nhận đăng ký kinh doanh và đăng ký thuế số 4001168316 do phòng đăng ký kinh doanh - Sở Kế hoạch và Đầu tư tỉnh Quảng Nam cấp vào ngày 03 tháng 01 năm 2019.</p>
                      </div>
                      <div class="">
                        <h2>Thông tin giao dịch:</h2>
                        <p>+ Tài khoản số:  7747057 tại ngân hàng ACB  chi nhánh Quảng Nam<br>+ Tên tài khoản: Công ty TNHH Dịch vụ vệ sinh và Chăm sóc Khánh Huy</p>
                      </div>
                      <div class="">
                        <h2>Trụ sở chính</h2>
                        <p>- Tổ 3, Khối phố Mỹ Thạch Bắc, phường Tân Thạnh, thành phố Tam Kỳ, tỉnh Quảng Nam<br><br>
                        - Điện thoại: 0917 00 54 93 - 0912 090 313.<br><br>- Mã số thuế: 4001168316</p>
                      </div>
                      <div class="product_social">
                        <ul class="list-inline display-layout">
                          <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                          </li>
                          <li style="margin-left: 10px;"><a href="#"><i class="fa fa-twitter-square"></i></a>
                          </li>
                          <li style="margin-left: 10px;"><a href="#"><i class="fa fa-envelope-square"></i></a>
                          </li>
                          <li style="margin-left: 10px;"><a href="#"><i class="fa fa-rss-square"></i></a>
                          </li>
                          <li>
                            <button style="margin-left: 20px;" type="button" class="btn btn-success btn-md">Chỉnh sửa</button>
                          </li>
                        </ul>
                        
                      </div>
                      

                    </div>

                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection