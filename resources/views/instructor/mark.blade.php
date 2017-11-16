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
    @include('layouts.sidebar_instructor')
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
                                        <img src="/assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> </div>
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
                                        <span class="caption-subject bold uppercase">Đánh giá từ phía doanh nghiệp</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-user-md"></i>
                                        <a>Họ và tên người hướng dẫn: Nguyễn Văn A</a>
                                    </div>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-envelope"></i>
                                        <a>Email: anv@gmail.com</a>
                                    </div>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-facebook"></i>
                                        <a href="http://www.facebook.com">Facebook</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <form action="" method="">
                                        <div>                                        
                                            <h4 class="profile-desc-title"><i class="fa fa-user-md"></i> Trình độ kỹ thuật</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Khả năng nắm bắt các kỹ thuật mới</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> KMức độ làm chủ kỹ thuật, công nghệ sau khi đã đưọc hướng dẫn</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Khả năng phân tích</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Phương pháp luận – cách thức tổ chức công việc</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Óc sáng tạo</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Trình độ ngoại ngữ phục vụ cho công việc</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>                                        
                                        </div>

                                        <div>
                                            <h4 class="profile-desc-title"><i class="fa fa-user-md"></i> Công việc đã thực hiện</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Khối lượng công việc đã thực hiện trong thời gian thực tập</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Chất lượng công việc đã thực hiện trong thời gian thực tập</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Khả năng tự hoàn thành công việc và cách giải quyết các vấn đề phát sinh</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Viết tài liệu về công việc đã thực hiện</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text"> Thuyết trình</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Tuân thủ các ràng buộc chất lượng công việc của cơ sở thực tập</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div>
                                            <h4 class="profile-desc-title"><i class="fa fa-user-md"></i> Thái độ, ý thức</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Đúng giờ</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Vẻ ngoài (quần áo, tác phong nơi công sở, …) </span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Giữ gìn hình ảnh cho cơ sở thực tập và cho sản phẩm đã thực hiện trong quá trình làm việc</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Làm việc nhóm</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Quan hệ, giao tiếp với nhân viên, khách hàng của cơ sở thực tập</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Tuân thủ các quy định làm việc của công ty và cam kết khi thực tập</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>                                        
                                        </div>
                                    
                                        <div>
                                            <h4 class="profile-desc-title"><i class="fa fa-user-md"></i> Tiến bộ trong quá trình thực tập</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Cải thiện năng lực, trình độ kỹ thuật</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Cải thiện thái độ, ý thức</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Cải thiện về phương pháp làm việc</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div>                                        
                                        </div>
                                    
                                        <div>
                                            <h4 class="profile-desc-title"><i class="fa fa-user-md"></i> Các đánh giá chung</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">A : sinh viên chủ động hoàn thành các công việc, kết quả xuất sắc</span>
                                                </div>
                                                <div class="col-md-1">
                                                    <input class="form-control" type="text" name="text">
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">B : sinh viên đáp ứng đầy đủ các yêu cầu công việc, kết quả tốt</span>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">C : sinh viên có khả năng trung bình, kết quả đạt yêu cầu</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">D : sinh viên chưa đạt hết các mục tiêu đặt ra, nhưng có cố gắng, nỗ lực</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">F : ý thức học tập của sinh viên kém, không đạt yêu cầu</span>
                                                </div>                                            
                                            </div>               
                                        </div>
                                        <div>
                                            <h4 class="profile-desc-title"><i class="fa fa-user-md"></i> Các đánh giá khác</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Quý vị có muốn tiếp tục nhận sinh viên thực tập đợt sau không?</span>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control input-sm">
                                                        <option name="" value=""> ... </option>
                                                        <option name="" value=""> Có </option>
                                                        <option name="" value=""> Không </option>
                                                    </select>
                                                </div>                                            
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="profile-desc-text">Đánh giá khác</span>
                                                </div>
                                                <div class="col-md-5">
                                                    <textarea class="form-control" rows="3">    
                                                    </textarea>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <button class="btn green" type="submit">Submit</button>
                                                <button class="btn">Clear</button>
                                            </div>
                                        </div>
                                    </form>
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