<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css')}}">

    <link rel="stylesheet"
          href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css')}}">

    <script type="text/javascript"
            src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js')}}"></script>

    <style type="text/css">
        /**
         * Override feedback icon position
         * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
         */
        #eventForm .dateContainer .form-control-feedback {
            top: 0;
            right: -15px;
        }
    </style>

</head>
<body>
<form id="eventForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Event</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="name"/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Start date</label>
        <div class="col-xs-5 dateContainer">
            <div class="input-group input-append date" id="startDatePicker">
                <input type="text" class="form-control" name="startDate"/>
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">End date</label>
        <div class="col-xs-5 dateContainer">
            <div class="input-group input-append date" id="endDatePicker">
                <input type="text" class="form-control" name="endDate"/>
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-5 col-xs-offset-3">
            <button type="submit" class="btn btn-default">Validate</button>
        </div>
    </div>
</form>
</body>
<script>
    $(document).ready(function () {
        $('#startDatePicker')
            .datepicker({
                format: 'mm/dd/yyyy'
            })
            .on('changeDate', function (e) {
                // Revalidate the start date field
                $('#eventForm').formValidation('revalidateField', 'startDate');
            });

        $('#endDatePicker')
            .datepicker({
                format: 'mm/dd/yyyy'
            })
            .on('changeDate', function (e) {
                $('#eventForm').formValidation('revalidateField', 'endDate');
            });

        $('#eventForm')
            .formValidation({
                framework: 'bootstrap',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'The name is required'
                            }
                        }
                    },
                    startDate: {
                        validators: {
                            notEmpty: {
                                message: 'The start date is required'
                            },
                            date: {
                                format: 'MM/DD/YYYY',
                                max: 'endDate',
                                message: 'The start date is not a valid'
                            }
                        }
                    },
                    endDate: {
                        validators: {
                            notEmpty: {
                                message: 'The end date is required'
                            },
                            date: {
                                format: 'MM/DD/YYYY',
                                min: 'startDate',
                                message: 'The end date is not a valid'
                            }
                        }
                    }
                }
            })
            .on('success.field.fv', function (e, data) {
                if (data.field === 'startDate' && !data.fv.isValidField('endDate')) {
                    // We need to revalidate the end date
                    data.fv.revalidateField('endDate');
                }

                if (data.field === 'endDate' && !data.fv.isValidField('startDate')) {
                    // We need to revalidate the start date
                    data.fv.revalidateField('startDate');
                }
            });
    });
</script>
</html>
<!-- Include Bootstrap Datepicker -->



