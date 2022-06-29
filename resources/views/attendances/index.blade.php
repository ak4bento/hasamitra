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
                <div class="col-sm-2">
                    <a class="btn btn-primary float-right btn-block"
                       href="{{ route('attendances.create') }}">
                        Add New
                    </a>
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-success float-right btn-block"
                        href="{{ route('attendances.export') }}">
                        <i class="fas fa-file"></i>
                        Export Excel
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
                
                {!! Form::open(['route' => 'attendances.store']) !!}
                    {!! Form::select('company', $items, $selected_company, ['id' => 'company','class' => 'js-example-basic-multiple form-control']) !!}
                {!! Form::close() !!}
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                @include('attendances.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

