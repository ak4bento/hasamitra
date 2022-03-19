<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>No</th>
            <th>Id Company</th>
            <th>Id Org</th>
            <th>Id Employee</th>
            <th>Salary</th>
            <th>Status Profit</th>
            <th>Info Profit</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>Id Employee Approv</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($salaries as $salaries)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $salaries->id_company }}</td>
                <td>{{ $salaries->id_org }}</td>
                <td>{{ $salaries->id_employee }}</td>
                <td>{{ $salaries->salary }}</td>
                <td>{{ $salaries->status_profit }}</td>
                <td>{{ $salaries->info_profit }}</td>
                <td>{{ $salaries->from_date }}</td>
                <td>{{ $salaries->to_date }}</td>
                <td>{{ $salaries->id_employee_approv }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['salaries.destroy', $salaries->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('salaries.show', [$salaries->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('salaries.edit', [$salaries->id]) }}"
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
