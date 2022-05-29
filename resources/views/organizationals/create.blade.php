@extends('layouts.app')

@push('page_scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#id_company').on('change', function() {
        // console.log(this.value);
        let department = document.getElementById('id_department').value;
        if (department != '') {
            $.getJSON("/data/organizational/" + this.value + "/" + department, function(result){
                if (result.length > 0) {
                    console.log("ada data dari company");
                    document.getElementById("id_manager_org").disabled = false;
                    $("#id_manager_org").find('option').remove().end();
                    $.each(result, function(i, field){
                        // console.log("Ini field = "+field.department);
                        $("#id_manager_org").append(`<option value="${field.id}">${field.company_name} - ${field.job_title}</option>`);
                        // $("#organization").append(field + " ");
                    });
                }
            });
        }
    });
    $('#id_department').on('change', function() {
        // console.log(document.getElementById('id_company').value);
        let comapny = document.getElementById('id_company').value;
        if (comapny != '') {
            $.getJSON("/data/organizational/" + comapny + "/" + this.value, function(result){
                if (result.length > 0) {
                    console.log("ada data dari department");
                    document.getElementById("id_manager_org").disabled = false;
                    $("#id_manager_org").find('option').remove().end();
                    $.each(result, function(i, field){
                        // console.log("Ini field = "+field.department);
                        $("#id_manager_org").append(`<option value="${field.id}">${field.company_name} - ${field.job_title}</option>`);
                        // $("#organization").append(field + " ");
                    });
                }
            });
        }
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
