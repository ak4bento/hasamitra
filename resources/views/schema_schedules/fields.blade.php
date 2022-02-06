<!-- Id Master Schema Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_master_schema', 'Master Schema:') !!}
    {{-- <!-- {!! Form::number('id_master_schema', null, ['class' => 'form-control']) !!} --> --}}
    
    @php
    $items = App\Models\MasterSchema::pluck('initial_schema', 'id');
    @endphp

    {!! Form::select('id_master_schema', $items, null, ['class' => 'js-example-basic-multiple form-control']) !!}
</div>


<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Monday:') !!}
            {{-- {!! Form::text('day', null, ['class' => 'form-control']) !!} --}}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="day[1]" name="day[1]">
                    <label class="custom-control-label" for="day[1]"></label>
                </div>
            </div>
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            
            <div class="input-group date" id="timepicker1" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker1"/>
                <div class="input-group-append" data-target="#timepicker1" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
            </div>
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control datetimepicker-input']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="late_day[1]" name="late_day[1]">
                    <label class="custom-control-label" for="late_day[1]"></label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Tuesday:') !!}
            {{-- {!! Form::text('day', null, ['class' => 'form-control']) !!} --}}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="day[2]" name="day[2]">
                    <label class="custom-control-label" for="day[2]"></label>
                </div>
            </div>
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            
            <div class="input-group date" id="timepicker2" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker2"/>
                <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
            </div>
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="late_day[2]" name="late_day[2]">
                    <label class="custom-control-label" for="late_day[2]"></label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Wednesday:') !!}
            {{-- {!! Form::text('day', null, ['class' => 'form-control']) !!} --}}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="day[3]" name="day[3]">
                    <label class="custom-control-label" for="day[3]"></label>
                </div>
            </div>
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            
            <div class="input-group date" id="timepicker3" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker3"/>
                <div class="input-group-append" data-target="#timepicker3" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
            </div>
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="late_day[3]" name="late_day[3]">
                    <label class="custom-control-label" for="late_day[3]"></label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Thursday:') !!}
            {{-- {!! Form::text('day', null, ['class' => 'form-control']) !!} --}}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="day[4]" name="day[4]">
                    <label class="custom-control-label" for="day[4]"></label>
                </div>
            </div>
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            
            <div class="input-group date" id="timepicker4" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker4"/>
                <div class="input-group-append" data-target="#timepicker4" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
            </div>
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="late_day[4]" name="late_day[4]">
                    <label class="custom-control-label" for="late_day[4]"></label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Friday:') !!}
            {{-- {!! Form::text('day', null, ['class' => 'form-control']) !!} --}}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="day[5]" name="day[5]">
                    <label class="custom-control-label" for="day[5]"></label>
                </div>
            </div>
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            
            <div class="input-group date" id="timepicker5" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker5"/>
                <div class="input-group-append" data-target="#timepicker5" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
            </div>
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="late_day[5]" name="late_day[5]">
                    <label class="custom-control-label" for="late_day[5]"></label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Saturday:') !!}
            {{-- {!! Form::text('day', null, ['class' => 'form-control']) !!} --}}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="day[6]" name="day[6]">
                    <label class="custom-control-label" for="day[6]"></label>
                </div>
            </div>
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            
            <div class="input-group date" id="timepicker6" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker6"/>
                <div class="input-group-append" data-target="#timepicker6" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
            </div>
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="late_day[6]" name="late_day[6]">
                    <label class="custom-control-label" for="late_day[6]"></label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Sunday:') !!}
            {{-- {!! Form::text('day', null, ['class' => 'form-control']) !!} --}}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="day[7]" name="day[7]">
                    <label class="custom-control-label" for="day[7]"></label>
                </div>
            </div>
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            
            <div class="input-group date" id="timepicker7" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker7"/>
                <div class="input-group-append" data-target="#timepicker7" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                </div>
            </div>
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="late_day[7]" name="late_day[7]">
                    <label class="custom-control-label" for="late_day[7]"></label>
                </div>
            </div>
        </div>
    </div>
</div>