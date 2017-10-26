@extends('layouts.intern_process') 
@section('title','Student Intern Process')

@section('extra-css')
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
@endsection
@section('content')
<!-- END PAGE BREADCRUMB -->
<!-- BEGIN PAGE BASE CONTENT -->
<div class="tabbable-line tabbable-full-width">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab_1_1" data-toggle="tab"> Intern Process </a>
        </li>
        <li>
            <a href="#tab_1_2" data-toggle="tab"> Mark </a>
        </li>
        <li>
            <a href="#tab_1_3" data-toggle="tab"> Chấm công </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1_1">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box red">
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
                            <table style="text-align: center;" class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                <thead>
                                    <tr class="">
                                        <th> Topic </th>
                                        <th> Startdate </th>
                                        <th> Company </th>
                                        <th> Status </th>
                                        <th> Process </th>
                                        <th> Feedback </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> {{$topic->title}} </td>
                                        <td> {{$topic->created_at}} </td>
                                        <td> {{$company->company_name}} </td>
                                        <td> Intern status </td>
                                        <td> Outline link to download</td>
                                        <td>
                                            <a class="btn btn-success" href="/contact">Feedback</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Work Outline</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding
                                    <pre class="mt-code">.list-todo</pre> class to the
                                    <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-todo red">
                                    <div class="list-head-title-container">
                                        <h3 class="list-title">{{$topic->title}}</h3>
                                        <div class="list-head-count">
                                            <div class="list-head-count-item">
                                                <i class="fa fa-check"></i> {{$countWorked->done}}</div>
                                            <div class="list-head-count-item">
                                                <i class="fa fa-cog"></i> {{$countWorking->working}}</div>
                                        </div>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="list-count pull-right red-mint">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-list-container list-todo" id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="list-todo-line"></div>
                                    <ul>
                                        @foreach($outline as $ol) 
                                        @php
                                        $workByWeek = DB::table('outline_work')->where('student_id',$ol->student_id)->where('week',$ol->week)->get();
                                        $workPerWeek = DB::table('outline_work')->where('student_id',$ol->student_id)->where('week',$ol->week)->count();
                                        @endphp
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white">
                                                <i class="fa fa-database"></i>
                                            </div>
                                            <div class="list-todo-item dark">
                                                <a class="list-toggle-container" data-toggle="collapse" data-parent="#accordion1" onclick=" " href="#{{$ol->week}}" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">Week {{$ol->week}}</div>
                                                        <div class="badge badge-default pull-right bold">{{$workPerWeek}}</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse in" id="{{$ol->week}}">
                                                    <ul class="status-actions">

                                                        @foreach($workByWeek as $work)
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-database"></i>
                                                                </a>
                                                            </div>
                                                            @if($work->status == 'Working')
                                                            <div class="task-status">
                                                                <a class="done" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a class="pending" href="javascript:;">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            @elseif($work->status=='Done')
                                                            <div class="task-status">
                                                                <a class="done">
                                                                    <i class="fa fa-check"></i>
                                                                </a>

                                                            </div>
                                                            @elseif($work->status == 'Failed')
                                                            <div class="task-status">

                                                                <a class="fail" href="javascript:;">
                                                                    <i style="color: #ff0000" class="fa fa-close"></i>
                                                                </a>
                                                            </div>
                                                            @endif


                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a href="javascript:;">{{$work->work}}</a>
                                                                </h4>
                                                                <p>{{$work->work_content}} </p>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="task-footer bg-grey">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <a class="task-trash" href="javascript:;">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <a class="task-add" href="javascript:;">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <div class="tab-pane active" id="tab_1_2">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
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
                            <table style="text-align: center;" class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                <thead>
                                    <tr class="">
                                        <th> Topic </th>
                                        <th> Instructor Mark </th>
                                        <th> Teacher Mark </th>
                                        <th> Instructor ID </th>
                                        <th> Teacher ID </th>
                                        <th> Feedback </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> {{$topic->title}} </td>
                                        <td> {{$stdMark->mark_instructor}} </td>
                                        <td> {{$stdMark->mark_lecturer}} </td>
                                        <td> {{$stdMark->instructor_id}} </td>
                                        <td> {{$stdMark->lecturer_id}}</td>
                                        <td>
                                            <a class="btn btn-success" href="/contact">Feedback</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <span class="caption-subject font-green bold uppercase">Work Outline</span>

                        <form action="{{ url('dropzone') }}" method="post" class="dropzone dropzone-file-area dz-clickable" id="my-dropzone" style="width: 500px;">
                            {{csrf_field()}}

                            <h3 class="sbold">Drop file or click here to upload</h3>
                            <p> <a class="btn btn-success" onclick="submitReport()">Submit</a></p>
                            <div class="dz-default dz-message">
                                <span></span>
                                
                            </div>
                            
                        </form>

                        {{--
                        <input type="file" class="dropzone dropzone-file-area" id="file" name="image" style="width: 500px;"></input> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
    @endsection @section('extra-js')
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function () {
            $('#clickmewow').click(function () {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>
    <script>
        var myDropzone = new Dropzone("#my-dropzone", {
            url: "/upload/report",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            
            maxFilesize: 25,
                
        });
        function submitReport(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/report/submit",
                type: 'post',
                data: {
                    'report': $('.dz-filename').text(),
                },
            });
        }
        
    </script>
    @endsection