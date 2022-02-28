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
});
</script>
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Approve Employee</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($employee, ['route' => ['employees.approveUpdate', $employee->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    <!-- Nik Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('id_employee_approv_permission1', 'Approve 1:') !!}

                        @php
                        $items = App\Models\Employee::pluck('name', 'id');
                        $items->prepend('Please Select Employee', '');
                        @endphp
                        
                        {!! Form::select('id_employee_approv_permission1', $items, null, ['id' => 'id_employee_approv_permission1','class' => 'js-example-basic-multiple form-control']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('id_employee_approv_permission2', 'Approve 2:') !!}

                        @php
                        $items = App\Models\Employee::pluck('name', 'id');
                        $items->prepend('Please Select Employee', '');
                        @endphp
                        
                        {!! Form::select('id_employee_approv_permission2', $items, null, ['id' => 'id_employee_approv_permission2','class' => 'js-example-basic-multiple form-control']) !!}
                    </div>
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
