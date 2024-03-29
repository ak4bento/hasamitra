@extends('layouts.app')

@push('page_scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#department').on('change', function() {
        console.log(this.value);
        $.getJSON("/data/deparment/" + this.value, function(result){
            $("#organization").find('option').remove().end();
            $.each(result, function(i, field){
                // console.log("Ini field = "+field.department);
                $("#organization").append(`<option value="${field.id}">${field.department} - ${field.job_title}</option>`);
                // $("#organization").append(field + " ");
            });
        });
    });
    console.log({{ $employee->id_organization ?? '' }});
    $.getJSON("/data/deparment/" + {{ $com->id_company ?? '' }}, function(result){
        $("#organization").find('option').remove().end();
        $.each(result, function(i, field){
            console.log("Ini field = "+field.id+" "+field.department);
            if ({{ $employee->id_organization ?? '' }} == field.id) {
                $("#organization").append(`<option value="${field.id}" selected="selected">${field.department} - ${field.job_title}</option>`);
            } else {
                $("#organization").append(`<option value="${field.id}">${field.department} - ${field.job_title}</option>`);
            }
            // $("#organization").append(field + " ");
        });
    });
});
</script>
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Employee</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($employee, ['route' => ['employees.update', $employee->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('employees.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('employees.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
