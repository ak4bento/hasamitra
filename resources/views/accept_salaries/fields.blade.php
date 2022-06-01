<!-- Id Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_company', 'Id Company:') !!}
    {!! Form::number('id_company', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Org Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_org', 'Id Org:') !!}
    {!! Form::number('id_org', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Employee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_employee', 'Id Employee:') !!}
    {!! Form::number('id_employee', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_salary', 'Date Salary:') !!}
    {!! Form::text('date_salary', null, ['class' => 'form-control','id'=>'date_salary']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_salary').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Accept Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accept_date', 'Accept Date:') !!}
    {!! Form::text('accept_date', null, ['class' => 'form-control','id'=>'accept_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#accept_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Salary Basic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary_basic', 'Salary Basic:') !!}
    {!! Form::number('salary_basic', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Allowance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary_allowance', 'Salary Allowance:') !!}
    {!! Form::number('salary_allowance', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Food Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary_food', 'Salary Food:') !!}
    {!! Form::number('salary_food', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Daily Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary_daily', 'Salary Daily:') !!}
    {!! Form::number('salary_daily', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Target Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary_target', 'Salary Target:') !!}
    {!! Form::number('salary_target', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Cut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary_cut', 'Salary Cut:') !!}
    {!! Form::number('salary_cut', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_salary', 'Status Salary:') !!}
    {!! Form::text('status_salary', null, ['class' => 'form-control']) !!}
</div>