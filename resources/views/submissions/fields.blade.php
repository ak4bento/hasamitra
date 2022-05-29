<!-- Id Employee Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('id_employee', 'Id Employee:') !!}
    {!! Form::number('id_employee', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Id Saldo Cuti Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('id_saldo_cuti', 'Id Saldo Cuti:') !!}
    {!! Form::number('id_saldo_cuti', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Id Employee Approv Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_employee_approv', 'Employee Approv:') !!}
    {{-- {!! Form::number('id_employee_approv', null, ['class' => 'form-control']) !!} --}}
    
    @php
    $items = App\Models\Employee::find($submission->id_employee);
    @endphp
    
    {{-- {!! Form::select('id_employee_approv', $items, '', ['class' => 'js-example-basic-multiple form-control']) !!} --}}

    <select name="id_employee_approv" class="js-example-basic-multiple form-control">
        <option value="">Please Select Approval</option>
        @php
            $approv1 = App\Models\Employee::find($items->id_employee_approv_permission1)->name ?? '';
            $approv2 = App\Models\Employee::find($items->id_employee_approv_permission2)->name ?? '';
        @endphp
        @if ($approv1 != '')
        <option value="{{ $items->id_employee_approv_permission1 }}">{{ $approv1 }}</option>
        @endif

        @if ($approv2 != '')
        <option value="{{ $items->id_employee_approv_permission2 }}">{{ $approv2 }}</option>
        @endif
    </select>
</div>

<!-- Status Approv Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status_approv', 'Status Approv:') !!}
    {{-- {!! Form::text('status_approv', null, ['class' => 'form-control']) !!} --}}
    <select name="status_approv" class="form-control">
        <option value="permintaan">Permintaan</option>
        <option value="ditolak">Di tolak</option>
        <option value="diterima">Di terima</option>
    </select>
</div>

<!-- Ket Cuti Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('ket_cuti', 'Ket Cuti:') !!}
    {!! Form::text('ket_cuti', null, ['class' => 'form-control','maxlength' => 128,'maxlength' => 128]) !!}
</div> --}}

<!-- Saldo Cuti Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('saldo_cuti', 'Saldo Cuti:') !!}
    {!! Form::number('saldo_cuti', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submission Date Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('submission_date', 'Submission Date:') !!}
    {!! Form::text('submission_date', null, ['class' => 'form-control','id'=>'submission_date']) !!}
</div> --}}

@push('page_scripts')
    <script type="text/javascript">
        $('#submission_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush