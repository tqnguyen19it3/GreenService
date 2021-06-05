@extends('admin_layout')
@section('admin_content')
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tất cả <small>danh mục</small></h3>
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
                    <h2>Danh Mục Dịch Vụ</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Bảng đơn giản với danh sách danh mục dịch vụ với các tùy chọn mô tả và chỉnh sửa</p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects" id="myTable">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Danh mục dịch vụ</th>
                          <th>Mô tả danh mục dịch vụ</th>
                          <th>Chế độ hiển thị</th>
                          <th style="width: 20%">#Hành động</th>
                        </tr>
                      </thead>
                      @foreach($category_service as $key => $list_service)
                      <tbody> 
                        <tr>
                          <td>#</td>
                          <td>
                            {{$list_service->cate_service_name}}
                            <br />
                            <small>ID: {{$list_service->cate_service_id}}</small>
                          </td>
                          <td class="project_progress" style="width: 35%;">
                            {{$list_service->cate_service_desc}}
                          </td>
                          <td>
                           <?php
                              if($list_service->cate_service_status == 1){
                            ?>
                              <a href="{{URL::TO('/unactive-cate-posts-service/'.$list_service->cate_service_id)}}"><i class="fa fa-toggle-on" style="font-size: 25px; color: green;"> Hiện</i></a>
                            <?php
                              }else{
                            ?>
                              <a href="{{URL::TO('/active-cate-posts-service/'.$list_service->cate_service_id)}}"><i class="fa fa-toggle-off" style="font-size: 25px; color: grey;"> Ẩn</i></a>
                            <?php
                              }
                            ?>
                          </td>
                          <td>
                            <a href="{{URL::TO('/edit-cate-service/'.$list_service->cate_service_id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                            <a href="{{URL::TO('/delete-cate-service/'.$list_service->cate_service_id)}}" onclick="return confirm('Bạn có chắc muốn xóa danh mục dịch vụ này?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
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