<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <!-- <th>Id Company</th> -->
            <th>Department</th>
            <th>Job Title</th>
            <th>Manager</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($organizationals as $organizational)
            <tr>
                <!-- <td>{{ $organizational->id_company }}</td> -->
                <td>{{ App\Models\Department::find($organizational->id_department)->department }}</td>
                <td>{{ $organizational->job_title }}</td>
                <td>{{ App\Models\Organizational::find($organizational->id_manager_org)->job_title ?? '' }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['organizationals.destroy', $organizational->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('organizationals.edit', [$organizational->id]) }}"
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
