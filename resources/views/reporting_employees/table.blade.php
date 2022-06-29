<div class="table-responsive">
    <table class="table table-hover text-nowrap" id="example2">
        <thead>
        <tr>
            <th>Employee</th>
            {{-- <th>Information</th> --}}
            <th>Imei</th>
            <th>Jenis</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reportingEmployees as $reportingEmployee)
            <tr>
                <td>{{ App\Models\Employee::find($reportingEmployee->id_employee)->name ?? '' }}</td>
                {{-- <td>{{ $reportingEmployee->information }}</td> --}}
                <td>{{ $reportingEmployee->imei }}</td>
                <td>{{ $reportingEmployee->jenis }}</td>
                <td>{{ $reportingEmployee->created_at }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('reportingEmployees.show', [$reportingEmployee->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
