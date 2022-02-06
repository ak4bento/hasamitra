@extends('layouts.app')

@push('page_scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#id_company').on('change', function() {
        console.log(this.value);
        $.getJSON("/data/organizational/" + this.value, function(result){
            $("#id_manager_org").find('option').remove().end();
            $.each(result, function(i, field){
                // console.log("Ini field = "+field.department);
                $("#id_manager_org").append(`<option value="${field.id}">${field.company_name} - ${field.job_title}</option>`);
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
                    <h1>Create Organizational</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'organizationals.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('organizationals.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('organizationals.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
