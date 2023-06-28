<!-- Employee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    {!! Form::number('employee_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Clock In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clock_in', 'Clock In:') !!}
    {!! Form::text('clock_in', null, ['class' => 'form-control','id'=>'clock_in']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#clock_in').datepicker()
    </script>
@endpush

<!-- Clock Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clock_out', 'Clock Out:') !!}
    {!! Form::text('clock_out', null, ['class' => 'form-control','id'=>'clock_out']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#clock_out').datepicker()
    </script>
@endpush