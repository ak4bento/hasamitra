<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>Employee</th>
            <th>Info Cuti</th>
            <th>Approval</th>
            {{-- <th>Status Approv</th> --}}
            <th>Ket Cuti</th>
            <th>Saldo Cuti</th>
            <th>Submission Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($submissions as $submission)
            <tr>
                <td>{{ App\Models\Employee::find($submission->id_employee)->name }}</td>
                <td>{{ App\Models\SchemaBreak::find($submission->id_saldo_cuti)->info }}</td>
                <td>{{ App\Models\Employee::find($submission->id_employee_approv)->name ?? '' }}</td>
                {{-- <td>{{ $submission->status_approv }}</td> --}}
                <td>{{ $submission->ket_cuti }}</td>
                <td>{{ $submission->saldo_cuti }}</td>
                <td>{{ date('d M Y', strtotime($submission->submission_date)) }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['submissions.destroy', $submission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('submissions.show', [$submission->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a> --}}
                        <a href="{{ route('submissions.edit', [$submission->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i> Edit
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
