@extends('layouts.intern_process') 
@section('title','Student Intern Process') 
@section('extra-css') 
@endsection 
@section('sidebar')
@include('layouts.sidebar_manager')
@endsection
@section('content')
<!-- END PAGE BREADCRUMB -->
<!-- BEGIN PAGE BASE CONTENT -->
<div class="tabbable-line tabbable-full-width">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab_1_1" data-toggle="tab"> So khớp </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1_1">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">To Do List</span>
                                <div class="caption-desc font-grey-cascade"> Default list element style. Activate by adding
                                    <pre class="mt-code">.list-todo</pre> class to the
                                    <pre class="mt-code">ul</pre> element. </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-todo red">
                                    <div class="list-head-title-container">
                                        <h3 class="list-title">My Projects</h3>
                                        <div class="list-head-count">
                                            <div class="list-head-count-item">
                                                <i class="fa fa-check"></i> 15</div>
                                            <div class="list-head-count-item">
                                                <i class="fa fa-cog"></i> 34</div>
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
                                    <ul v-for="(student,index) in students">
                                        <li class="mt-list-item">
                                            <div class="list-todo-icon bg-white">
                                                <i class="fa fa-database"></i>
                                            </div>
                                            <div class="list-todo-item dark">
                                                <a class="list-toggle-container" data-toggle="collapse" data-parent="#accordion1" onclick=" " :href="'#'+student.student_id" aria-expanded="false">
                                                    <div class="list-toggle done uppercase">
                                                        <div class="list-toggle-title bold">@{{student.name}} - @{{student.student_id}}</div>
                                                        <div class="badge badge-default pull-right bold">3</div>
                                                    </div>
                                                </a>
                                                <div class="task-list panel-collapse collapse in" :id="student.student_id">
                                                    <ul v-for="topic in topics">
                                                        <li class="task-list-item done">
                                                            <div class="task-icon">
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-database"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-status">
                                                                <a class="done" @click="assign(student.student_id,topic.topic_id,index)" href="javascript:;">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </div>
                                                            <div class="task-content">
                                                                <h4 class="uppercase bold">
                                                                    <a :href="'/topic/'+topic.topic_id">@{{topic.title}}</a>
                                                                </h4>
                                                                <p><a :href="topic.documentation">Link: @{{topic.documentation}}</a></p><br>
                                                                <p>Liên hệ: @{{topic.phone_number}}</p>
                                                            </div>
                                                        </li>
                                                        
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
    </div>
    <!-- END CONTENT BODY -->
    @endsection @section('extra-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js"></script>
    <script src="https://unpkg.com/vue@2.4.2"></script>
    <script src="/js/manager/matching.js"></script>
    @endsection