<div class="table-responsive">
    <table class="table" id="example2">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($admins as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>
                    @foreach ($admin->getRoleNames() as $role)
                        <span class="right badge badge-primary">{{ $role }}</span>
                    @endforeach
                </td>
                <td width="120">
                    {!! Form::open(['route' => ['admins.destroy', $admin->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admins.show', [$admin->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admins.edit', [$admin->id]) }}"
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
