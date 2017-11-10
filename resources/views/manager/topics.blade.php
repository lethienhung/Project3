@extends('layouts.mainlayout')

@section('title', 'Danh sách các đề tài')

@section('page-level-css-plugins')
	@parent
	<link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
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
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Quản lý đề tài</span>                            
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Danh sách các đề tài</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr class="">
                                                <th> Tên đề tài</th>
                                                <th> Thời gian tạo</th>
                                                <th> Số lượng tuyển</th>
                                                <th> Tình trạng</th>
                                                <th> Hành động </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($topics as $top)
                                            <tr>
                                                <td> {{$top->title}}</td>
                                                <td> {{$top->created_at}}</td>
                                                <td> {{$top->quantity}}</td>
                                                <td class="{{$top->topic_id}}a"> 
                                                    @if($top->status == "Pending")
                                                        <label class="label label-warning" readonly="true">Đang chờ</label>
                                                    @elseif($top->status == "Approved")
                                                        <label class="label label-success" readonly="true">Đã duyệt</label>
                                                    @elseif($top->status == "Declined")
                                                        <label class="label label-danger" readonly="true">Từ chối</label>
                                                    @endif
                                                <td class="{{$top->topic_id}}b"> 
                                                    @if($top->status == "Pending")
                                                        <button class="btn btn-success btn-xs"
                                                                onclick="approve('{{$top->topic_id}}')">Duyệt
                                                        </button>
                                                        <button class="btn btn-danger btn-xs"
                                                                onclick="decline('{{$top->topic_id}}')">Từ chối
                                                        </button>
                                                        <button class="btn btn-warning btn-xs">Xem
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
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
    <script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
@endsection

@section('page-level-js')
	@parent
	<script src="/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        /* Approve topic */
        function approve(topic_id) {
            $.ajax({
                url: "/manager/topics/approve",
                type: 'get',
                data: {
                    'topic_id': topic_id
                },
                success: function (result) {
                    $('.'+ topic_id + 'a').html('<label class="label label-success" readonly="true">Đã duyệt</label>');
                    $('.'+ topic_id + 'b').html('');
                    toastr[success]("Đã duyệt thành công đề tài này", "Thành công");
                },
                error: function () {
                    toastr.error('Error', 'Error Alert', {timeOut: 5000});
                }
            });
        }

        /* Decline topic */
        function decline(topic_id) {
            $.ajax({
                url: "/manager/topics/decline",
                type: 'get',
                data: {
                    'topic_id': topic_id
                },
                success: function (result) {
                    $('.'+ topic_id + 'a').html('<label class="label label-danger" readonly="true">Từ chối</label>');
                    $('.'+ topic_id + 'b').html('');
                    toastr[success]("Đã từ chối thành công đề tài này", "Thành công");
                },
                error: function () {
                    toastr.error('', 'Error Alert', {timeOut: 5000});
                }
            });

        }

    </script>
@endsection