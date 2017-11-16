@extends('layouts.mainlayout')

@section('title', 'Đánh giá chấm điểm sinh viên ')

@section('page-level-css-plugins')
	@parent
	<link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('page-level-css')
	@parent
	<link href="/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/apps/css/ticket.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	@parent
    @include('layouts.sidebar_lecturer')
	<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Quản lý điểm
                                <small>abc</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        @include('layouts.toolbar')
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="home">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="home">Quản lý điểm sinh viên</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="/studentlist">Danh sách các sinh viên</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Đánh giá chấm điểm sinh viên</span>                            
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-4">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet bordered">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> Lê Thiện Hưng </div>
                                        <div class="profile-usertitle-job"> 20138677 </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- PORTLET MAIN -->
             
                            <!-- END PORTLET MAIN -->
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- END PROFILE CONTENT -->
                        </div>

                        <div class="col-md-8">
                        	<div class="portlet light bordered">
                                <div>
                                    <h4 class="profile-desc-title"><i class="fa fa-user-md"></i> Thông tin cá nhân</h4>
                                    <span class="profile-desc-text"> Sinh viên trường Đại học Bách Khoa Hà Nội </span>
                                    <div class="margin-top-20 profile-desc-link">
                                        <a>Họ và tên: Lê Thiện Hưng</a>
                                    </div>
                                    <div class="margin-top-20 profile-desc-link">
                                        <a>MSSV: 20138677</a>
                                    </div>
                                    <div class="margin-top-20 profile-desc-link">
                                        <a>Lớp: LTU12A</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN TICKET LIST CONTENT -->
                    <div class="row">
                    	<div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Lịch sử điểm của sinh viên</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr class="">
                                                <th> Tên đợt thực tập</th>
                                                <th> Thời gian bắt đầu</th>
                                                <th> Thời gian kết thúc</th>
                                                <th> Tình trạng</th>
                                                <th> Điểm quá trình</th>
                                                <th> Điểm tổng</th>
                                                <th> Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> Đợt 2  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> <span class="label label-sm label-success">Finished</span></td>
                                                <td> A </td>
                                                <td> A </td>
                                                <td> <a class="btn btn-sm btn-success" href="/studentlist/student/mark">Xem</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
@endsection

@section('page-level-js-plugins')
	@parent
	<script src="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
@endsection

@section('page-level-js')
	@parent
	<script src="/assets/pages/scripts/profile.min.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
@endsection