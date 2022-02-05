<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>SCHEMA</th>
            <th>MONDAY</th>
            <th>TUESDAY</th>
            <th>WEDNESDAY</th>
            <th>THURSDAY</th>
            <th>FRIDAY</th>
            <th>SATURDAY</th>
            <th>SUNDAY</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($schemaSchedules as $schemaSchedule)
            <tr>
                <td>{{ App\Models\MasterSchema::find($schemaSchedule->id_master_schema)->initial_schema }}</td>
                @foreach(App\Models\SchemaSchedule::where('id_master_schema',$schemaSchedule->id_master_schema)->get() as $result)
                <td>{{ $result->time_in }} - {{ $result->time_out }}</td>
                @endforeach
                <td width="120">
                    {!! Form::open(['route' => ['schemaSchedules.destroy', $schemaSchedule->id_master_schema], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schemaSchedules.edit', [$schemaSchedule->id_master_schema]) }}"
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
