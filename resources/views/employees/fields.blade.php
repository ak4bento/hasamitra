<!-- Nik Field -->
<div class="form-group col-sm-12">
    {!! Form::label('company', 'Company:') !!}

    @php
    $items = App\Models\Company::pluck('name', 'id');
    @endphp
    
    {!! Form::open(['route' => 'employees.store']) !!}
        {!! Form::select('company', $items, null, ['id' => 'department','class' => 'js-example-basic-multiple form-control']) !!}
    {!! Form::close() !!}
</div>

<!-- Id Organization Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_organization', 'Organization:') !!}
    <select name="organization" id="organization" class="form-control">
    </select>
</div>

<!-- Nik Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nik', 'NIK:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control','maxlength' => 32,'maxlength' => 32]) !!}
</div>
{{--
<!-- Pass Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass', 'Pass:') !!}
    {!! Form::text('pass', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
--}}
<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 64,'maxlength' => 64]) !!}
</div>

<!-- Domain Field -->
<div class="form-group col-sm-12">
    {!! Form::label('domain', 'Domain:') !!}
    {!! Form::text('domain', null, ['class' => 'form-control','maxlength' => 128,'maxlength' => 128]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 32,'maxlength' => 32]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 128,'maxlength' => 128]) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <select name="gender" id="gender" class="form-control">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>
</div>

<!-- Region Field -->
<div class="form-group col-sm-12">
    {!! Form::label('region', 'Region:') !!}
    <select name="region" id="region" class="form-control">
        <option value="islam">Islam</option>
        <option value="protestan">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="hindu">Hindu</option>
        <option value="buddha">Buddha</option>
        <option value="khonghucu">Khonghucu</option>
        <option value="lainnya">Lainnya</option>
    </select>
</div>