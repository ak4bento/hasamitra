<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>Id Master Schema</th>
        <th>Gender</th>
        <th>Info</th>
        <th>Quantify Saldo</th>
        <th>Saldo</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($schemaLeaves as $schemaLeave)
            <tr>
                <td>{{ $schemaLeave->id_master_schema }}</td>
            <td>{{ $schemaLeave->gender }}</td>
            <td>{{ $schemaLeave->info }}</td>
            <td>{{ $schemaLeave->quantify_saldo }}</td>
            <td>{{ $schemaLeave->saldo }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['schemaLeaves.destroy', $schemaLeave->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schemaLeaves.show', [$schemaLeave->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('schemaLeaves.edit', [$schemaLeave->id]) }}"
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
