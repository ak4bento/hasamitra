<!-- Id Employee Field -->
<div class="col-sm-12">
    {!! Form::label('id_employee', 'Employee:') !!}
    <p>{{ App\Models\Employee::find($attendance->id_employee)->name }}</p>
</div>

<!-- Check In Field -->
<div class="col-sm-12">
    {!! Form::label('check_in', 'Check In:') !!}
    <p>{{ $attendance->check_in }}</p>
</div>

<!-- Check Out Field -->
<div class="col-sm-12">
    {!! Form::label('check_out', 'Check Out:') !!}
    <p>{{ $attendance->check_out }}</p>
</div>

<!-- Lat In Field -->
<div class="col-sm-12">
    {!! Form::label('lat_in', 'Lat In:') !!}
    <p>{{ $attendance->lat_in }}</p>
</div>

<!-- Lng In Field -->
<div class="col-sm-12">
    {!! Form::label('lng_in', 'Lng In:') !!}
    <p>{{ $attendance->lng_in }}</p>
</div>

<!-- Lat Out Field -->
<div class="col-sm-12">
    {!! Form::label('lat_out', 'Lat Out:') !!}
    <p>{{ $attendance->lat_out }}</p>
</div>

<!-- Lng Out Field -->
<div class="col-sm-12">
    {!! Form::label('lng_out', 'Lng Out:') !!}
    <p>{{ $attendance->lng_out }}</p>
</div>

<!-- Schedule In Field -->
<div class="col-sm-12">
    {!! Form::label('schedule_in', 'Schedule In:') !!}
    <p>{{ $attendance->schedule_in }}</p>
</div>

<!-- Schedule Out Field -->
<div class="col-sm-12">
    {!! Form::label('schedule_out', 'Schedule Out:') !!}
    <p>{{ $attendance->schedule_out }}</p>
</div>

