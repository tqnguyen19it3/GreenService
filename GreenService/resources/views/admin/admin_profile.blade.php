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
                    <form>
                      {{csrf_field()}} 
                        <div id="company_profile_load">
                                    
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection