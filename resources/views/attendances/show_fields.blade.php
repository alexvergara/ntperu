<!-- Employee Id Field -->
<div class="col-sm-12">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{{ $attendance->employee_id }}</p>
</div>

<!-- Clock In Field -->
<div class="col-sm-12">
    {!! Form::label('clock_in', 'Clock In:') !!}
    <p>{{ $attendance->clock_in }}</p>
</div>

<!-- Clock Out Field -->
<div class="col-sm-12">
    {!! Form::label('clock_out', 'Clock Out:') !!}
    <p>{{ $attendance->clock_out }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $attendance->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $attendance->updated_at }}</p>
</div>

