@extends('layouts.mainlayout')

@section('title', 'Danh sách đợt thực tập')

@section('pageplugins1')
	@parent
	<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
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
                            <span class="active">Quản lý đợt thực tập</span>                            
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
                                        <span class="caption-subject bold uppercase">Danh sách các đợt thực tập</span>
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
                                                <th> Số sinh viên</th>
                                                <th> Tình trạng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($periods as $period)
                                            <tr>
                                                <td> {{$period->name}}</td>
                                                <td> {{$period->start_date}}</td>
                                                <td> {{$period->end_date}}</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td> Đợt 2  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-success">Finished</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Đợt 3  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-warning">Canceled</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Đợt 4  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-warning">Canceled</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Đợt 5  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Đợt 6  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Đợt 7  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Đợt 8  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Đợt 9  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Đợt 10  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-info">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Đợt 11  </td>
                                                <td> 8 Nov 2017</td>
                                                <td> 8 Nov 2018</td>
                                                <td> ...</td>
                                                <td> <span class="label label-sm label-info">Pending</span>
                                                </td>
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

@section('pageplugins2')
	@parent
	<script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
@endsection

@section('pagescript')
	@parent
	<script src="../assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>
@endsection