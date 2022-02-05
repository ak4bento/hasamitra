<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShiftScheduleRequest;
use App\Http\Requests\UpdateShiftScheduleRequest;
use App\Repositories\ShiftScheduleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShiftScheduleController extends AppBaseController
{
    /** @var  ShiftScheduleRepository */
    private $shiftScheduleRepository;

    public function __construct(ShiftScheduleRepository $shiftScheduleRepo)
    {
        $this->shiftScheduleRepository = $shiftScheduleRepo;
    }

    /**
     * Display a listing of the ShiftSchedule.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shiftSchedules = $this->shiftScheduleRepository->all();

        return view('shift_schedules.index')
            ->with('shiftSchedules', $shiftSchedules);
    }

    /**
     * Show the form for creating a new ShiftSchedule.
     *
     * @return Response
     */
    public function create()
    {
        return view('shift_schedules.create');
    }

    /**
     * Store a newly created ShiftSchedule in storage.
     *
     * @param CreateShiftScheduleRequest $request
     *
     * @return Response
     */
    public function store(CreateShiftScheduleRequest $request)
    {
        $input = $request->all();

        $shiftSchedule = $this->shiftScheduleRepository->create($input);

        Flash::success('Shift Schedule saved successfully.');

        return redirect(route('shiftSchedules.index'));
    }

    /**
     * Display the specified ShiftSchedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shiftSchedule = $this->shiftScheduleRepository->find($id);

        if (empty($shiftSchedule)) {
            Flash::error('Shift Schedule not found');

            return redirect(route('shiftSchedules.index'));
        }

        return view('shift_schedules.show')->with('shiftSchedule', $shiftSchedule);
    }

    /**
     * Show the form for editing the specified ShiftSchedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shiftSchedule = $this->shiftScheduleRepository->find($id);

        if (empty($shiftSchedule)) {
            Flash::error('Shift Schedule not found');

            return redirect(route('shiftSchedules.index'));
        }

        return view('shift_schedules.edit')->with('shiftSchedule', $shiftSchedule);
    }

    /**
     * Update the specified ShiftSchedule in storage.
     *
     * @param int $id
     * @param UpdateShiftScheduleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShiftScheduleRequest $request)
    {
        $shiftSchedule = $this->shiftScheduleRepository->find($id);

        if (empty($shiftSchedule)) {
            Flash::error('Shift Schedule not found');

            return redirect(route('shiftSchedules.index'));
        }

        $shiftSchedule = $this->shiftScheduleRepository->update($request->all(), $id);

        Flash::success('Shift Schedule updated successfully.');

        return redirect(route('shiftSchedules.index'));
    }

    /**
     * Remove the specified ShiftSchedule from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shiftSchedule = $this->shiftScheduleRepository->find($id);

        if (empty($shiftSchedule)) {
            Flash::error('Shift Schedule not found');

            return redirect(route('shiftSchedules.index'));
        }

        $this->shiftScheduleRepository->delete($id);

        Flash::success('Shift Schedule deleted successfully.');

        return redirect(route('shiftSchedules.index'));
    }
}
