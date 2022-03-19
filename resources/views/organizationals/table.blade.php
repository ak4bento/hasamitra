<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>No</th>
            <th>Department</th>
            <th>Job Title</th>
            <th>Manager</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($organizationals as $organizational)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ App\Models\Department::find($organizational->id_department)->department }}</td>
                <td>{{ $organizational->job_title }}</td>
                <td>{{ App\Models\Organizational::find($organizational->id_manager_org)->job_title ?? '' }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('organizationals.edit', [$organizational->id]) }}"
                        class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                    <div class='btn-group'>
                        {!! Form::open(['route' => ['organizationals.destroy', $organizational->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class='btn-group'>
                        <button id="btnSelect" class="btn {{ $organizational->total_employee == 0 ? 'btn-warning disabled' : 'btn-primary' }} btn-xs" data-toggle="modal" data-target="#modal-lg" data-selector="{{ $organizational->id }}" onclick="clickFunction({{ $organizational->id }})"><i class="fa fa-user"></i> List {{ $organizational->total_employee }}</button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">List Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table id="table-employee" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbodyModal">
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal"><i class="fa fa-eye"></i> Show</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
