<div class="table-responsive">
    <table class="table table-hover text-nowrap" id="example2">
        <thead>
        <tr>
            <th>Id Company</th>
            <th>Id Org</th>
            <th>Id Employee</th>
            <th>Date Salary</th>
            <th>Accept Date</th>
            <th>Salary Basic</th>
            <th>Salary Allowance</th>
            <th>Salary Food</th>
            <th>Salary Daily</th>
            <th>Salary Target</th>
            <th>Salary Cut</th>
            <th>Status Salary</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($acceptSalaries as $acceptSalaries)
            <tr>
                <td>{{ $acceptSalaries->id_company }}</td>
                <td>{{ $acceptSalaries->id_org }}</td>
                <td>{{ $acceptSalaries->id_employee }}</td>
                <td>{{ $acceptSalaries->date_salary }}</td>
                <td>{{ $acceptSalaries->accept_date }}</td>
                <td>{{ $acceptSalaries->salary_basic }}</td>
                <td>{{ $acceptSalaries->salary_allowance }}</td>
                <td>{{ $acceptSalaries->salary_food }}</td>
                <td>{{ $acceptSalaries->salary_daily }}</td>
                <td>{{ $acceptSalaries->salary_target }}</td>
                <td>{{ $acceptSalaries->salary_cut }}</td>
                <td>{{ $acceptSalaries->status_salary }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['acceptSalaries.destroy', $acceptSalaries->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('acceptSalaries.show', [$acceptSalaries->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('acceptSalaries.edit', [$acceptSalaries->id]) }}"
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
