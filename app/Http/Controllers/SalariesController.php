<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSalariesRequest;
use App\Http\Requests\UpdateSalariesRequest;
use App\Repositories\SalariesRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Salaries;
use Illuminate\Http\Request;
use Flash;
use Response;

class SalariesController extends AppBaseController
{
    /** @var  SalariesRepository */
    private $salariesRepository;

    public function __construct(SalariesRepository $salariesRepo)
    {
        $this->salariesRepository = $salariesRepo;
    }

    /**
     * Display a listing of the Salaries.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $salaries = $this->salariesRepository->all(['id_employee' => '']);
        $salaries = Salaries::whereNotNull('id_employee')->get();

        return view('salaries.index')
            ->with('salaries', $salaries);
    }

    public function indexCompany(Request $request)
    {
        $salaries = Salaries::whereNotNull('id_company')->whereNull('id_org')->get();

        return view('salaries.index')
            ->with('salaries', $salaries);
    }
    
    public function indexOrganizational(Request $request)
    {
        $salaries = Salaries::whereNotNull('id_org')->get();

        return view('salaries.index')
            ->with('salaries', $salaries);
    }



    /**
     * Show the form for creating a new Salaries.
     *
     * @return Response
     */
    public function create()
    {
        return view('salaries.create');
    }

    /**
     * Store a newly created Salaries in storage.
     *
     * @param CreateSalariesRequest $request
     *
     * @return Response
     */
    public function store(CreateSalariesRequest $request)
    {
        $input = $request->all();

        $salaries = $this->salariesRepository->create($input);

        Flash::success('Salaries saved successfully.');

        return redirect(route('salaries.index'));
    }

    /**
     * Display the specified Salaries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $salaries = $this->salariesRepository->find($id);

        if (empty($salaries)) {
            Flash::error('Salaries not found');

            return redirect(route('salaries.index'));
        }

        return view('salaries.show')->with('salaries', $salaries);
    }

    /**
     * Show the form for editing the specified Salaries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $salaries = $this->salariesRepository->find($id);

        if (empty($salaries)) {
            Flash::error('Salaries not found');

            return redirect(route('salaries.index'));
        }

        return view('salaries.edit')->with('salaries', $salaries);
    }

    /**
     * Update the specified Salaries in storage.
     *
     * @param int $id
     * @param UpdateSalariesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSalariesRequest $request)
    {
        $salaries = $this->salariesRepository->find($id);

        if (empty($salaries)) {
            Flash::error('Salaries not found');

            return redirect(route('salaries.index'));
        }

        $salaries = $this->salariesRepository->update($request->all(), $id);

        Flash::success('Salaries updated successfully.');

        return redirect(route('salaries.index'));
    }

    /**
     * Remove the specified Salaries from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $salaries = $this->salariesRepository->find($id);

        if (empty($salaries)) {
            Flash::error('Salaries not found');

            return redirect(route('salaries.index'));
        }

        $this->salariesRepository->delete($id);

        Flash::success('Salaries deleted successfully.');

        return redirect(route('salaries.index'));
    }
}
