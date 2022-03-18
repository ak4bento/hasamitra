@extends('layouts.app')

@push('page_scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#department').on('change', function() {
        console.log('Submit');
        this.form.submit();
    });
    $('button[type=show]').click(function() {
        var selector = $(this).data('selector');

        $.getJSON("/data/employee/" + selector, function(result){
            $("#modal-lg").find('tbody').find('tr').remove();
            $.each(result, function(i, field){
                $("#modal-lg").find('tbody').append(`<tr>
                    <td>${field.nik}</td>
                    <td>${field.name}</td>
                    <td>
                        <a href="/employees/${field.id}/edit">
                            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Edit</button>
                        </a>
                    </td>
                    </tr>`);
            });
        });
    });
});
</script>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">List Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table id="table-employee" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal"><i class="fa fa-eye"></i> Show</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Organizationals</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('organizationals.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body">
                @php
                $items = App\Models\Company::pluck('name', 'id');
                $items->prepend('-- SELECT COMPANY--', '');
                @endphp
                
                {!! Form::open(['route' => 'organizationals.store']) !!}
                    {!! Form::select('company', $items, $selected_company, ['id' => 'department','class' => 'js-example-basic-multiple form-control']) !!}
                {!! Form::close() !!}
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                @include('organizationals.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

