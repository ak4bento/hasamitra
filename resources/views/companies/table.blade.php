<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Domain</th>
            <th>Phone</th>
            <th>Radius</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($companies as $company)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->domain }}</td>
                <td>{{ $company->phone }}</td>
                <td>{{ $company->radius }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('companies.edit', [$company->id]) }}"
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
