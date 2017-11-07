@extends('layouts.mainlayout')

@section('content')
	@parent
	<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Các chức năng chính</h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        @include('layouts.toolbar')
                        <!-- END PAGE TOOLBAR -->
	                    </div>
	                    <!-- END PAGE HEAD-->
	                    <!-- BEGIN PAGE BREADCRUMB -->
	                    
	                    <!-- END PAGE BREADCRUMB -->
	                    <!-- BEGIN PAGE BASE CONTENT -->
								<div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-widget-2">
                                                <div class="mt-head" style="background-image: url(../assets/pages/img/background/43.jpg);">
                                                    <div class="mt-head-label">
                                                        <button type="button" class="btn btn-danger">Truy cập</button>
                                                    </div>
                                                    <div class="mt-head-user">
                                                        <div class="mt-head-user-img">
                                                            <img src="../assets/pages/img/avatars/team3.jpg"> </div>
                                                        <div class="mt-head-user-info">
                                                            <span class="mt-user-name">Harry Harris</span>
                                                            <span class="mt-user-time">
                                                                <i class="icon-user"></i> 3 mins ago </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-body">
                                                    <h3 class="mt-body-title"> Quản lý điểm </h3>
                                                    <p class="mt-body-description"> Với chức năng này, admin có thể chỉnh sửa điểm của sinh viên theo yêu cầu của giảng viên</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
@endsection