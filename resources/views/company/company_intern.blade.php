@extends('layouts.mainlayout') @section('title','Topic Create') @section('page-level-css-plugins')
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css"
/> 
<link href="/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
@endsection @section('page-level-css')
<link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"
/>
<link href="/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"
/> 

@endsection @section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Company Intern Management
                    <small>material design form validation</small>
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
                <span class="active">Topic Create</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab"> Topic Manage </a>
                    </li>
                    <li>
                        <a href="#tab_1_2" data-toggle="tab"> Topic Create </a>
                    </li>
                    <li>
                        <a href="#tab_1_3" data-toggle="tab"> Student Manage </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="m-heading-1 border-green m-bordered">
                            <h3>jQuery Validation Plugin</h3>
                            <p> This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty
                                of customization options. For more info please check out
                                <a class="btn red btn-outline" href="http://jqueryvalidation.org" target="_blank">the official documentation</a>
                            </p>
                        </div>
                        <div class="row">
                            <div class="portlet light bordered">
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
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr class="">
                                                <th> No. </th>
                                                <th> Topic ID </th>
                                                <th> Topic Title </th>
                                                <th> Number Remain </th>
                                                <th> Topic Status </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($topic as $tp)
                                            <tr>
                                                <td> {{$tp->id}} </td>
                                                <td> <a href="/topic/{{$tp->topic_id}}" target="_blank">{{$tp->topic_id}}</a> </td>
                                                <td> {{$tp->title}} </td>
                                                <td> {{$tp->quantity}} </td>
                                                <td>
                                                    <label class="success">{{$tp->status}}</label>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_1_2">
                        <div class="m-heading-1 border-green m-bordered">
                            <h3>jQuery Validation Plugin</h3>
                            <p> This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty
                                of customization options. For more info please check out
                                <a class="btn red btn-outline" href="http://jqueryvalidation.org" target="_blank">the official documentation</a>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN VALIDATION STATES-->
                                <div class="portlet light portlet-fit portlet-form bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-red"></i>
                                            <span class="caption-subject font-red sbold uppercase">Topic Create</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body" id="topic-create">
                                        <!-- BEGIN FORM-->
                                        <topic></topic>
                                        <!-- END FORM-->
                                    </div>
                                    <template id="topic-create-template">
                                        <form action="#" id="form_sample_2">
                                            <div class="form-body">
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" name="name" v-model="title" placeholder="Enter your title">
                                                    <label for="form_control_1">Topic Title
                                                        <span class="required">*</span>
                                                    </label>
                                                    <span class="help-block">Enter Topic title...</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" v-model="email" name="email" placeholder="Enter your email">
                                                    <label for="form_control_1">Email
                                                        <span class="required">*</span>
                                                    </label>
                                                    <span class="help-block">Please enter your email...</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" v-model="documentation" name="url" placeholder="Enter URL">
                                                    <label for="form_control_1">Topic Documentation URL</label>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" v-model="quantity" name="number" placeholder="Enter number">
                                                    <label for="form_control_1">Number of Students</label>
                                                </div>


                                                <div class="form-group form-md-line-input">
                                                    <div class="input-group">
                                                        <div class="input-group-control">
                                                            <input type="text" class="form-control" v-model="phone_number" name="number2" placeholder="Phone Number">
                                                            <label for="form_control_1">Enter your Phone number</label>
                                                        </div>
                                                        <span class="input-group-btn btn-right">
                                                            <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                                                            </button>

                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" name="required_field" v-model="position" placeholder="Enter your title">
                                                    <label for="form_control_1">Position
                                                        <span class="required">*</span>
                                                    </label>
                                                    <span class="help-block">Intern Position</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" v-model="salary" name="required_field" placeholder="Enter your title">
                                                    <label for="form_control_1">Salary
                                                        <span class="required">*</span>
                                                    </label>
                                                    <span class="help-block">Salary</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <input type="text" class="form-control" name="required_field" v-model="priority" placeholder="Enter your title">
                                                    <label for="form_control_1">Priority
                                                        <span class="required">*</span>
                                                    </label>
                                                    <span class="help-block">Enter Topic Priority...</span>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <textarea class="form-control" name="memo" v-model="content" rows="10"></textarea>
                                                    <label for="form_control_1">Content</label>
                                                    <span class="help-block">Some help goes here...</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <textarea class="form-control" name="other_require" v-model="other_require" rows="3"></textarea>
                                                    <label for="form_control_1">Other require</label>
                                                    <span class="help-block">Some help goes here...</span>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">First Skills</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" id="skill1" v-model="skill1">
                                                            <option value="">Select</option>
                                                            @foreach($skills as $skill)
                                                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control" id="level1" v-model="level1">
                                                            <option value="">Select</option>
                                                            @foreach($level as $lv)
                                                            <option value="{{$lv->name}}">{{$lv->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Second Skills</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" id="skill2" v-model="skill2">
                                                            <option value="">Select</option>
                                                            @foreach($skills as $skill)
                                                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control" id="level2" v-model="level2">
                                                            <option value="">Select</option>
                                                            @foreach($level as $lv)
                                                            <option value="{{$lv->name}}">{{$lv->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label" for="form_control_1">Third Skills</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" id="skill3" v-model="skill3">
                                                            <option value="">Select</option>
                                                            @foreach($skills as $skill)
                                                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control" id="level3" v-model="level3">
                                                            <option value="">Select</option>
                                                            @foreach($level as $lv)
                                                            <option value="{{$lv->name}}">{{$lv->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="form-control-focus"> </div>
                                                    </div>
                                                </div>

                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="submit" @click="createTopic()" id="submit" class="btn green">Submit</button>
                                                            <button type="reset" class="btn default">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </template>
                                    <!-- END VALIDATION STATES-->
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_1_3">
                        <div class="m-heading-1 border-green m-bordered">
                            <h3>jQuery Validation Plugin</h3>
                            <p> This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty
                                of customization options. For more info please check out
                                <a class="btn red btn-outline" href="http://jqueryvalidation.org" target="_blank">the official documentation</a>
                            </p>
                        </div>
                        <div class="row">
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
                                    <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                                        <thead>
                                            <tr class="">
                                                <th> No. </th>
                                                <th> Student</th>
                                                <th> Topic ID </th>
                                                <th> Topic Title </th>
                                                <th> Remain </th>
                                                <th> Topic Status </th>
                                                <th> Status </th>
                                                <th> </th>


                                            </tr>
                                        </thead>
                                        <tbody id="student-assign">
                                            
                                            <tr v-for="std in list">
                                                <td> @{{std.id}} </td>
                                                <td> @{{std.student_id}}</td>
                                                <td> @{{std.topic_id}}</td>
                                                <td> @{{std.title}} </td>
                                                <td> @{{std.quantity}} </td>
                                                <td>
                                                    <span class="label label-success">@{{std.status}}</span>
                                                </td>
                                                <td>
                                                    <span class="label label-success">@{{std.company_confirm}}</span>
                                                </td>
                                                <td>
                                                 <div class="btn-group btn-group btn-group-solid">
                                                        <a href="javascript:;" @click="approve(std.student_id)" class="btn btn-icon-only green">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                        <a href="javascript:;" @click="decline(std.student_id)" class="btn btn-icon-only red">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>   
                                                </td>
                                                
                                            </tr>
                                            
                                        </tbod>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        
        @endsection @section('page-level-js-plugins')
        <script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        @endsection @section('page-level-js')
        <script src="/assets/pages/scripts/form-validation-md.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <script src="/assets/pages/scripts/table-datatables-fixedheader.min.js" type="text/javascript"></script>
        <script src="/assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js"></script>
        <script src="https://unpkg.com/vue@2.4.2"></script>
        <script src="/js/company/create_topic.js"></script>
        <script src="/js/company/assign_student_company.js"></script>
        {{--  <script>
            function approve(student_id,topic_id) {
               
                $.ajax({

                    url: "company/assign/approve/"+student_id,
                    type: 'post',
                    data: {
                        topic_id : topic_id
                    },
                
                    success: function (data) {

                        if ($.isEmptyObject(data.error)) {                        
                            alert('Done Approved');
                        } else {
                            
                            printErrorMsg(data.error);
                        }
                    }

                });

            }
            function decline(student_id) {
                $.ajax({

                    url: "company/assign/decline/"+student_id,
                    type: 'post',
                    data: {
                        student_id : student_id
                        
                    },
                
                    success: function (data) {

                        if ($.isEmptyObject(data.error)) {                        
                            alert('Done Decine');
                        } else {
                            
                            printErrorMsg(data.error);
                        }
                    }

                });

            }
        </script>  --}}
        @endsection