@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Salaries</h1>
                </div>
                <div class="col-sm-6">
                    @if (Request::is('salaries'))
                        <a class="btn btn-primary float-right" href="{{ route('salaries.create') }}">
                            Add New
                        </a>
                    @endif
                    @if (Request::is('salaries/type/organizational'))
                        <a class="btn btn-secondary float-right" href="{{ route('salaries.indexOrganizational.create') }}">
                            Add New
                        </a>
                    @endif
                    @if (Request::is('salaries/type/company'))
                        <a class="btn btn-info float-right" href="{{ route('salaries.indexCompany.create') }}">
                            Add New
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body">
                @include('salaries.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

