@extends('layouts.app')

@push('page_scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#id_company').on('change', function() {
        $.getJSON("/data/salaries/organizational/" + this.value, function(result){
            console.log("ada data dari company");
            document.getElementById("id_org").disabled = false;
            $("#id_org").find('option').remove().end();
            $.each(result, function(i, field){
                // console.log("Ini field = "+field.department);
                $("#id_org").append(`<option value="${field.id}">${field.department} - ${field.job_title}</option>`);
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
                    <h1>Create Salaries</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'salaries.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('salaries.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('salaries.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
