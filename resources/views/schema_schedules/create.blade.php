@extends('layouts.app')

@push('page_scripts')
<script>
    $(function () {
        //Timepicker
        $('#timepicker1').datetimepicker({
            format: 'LT'
        });
        //Timepicker
        $('#timepicker2').datetimepicker({
            format: 'LT'
        });
        //Timepicker
        $('#timepicker3').datetimepicker({
            format: 'LT'
        });
        //Timepicker
        $('#timepicker4').datetimepicker({
            format: 'LT'
        });
        //Timepicker
        $('#timepicker5').datetimepicker({
            format: 'LT'
        });
        //Timepicker
        $('#timepicker6').datetimepicker({
            format: 'LT'
        });
        //Timepicker
        $('#timepicker7').datetimepicker({
            format: 'LT'
        });
    });
</script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Schema Schedule</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'schemaSchedules.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('schema_schedules.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('schemaSchedules.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
