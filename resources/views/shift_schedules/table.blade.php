<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>No</th>
            <th>Employee</th>
            <th>Status Shift</th>
            <th>Day</th>
            <th>In Hour</th>
            <th>Out Hour</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($shiftSchedules as $shiftSchedule)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ App\Models\Employee::find($shiftSchedule->id_employee)->name ?? '' }}</td>
                <td>{{ $shiftSchedule->status_shift }}</td>
                <td>{{ $shiftSchedule->day }}</td>
                <td>{{ $shiftSchedule->in_hour }}</td>
                <td>{{ $shiftSchedule->out_hour }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['shiftSchedules.destroy', $shiftSchedule->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shiftSchedules.show', [$shiftSchedule->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('shiftSchedules.edit', [$shiftSchedule->id]) }}"
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
