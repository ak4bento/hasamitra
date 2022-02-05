<!-- Id Department Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_department', 'Department:') !!}
    @php
    $items = App\Models\Department::pluck('department', 'id');
    @endphp

    {!! Form::select('id_department', $items, null, ['class' => 'js-example-basic-multiple form-control']) !!}
</div>

<!-- Initial Schema Field -->
<div class="form-group col-sm-6">
    {!! Form::label('initial_schema', 'Initial Schema:') !!}
    {!! Form::text('initial_schema', null, ['class' => 'form-control','maxlength' => 3,'maxlength' => 3]) !!}
</div>