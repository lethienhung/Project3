@extends('layouts.mainlayout')

@section('title', 'Danh sách người dùng')

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
                            <a href="index">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="/admin/newdash">Admin</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Quản lý người dùng </span>             
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Header Fixed</span>
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
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <button id="sample_editable_1_2_new" class="btn sbold green" data-toggle="modal" data-target="#basic"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- begin modal -->
                                    <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Thêm người dùng</h4>
                                                </div>
                                                <div class="modal-body"> 
                                                    <form action="/admin/users" method="post" id="form1" class="form-horizontal">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <div class="form-body">
                                                            <div class="alert alert-danger display-hide">
                                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                            <div class="alert alert-success display-hide">
                                                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Name
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-6">
                                                                    <input type="text" name="name" data-required="1" class="form-control" /> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Email
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-6">
                                                                    <input name="email" type="text" class="form-control" /> </div>
                                                            </div>                                        
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Mã số
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-6">
                                                                    <input name="number" type="text" class="form-control" /> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">Quyền truy cập
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" name="role">
                                                                        <option value="">Lựa chọn</option>
                                                                        <option value="student">Sinh viên</option>
                                                                        <option value="manager">Giảng viên phụ trách</option>
                                                                        <option value="lecturer">Giảng viên hướng dẫn </option>
                                                                    </select>
                                                                </div>
                                                            </div>                                           
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-4 col-md-9">
                                                                    <button type="submit" class="btn green" onclick="add()">Submit</button>
                                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- end modal -->

                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr>                                            
                                                <th> Mã số </th>
                                                <th> Tên người dùng</th>
                                                <th> Email</th>
                                                <th> Quyền truy cập </th>
                                                <th> Thời gian tạo </th>
                                                <th> Thời gian cập nhật </th>
                                                <th> Hành động </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>                                                
                                                <td> {{$user->user_id}} </td>
                                                <td> {{$user->name}} </td>
                                                <td>
                                                    <a href="mailto:{{$user->email}}"> {{$user->email}} </a>
                                                </td>
                                                <td>@if($user->role == 'admin')
                                                    <span class="label label-sm label-danger"> Quản trị viên </span>
                                                    @elseif($user->role == 'student')
                                                    <span class="label label-sm label-default"> Sinh viên </span>
                                                    @elseif($user->role == 'manager')
                                                    <span class="label label-sm label-warning"> Giảng viên quản lý </span>
                                                    @elseif($user->role == 'lecturer')
                                                    <span class="label label-sm label-primary"> Giảng viên hướng dẫn </span>
                                                    @elseif($user->role == 'company')
                                                    <span class="label label-sm label-success"> Người đại diện doanh nghiệp </span>
                                                    @elseif($user->role == 'instructor')
                                                    <span class="label label-sm label-info"> Người hướng dẫn doanh nghiệp </span>
                                                    @endif
                                                </td>
                                                <td class="center"> {{$user->created_at}} </td>
                                                <td class="center"> {{$user->updated_at}} </td>
                                                <td>
                                                    <button class="btn btn-xs btn-info">Xem</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
@endsection

@section('page-level-js-plugins')
	@parent
    <script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
@endsection

@section('page-level-js')
	@parent
    <script src="/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/form-validation.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function add(){
            var form1 = $('#form1');
            var error1 = $('.alert-danger', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    select_multi: {
                        maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                        minlength: jQuery.validator.format("At least {0} items must be selected")
                    }
                },
                rules: {
                    name: {
                        minlength: 2,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    number: {
                        required: true,
                        number: true
                    },
                    digits: {
                        required: true,
                        digits: true
                    },                    
                    select: {
                        required: true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var cont = $(element).parent('.input-group');
                    if (cont.size() > 0) {
                        cont.after(error);
                    } else {
                        element.after(error);
                    }
                },

                highlight: function (element) { // hightlight error inputs

                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    form.submit();
                    success1.show();
                    error1.hide();
                }
            });
        }
    </script>
@endsection