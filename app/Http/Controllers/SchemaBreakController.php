<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSchemaBreakRequest;
use App\Http\Requests\UpdateSchemaBreakRequest;
use App\Repositories\SchemaBreakRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SchemaBreakController extends AppBaseController
{
    /** @var  SchemaBreakRepository */
    private $schemaBreakRepository;

    public function __construct(SchemaBreakRepository $schemaBreakRepo)
    {
        $this->schemaBreakRepository = $schemaBreakRepo;
    }

    /**
     * Display a listing of the SchemaBreak.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $schemaBreaks = $this->schemaBreakRepository->all();

        return view('schema_breaks.index')
            ->with('schemaBreaks', $schemaBreaks);
    }

    /**
     * Show the form for creating a new SchemaBreak.
     *
     * @return Response
     */
    public function create()
    {
        return view('schema_breaks.create');
    }

    /**
     * Store a newly created SchemaBreak in storage.
     *
     * @param CreateSchemaBreakRequest $request
     *
     * @return Response
     */
    public function store(CreateSchemaBreakRequest $request)
    {
        $input = $request->all();

        $schemaBreak = $this->schemaBreakRepository->create($input);

        Flash::success('Schema Break saved successfully.');

        return redirect(route('schemaBreaks.index'));
    }

    /**
     * Display the specified SchemaBreak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $schemaBreak = $this->schemaBreakRepository->find($id);

        if (empty($schemaBreak)) {
            Flash::error('Schema Break not found');

            return redirect(route('schemaBreaks.index'));
        }

        return view('schema_breaks.show')->with('schemaBreak', $schemaBreak);
    }

    /**
     * Show the form for editing the specified SchemaBreak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $schemaBreak = $this->schemaBreakRepository->find($id);

        if (empty($schemaBreak)) {
            Flash::error('Schema Break not found');

            return redirect(route('schemaBreaks.index'));
        }

        return view('schema_breaks.edit')->with('schemaBreak', $schemaBreak);
    }

    /**
     * Update the specified SchemaBreak in storage.
     *
     * @param int $id
     * @param UpdateSchemaBreakRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSchemaBreakRequest $request)
    {
        $schemaBreak = $this->schemaBreakRepository->find($id);

        if (empty($schemaBreak)) {
            Flash::error('Schema Break not found');

            return redirect(route('schemaBreaks.index'));
        }

        $schemaBreak = $this->schemaBreakRepository->update($request->all(), $id);

        Flash::success('Schema Break updated successfully.');

        return redirect(route('schemaBreaks.index'));
    }

    /**
     * Remove the specified SchemaBreak from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $schemaBreak = $this->schemaBreakRepository->find($id);

        if (empty($schemaBreak)) {
            Flash::error('Schema Break not found');

            return redirect(route('schemaBreaks.index'));
        }

        $this->schemaBreakRepository->delete($id);

        Flash::success('Schema Break deleted successfully.');

        return redirect(route('schemaBreaks.index'));
    }
}
