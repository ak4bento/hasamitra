<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Approv 1</th>
            <th>Approv 2</th>
            {{-- <th>Imei</th> --}}
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($employees as $employee)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $employee->nik }}</td>
                <td width="220">{{ $employee->name }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->gender }}</td>
                <td width="220">{{ App\Models\Employee::find($employee->id_employee_approv_permission1)->name ?? '' }}</td>
                <td width="220">{{ App\Models\Employee::find($employee->id_employee_approv_permission2)->name ?? '' }}</td>
                {{-- <td>{{ $employee->imei }}</td> --}}
                <td width="120">
                    <div class='btn-group'>
                        {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('employees.edit', [$employee->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i> Edit
                        </a>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('employees.approve', [$employee->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="fas fa-book"></i> Approve
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
