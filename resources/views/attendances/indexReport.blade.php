@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>Attendances</h1>
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-success float-right btn-block"
                        href="{{ route('attendances.export') }}?start_date={{ request()->get('start_date') }}&end_date={{ request()->get('end_date') }}">
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
        </div>

        <div class="card">
            <div class="card-body">
                @include('attendances.tableReport')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

