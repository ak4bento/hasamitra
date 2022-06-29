<?php

namespace App\Exports;

use App\Models\Attendance;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AttandancesExport implements FromCollection, WithHeadings
{
    protected $start_date;
    protected $end_date;

    public function __construct($start_date, $end_date)
    {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
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
                ->whereBetween('tb_attendance_employee.check_in', [$this->start_date, $this->end_date])
                ->get();
        return $attendances;
    }

    public function headings(): array
    {
        return [
            "Name", 
            "Total Attandance", 
            "Total late", 
            "Total late hours", 
            "Total Early", 
            "Total Early Hours", 
            "Forgeted Absences",
        ];
    }
}
