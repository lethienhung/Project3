<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start ">
                <a href="/lecturer" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="arrow"></span>
                </a>

            </li>
            <li class="heading">
                <h3 class="uppercase">Thông tin cá nhân</h3>
            </li>
            <li class="nav-item  ">
                <a href="/lecturer/profile/{{Auth::user()->user_id}}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Thông tin cá nhân</span>
                </a>
            </li>
            
            <li class="heading">
                <h3 class="uppercase">Thông tin thực tập</h3>
            </li>
            <li class="nav-item  ">
                <a href="/lecturer/intern" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">Thông tin Thực tập</span>
                </a>

            </li>
            <li class="nav-item  ">
                <a href="/topic" class="nav-link nav-toggle">
                    <i class="icon-feed"></i>
                    <span class="title">Danh sách đề tài</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="/lecturer/mark" class="nav-link nav-toggle">
                    <i class="icon-feed"></i>
                    <span class="title">Chấm điểm sinh viên</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Thông tin khác</h3>
            </li>
            <li class="nav-item  ">
                <a href="/aboutus" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">About Us</span>
                </a>

            </li>
            
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->