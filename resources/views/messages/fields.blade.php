<!-- From User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from_user', 'From User:') !!}
    {!! Form::number('from_user', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- To User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to_user', 'To User:') !!}
    {!! Form::number('to_user', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control', 'required', 'minlength' => 3, 'maxlength' => 500]) !!}
</div>