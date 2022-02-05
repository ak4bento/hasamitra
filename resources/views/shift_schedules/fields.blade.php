<!-- Id Employee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_employee', 'Id Employee:') !!}
    {!! Form::number('id_employee', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Shift Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_shift', 'Status Shift:') !!}
    {!! Form::text('status_shift', null, ['class' => 'form-control']) !!}
</div>

<!-- Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day', 'Day:') !!}
    {!! Form::text('day', null, ['class' => 'form-control']) !!}
</div>

<!-- In Hour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('in_hour', 'In Hour:') !!}
    {!! Form::text('in_hour', null, ['class' => 'form-control','id'=>'in_hour']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#in_hour').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Out Hour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('out_hour', 'Out Hour:') !!}
    {!! Form::text('out_hour', null, ['class' => 'form-control','id'=>'out_hour']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#out_hour').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush