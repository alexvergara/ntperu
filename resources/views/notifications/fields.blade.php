<!-- Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::text('message', null, ['class' => 'form-control', 'required', 'minlength' => 3, 'maxlength' => 255]) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Read Field -->
<div class="form-group col-sm-6">
    {!! Form::label('read', 'Read:') !!}
    {!! Form::number('read', null, ['class' => 'form-control']) !!}
</div>