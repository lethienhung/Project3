@extends('layouts.mainlayout')

@section('title', 'Kết quả tìm kiếm')

@section('page-level-css-plugins')
@parent
<link href="/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
@endsection

@section('page-level-css')
@parent
<link href="/assets/pages/css/search.min.css" rel="stylesheet" type="text/css" />
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
				<h1>Kết quả tìm kiếm
					<small>kết quả tìm kiếm</small>
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
				<span class="active">Tìm kiếm</span>                            
			</li>
		</ul>
		<!-- END PAGE BREADCRUMB -->
		<!-- BEGIN PAGE BASE CONTENT -->
		<div class="search-page search-content-1">
			<div class="search-bar bordered">
				<div class="row">
					<div class="col-md-7">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Tìm kiếm...">
							<span class="input-group-btn">
								<button class="btn blue uppercase bold" type="button">Tìm kiếm</button>
							</span>
						</div>
					</div>
					<div class="col-md-5">
						<p class="search-desc clearfix"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="search-container bordered">
						<ul>
							<li class="search-item clearfix">
								<a href="javascriptt:;">
									<img src="../assets/pages/img/page_general_search/01.jpg" />
								</a>
								<div class="search-content">
									<h2 class="search-title">
										<a href="javascript:;">Metronic Search Results</a>
									</h2>
									<p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
								</div>
							</li>
							<li class="search-item clearfix">
								<a href="javascript:;">
									<img src="../assets/pages/img/page_general_search/1.jpg" />
								</a>
								<div class="search-content">
									<h2 class="search-title">
										<a href="javascript:;">Lorem ipsum dolor</a>
									</h2>
									<p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
								</div>
							</li>
							<li class="search-item clearfix">
								<a href="javascript:;">
									<img src="../assets/pages/img/page_general_search/02.jpg" />
								</a>
								<div class="search-content">
									<h2 class="search-title">
										<a href="javascript:;">sit amet</a>
									</h2>
									<p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
								</div>
							</li>
							<li class="search-item clearfix">
								<a href="javascript:;">
									<img src="../assets/pages/img/page_general_search/2.jpg" />
								</a>
								<div class="search-content">
									<h2 class="search-title">
										<a href="javascript:;">consectetur adipiscing</a>
									</h2>
									<p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
								</div>
							</li>
							<li class="search-item clearfix">
								<a href="javascript:;">
									<img src="../assets/pages/img/page_general_search/03.jpg" />
								</a>
								<div class="search-content">
									<h2 class="search-title">
										<a href="javascript:;">Donec efficitur</a>
									</h2>
									<p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
								</div>
							</li>
							<li class="search-item clearfix">
								<a href="javascript:;">
									<img src="../assets/pages/img/page_general_search/05.jpg" />
								</a>
								<div class="search-content">
									<h2 class="search-title">
										<a href="javascript:;">mauris quam</a>
									</h2>
									<p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
								</div>
							</li>
							<li class="search-item clearfix">
								<a href="javascript:;">
									<img src="../assets/pages/img/page_general_search/5.jpg" />
								</a>
								<div class="search-content">
									<h2 class="search-title">
										<a href="javascript:;">volutpat nunc</a>
									</h2>
									<p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
								</div>
							</li>
						</ul>
						<div class="search-pagination">
							<ul class="pagination">
								<li class="page-active">
									<a href="javascriptt:;"> 1 </a>
								</li>
								<li>
									<a href="javascriptt:;"> 2 </a>
								</li>
								<li>
									<a href="javascriptt:;"> 3 </a>
								</li>
								<li>
									<a href="javascriptt:;"> 4 </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<!-- BEGIN PORTLET-->
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-edit font-dark"></i>
								<span class="caption-subject font-dark bold uppercase">Danh mục tìm kiếm</span>
							</div>						
						</div>
						<div class="portlet-body">
							<div class="note note-info">
								<a> Sinh viên (0) </a>
							</div>
							<div class="note note-info">
								<a> Giảng viên phụ trách (0) </a>
							</div>
							<div class="note note-info">
								<a> Giảng viên hướng dẫn (0)</a>
							</div>
							<div class="note note-info">
								<a> Đại diện doanh nghiệp (0) </a>
							</div>
							<div class="note note-info">
								<a> Người hướng dẫn tại doanh nghiệp (0) </a>
							</div>
							<div class="note note-info">
								<a> Công ty (0) </a>
							</div>
							<div class="note note-info">
								<a> Quản trị viên (0) </a>
							</div>
							<div class="note note-info">
								<a> Đề tài (0) </a>
							</div>
							<div class="note note-info">
								<a> Đợt thực tập (0) </a>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
		</div>
		<!-- END PAGE BASE CONTENT -->
@endsection

@section('page-level-js-plugins')
@parent
<script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
@endsection

@section('page-level-js')
@parent
<script src="/assets/pages/scripts/search.min.js" type="text/javascript"></script>
@endsection