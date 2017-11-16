@extends('layouts.mainlayout') @section('title', 'Danh sách các sinh viên cần chấm điểm') @section('pageplugins1') @parent
@endsection @section('content') @parent
@include('layouts.sidebar_lecturer')
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
                <a href="home">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="home">Quản lý điểm sinh viên</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Danh sách các sinh viên cần đưọc chấm điểm</span>
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
                            <span class="caption-subject bold uppercase">Danh sách các sinh viên</span>
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
                                    <th> STT</th>
                                    <th> Mã</th>
                                    <th> Tên</th>
                                    <th> Bắt đầu</th>
                                    <th> Kết thúc </th>
                                    <th>Trạng thái</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($periods as $period)
                                <tr>
                                    <td> {{$period->id}} </td>
                                    <td> {{$period->id}} </td>
                                    <td> {{$period->name}}</td>
                                    <td>
                                        {{$period->start_date}}
                                    </td>
                                    <td>
                                        {{$period->end_date}}
                                    </td>
                                    <td>
                                        <span class="label label-m label-success">{{$period->end_date}}</span>
                                    </td>
                                    <td>
                                        <a class="btn btn-xs btn-success" href="/lecturer/intern/{{$period->id}}">Xem
                                            <i class="fa fa-search"></i>
                                        </a>
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
@endsection @section('pageplugins2') @parent @endsection @section('pagescript') @parent @endsection