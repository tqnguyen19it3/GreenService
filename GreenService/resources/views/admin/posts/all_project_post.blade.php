@extends('admin_layout')
@section('admin_content')  
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tất cả <small>bài viết dự án</small></h3>
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
                    <h2>Bài viết dự án</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Bảng đơn giản với danh sách dự án với các tùy chọn mô tả và chỉnh sửa</p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Dự án</th>
                          <th>Hình ảnh dự án</th>
                          <th>Mô tả dự án</th>
                          <th>Từ khóa</th>
                          <th>Chế độ hiển thị</th>
                          <th style="width: 20%">#Hành động</th>
                        </tr>
                      </thead>
                      @foreach($all_posts_project as $key => $list_post_project)
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            {{$list_post_project->post_project_title}}
                            <br />
                            <small>ID: {{$list_post_project->post_project_id}}</small>
                          </td>
                          <td>
                            <img src="{{URL::TO('./public/uploads/PostsProjectImg/'.$list_post_project->post_project_img)}}" width="100" height="100" alt="project IMG">
                          </td>
                          <td class="project_progress" style="width: 35%;">
                            {{$list_post_project->post_project_desc}}
                          </td>
                          <td class="project_progress" style="width: 35%;">
                            {{$list_post_project->post_project_metakeyword}}
                          </td>
                          <td>
                            <?php
                              if($list_post_project->post_project_status == 1){
                            ?>
                              <a href="{{URL::TO('/unactive-posts-project/'.$list_post_project->post_project_id)}}"><i class="fa fa-toggle-on" style="font-size: 25px; color: green;"> Hiện</i></a>
                            <?php
                              }else{
                            ?>
                              <a href="{{URL::TO('/active-posts-project/'.$list_post_project->post_project_id)}}"><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Ẩn</i></a>
                            <?php
                              }
                            ?>
                          </td>
                          <td>
                            <a href="{{URL::TO('/view-posts-project/'.$list_post_project->post_project_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View </a>
                            <a href="{{URL::TO('/edit-posts-project/'.$list_post_project->post_project_id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                           <a href="{{URL::TO('/delete-posts-project/'.$list_post_project->post_project_id)}}" onclick="return confirm('Bạn có chắc muốn xóa bài viết dự án này?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    <ul class="pagination">
                      @if ($currentPage > 1 && $countPage > 1)
                      <li class="page-item"><a class="page-link" href="{{URL::TO('/all-posts-project/'.($currentPage-1))}}">Trước</a></li>
                      @endif
                      @for ($i = 1; $i <= $countPage; $i ++)
                        @if ($i == $currentPage)
                          <li class="page-item"><a class="page-link" style="background: #ffcc33; color: #fff;">{{$i}}</a></li>
                        @else
                          <li class="page-item"><a class="page-link" href="{{URL::TO('/all-posts-project/'.$i)}}">{{$i}}</a></li>
                        @endif
                      @endfor
                      @if ($currentPage < $countPage && $countPage > 1)
                      <li class="page-item"><a class="page-link" href="{{URL::TO('/all-posts-project/'.($currentPage+1))}}">Sau</a></li>
                      @endif
                    </ul>
                    <!-- end project list -->
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection