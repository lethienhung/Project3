@extends('layouts.profile') @section('title') Instructor - Profile @endsection @section('content')
<!-- BEGIN PAGE BASE CONTENT -->
<div class="profile">
    <div class="tabbable-line tabbable-full-width">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_1_1" data-toggle="tab"> Profile </a>
            </li>
            <li>
                <a href="#tab_1_3" data-toggle="tab"> Edit </a>
            </li>
            <li>
                <a href="#tab_1_6" data-toggle="tab"> Help </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1_1">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-unstyled profile-nav">
                            <li>
                                <img src="/assets/pages/media/profile/people19.png" class="img-responsive pic-bordered" alt="" />
                                <a href="javascript:;" class="profile-edit"> edit </a>
                            </li>
                            <li>
                                <a href="/instructor/intern"> Intern Management </a>
                            </li>
                            <li>
                                <a href="javascript:;"> Messages
                                    <span> 3 </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;"> Friends </a>
                            </li>
                            <li>
                                <a href="javascript:;"> Settings </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-8 profile-info">
                                
                                <h1 class="font-green sbold uppercase">{{$instructor->last_name}} {{$instructor->first_name}}</h1>
                                <p>{{$instructor->about_me}}</p>
                                <p>
                                    <a href="javascript:;"> {{$instructor->email}} </a>
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <i class="fa fa-map-marker"></i> {{$company->company_name}} </li>
                                    <li>
                                        <i class="fa fa-briefcase"></i> {{$instructor->phone_number}} </li>
                                    <li>
                                        <i class="fa fa-star"></i> {{$instructor->instructor_id}} </li>
                                </ul>
                            </div>
                            <!--end col-md-8-->
                            <div class="col-md-4">
                                <div class="portlet sale-summary">
                                    <div class="portlet-title">
                                        <div class="caption font-red sbold"> Intern Summary</div>
                                        <div class="tools">
                                            <a class="reload" href="javascript:;"> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="sale-info"> Quản lý
                                                    <i class="fa fa-img-up"></i>
                                                </span>
                                                <span class="sale-num"> {{$countStudent}} </span>
                                            </li>
                                            <li>
                                                <span class="sale-info"> Status
                                                    <i class="fa fa-img-down"></i>
                                                </span>
                                                <span class="sale-num"> Pending </span>
                                            </li>
                                            <li>
                                                <span class="sale-info"> Progress </span>
                                                <span class="sale-num"> 50% </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <!--end row-->

                    </div>
                </div>
            </div>
            <!--tab_1_2-->
            <div class="tab-pane" id="tab_1_3">
                <div class="row profile-account">
                    <div class="col-md-3">
                        <ul class="ver-inline-menu tabbable margin-bottom-10">
                            <li class="active">
                                <a data-toggle="tab" href="#tab_1-1">
                                    <i class="fa fa-cog"></i> Personal info </a>
                                <span class="after"> </span>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_2-2">
                                    <i class="fa fa-picture-o"></i> Change Avatar </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_3-3">
                                    <i class="fa fa-lock"></i> Change Password </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_4-4">
                                    <i class="fa fa-eye"></i> Privacity Settings </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div id="tab_1-1" class="tab-pane active">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form bordered">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class=" icon-layers font-green"></i>
                                                <span class="caption-subject font-green sbold uppercase">Edit Information</span>
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
                                        <div class="portlet-body">
                                            <!-- BEGIN FORM-->
                                            <form action="#" class="form-horizontal" method="post" id="form_sample_1">

                                                <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button>
                                                        You have some form errors. Please check below.
                                                    </div>
                                                    <div class="alert alert-success display-hide">
                                                        <button class="close" data-close="alert"></button>
                                                        Your form validation is successful!
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-3 control-label" for="form_control_1">First Name
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="first_name" id="first_name" value="{{$instructor->first_name}}">
                                                            <div class="form-control-focus"></div>
                                                            <span class="help-block">Enter your first name</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-3 control-label" for="form_control_1">Last Name
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="last_name" id="last_name" value="{{$instructor->last_name}}">
                                                            <div class="form-control-focus"></div>
                                                            <span class="help-block">Enter your last name</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-3 control-label" for="form_control_1">Email
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="" name="email" id="email" value="{{$instructor->email}}">
                                                            <div class="form-control-focus"></div>
                                                            <span class="help-block">Enter your Email</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-3 control-label" for="form_control_1">Phone Number
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="" name="phone_number" id="phone_number" value="{{$instructor->phone_number}}">
                                                            <div class="form-control-focus"></div>
                                                            <span class="help-block">Enter a valid phone number</span>
                                                        </div>
                                                    </div>
                                                    
                                                    

                                                    

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-3 control-label" for="form_control_1">About me
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" name="memo" id="about_me" rows="5">{{$instructor->about_me}}</textarea>
                                                            <div class="form-control-focus"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" id="edit_information" onclick="update('{{Auth::user()->user_id}}')" class="btn green">Edit
                                                            </button>
                                                            <button type="reset" value="reset" class="btn default">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                    </div>
                                    <!-- END VALIDATION STATES-->
                                </div>
                            </div>
                            <div id="tab_2-2" class="tab-pane">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ảnh</label>

                                        <form action="{{ url('dropzone') }}" method="post" class="dropzone dropzone-file-area dz-clickable" id="my-dropzone" style="width: 500px;">
                                            {{csrf_field()}}

                                            <h3 class="sbold">Drop files here or click to upload</h3>
                                            <p> This is just a demo dropzone. Selected files are not actually uploaded. </p>
                                            <div class="dz-default dz-message">
                                                <span></span>
                                            </div>
                                        </form>

                                        {{--
                                        <input type="file" class="dropzone dropzone-file-area" id="file" name="image"
                                            style="width: 500px;"></button> --}}

                                    </div>

                                </div>
                            </div>
                            <div id="tab_3-3" class="tab-pane">
                                <form action="#" method="post">

                                    <div class="form-group">
                                        <label class="control-label">Current Password</label>
                                        <input type="password" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">New Password</label>
                                        <input type="password" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Re-type New Password</label>
                                        <input type="password" class="form-control" />
                                    </div>
                                    <div class="margin-top-10">
                                        <a href="javascript:;" class="btn green"> Change Password </a>
                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!--end col-md-9-->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END PAGE BASE CONTENT -->

@endsection @section('extra-js')

<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script>
    var myDropzone = new Dropzone("#my-dropzone", {
        url: "/dropzone",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        maxFilesize: 6,


    });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function update(instructor_id) {
        document.getElementById("edit_information").innerHTML = "Editing...";
         
        $.ajax({

            url: "/instructor/update/profile",
            type: 'post',
            data: {

                'first_name': document.getElementById('first_name').value,
                'last_name': document.getElementById('last_name').value,
                'email': document.getElementById('email').value,
                'phone_number': document.getElementById('phone_number').value,
                'about_me': document.getElementById('about_me').value,

            },
            success: function (data) {

                if ($.isEmptyObject(data.error)) {
                    document.getElementById("edit_information").innerHTML = "Edited";
                    alert('Information Edited');
                    window.location = '/instructor/profile/'+instructor_id;
                } else {
                    document.getElementById("edit_information").innerHTML = "Edit";
                    printErrorMsg(data.error);
                }
            }

        });


    }
</script>
@endsection