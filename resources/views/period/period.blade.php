@extends('layouts.mainlayout')

@section('title', 'Chi tiết đợt thực tập')

@section('pageplugins1')
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
                            <h1>Bootstrap Form Validation
                                <small>boottrap form validation demos using jquery validation plugin</small>
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
                            <a href="/index">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="">Quản lý đợt thực tập</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Chi tiết đợt</span>                            
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="m-heading-1 border-green m-bordered">
                        <?php
                            $period = DB::table('periods')->where('id', '=', $period_id)->first();
                        ?>
                        <h3>{{$period->name}}</h3>
                        <p>Start from: {{$period->start_date}} To: {{$period->end_date}}</p>
                        <p> When displaying tables with a particularly large amount of data shown on each page, it can be useful to have the table's header and / or footer fixed to the top or bottom of the scrolling window. This lets your users quickly determine
                            what each column refers to rather than needing to scroll back to the top of the table. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-purple-soft"></i>
                                        <span class="caption-subject font-purple-soft bold uppercase">{{$period->name}}</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab"> Thêm sinh viên vào đợt thực tập </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab"> Xóa sinh viên khỏi đợt thực tập </a>
                                        </li>                                        
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab_1_1">
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                                                    <thead>
                                                        <tr class="">
                                                            <th> MSSV</th>
                                                            <th> Họ</th>
                                                            <th> Tên</th>
                                                            <th> Ngày sinh</th>
                                                            <th> Giới tính</th>
                                                            <th> Email</th>
                                                            <th> Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($students as $student)
                                                        <tr>
                                                            <td> {{$student->student_id}} </td>
                                                            <td> {{$student->last_name}} </td>
                                                            <td> {{$student->first_name}}</td>
                                                            <td> {{$student->date_of_birth}}</td>
                                                            <td> {{$student->gender}}</td>
                                                            <td> {{$student->email}}</td>
                                                            <td> <span class="btn btn-sm btn-success">Thêm</span> 
                                                            </td>
                                                        </tr>
                                                    @endforeach                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_1_2">
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                                    <thead>
                                                        <tr class="">
                                                            <th> MSSV</th>
                                                            <th> Họ</th>
                                                            <th> Tên</th>
                                                            <th> Ngày sinh</th>
                                                            <th> Giới tính</th>
                                                            <th> Email</th>
                                                            <th> Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                                            
                                                        @foreach($studentsInPeriod as $student)
                                                        <tr>
                                                            <td> {{$student->student_id}} </td>
                                                            <td> {{$student->last_name}} </td>
                                                            <td> {{$student->first_name}}</td>
                                                            <td> {{$student->date_of_birth}}</td>
                                                            <td> {{$student->gender}}</td>
                                                            <td> {{$student->email}}</td>
                                                            <td> <span class="btn btn-sm btn-warning">Xóa</span> 
                                                            </td>
                                                        </tr>
                                                    @endforeach                                                        
                                                    </tbody>
                                                </table>
                                            </div>
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

@section('pageplugins2')
	@parent
	<script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
@endsection

@section('pagescript')
	@parent
	<script src="/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>
@endsection