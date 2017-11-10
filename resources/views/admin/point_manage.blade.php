@extends('layouts.mainlayout')

@section('title', 'Quản lý điểm thực tập của sinh viên')

@section('page-level-css-plugins')
	@parent
	<link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
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
                            <h1>Quản lý người dùng</h1>
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
                            <a href="/admin/dashboard">Admin</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Quản lý người dùng </span>             
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">Danh sách tất cả sinh viên</span>
                                    </div>                                    
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                        <thead>
                                            <tr>
                                                <th> MSSV</th>
                                                <th> Họ </th>
                                                <th> Tên </th>
                                                <th> Email</th>
                                                <th> Số điện thoại</th>
                                                <th> Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 01234567 </td>
                                                <td> Alex </td>
                                                <td> Nilson </td>
                                                <td> alexnilson@gmail.com </td>
                                                <td> 0123456789 </td>
                                                <td> <a class="btn btn-xs btn-success" href="/points/student">Xem <i class="fa fa-search"></i></a> </td>
                                            </tr>
                                            <tr>
                                                <td> 01444567 </td>
                                                <td> Lisa </td>
                                                <td> Wong </td>
                                                <td> lisawong@gmail.com </td>
                                                <td> 0123456789 </td>
                                                <td> <a class="btn btn-xs btn-success" href="/points/student">Xem <i class="fa fa-search"></i></a> </td> </td>
                                            </tr>
                                            <tr>
                                                <td> 45670123 </td>
                                                <td> Nick </td>
                                                <td> Roberts </td>
                                                <td> nickroberts@gmail.com </td>
                                                <td> 0123456789 </td>
                                                <td> <a class="btn btn-xs btn-success" href="">Xem <i class="fa fa-search"></i></a> </td> </td>
                                            </tr>
                                            <tr>
                                                <td> goldweb </td>
                                                <td> Sergio  </td>
                                                <td> Jackson</td>
                                                <td> goldweb@gmail.com </td>
                                                <<td> 0123456789 </td>
                                                <td> <a class="btn btn-xs btn-success" href="">Xem <i class="fa fa-search"></i></a> </td> </td>
                                            </tr>
                                            <tr>
                                                <td> alex </td>
                                                <td> Alex Nilson </td>
                                                <td> 1234 </td>
                                                <td> alexnilson@gmail.com</td>
                                                <td> 0123456789 </td>
                                                <td> <a class="btn btn-xs btn-success" href="">Xem <i class="fa fa-search"></i></a> </td> </td>
                                            </tr>
                                            <tr>
                                                <td> webriver </td>
                                                <td> Antonio Sanches </td>
                                                <td> 462 </td>
                                                <td> alexnilson@gmail.com </td>
                                                <td> 0123456789 </td>
                                                <td> <a class="btn btn-xs btn-success" href="">Xem <i class="fa fa-search"></i></a> </td> </td>
                                            </tr>
                                            <tr>
                                                <td> 12444546 </td>
                                                <td> Nick Roberts </td>
                                                <td> 62 </td>
                                                <td> gist124@gmail.com</td>
                                                <td> 0123456789 </td>
                                                <td> <a class="btn btn-xs btn-success" href="">Xem <i class="fa fa-search"></i></a> </td> </td>
                                            </tr>
                                            <tr>
                                                <td> alex </td>
                                                <td> Alex Nilson </td>
                                                <td> 1234 </td>
                                                <td> alexnilson@gmail.com </td>
                                                <td> 0123456789 </td>
                                                <td> <a class="btn btn-xs btn-success" href="">Xem <i class="fa fa-search"></i></a> </td> </td>
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
	<script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
@endsection

@section('page-level-js')
	@parent
	<script src="/asets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script>
@endsection