<div class="table-responsive">
    <table class="table table-hover text-nowrap" id="example2">
        <thead>
        <tr>
            <th>No</th>
            @if (Request::is('salaries/type/company'))
            <th>Company</th>
            @endif
            @if (Request::is('salaries/type/organizational'))
            <th>Company</th>
            <th>Organizational</th>
            @endif
            @if (Request::is('salaries'))
            <th>Employee</th>
            @endif
            <th>Salary</th>
            {{-- <th>Status Profit</th> --}}
            <th>Info Profit</th>
            <th>From Date</th>
            <th>To Date</th>
            {{-- <th>Id Employee Approv</th> --}}
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($salaries as $salaries)
            <tr>
                <td>{{ $count++ }}</td>
                @if (Request::is('salaries/type/company'))
                <td>{{ App\Models\Company::find($salaries->id_company)->name }}</td>
                @endif
                @if (Request::is('salaries/type/organizational'))
                <td>{{ App\Models\Company::find($salaries->id_company)->name ?? '' }}</td>
                <td>{{ App\Models\Organizational::find($salaries->id_org)->job_title ?? '' }}</td>
                @endif
                @if (Request::is('salaries'))
                <td>{{ App\Models\Employee::find($salaries->id_employee)->name ?? '' }}</td>
                @endif
                <td>
                    @if ($salaries->status_profit == 'Kontrak')
                        <span class="badge badge-success">{{ number_format($salaries->salary, '0', ',', '.') }}</span>
                    @else
                        <span class="badge badge-warning">{{ number_format($salaries->salary, '0', ',', '.') }}</span>
                    @endif
                </td>
                {{-- <td>{{ $salaries->status_profit == 1 ? 'Contract' : 'Permanent' }}</td> --}}
                <td>{{ $salaries->info_profit }}</td>
                <td>{{ date('d M Y', strtotime($salaries->from_date)) }}</td>
                <td>{{ date('d M Y', strtotime($salaries->to_date)) }}</td>
                {{-- <td>{{ $salaries->id_employee_approv }}</td> --}}
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
