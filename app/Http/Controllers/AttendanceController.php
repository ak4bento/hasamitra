<?php

namespace App\Http\Controllers;

use App\Exports\AttandancesExport;
use App\Http\Requests\CreateAttendanceRequest;
use App\Http\Requests\UpdateAttendanceRequest;
use App\Repositories\AttendanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends AppBaseController
{
    /** @var  AttendanceRepository */
    private $attendanceRepository;

    // nama, 
    // jumlah hadir, 
    // count terlambat, 
    // total jam terlambat, 
    // count cepat pulang, 
    // total jam cepat pulang, 
    // lupa absen pulang
    public function __construct(AttendanceRepository $attendanceRepo)
    {
        $this->attendanceRepository = $attendanceRepo;
    }

    /**
     * Display a listing of the Attendance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $attendances = collect($this->attendanceRepository->all())->SortByDesc('created_at');

        return view('attendances.index')
            ->with('selected_company', null)
            ->with('attendances', $attendances);
    }

    /**
     * Show the form for creating a new Attendance.
     *
     * @return Response
     */
    public function create()
    {
        return view('attendances.create');
    }

    /**
     * Store a newly created Attendance in storage.
     *
     * @param CreateAttendanceRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        if(!isset($input['company'])) {
            $attendance = $this->attendanceRepository->create($input);

            Flash::success('Attendance saved successfully.');
        } else {
            $attendances = DB::table('tb_attendance_employee')
                ->join('tb_employee', 'tb_attendance_employee.id_employee', '=', 'tb_employee.id')
                ->join('tb_organizational_structure74', 'tb_employee.id_organization', '=', 'tb_organizational_structure74.id')
                ->select('tb_attendance_employee.*')
                ->where('tb_organizational_structure74.id_company', $input['company'])
                ->get();
                
            return view('attendances.index')
                ->with('selected_company', $input['company'])
                ->with('attendances', $attendances);
        }
        return redirect(route('attendances.index'));
    }

    /**
     * Display the specified Attendance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $attendance = $this->attendanceRepository->find($id);

        if (empty($attendance)) {
            Flash::error('Attendance not found');

            return redirect(route('attendances.index'));
        }

        return view('attendances.show')->with('attendance', $attendance);
    }

    /**
     * Show the form for editing the specified Attendance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $attendance = $this->attendanceRepository->find($id);

        if (empty($attendance)) {
            Flash::error('Attendance not found');

            return redirect(route('attendances.index'));
        }

        return view('attendances.edit')->with('attendance', $attendance);
    }

    /**
     * Update the specified Attendance in storage.
     *
     * @param int $id
     * @param UpdateAttendanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAttendanceRequest $request)
    {
        $attendance = $this->attendanceRepository->find($id);

        if (empty($attendance)) {
            Flash::error('Attendance not found');

            return redirect(route('attendances.index'));
        }

        $attendance = $this->attendanceRepository->update($request->all(), $id);

        Flash::success('Attendance updated successfully.');

        return redirect(route('attendances.index'));
    }

    /**
     * Remove the specified Attendance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $attendance = $this->attendanceRepository->find($id);

        if (empty($attendance)) {
            Flash::error('Attendance not found');

            return redirect(route('attendances.index'));
        }

        $this->attendanceRepository->delete($id);

        Flash::success('Attendance deleted successfully.');

        return redirect(route('attendances.index'));
    }

    public function export(Request $request) 
    {
        return Excel::download(new AttandancesExport($request->start_date, $request->end_date), 'attandance.xlsx');
    }

    public function date()
    {
        return view('attendances.indexDate');
    }

    public function report(Request $request)
    {
        // dd($request->date);
        $attendances = DB::table('tb_employee')
                ->rightJoin('tb_attendance_employee', 'tb_attendance_employee.id_employee', '=', 'tb_employee.id')
                // ->join('tb_organizational_structure74', 'tb_employee.id_organization', '=', 'tb_organizational_structure74.id')
                ->select(
                    'tb_employee.name',
                    'tb_attendance_employee.id_employee',
                    DB::raw('count(tb_attendance_employee.check_in) as total'),
                    DB::raw("sum(DATE_FORMAT(tb_attendance_employee.check_in, '%H:%i:%s') > DATE_FORMAT(tb_attendance_employee.schedule_in, '%H:%i:%s')) as total_late"),
                    DB::raw("sum(DATE_FORMAT(tb_attendance_employee.check_out, '%H:%i:%s') < DATE_FORMAT(tb_attendance_employee.schedule_out, '%H:%i:%s')) as total_early"),
                    DB::raw("sum(tb_attendance_employee.check_out IS NULL) as forgeted"),
                    DB::raw("sum(TIME_TO_SEC(IF(DATE_FORMAT(tb_attendance_employee.check_in, '%H:%i:%s') > DATE_FORMAT(tb_attendance_employee.schedule_in, '%H:%i:%s'),DATE_FORMAT(timediff(DATE_FORMAT(tb_attendance_employee.check_in, '%H:%i:%s'), DATE_FORMAT(tb_attendance_employee.schedule_in, '%H:%i:%s')), '%H:%i:%s'),'00:00:00'))) as late_diff"),
                    DB::raw("sum(TIME_TO_SEC(IF(DATE_FORMAT(tb_attendance_employee.check_out, '%H:%i:%s') < DATE_FORMAT(tb_attendance_employee.schedule_out, '%H:%i:%s'),DATE_FORMAT(timediff(DATE_FORMAT(tb_attendance_employee.schedule_out, '%H:%i:%s'), DATE_FORMAT(tb_attendance_employee.check_out, '%H:%i:%s')), '%H:%i:%s'),'00:00:00'))) as early_diff"),
                )
                ->groupBy('tb_attendance_employee.id_employee')
                ->whereBetween('tb_attendance_employee.check_in', [$request->start_date, $request->end_date])
                ->get();
        return view('attendances.indexReport')
            ->with('attendances', $attendances);
    }
}
