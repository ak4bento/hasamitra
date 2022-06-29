<!-- Id Employee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_employee', 'Id Employee:') !!}
    {!! Form::number('id_employee', null, ['class' => 'form-control']) !!}
</div>

<!-- Information Field -->
<div class="form-group col-sm-6">
    {!! Form::label('information', 'Information:') !!}
    {!! Form::text('information', null, ['class' => 'form-control','maxlength' => 60000,'maxlength' => 60000]) !!}
</div>

<!-- Imei Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imei', 'Imei:') !!}
    {!! Form::text('imei', null, ['class' => 'form-control','maxlength' => 32,'maxlength' => 32]) !!}
</div>

<!-- Jenis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis', 'Jenis:') !!}
    {!! Form::text('jenis', null, ['class' => 'form-control','maxlength' => 16,'maxlength' => 16]) !!}
</div>