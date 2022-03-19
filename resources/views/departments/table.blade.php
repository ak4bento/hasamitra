<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>No</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($departments as $department)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $department->department }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['departments.destroy', $department->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('departments.edit', [$department->id]) }}"
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
