<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $company->name }}</p>
</div>

<!-- Domain Field -->
<div class="col-sm-12">
    {!! Form::label('domain', 'Domain:') !!}
    <p>{{ $company->domain }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $company->phone }}</p>
</div>

<!-- Lat Field -->
<div class="col-sm-12">
    {!! Form::label('lat', 'Lat:') !!}
    <p>{{ $company->lat }}</p>
</div>

<!-- Lng Field -->
<div class="col-sm-12">
    {!! Form::label('lng', 'Lng:') !!}
    <p>{{ $company->lng }}</p>
</div>

<!-- Radius Field -->
<div class="col-sm-12">
    {!! Form::label('radius', 'Radius:') !!}
    <p>{{ $company->radius }}</p>
</div>

