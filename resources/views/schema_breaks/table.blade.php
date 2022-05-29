<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            {{-- <th>Master Schema</th> --}}
            <th>Gender</th>
            <th>Info</th>
            <th>Quantify Saldo</th>
            <th>Saldo</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($schemaBreaks as $schemaBreak)
            <tr>
                {{-- <td>{{ App\Models\MasterSchema::find($schemaBreak->id_master_schema)->initial_schema ?? '' }}</td> --}}
                <td>@if($schemaBreak->gender == 'X') Semua @elseif ($schemaBreak->gender == 'L') Laki-laki @elseif ($schemaBreak->gender == 'P') Perempuan @endif</td>
                <td>{{ $schemaBreak->info }}</td>
                <td>{{ $schemaBreak->quantify_saldo == 'D' ? 'Hari' : 'Jam' }}</td>
                <td>{{ $schemaBreak->saldo }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['schemaBreaks.destroy', $schemaBreak->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schemaBreaks.show', [$schemaBreak->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('schemaBreaks.edit', [$schemaBreak->id]) }}"
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
