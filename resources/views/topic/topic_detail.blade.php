<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>SIEIntern | Topic Detail</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for blog post samples" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="/assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
        @include('layouts.header')
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
          @include('layouts.sidebar')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Topic Detail
                                <small>detail</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Topic detail</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="blog-page blog-content-2">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="blog-single-content bordered blog-container">
                                    <div class="blog-single-head">
                                        <h1 class="blog-single-head-title">{{$topic_id->title}}</h1>
                                        <div class="blog-single-head-date">
                                            <i class="icon-calendar font-blue"></i>
                                            <a href="javascript:;">{{$topic_id->created_at}}</a>
                                        </div>
                                    </div>
                                    <p style="font-style:italic">{{$company->company_name}}</p>
                                    <div class="blog-single-img">
                                        <img src="/assets/pages/img/background/4.jpg" /> </div>
                                    <div class="blog-single-desc">
                                        <p> {{$topic_id->content}}</p>
                                        </div>
                                    <div class="blog-single-foot">
                                        <ul class="blog-post-tags">
                                        @foreach($topic_field as $tf)
                                            <li class="uppercase">
                                                <a href="javascript:;">{{$tf->field_name}}</a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                    <div class="blog-comments">
                                        <h3 class="sbold blog-comments-title">Comments(30)</h3>
                                        <div class="c-comment-list">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="" src="../assets/pages/img/avatars/team1.jpg"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">Sean</a> on
                                                        <span class="c-date">23 May 2015, 10:40AM</span>
                                                    </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="" src="../assets/pages/img/avatars/team3.jpg"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">Strong Strong</a> on
                                                        <span class="c-date">21 May 2015, 11:40AM</span>
                                                    </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" alt="" src="../assets/pages/img/avatars/team4.jpg"> </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">
                                                                <a href="#">Emma Stone</a> on
                                                                <span class="c-date">30 May 2015, 9:40PM</span>
                                                            </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="" src="../assets/pages/img/avatars/team7.jpg"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">Nick Nilson</a> on
                                                        <span class="c-date">30 May 2015, 9:40PM</span>
                                                    </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                                            </div>
                                        </div>
                                        <h3 class="sbold blog-comments-title">Leave A Comment</h3>
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Name" class="form-control c-square"> </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Email" class="form-control c-square"> </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Website" class="form-control c-square"> </div>
                                            <div class="form-group">
                                                <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="blog-single-sidebar bordered blog-container">
                                    <div class="blog-single-sidebar-search" id="aspiration">
                                    @if(Auth::user()->role="student" && $stdAssigned == 0 && $countNumberAspiration < 3)
                                        <a class="btn btn-success" @click="sendCv()" :disabled="show">Send CV</a>
                                    @endif
                                    </div>
                                    <div class="blog-single-sidebar-recent">
                                        <h3 class="blog-sidebar-title uppercase">Other Topic</h3>
                                        <ul>
                                           @foreach($other_topic as $other)
                                            <li>
                                                <a href="/topic/{{$other->topic_id}}">{{$other->title}}</a>
                                            </li>   
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="blog-single-sidebar-tags">
                                        <h3 class="blog-sidebar-title uppercase">Skills Required</h3>
                                        <ul class="blog-post-tags">
                                        @foreach($topic_skills as $ts)
                                            <li class="uppercase">
                                                <a href="javascript:;">{{$ts->skills_name}}</a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                    
                                    <div class="blog-single-sidebar-ui">
                                        <h3 class="blog-sidebar-title uppercase">UI Examples</h3>
                                        <div class="row ui-margin">
                                            <div class="col-xs-4 ui-padding">
                                                <a href="javascript:;">
                                                    <img src="/assets/pages/img/background/1.jpg" />
                                                </a>
                                            </div>
                                            <div class="col-xs-4 ui-padding">
                                                <a href="javascript:;">
                                                    <img src="/assets/pages/img/background/37.jpg" />
                                                </a>
                                            </div>
                                            <div class="col-xs-4 ui-padding">
                                                <a href="javascript:;">
                                                    <img src="/assets/pages/img/background/57.jpg" />
                                                </a>
                                            </div>
                                            <div class="col-xs-4 ui-padding">
                                                <a href="javascript:;">
                                                    <img src="/assets/pages/img/background/53.jpg" />
                                                </a>
                                            </div>
                                            <div class="col-xs-4 ui-padding">
                                                <a href="javascript:;">
                                                    <img src="/assets/pages/img/background/59.jpg" />
                                                </a>
                                            </div>
                                            <div class="col-xs-4 ui-padding">
                                                <a href="javascript:;">
                                                    <img src="/assets/pages/img/background/42.jpg" />
                                                </a>
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
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
         
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
      
        <!-- BEGIN CORE PLUGINS -->
        <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="/assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js"></script>
        <script src="https://unpkg.com/vue@2.4.2"></script>

        <script>
            new Vue({
                el: '#aspiration',
                data :{
                    show: false,
                },
                methods:{
                    sendCv() {
                        this.show = !this.show;

                        axios.post('student/sendcv/' + student_id).then((response) => {
                            alert('Done');
                        });
                    }
                }
            })
        </script>
    </body>

</html>