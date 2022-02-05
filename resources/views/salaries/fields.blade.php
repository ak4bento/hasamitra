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

<!-- Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary', 'Salary:') !!}
    {!! Form::number('salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Profit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_profit', 'Status Profit:') !!}
    {!! Form::text('status_profit', null, ['class' => 'form-control','maxlength' => 1,'maxlength' => 1]) !!}
</div>

<!-- Info Profit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('info_profit', 'Info Profit:') !!}
    {!! Form::text('info_profit', null, ['class' => 'form-control','maxlength' => 64,'maxlength' => 64]) !!}
</div>

<!-- From Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from_date', 'From Date:') !!}
    {!! Form::text('from_date', null, ['class' => 'form-control','id'=>'from_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#from_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- To Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to_date', 'To Date:') !!}
    {!! Form::text('to_date', null, ['class' => 'form-control','id'=>'to_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#to_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Id Employee Approv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_employee_approv', 'Id Employee Approv:') !!}
    {!! Form::number('id_employee_approv', null, ['class' => 'form-control']) !!}
</div>