<!-- Id Master Schema Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_master_schema', 'Master Schema:') !!}
    <!-- {!! Form::number('id_master_schema', null, ['class' => 'form-control']) !!} -->
    
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
            {!! Form::text('day', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            <!-- {!! Form::text('time_in', null, ['class' => 'form-control datetimepicker-input']) !!} -->
            
            <div class="input-group date" id="timepicker" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
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
            {!! Form::text('late_day', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Tuesday:') !!}
            {!! Form::text('day', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            {!! Form::text('time_in', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            {!! Form::text('late_day', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Wednesday:') !!}
            {!! Form::text('day', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            {!! Form::text('time_in', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            {!! Form::text('late_day', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Thursday:') !!}
            {!! Form::text('day', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            {!! Form::text('time_in', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            {!! Form::text('late_day', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Friday:') !!}
            {!! Form::text('day', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            {!! Form::text('time_in', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            {!! Form::text('late_day', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Saturday:') !!}
            {!! Form::text('day', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            {!! Form::text('time_in', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            {!! Form::text('late_day', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="card">
    <div class="row col-sm-12">
        <!-- Day Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('day', 'Sunday:') !!}
            {!! Form::text('day', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time In Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_in', 'Time In:') !!}
            {!! Form::text('time_in', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Time Out Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('time_out', 'Time Out:') !!}
            {!! Form::text('time_out', null, ['class' => 'form-control']) !!}
        </div>
        
        <!-- Late Day Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('late_day', 'Late Day:') !!}
            {!! Form::text('late_day', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>