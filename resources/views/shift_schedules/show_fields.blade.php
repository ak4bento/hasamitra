<!-- Id Employee Field -->
<div class="col-sm-12">
    {!! Form::label('id_employee', 'Id Employee:') !!}
    <p>{{ $shiftSchedule->id_employee }}</p>
</div>

<!-- Status Shift Field -->
<div class="col-sm-12">
    {!! Form::label('status_shift', 'Status Shift:') !!}
    <p>{{ $shiftSchedule->status_shift }}</p>
</div>

<!-- Day Field -->
<div class="col-sm-12">
    {!! Form::label('day', 'Day:') !!}
    <p>{{ $shiftSchedule->day }}</p>
</div>

<!-- In Hour Field -->
<div class="col-sm-12">
    {!! Form::label('in_hour', 'In Hour:') !!}
    <p>{{ $shiftSchedule->in_hour }}</p>
</div>

<!-- Out Hour Field -->
<div class="col-sm-12">
    {!! Form::label('out_hour', 'Out Hour:') !!}
    <p>{{ $shiftSchedule->out_hour }}</p>
</div>

