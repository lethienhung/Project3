@extends('layouts.intern_process')
@section('title','Intern Management')
@section('sidebar')
@include('layouts.sidebar_instructor')
@endsection
@section('content')
    <div class="row">

        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green">
                        <i class="icon-settings font-green"></i>
                        <span class="caption-subject bold uppercase">Basic</span>
                    </div>
                    <div class="tools"></div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%"
                           id="student_in_company">
                        <thead>
                        <tr>
                            <th></th>
                            <th class="all">Student ID</th>
                            <th class="min-phone-l">Topic title</th>
                            <th class="min-tablet">Topic ID</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($topics as $topic)

                            <tr>
                                <th></th>
                                <td>{{$topic->created_at}}</td>
                                <td>{{$topic->title}}</td>
                                <td>{{$topic->topic_id}}</td>
                                <td>{{$topic->status}}</td>
                                <td><a href="/instructor/outline/{{$topic->topic_id}}">Manage</a></td>

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