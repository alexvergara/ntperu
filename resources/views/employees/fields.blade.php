<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'minlength' => 3, 'maxlength' => 20]) !!}
</div>

<!-- Companyid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('companyId', 'Companyid:') !!}
    {!! Form::number('companyId', null, ['class' => 'form-control', 'required']) !!}
</div>