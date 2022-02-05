<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>Name Department</th>
            <th>Initial Schema</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($masterSchemas as $masterSchema)
            <tr>
                <td>{{ App\Models\Department::find($masterSchema->id_department)->department }}</td>
                <td>{{ $masterSchema->initial_schema }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['masterSchemas.destroy', $masterSchema->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('masterSchemas.edit', [$masterSchema->id]) }}"
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
