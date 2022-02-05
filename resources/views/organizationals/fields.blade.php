<!-- Id Company Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_company', 'Company:') !!}
    <!-- {!! Form::number('id_company', null, ['class' => 'form-control']) !!} -->
    
    @php
    $items = App\Models\Company::pluck('name', 'id');
    @endphp

    {!! Form::select('id_company', $items, null, ['class' => 'js-example-basic-multiple form-control']) !!}
</div>

<!-- Id Department Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_department', 'Department:') !!}
    <!-- {!! Form::number('id_department', null, ['class' => 'form-control']) !!} -->
    
    @php
    $items = App\Models\Department::pluck('department', 'id');
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
    <!-- {!! Form::number('id_manager_org', null, ['class' => 'form-control']) !!} -->
    
    @php
    $items = App\Models\Organizational::pluck('job_title', 'id');
    @endphp

    {!! Form::select('id_manager_org', $items, null, ['class' => 'js-example-basic-multiple form-control']) !!}
</div>