<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeTypeRequest;
use App\Http\Requests\UpdateEmployeeTypeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EmployeeTypeRepository;
use Illuminate\Http\Request;
use Flash;

class EmployeeTypeController extends AppBaseController
{
    /** @var EmployeeTypeRepository $employeeTypeRepository*/
    private $employeeTypeRepository;

    public function __construct(EmployeeTypeRepository $employeeTypeRepo)
    {
        $this->employeeTypeRepository = $employeeTypeRepo;
    }

    /**
     * Display a listing of the EmployeeType.
     */
    public function index(Request $request)
    {
        $employeeTypes = $this->employeeTypeRepository->paginate(10);

        return view('employee_types.index')
            ->with('employeeTypes', $employeeTypes);
    }

    /**
     * Show the form for creating a new EmployeeType.
     */
    public function create()
    {
        return view('employee_types.create');
    }

    /**
     * Store a newly created EmployeeType in storage.
     */
    public function store(CreateEmployeeTypeRequest $request)
    {
        $input = $request->all();

        $employeeType = $this->employeeTypeRepository->create($input);

        Flash::success('Employee Type saved successfully.');

        return redirect(route('employee-types.index'));
    }

    /**
     * Display the specified EmployeeType.
     */
    public function show($id)
    {
        $employeeType = $this->employeeTypeRepository->find($id);

        if (empty($employeeType)) {
            Flash::error('Employee Type not found');

            return redirect(route('employee-types.index'));
        }

        return view('employee_types.show')->with('employeeType', $employeeType);
    }

    /**
     * Show the form for editing the specified EmployeeType.
     */
    public function edit($id)
    {
        $employeeType = $this->employeeTypeRepository->find($id);

        if (empty($employeeType)) {
            Flash::error('Employee Type not found');

            return redirect(route('employee-types.index'));
        }

        return view('employee_types.edit')->with('employeeType', $employeeType);
    }

    /**
     * Update the specified EmployeeType in storage.
     */
    public function update($id, UpdateEmployeeTypeRequest $request)
    {
        $employeeType = $this->employeeTypeRepository->find($id);

        if (empty($employeeType)) {
            Flash::error('Employee Type not found');

            return redirect(route('employee-types.index'));
        }

        $employeeType = $this->employeeTypeRepository->update($request->all(), $id);

        Flash::success('Employee Type updated successfully.');

        return redirect(route('employee-types.index'));
    }

    /**
     * Remove the specified EmployeeType from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $employeeType = $this->employeeTypeRepository->find($id);

        if (empty($employeeType)) {
            Flash::error('Employee Type not found');

            return redirect(route('employee-types.index'));
        }

        $this->employeeTypeRepository->delete($id);

        Flash::success('Employee Type deleted successfully.');

        return redirect(route('employee-types.index'));
    }
}
