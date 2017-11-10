@extends('layouts.mainlayout')

@section('title', 'So khớp')

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
                            <a href="">Quản lý thực tập</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">So khớp</span>                            
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="m-heading-1 border-green m-bordered">
                        Du ma
                        <h3>Du ma</h3>
                        <p> When displaying tables with a particularly large amount of data shown on each page, it can be useful to have the table's header and / or footer fixed to the top or bottom of the scrolling window. This lets your users quickly determine
                            what each column refers to rather than needing to scroll back to the top of the table. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-purple-soft"></i>
                                        <span class="caption-subject font-purple-soft bold uppercase">So khớp</span>
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
                                            <a href="#tab_1_1" data-toggle="tab"> So khớp mức 1 </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab"> So khớp mức 2 </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_3" data-toggle="tab"> So khớp mức 3 </a>
                                        </li>                                         
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab_1_1">
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                                    <thead>
                                                        <tr class="">
                                                            <th> MSSV</th>
                                                            <th> Tên SV</th>
                                                            <th> Công ty</th>
                                                            <th> Đề tài</th>
                                                            <th> Lĩnh vực</th>
                                                            <th> Kỹ năng</th>
                                                            <th> Cấp độ</th>
                                                            <th> Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($matchingFull as $matchFull)
                                                        <tr>
                                                            <td>{{$matchFull['student_id']}}</td>
                                                            <td>{{$matchFull['name']}}</td>
                                                            <td>{{$matchFull['company_name']}}</td>
                                                            <td>{{$matchFull['title']}}</td>
                                                            <td>{{$matchFull['field_name']}}</td>
                                                            <td>{{$matchFull['skills_name']}}</td>
                                                            <td>{{$matchFull['level_name']}}</td>
                                                            <td> 
                                                                <span class="btn btn-xs btn-success">Chấp nhận</span>
                                                                <span class="btn btn-xs btn-danger">Từ chối</span> 
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_1_2">
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                                                    <thead>
                                                        <tr class="">
                                                            <th> MSSV</th>
                                                            <th> Tên SV</th>
                                                            <th> Công ty</th>
                                                            <th> Đề tài</th>
                                                            <th> Lĩnh vực</th>
                                                            <th> Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                                            
                                                        @foreach($matchingField as $matchField)
                                                        <tr>
                                                            <td>{{$matchField['student_id']}}</td>
                                                            <td>{{$matchField['name']}}</td>
                                                            <td>{{$matchField['company_name']}}</td>
                                                            <td>{{$matchField['title']}}</td>
                                                            <td>{{$matchField['field_name']}}</td>
                                                            <td>
                                                                <span class="btn btn-xs btn-success">Chấp nhận</span>
                                                                <span class="btn btn-xs btn-danger">Từ chối</span> 
                                                            </td>
                                                        </tr>
                                                        @endforeach     
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_1_3">
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_3">
                                                    <thead>
                                                        <tr class="">
                                                            <th> MSSV</th>
                                                            <th> Họ</th>
                                                            <th> Tên</th>
                                                            <th> Công ty</th>
                                                            <th> Đề tài</th>
                                                            <th> Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                                            
                                                        @foreach($matchingSkillLevel as $matchSkillLevel)
                                                        <tr>
                                                            <td>{{$matchSkillLevel['student_id']}}</td>
                                                            <td>{{$matchSkillLevel['last_name']}}</td>
                                                            <td>{{$matchSkillLevel['first_name']}}</td>
                                                            <td>{{$matchSkillLevel['company_name']}}</td>
                                                            <td>{{$matchSkillLevel['title']}}</td>
                                                            <td> 
                                                                <span class="btn btn-xs btn-success">Chấp nhận</span>
                                                                <span class="btn btn-xs btn-danger">Từ chối</span>  
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

@section('page-level-js-plugins')
	@parent
	<script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
@endsection

@section('page-level-js')
	@parent
	<script src="/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>
@endsection