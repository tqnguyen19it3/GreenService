@extends('admin_layout')
@section('admin_content')  
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tất cả <small>bài viết dịch vụ</small></h3>
              </div>
            </div>
            
            
            <div class="clearfix"></div>
                  <?php
                      $message = Session::get('message');
                      if($message){
                        echo "<div class='alert alert-success alert-dismissible fade show'>";
                          echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>" ;
                          echo "<strong>Thành Công! </strong>".$message;
                        echo "</div>";
                        Session::put('message', null);
                      }
                  ?>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bài viết dịch Vụ</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Bảng đơn giản với danh sách dịch vụ với các tùy chọn mô tả và chỉnh sửa</p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Tên nội dung dịch vụ</th>
                          <th>Hình ảnh dịch vụ</th>
                          <th>Mô tả dịch vụ</th>
                          <th>Ngày thêm</th>
                          <th>Chế độ hiển thị</th>
                          <th style="width: 20%">#Hành động</th>
                        </tr>
                      </thead>
                      @foreach($all_posts_service as $key => $list_post_service)
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            {{$list_post_service->post_service_title}}
                            <br />
                            <small>ID: {{$list_post_service->post_service_id}}</small>
                          </td>
                          <td>
                            <img src="{{URL::TO('./public/uploads/PostsServiceImg/'.$list_post_service->post_service_img)}}" width="100" height="100" alt="Service IMG">
                          </td>
                          <td class="project_progress" style="width: 35%;">
                            {{$list_post_service->post_service_desc}}
                          </td>
                          <td class="project_progress" style="width: 35%;">
                            {{$list_post_service->post_service_date}}
                          </td>
                          <td>
                            <?php
                              if($list_post_service->post_service_status == 1){
                            ?>
                              <a href="{{URL::TO('/unactive-posts-service/'.$list_post_service->post_service_id)}}"><i class="fa fa-toggle-on" style="font-size: 25px; color: green;"> Hiện</i></a>
                            <?php
                              }else{
                            ?>
                              <a href="{{URL::TO('/active-posts-service/'.$list_post_service->post_service_id)}}"><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Ẩn</i></a>
                            <?php
                              }
                            ?>
                          </td>
                          <td>
                            <a href="{{URL::TO('/view-posts-service/'.$list_post_service->post_service_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View </a>
                            <a href="{{URL::TO('/edit-posts-service/'.$list_post_service->post_service_id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                            <a href="{{URL::TO('/delete-posts-service/'.$list_post_service->post_service_id)}}" onclick="return confirm('Bạn có chắc muốn xóa bài viết dịch vụ này?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    <ul class="pagination">
                      <li class="page-item">{!!$all_posts_service->links("pagination::bootstrap-4")!!}</li>
                    </ul>
                    <!-- end project list -->
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection