<!-- Id Employee Field -->
<div class="col-sm-12">
    {!! Form::label('id_employee', 'Employee:') !!}
    <p>{{ App\Models\Employee::find($reportingEmployee->id_employee)->name ?? '' }}</p>
</div>

<!-- Information Field -->
<div class="col-sm-12">
    {!! Form::label('information', 'Information:') !!}
    <p>{{ $reportingEmployee->information }}</p>
</div>

<!-- Imei Field -->
<div class="col-sm-12">
    {!! Form::label('imei', 'Imei:') !!}
    <p>{{ $reportingEmployee->imei }}</p>
</div>

<!-- Jenis Field -->
<div class="col-sm-12">
    {!! Form::label('jenis', 'Jenis:') !!}
    <p>{{ $reportingEmployee->jenis }}</p>
</div>

<!-- Jenis Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $reportingEmployee->created_at }}</p>
</div>

