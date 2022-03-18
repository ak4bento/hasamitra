<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Company;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'attendances' => Attendance::whereDate('created_at', Carbon::today())->get(),
            'selected_company' => null,
            'employees' => Employee::all(),
            'company' => Company::all(),
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $attendances = DB::table('tb_attendance_employee')
                ->join('tb_employee', 'tb_attendance_employee.id_employee', '=', 'tb_employee.id')
                ->join('tb_organizational_structure74', 'tb_employee.id_organization', '=', 'tb_organizational_structure74.id')
                ->select('tb_attendance_employee.*')
                ->where('tb_organizational_structure74.id_company', $input['company'])
                ->whereDate('tb_attendance_employee.created_at', Carbon::today())
                ->get();

        return view('home', [
            'attendances' => $attendances,
            'selected_company' => $input['company'],
            'employees' => Employee::all(),
            'company' => Company::all(),
        ]);
    }
}
