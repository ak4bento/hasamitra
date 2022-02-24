<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSchemaScheduleRequest;
use App\Http\Requests\UpdateSchemaScheduleRequest;
use App\Repositories\SchemaScheduleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\SchemaSchedule;
use DB;

class SchemaScheduleController extends AppBaseController
{
    /** @var  SchemaScheduleRepository */
    private $schemaScheduleRepository;

    public function __construct(SchemaScheduleRepository $schemaScheduleRepo)
    {
        $this->schemaScheduleRepository = $schemaScheduleRepo;
    }

    /**
     * Display a listing of the SchemaSchedule.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $this->schemaScheduleRepository->all();
        $schemaSchedules = DB::table('tb_schema_shcedule')
                ->select('id_master_schema')
                ->groupBy('id_master_schema')
                ->get();

        // $resultSchedule = collect($schemaSchedules)->map(function ($value) {
        //     return SchemaSchedule::where('id_master_schema',$value);
        // });
        
        // dd($resultSchedule);
        return view('schema_schedules.index')
            ->with('schemaSchedules', $schemaSchedules);
    }

    /**
     * Show the form for creating a new SchemaSchedule.
     *
     * @return Response
     */
    public function create()
    {
        return view('schema_schedules.create');
    }

    /**
     * Store a newly created SchemaSchedule in storage.
     *
     * @param CreateSchemaScheduleRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);

        for ($i=1; $i <= 7; $i++) { 
            $schedule = new SchemaSchedule;
            $schedule['id_master_schema'] = $input['id_master_schema'];
            $schedule['day'] = $i;
            $schedule['time_in'] = isset($input['day'][$i]) ? date("H:i", strtotime($input['time_in'][$i])) : null;
            $schedule['time_out'] = isset($input['day'][$i]) ? date("H:i", strtotime($input['time_out'][$i])) : null;
            $schedule['late_day'] = isset($input['late_day'][$i]) ? 'Y' : 'N';
            $schedule->save();
        }

        // $schemaSchedule = $this->schemaScheduleRepository->create($input);

        Flash::success('Schema Schedule saved successfully.');

        return redirect(route('schemaSchedules.index'));
    }

    /**
     * Display the specified SchemaSchedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $schemaSchedule = $this->schemaScheduleRepository->find($id);

        if (empty($schemaSchedule)) {
            Flash::error('Schema Schedule not found');

            return redirect(route('schemaSchedules.index'));
        }

        return view('schema_schedules.show')->with('schemaSchedule', $schemaSchedule);
    }

    /**
     * Show the form for editing the specified SchemaSchedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $schemaSchedule = $this->schemaScheduleRepository->find($id);

        if (empty($schemaSchedule)) {
            Flash::error('Schema Schedule not found');

            return redirect(route('schemaSchedules.index'));
        }

        return view('schema_schedules.edit')->with('schemaSchedule', $schemaSchedule);
    }

    /**
     * Update the specified SchemaSchedule in storage.
     *
     * @param int $id
     * @param UpdateSchemaScheduleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSchemaScheduleRequest $request)
    {
        $schemaSchedule = $this->schemaScheduleRepository->find($id);

        if (empty($schemaSchedule)) {
            Flash::error('Schema Schedule not found');

            return redirect(route('schemaSchedules.index'));
        }

        $schemaSchedule = $this->schemaScheduleRepository->update($request->all(), $id);

        Flash::success('Schema Schedule updated successfully.');

        return redirect(route('schemaSchedules.index'));
    }

    /**
     * Remove the specified SchemaSchedule from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $schemaSchedule = $this->schemaScheduleRepository->find($id);

        if (empty($schemaSchedule)) {
            Flash::error('Schema Schedule not found');

            return redirect(route('schemaSchedules.index'));
        }

        $this->schemaScheduleRepository->delete($id);

        Flash::success('Schema Schedule deleted successfully.');

        return redirect(route('schemaSchedules.index'));
    }
}
