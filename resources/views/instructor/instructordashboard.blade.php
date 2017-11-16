@extends('layouts.mainlayout')

@section('title', 'Người hướng dẫn')

@section('page-level-css')
    <link href="/assets/pages/css/about.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @parent
    @include('layouts.sidebar_instructor')
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
                                    <a href="#"><i class="icon-user-follow font-red-sunglo theme-font"></i></a>
                                </div>
                                <div class="card-title">
                                    <span> Chức năng 1 </span>
                                </div>
                                <div class="card-desc">
                                    <span> Với chức năng này
                                        <br> người hướng dẫn có thể làm những công việc ... </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="portlet light">
                                <div class="card-icon">
                                    <a href="#"><i class="icon-trophy font-green-haze theme-font"></i></a>
                                </div>
                                <div class="card-title">
                                    <span> Chức năng 2 </span>
                                </div>
                                <div class="card-desc">
                                    <span> Với chức năng này
                                        <br> người hướng dẫn có thể làm những công việc ... </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="portlet light">
                                <div class="card-icon">
                                     <a href="#"><i class="icon-basket font-purple-wisteria theme-font"></i></a>
                                </div>
                                <div class="card-title">
                                    <span> Chức năng 3 </span>
                                </div>
                                <div class="card-desc">
                                    <span> Với chức năng này
                                        <br> người hướng dẫn có thể làm những công việc ... </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="portlet light">
                                <div class="card-icon">
                                     <a href="#"><i class="icon-layers font-blue theme-font"></i></a>
                                </div>
                                <div class="card-title">
                                    <span> Chức năng 4 </span>
                                </div>
                                <div class="card-desc">
                                    <span> Với chức năng này
                                        <br> người hướng dẫn có thể làm những công việc ... </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
@endsection