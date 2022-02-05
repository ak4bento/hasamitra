<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrganizationalRequest;
use App\Http\Requests\UpdateOrganizationalRequest;
use App\Repositories\OrganizationalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Organizational;

class OrganizationalController extends AppBaseController
{
    /** @var  OrganizationalRepository */
    private $organizationalRepository;

    public function __construct(OrganizationalRepository $organizationalRepo)
    {
        $this->organizationalRepository = $organizationalRepo;
    }

    /**
     * Display a listing of the Organizational.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $organizationals = $this->organizationalRepository->all();
        
        return view('organizationals.index')
            ->with('organizationals', $organizationals);
    }

    /**
     * Show the form for creating a new Organizational.
     *
     * @return Response
     */
    public function create()
    {
        return view('organizationals.create');
    }

    /**
     * Store a newly created Organizational in storage.
     *
     * @param CreateOrganizationalRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        if(!isset($input['company'])) {
            $organizational = $this->organizationalRepository->create($input);

            Flash::success('Organizational saved successfully.');
        } else {
            $organizationals = Organizational::where('id_company',$input['company'])->get();
            
            return view('organizationals.index')
                ->with('organizationals', $organizationals);
        }
        return redirect(route('organizationals.index'));
    }

    /**
     * Display the specified Organizational.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $organizational = $this->organizationalRepository->find($id);

        if (empty($organizational)) {
            Flash::error('Organizational not found');

            return redirect(route('organizationals.index'));
        }

        return view('organizationals.show')->with('organizational', $organizational);
    }

    /**
     * Show the form for editing the specified Organizational.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $organizational = $this->organizationalRepository->find($id);

        if (empty($organizational)) {
            Flash::error('Organizational not found');

            return redirect(route('organizationals.index'));
        }

        return view('organizationals.edit')->with('organizational', $organizational);
    }

    /**
     * Update the specified Organizational in storage.
     *
     * @param int $id
     * @param UpdateOrganizationalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrganizationalRequest $request)
    {
        $organizational = $this->organizationalRepository->find($id);

        if (empty($organizational)) {
            Flash::error('Organizational not found');

            return redirect(route('organizationals.index'));
        }

        $organizational = $this->organizationalRepository->update($request->all(), $id);

        Flash::success('Organizational updated successfully.');

        return redirect(route('organizationals.index'));
    }

    /**
     * Remove the specified Organizational from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $organizational = $this->organizationalRepository->find($id);

        if (empty($organizational)) {
            Flash::error('Organizational not found');

            return redirect(route('organizationals.index'));
        }

        $this->organizationalRepository->delete($id);

        Flash::success('Organizational deleted successfully.');

        return redirect(route('organizationals.index'));
    }
}
