@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                <h3>{{ count($company) }}</h3>

                <p>Companies</p>
                </div>
                <div class="icon">
                <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
                </div>
                <div class="icon">
                <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>{{ count($employees) }}</h3>

                <p>Employee Registrations</p>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
                </div>
                <div class="icon">
                <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header border-0">
                <h3 class="card-title">Attendance Today</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                    </a>
                    <a href="{{ route('attendances.index') }}" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                    </a>
                </div>
                </div>
                <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendances as $attendance)
                        <tr>
                            <td>
                                {{ App\Models\Employee::find($attendance->id_employee)->name }}
                            </td>
                            <td>{!! $attendance->check_in ?? '<span class="right badge badge-danger">Absence</span>' !!}</td>
                            <td>{!! $attendance->check_out ?? '<span class="right badge badge-danger">Absence</span>' !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-0">
                <h3 class="card-title">Absence Overview</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-sm btn-tool">
                    <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-tool">
                    <i class="fas fa-bars"></i>
                    </a>
                </div>
                </div>
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-success text-xl">
                    <i class="ion ion-ios-refresh-empty"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                        <i class="ion ion-android-arrow-up text-success"></i> {{ number_format((count($attendances)/count($employees))*100, 0, '', '') }}%
                    </span>
                    <span class="text-muted">ATTENDANCE TODAY</span>
                    </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-warning text-xl">
                    <i class="ion ion-ios-cart-outline"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                        <i class="ion ion-android-arrow-up text-warning"></i> {{ count($employees) }}
                    </span>
                    <span class="text-muted">TOTAL EMPLOYEES</span>
                    </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center mb-0">
                    <p class="text-danger text-xl">
                    <i class="ion ion-ios-people-outline"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                        <i class="ion ion-android-arrow-down text-danger"></i> {{ number_format(((count($employees) - count($attendances))/count($employees))*100, 0, '', '') }}%
                    </span>
                    <span class="text-muted">ABSENCE TODAY</span>
                    </p>
                </div>
                <!-- /.d-flex -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
