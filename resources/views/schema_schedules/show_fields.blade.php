<!-- Id Master Schema Field -->
<div class="col-sm-12">
    {!! Form::label('id_master_schema', 'Id Master Schema:') !!}
    <p>{{ $schemaSchedule->id_master_schema }}</p>
</div>

<!-- Day Field -->
<div class="col-sm-12">
    {!! Form::label('day', 'Day:') !!}
    <p>{{ $schemaSchedule->day }}</p>
</div>

<!-- Time In Field -->
<div class="col-sm-12">
    {!! Form::label('time_in', 'Time In:') !!}
    <p>{{ $schemaSchedule->time_in }}</p>
</div>

<!-- Time Out Field -->
<div class="col-sm-12">
    {!! Form::label('time_out', 'Time Out:') !!}
    <p>{{ $schemaSchedule->time_out }}</p>
</div>

<!-- Late Day Field -->
<div class="col-sm-12">
    {!! Form::label('late_day', 'Late Day:') !!}
    <p>{{ $schemaSchedule->late_day }}</p>
</div>

