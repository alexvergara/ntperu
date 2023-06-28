<!-- From User Field -->
<div class="col-sm-12">
    {!! Form::label('from_user', 'From User:') !!}
    <p>{{ $message->from_user }}</p>
</div>

<!-- To User Field -->
<div class="col-sm-12">
    {!! Form::label('to_user', 'To User:') !!}
    <p>{{ $message->to_user }}</p>
</div>

<!-- Content Field -->
<div class="col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $message->content }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $message->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $message->updated_at }}</p>
</div>

