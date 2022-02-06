<!-- Id Company Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_company', 'Company:') !!}
    <!-- {!! Form::number('id_company', null, ['class' => 'form-control']) !!} -->
    
    @php
    $items = App\Models\Company::pluck('name', 'id');
    $items->prepend('Please Select Company', '');
    @endphp

    {!! Form::select('id_company', $items, null, ['id' => 'id_company', 'class' => 'js-example-basic-multiple form-control']) !!}
</div>

<!-- Id Department Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_department', 'Department:') !!}
    <!-- {!! Form::number('id_department', null, ['class' => 'form-control']) !!} -->
    
    @php
    $items = App\Models\Department::pluck('department', 'id');
    $items->prepend('Please Select Department', '');
    @endphp

    {!! Form::select('id_department', $items, null, ['class' => 'js-example-basic-multiple form-control']) !!}
</div>

<!-- Job Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('job_title', 'Job Title:') !!}
    {!! Form::text('job_title', null, ['class' => 'form-control','maxlength' => 32,'maxlength' => 32]) !!}
</div>

<!-- Id Manager Org Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_manager_org', 'Manager:') !!}
    {{-- {!! Form::number('id_manager_org', null, ['class' => 'form-control']) !!} --}}
    
    {!! Form::select('id_manager_org', [null=>'Please Select Company'], null, ['id' => 'id_manager_org','class' => 'js-example-basic-multiple form-control']) !!}
</div>

<!-- Id Manager Org Field -->
<div class="form-group col-sm-12">
    {!! Form::label('share', 'Share Job to Any Company:') !!}
    <div class="form-check">
        {!! Form::radio('share', 'Ya', null, ['class' => 'form-check-input']) !!}
        <label class="form-check-label">Yes</label>
    </div>
    <div class="form-check">
        {!! Form::radio('share', 'Tidak', null, ['class' => 'form-check-input']) !!}
        <label class="form-check-label">No</label>
    </div>
</div>