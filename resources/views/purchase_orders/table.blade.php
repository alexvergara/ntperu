<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="purchase-orders-table">
            <thead>
            <tr>
                <th>Supplier Id</th>
                <th>Product Id</th>
                <th>Quantity</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchaseOrders as $purchaseOrder)
                <tr>
                    <td>{{ $purchaseOrder->supplier_id }}</td>
                    <td>{{ $purchaseOrder->product_id }}</td>
                    <td>{{ $purchaseOrder->quantity }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['purchase-orders.destroy', $purchaseOrder->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('purchase-orders.show', [$purchaseOrder->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('purchase-orders.edit', [$purchaseOrder->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $purchaseOrders])
        </div>
    </div>
</div>
