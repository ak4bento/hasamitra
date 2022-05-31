@if (Request::is('salaries/create'))
<div class="form-group col-sm-6">
    {!! Form::label('id_employee', 'Employee:') !!}
    {{-- {!! Form::number('id_employee', null, ['class' => 'form-control']) !!} --}}
    @php
    $items = App\Models\Employee::pluck('name', 'id');
    $items->prepend('Please Select Employee', '');
    @endphp

    {!! Form::select('id_employee', $items, null, ['id' => 'id_employee', 'class' => 'js-example-basic-multiple form-control']) !!}    
</div>
@endif

@if (Request::is('salaries/type/organizational/create'))
<div class="form-group col-sm-6">
    {!! Form::label('id_company', 'Company:') !!}

    @php
    $items = App\Models\Company::pluck('name', 'id');
    $items->prepend('Please Select Company', '');
    @endphp

    {!! Form::select('id_company', $items, null, ['id' => 'id_company', 'class' => 'js-example-basic-multiple form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('id_org', 'Organizational:') !!}
    {{-- {!! Form::number('id_org', null, ['class' => 'form-control']) !!} --}}
    {!! Form::select('id_org', [null=>'Please Select Company'], null, ['id' => 'id_org','class' => 'js-example-basic-multiple form-control', 'disabled']) !!}
</div>
@endif

@if (Request::is('salaries/type/company/create'))
<div class="form-group col-sm-6">
    {!! Form::label('id_company', 'Company:') !!}
    {{-- {!! Form::number('id_company', null, ['class' => 'form-control']) !!} --}}

    @php
    $items = App\Models\Company::pluck('name', 'id');
    $items->prepend('Please Select Company', '');
    @endphp

    {!! Form::select('id_company', $items, null, ['id' => 'id_company', 'class' => 'js-example-basic-multiple form-control']) !!}
</div>
@endif

<!-- Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary', 'Salary:') !!}
    {!! Form::text('salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Profit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_profit', 'Status Profit:') !!}
    {{-- {!! Form::text('status_profit', null, ['class' => 'form-control','maxlength' => 1,'maxlength' => 1]) !!} --}}
    <select name="status_profit" class="form-control">
        <option value="">-- Pilih --</option>
        <option value="Kontrak">Pokok</option>
        <option value="Tetap">Tambahan</option>
    </select>
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
            format: 'YYYY-MM-DD',
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
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Id Employee Approv Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('id_employee_approv', 'Id Employee Approv:') !!}
    {!! Form::number('id_employee_approv', null, ['class' => 'form-control']) !!}
</div> --}}