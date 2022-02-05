<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 32,'maxlength' => 32]) !!}
</div>

<!-- Domain Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domain', 'Domain:') !!}
    {!! Form::text('domain', null, ['class' => 'form-control','maxlength' => 64,'maxlength' => 64]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 16,'maxlength' => 16]) !!}
</div>

<!-- Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lat', 'Lat:') !!}
    {!! Form::number('lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Lng Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lng', 'Lng:') !!}
    {!! Form::number('lng', null, ['class' => 'form-control']) !!}
</div>

<!-- Radius Field -->
<div class="form-group col-sm-6">
    {!! Form::label('radius', 'Radius:') !!}
    {!! Form::number('radius', null, ['class' => 'form-control']) !!}
</div>