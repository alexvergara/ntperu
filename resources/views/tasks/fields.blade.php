<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'minlength' => 3, 'maxlength' => 30]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'required', 'minlength' => 3, 'maxlength' => 500]) !!}
</div>

<!-- Assigned To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assigned_to', 'Assigned To:') !!}
    {!! Form::number('assigned_to', null, ['class' => 'form-control', 'required']) !!}
</div>