<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSchemaLeaveRequest;
use App\Http\Requests\UpdateSchemaLeaveRequest;
use App\Repositories\SchemaLeaveRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SchemaLeaveController extends AppBaseController
{
    /** @var  SchemaLeaveRepository */
    private $schemaLeaveRepository;

    public function __construct(SchemaLeaveRepository $schemaLeaveRepo)
    {
        $this->schemaLeaveRepository = $schemaLeaveRepo;
    }

    /**
     * Display a listing of the SchemaLeave.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $schemaLeaves = $this->schemaLeaveRepository->all();

        return view('schema_leaves.index')
            ->with('schemaLeaves', $schemaLeaves);
    }

    /**
     * Show the form for creating a new SchemaLeave.
     *
     * @return Response
     */
    public function create()
    {
        return view('schema_leaves.create');
    }

    /**
     * Store a newly created SchemaLeave in storage.
     *
     * @param CreateSchemaLeaveRequest $request
     *
     * @return Response
     */
    public function store(CreateSchemaLeaveRequest $request)
    {
        $input = $request->all();

        $schemaLeave = $this->schemaLeaveRepository->create($input);

        Flash::success('Schema Leave saved successfully.');

        return redirect(route('schemaLeaves.index'));
    }

    /**
     * Display the specified SchemaLeave.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $schemaLeave = $this->schemaLeaveRepository->find($id);

        if (empty($schemaLeave)) {
            Flash::error('Schema Leave not found');

            return redirect(route('schemaLeaves.index'));
        }

        return view('schema_leaves.show')->with('schemaLeave', $schemaLeave);
    }

    /**
     * Show the form for editing the specified SchemaLeave.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $schemaLeave = $this->schemaLeaveRepository->find($id);

        if (empty($schemaLeave)) {
            Flash::error('Schema Leave not found');

            return redirect(route('schemaLeaves.index'));
        }

        return view('schema_leaves.edit')->with('schemaLeave', $schemaLeave);
    }

    /**
     * Update the specified SchemaLeave in storage.
     *
     * @param int $id
     * @param UpdateSchemaLeaveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSchemaLeaveRequest $request)
    {
        $schemaLeave = $this->schemaLeaveRepository->find($id);

        if (empty($schemaLeave)) {
            Flash::error('Schema Leave not found');

            return redirect(route('schemaLeaves.index'));
        }

        $schemaLeave = $this->schemaLeaveRepository->update($request->all(), $id);

        Flash::success('Schema Leave updated successfully.');

        return redirect(route('schemaLeaves.index'));
    }

    /**
     * Remove the specified SchemaLeave from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $schemaLeave = $this->schemaLeaveRepository->find($id);

        if (empty($schemaLeave)) {
            Flash::error('Schema Leave not found');

            return redirect(route('schemaLeaves.index'));
        }

        $this->schemaLeaveRepository->delete($id);

        Flash::success('Schema Leave deleted successfully.');

        return redirect(route('schemaLeaves.index'));
    }
}
