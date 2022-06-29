@extends('layouts.app')

@push('page_scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#company').on('change', function() {
        console.log('Submit');
        this.form.submit();
    });
});
</script>
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1>Attendances</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
        </div>

        <div class="card">
            <!-- Check In Field -->
            {{-- <div class="form-group col-sm-12"> --}}
                {!! Form::open(['route' => 'attendances.report', 'method' => 'get']) !!}
                
                <div class="card-body">
                    <div class="row">
                        {!! Form::label('start_date', 'Start Date:') !!}
                                
                        {!! Form::text('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
                    </div>
                    <div class="row">
                        {!! Form::label('end_date', 'End Date:') !!}
                                
                        {!! Form::text('end_date', null, ['class' => 'form-control','id'=>'end_date']) !!}
                    </div>
                </div>

                <div class="card-footer">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}

            {{-- </div> --}}

            @push('page_scripts')
                <script type="text/javascript">
                    $('#start_date').datetimepicker({
                        format: 'YYYY-MM-DD',
                        useCurrent: true,
                        sideBySide: true
                    })
                    $('#end_date').datetimepicker({
                        format: 'YYYY-MM-DD',
                        useCurrent: true,
                        sideBySide: true
                    })
                </script>
            @endpush
        </div>
    </div>

@endsection

