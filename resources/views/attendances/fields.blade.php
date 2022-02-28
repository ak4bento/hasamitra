<!-- Id Employee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_employee', 'Id Employee:') !!}
    {!! Form::number('id_employee', null, ['class' => 'form-control']) !!}
</div>

<!-- Check In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('check_in', 'Check In:') !!}
    {!! Form::text('check_in', null, ['class' => 'form-control','id'=>'check_in']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#check_in').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Check Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('check_out', 'Check Out:') !!}
    {!! Form::text('check_out', null, ['class' => 'form-control','id'=>'check_out']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#check_out').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Lat In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lat_in', 'Lat In:') !!}
    {!! Form::number('lat_in', null, ['class' => 'form-control']) !!}
</div>

<!-- Lng In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lng_in', 'Lng In:') !!}
    {!! Form::number('lng_in', null, ['class' => 'form-control']) !!}
</div>

<!-- Lat Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lat_out', 'Lat Out:') !!}
    {!! Form::number('lat_out', null, ['class' => 'form-control']) !!}
</div>

<!-- Lng Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lng_out', 'Lng Out:') !!}
    {!! Form::number('lng_out', null, ['class' => 'form-control']) !!}
</div>

<!-- Schedule In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schedule_in', 'Schedule In:') !!}
    {!! Form::text('schedule_in', null, ['class' => 'form-control']) !!}
</div>

<!-- Schedule Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schedule_out', 'Schedule Out:') !!}
    {!! Form::text('schedule_out', null, ['class' => 'form-control']) !!}
</div>