<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>No</th>
            <th>Employee</th>
            <th>Check In / Out</th>
            <th>Schedule</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($attendances as $attendance)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ App\Models\Employee::find($attendance->id_employee)->name ?? '' }}</td>
                <td>
                    {{-- <div class="btn-group"> --}}
                        IN : {!! $attendance->check_in ?? '<span class="right badge badge-danger">Absence</span>' !!} <br>
                    {{-- </div> --}}
                    {{-- <div class="btn-group"> --}}
                        OUT : {!! $attendance->check_out ?? '<span class="right badge badge-danger">Absence</span>' !!}
                    {{-- </div> --}}
                </td>
                <td>
                    {{-- <div class='btn-group'> --}}
                        IN : {{ $attendance->schedule_in }} <br>
                    {{-- </div> --}}
                    {{-- <div class='btn-group'> --}}
                        OUT : {{ $attendance->schedule_out }}
                    {{-- </div> --}}
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['attendances.destroy', $attendance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendances.show', [$attendance->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('attendances.edit', [$attendance->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
