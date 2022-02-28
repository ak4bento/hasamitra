<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Repositories\EmployeeRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use App\Models\Organizational;

class EmployeeController extends AppBaseController
{
    /** @var  EmployeeRepository */
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepo)
    {
        $this->employeeRepository = $employeeRepo;
    }

    /**
     * Display a listing of the Employee.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $employees = $this->employeeRepository->all();
        $view = 'employees.index';

        return view($view)
            ->with('employees', $employees);
    }

    public function getDepartment($id)
    {
        // $data = Organizational::join('tb_department')->where('id_company', $id)->get();
        $data = DB::table('tb_department')
                ->join('tb_organizational_structure74', 'tb_department.id', '=', 'tb_organizational_structure74.id_department')
                ->select('tb_organizational_structure74.id', 'tb_organizational_structure74.job_title', 'tb_department.department','tb_department.id')
                ->where('tb_organizational_structure74.id_company', $id)
                ->get();
        return json_encode($data);
    }

    /**
     * Show the form for creating a new Employee.
     *
     * @return Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param CreateEmployeeRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if(!isset($input['company'])) {
            $input['pass'] = bcrypt($input['nik']);
            $employee = $this->employeeRepository->create($input);
            Flash::success('Employee saved successfully.');
        } else {
            $employees = DB::table('tb_employee')
                ->join('tb_organizational_structure74', 'tb_employee.id_organization', '=', 'tb_organizational_structure74.id')
                ->select('tb_employee.*')
                ->where('tb_organizational_structure74.id_company', $input['company'])
                ->get();
                
            return view('employees.index')
                ->with('employees', $employees);
        }

        return redirect(route('employees.index'));
    }

    /**
     * Display the specified Employee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified Employee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        return view('employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified Employee in storage.
     *
     * @param int $id
     * @param UpdateEmployeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeRequest $request)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $employee = $this->employeeRepository->update($request->all(), $id);

        Flash::success('Employee updated successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified Employee from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $this->employeeRepository->delete($id);

        Flash::success('Employee deleted successfully.');

        return redirect(route('employees.index'));
    }

    public function approve($id)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        return view('employees.approve')->with('employee', $employee);
    }

    /**
     * Update the specified Employee in storage.
     *
     * @param int $id
     * @param UpdateEmployeeRequest $request
     *
     * @return Response
     */
    public function approveUpdate($id, Request $request)
    {
        $employee = $this->employeeRepository->find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('employees.index'));
        }

        $employee = $this->employeeRepository->update($request->all(), $id);

        Flash::success('Employee Approve successfully.');

        return redirect(route('employees.index'));
    }
}
