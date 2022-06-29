<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReportingEmployeeRequest;
use App\Http\Requests\UpdateReportingEmployeeRequest;
use App\Repositories\ReportingEmployeeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReportingEmployeeController extends AppBaseController
{
    /** @var  ReportingEmployeeRepository */
    private $reportingEmployeeRepository;

    public function __construct(ReportingEmployeeRepository $reportingEmployeeRepo)
    {
        $this->reportingEmployeeRepository = $reportingEmployeeRepo;
    }

    /**
     * Display a listing of the ReportingEmployee.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reportingEmployees = $this->reportingEmployeeRepository->all();

        return view('reporting_employees.index')
            ->with('reportingEmployees', $reportingEmployees);
    }

    /**
     * Show the form for creating a new ReportingEmployee.
     *
     * @return Response
     */
    public function create()
    {
        return view('reporting_employees.create');
    }

    /**
     * Store a newly created ReportingEmployee in storage.
     *
     * @param CreateReportingEmployeeRequest $request
     *
     * @return Response
     */
    public function store(CreateReportingEmployeeRequest $request)
    {
        $input = $request->all();

        $reportingEmployee = $this->reportingEmployeeRepository->create($input);

        Flash::success('Reporting Employee saved successfully.');

        return redirect(route('reportingEmployees.index'));
    }

    /**
     * Display the specified ReportingEmployee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reportingEmployee = $this->reportingEmployeeRepository->find($id);

        if (empty($reportingEmployee)) {
            Flash::error('Reporting Employee not found');

            return redirect(route('reportingEmployees.index'));
        }

        return view('reporting_employees.show')->with('reportingEmployee', $reportingEmployee);
    }

    /**
     * Show the form for editing the specified ReportingEmployee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reportingEmployee = $this->reportingEmployeeRepository->find($id);

        if (empty($reportingEmployee)) {
            Flash::error('Reporting Employee not found');

            return redirect(route('reportingEmployees.index'));
        }

        return view('reporting_employees.edit')->with('reportingEmployee', $reportingEmployee);
    }

    /**
     * Update the specified ReportingEmployee in storage.
     *
     * @param int $id
     * @param UpdateReportingEmployeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReportingEmployeeRequest $request)
    {
        $reportingEmployee = $this->reportingEmployeeRepository->find($id);

        if (empty($reportingEmployee)) {
            Flash::error('Reporting Employee not found');

            return redirect(route('reportingEmployees.index'));
        }

        $reportingEmployee = $this->reportingEmployeeRepository->update($request->all(), $id);

        Flash::success('Reporting Employee updated successfully.');

        return redirect(route('reportingEmployees.index'));
    }

    /**
     * Remove the specified ReportingEmployee from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reportingEmployee = $this->reportingEmployeeRepository->find($id);

        if (empty($reportingEmployee)) {
            Flash::error('Reporting Employee not found');

            return redirect(route('reportingEmployees.index'));
        }

        $this->reportingEmployeeRepository->delete($id);

        Flash::success('Reporting Employee deleted successfully.');

        return redirect(route('reportingEmployees.index'));
    }
}
