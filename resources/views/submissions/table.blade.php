<div class="table-responsive">
    <table class="table table-hover text-nowrap" id="example2">
        <thead>
        <tr>
            <th>Employee</th>
            <th>Info</th>
            <th>Approval</th>
            <th>Status Approv</th>
            {{-- <th>Approval 2</th> --}}
            {{-- <th>Status Approv 2</th> --}}
            <th>Description</th>
            <th>Balance</th>
            <th>Submission Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($submissions as $submission)
            <tr>
                <td>{{ App\Models\Employee::find($submission->id_employee)->name }}</td>
                <td>{{ App\Models\SchemaBreak::find($submission->id_saldo_cuti)->info }}</td>
                <td>
                    {{ App\Models\Employee::find($submission->id_employee_approv)->name ?? 'Name Approval 1' }}
                    <br>
                    {{ App\Models\Employee::find($submission->id_employee_approv_2)->name ?? 'Name Approval 2' }}
                </td>
                <td>
                    @if ($submission->status_approv == 'ditolak')
                        <span class="badge badge-danger">Rejected</span>
                    @elseif ($submission->status_approv == 'diterima')
                        <span class="badge badge-success">Received</span>
                    @elseif ($submission->status_approv == 'permintaan')
                        <span class="badge badge-warning">Request</span>
                    @elseif ($submission->status_approv == 'batal')
                        <span class="badge badge-secondary">Canceled</span>
                    @endif
                    <br>
                    @if ($submission->status_approv_2 == 'ditolak')
                        <span class="badge badge-danger">Rejected</span>
                    @elseif ($submission->status_approv_2 == 'diterima')
                        <span class="badge badge-success">Received</span>
                    @elseif ($submission->status_approv_2 == 'permintaan')
                        <span class="badge badge-warning">Request</span>
                    @elseif ($submission->status_approv_2 == 'batal')
                        <span class="badge badge-secondary">Canceled</span>
                    @endif
                </td>
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
                        {{-- <a href="{{ route('submissions.edit', [$submission->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i> Edit
                        </a> --}}
                        {!! Form::button('<i class="far fa-trash-alt"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
