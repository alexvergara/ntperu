<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="messages-table">
            <thead>
            <tr>
                <th>From User</th>
                <th>To User</th>
                <th>Content</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->from_user }}</td>
                    <td>{{ $message->to_user }}</td>
                    <td>{{ $message->content }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('messages.show', [$message->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('messages.edit', [$message->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $messages])
        </div>
    </div>
</div>
