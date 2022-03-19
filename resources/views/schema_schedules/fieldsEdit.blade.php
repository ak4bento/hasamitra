<!-- Id Master Schema Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_master_schema', 'Master Schema:') !!}
    {!! Form::text('master_schema', App\Models\MasterSchema::find($schemaSchedule[0]->id_master_schema)->initial_schema, ['class' => 'form-control', 'disabled']) !!}
    {!! Form::hidden('id_master_schema', $schemaSchedule[0]->id_master_schema) !!}
</div>
@php
    $index = 1;
    $day = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
@endphp
@foreach ($schemaSchedule as $value)
<div class="card col-sm-12">
    {!! Form::hidden("id[$index]", $value->id) !!}
    <div class="row">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', $day[$index-1].':') !!}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="day[{{ $index }}]" name="day[{{ $index }}]" {{ $value->time_in != '00:00:00' ? 'checked' : '' }}>
                    <label class="custom-control-label" for="day[{{ $index }}]"></label>
                </div>
            </div>
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            
            <div class="input-group date" id="timepicker{{ $index }}" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker{{ $index }}" name="time_in[{{ $index }}]" value="{{ $value->time_in != '00:00:00' ? $value->time_in : '' }}"/>
                <div class="input-group-append" data-target="#timepicker{{ $index }}" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
            </div>
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            
            <div class="input-group date" id="timeout{{ $index }}" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timeout{{ $index }}" name="time_out[{{ $index }}]" value="{{ $value->time_out != '00:00:00' ? $value->time_out : '' }}"/>
                <div class="input-group-append" data-target="#timeout{{ $index }}" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
            </div>
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="late_day[{{ $index }}]" name="late_day[{{ $index }}]" {{ $value->late_day == 'Y' ? 'checked' : ''}}>
                    <label class="custom-control-label" for="late_day[{{ $index++ }}]"></label>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach