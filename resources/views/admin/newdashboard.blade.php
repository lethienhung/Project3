@extends('layouts.mainlayout')

@section('title', 'Quản trị hệ thống')

@section('page-level-css')
    <link href="/assets/pages/css/about.min.css" rel="stylesheet" type="text/css" />
@endsection

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
							<div class="row margin-bottom-20">
                        <div class="col-lg-3 col-md-6">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <a href="/admin/users"><i class="icon-user-follow font-red-sunglo theme-font"></i></a>
                                </div>
                                <div class="card-title">
                                    <span> Quản lý người dùng </span>
                                </div>
                                <div class="card-desc">
                                    <span> Với chức năng này
                                        <br> quản trị viên có thể đăng ký thêm người dùng, xóa người dùng, chỉnh sửa quyền truy cập </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <a href="points"><i class="icon-trophy font-green-haze theme-font"></i></a>
                                </div>
                                <div class="card-title">
                                    <span> Quản lý điểm </span>
                                </div>
                                <div class="card-desc">
                                    <span> Với chức năng này
                                        <br> quản trị viên có thể chỉnh sửa điểm của sinh viên theo yêu cầu của giảng viên </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
@endsection