@extends('layouts.intern_process') @section('title','Intern Management') @section('content')
<div class="row">

    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject bold uppercase">Basic</span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="student_in_company">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="all">Student ID</th>
                            <th class="min-phone-l">Student Name</th>
                            <th class="min-tablet">Topic</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($studentInCompany as $student)
                        
                        <tr>
                            <th></th>
                            <td>{{$student->student_id}}</td>
                            <td>{{$student->last_name}} {{$student->first_name}}</td>
                            <td>{{$student->topic_id}}</td>
                            <td>{{$student->status}}</td>
                            <td><a href="/instructor/manage/{{$student->student_id}}">Manage</a></td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection @section('extra-js')

<script src="/assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('#clickmewow').click(function () {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
@endsection