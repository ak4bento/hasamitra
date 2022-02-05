<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMasterSchemaRequest;
use App\Http\Requests\UpdateMasterSchemaRequest;
use App\Repositories\MasterSchemaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MasterSchemaController extends AppBaseController
{
    /** @var  MasterSchemaRepository */
    private $masterSchemaRepository;

    public function __construct(MasterSchemaRepository $masterSchemaRepo)
    {
        $this->masterSchemaRepository = $masterSchemaRepo;
    }

    /**
     * Display a listing of the MasterSchema.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $masterSchemas = $this->masterSchemaRepository->all();

        return view('master_schemas.index')
            ->with('masterSchemas', $masterSchemas);
    }

    /**
     * Show the form for creating a new MasterSchema.
     *
     * @return Response
     */
    public function create()
    {
        return view('master_schemas.create');
    }

    /**
     * Store a newly created MasterSchema in storage.
     *
     * @param CreateMasterSchemaRequest $request
     *
     * @return Response
     */
    public function store(CreateMasterSchemaRequest $request)
    {
        $input = $request->all();

        $masterSchema = $this->masterSchemaRepository->create($input);

        Flash::success('Master Schema saved successfully.');

        return redirect(route('masterSchemas.index'));
    }

    /**
     * Display the specified MasterSchema.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $masterSchema = $this->masterSchemaRepository->find($id);

        if (empty($masterSchema)) {
            Flash::error('Master Schema not found');

            return redirect(route('masterSchemas.index'));
        }

        return view('master_schemas.show')->with('masterSchema', $masterSchema);
    }

    /**
     * Show the form for editing the specified MasterSchema.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $masterSchema = $this->masterSchemaRepository->find($id);

        if (empty($masterSchema)) {
            Flash::error('Master Schema not found');

            return redirect(route('masterSchemas.index'));
        }

        return view('master_schemas.edit')->with('masterSchema', $masterSchema);
    }

    /**
     * Update the specified MasterSchema in storage.
     *
     * @param int $id
     * @param UpdateMasterSchemaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMasterSchemaRequest $request)
    {
        $masterSchema = $this->masterSchemaRepository->find($id);

        if (empty($masterSchema)) {
            Flash::error('Master Schema not found');

            return redirect(route('masterSchemas.index'));
        }

        $masterSchema = $this->masterSchemaRepository->update($request->all(), $id);

        Flash::success('Master Schema updated successfully.');

        return redirect(route('masterSchemas.index'));
    }

    /**
     * Remove the specified MasterSchema from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $masterSchema = $this->masterSchemaRepository->find($id);

        if (empty($masterSchema)) {
            Flash::error('Master Schema not found');

            return redirect(route('masterSchemas.index'));
        }

        $this->masterSchemaRepository->delete($id);

        Flash::success('Master Schema deleted successfully.');

        return redirect(route('masterSchemas.index'));
    }
}
