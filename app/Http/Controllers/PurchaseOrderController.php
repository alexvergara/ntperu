<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseOrderRequest;
use App\Http\Requests\UpdatePurchaseOrderRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PurchaseOrderRepository;
use Illuminate\Http\Request;
use Flash;

class PurchaseOrderController extends AppBaseController
{
    /** @var purchaseOrderRepository $purchaseOrderRepository*/
    private $purchaseOrderRepository;

    public function __construct(purchaseOrderRepository $purchaseOrderRepo)
    {
        $this->purchaseOrderRepository = $purchaseOrderRepo;
    }

    /**
     * Display a listing of the purchaseOrder.
     */
    public function index(Request $request)
    {
        $purchaseOrders = $this->purchaseOrderRepository->paginate(10);

        return view('purchase_orders.index')
            ->with('purchaseOrders', $purchaseOrders);
    }

    /**
     * Show the form for creating a new purchaseOrder.
     */
    public function create()
    {
        return view('purchase_orders.create');
    }

    /**
     * Store a newly created purchaseOrder in storage.
     */
    public function store(CreatePurchaseOrderRequest $request)
    {
        $input = $request->all();

        $purchaseOrder = $this->purchaseOrderRepository->create($input);

        Flash::success('Purchase Order saved successfully.');

        return redirect(route('purchase-orders.index'));
    }

    /**
     * Display the specified purchaseOrder.
     */
    public function show($id)
    {
        $purchaseOrder = $this->purchaseOrderRepository->find($id);

        if (empty($purchaseOrder)) {
            Flash::error('Purchase Order not found');

            return redirect(route('purchase-orders.index'));
        }

        return view('purchase_orders.show')->with('purchaseOrder', $purchaseOrder);
    }

    /**
     * Show the form for editing the specified purchaseOrder.
     */
    public function edit($id)
    {
        $purchaseOrder = $this->purchaseOrderRepository->find($id);

        if (empty($purchaseOrder)) {
            Flash::error('Purchase Order not found');

            return redirect(route('purchase-orders.index'));
        }

        return view('purchase_orders.edit')->with('purchase-order', $purchaseOrder);
    }

    /**
     * Update the specified purchaseOrder in storage.
     */
    public function update($id, UpdatePurchaseOrderRequest $request)
    {
        $purchaseOrder = $this->purchaseOrderRepository->find($id);

        if (empty($purchaseOrder)) {
            Flash::error('Purchase Order not found');

            return redirect(route('purchase-orders.index'));
        }

        $purchaseOrder = $this->purchaseOrderRepository->update($request->all(), $id);

        Flash::success('Purchase Order updated successfully.');

        return redirect(route('purchase-orders.index'));
    }

    /**
     * Remove the specified purchaseOrder from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $purchaseOrder = $this->purchaseOrderRepository->find($id);

        if (empty($purchaseOrder)) {
            Flash::error('Purchase Order not found');

            return redirect(route('purchase-orders.index'));
        }

        $this->purchaseOrderRepository->delete($id);

        Flash::success('Purchase Order deleted successfully.');

        return redirect(route('purchase-orders.index'));
    }
}
