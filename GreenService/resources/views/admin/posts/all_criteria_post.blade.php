@extends('admin_layout')
@section('admin_content')  
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tất cả <small>kinh nghiệm năng lực làm việc</small></h3>
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
                    <h2>Kinh nghiệm năng lực làm việc</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Bảng đơn giản với danh sách kinh nghiệm năng lực làm việc với các tùy chọn mô tả và chỉnh sửa</p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">ID</th>
                          <th>Hình ảnh kinh nghiệm năng lực</th>
                          <th>Nội dung kinh nghiệm năng lực</th>
                          <th>Hiển thị</th>
                          <th style="width: 20%">#Hành động</th>
                        </tr>
                      </thead>
                      @foreach($all_posts_criteria as $key => $list_post_criteria)
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            ID: {{$list_post_criteria->post_criteria_id}}
                          </td>
                          <td>
                            <img src="{{URL::TO('./public/uploads/PostsCriteriaImg/'.$list_post_criteria->post_criteria_img)}}" width="100" height="100" alt="criteria IMG">
                          </td>
                          <td class="project_progress" style="width: 35%;">
                            {!!$list_post_criteria->post_criteria_content!!}
                          </td>
                          <td>
                            <?php
                              if($list_post_criteria->post_criteria_status == 1){
                            ?>
                              <a href="{{URL::TO('/unactive-posts-criteria/'.$list_post_criteria->post_criteria_id)}}"><i class="fa fa-toggle-on" style="font-size: 25px; color: green;"> Hiện</i></a>
                            <?php
                              }else{
                            ?>
                              <a href="{{URL::TO('/active-posts-criteria/'.$list_post_criteria->post_criteria_id)}}"><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Ẩn</i></a>
                            <?php
                              }
                            ?>
                          </td>
                          <td>
                            <a href="{{URL::TO('/edit-posts-criteria/'.$list_post_criteria->post_criteria_id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                            <a href="{{URL::TO('/delete-posts-criteria/'.$list_post_criteria->post_criteria_id)}}" onclick="return confirm('Bạn có chắc muốn xóa kinh nghiệm năng lực này ở trang chính?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    <!-- end project list -->
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection