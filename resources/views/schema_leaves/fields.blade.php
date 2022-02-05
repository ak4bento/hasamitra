<!-- Id Master Schema Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_master_schema', 'Id Master Schema:') !!}
    {!! Form::number('id_master_schema', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('info', 'Info:') !!}
    {!! Form::text('info', null, ['class' => 'form-control','maxlength' => 64,'maxlength' => 64]) !!}
</div>

<!-- Quantify Saldo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantify_saldo', 'Quantify Saldo:') !!}
    {!! Form::text('quantify_saldo', null, ['class' => 'form-control']) !!}
</div>

<!-- Saldo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('saldo', 'Saldo:') !!}
    {!! Form::number('saldo', null, ['class' => 'form-control']) !!}
</div>