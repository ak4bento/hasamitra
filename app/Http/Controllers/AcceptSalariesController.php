<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAcceptSalariesRequest;
use App\Http\Requests\UpdateAcceptSalariesRequest;
use App\Repositories\AcceptSalariesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AcceptSalariesController extends AppBaseController
{
    /** @var  AcceptSalariesRepository */
    private $acceptSalariesRepository;

    public function __construct(AcceptSalariesRepository $acceptSalariesRepo)
    {
        $this->acceptSalariesRepository = $acceptSalariesRepo;
    }

    /**
     * Display a listing of the AcceptSalaries.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $acceptSalaries = $this->acceptSalariesRepository->paginate(100);

        return view('accept_salaries.index')
            ->with('acceptSalaries', $acceptSalaries);
    }

    /**
     * Show the form for creating a new AcceptSalaries.
     *
     * @return Response
     */
    public function create()
    {
        return view('accept_salaries.create');
    }

    /**
     * Store a newly created AcceptSalaries in storage.
     *
     * @param CreateAcceptSalariesRequest $request
     *
     * @return Response
     */
    public function store(CreateAcceptSalariesRequest $request)
    {
        $input = $request->all();

        $acceptSalaries = $this->acceptSalariesRepository->create($input);

        Flash::success('Accept Salaries saved successfully.');

        return redirect(route('acceptSalaries.index'));
    }

    /**
     * Display the specified AcceptSalaries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $acceptSalaries = $this->acceptSalariesRepository->find($id);

        if (empty($acceptSalaries)) {
            Flash::error('Accept Salaries not found');

            return redirect(route('acceptSalaries.index'));
        }

        return view('accept_salaries.show')->with('acceptSalaries', $acceptSalaries);
    }

    /**
     * Show the form for editing the specified AcceptSalaries.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $acceptSalaries = $this->acceptSalariesRepository->find($id);

        if (empty($acceptSalaries)) {
            Flash::error('Accept Salaries not found');

            return redirect(route('acceptSalaries.index'));
        }

        return view('accept_salaries.edit')->with('acceptSalaries', $acceptSalaries);
    }

    /**
     * Update the specified AcceptSalaries in storage.
     *
     * @param int $id
     * @param UpdateAcceptSalariesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAcceptSalariesRequest $request)
    {
        $acceptSalaries = $this->acceptSalariesRepository->find($id);

        if (empty($acceptSalaries)) {
            Flash::error('Accept Salaries not found');

            return redirect(route('acceptSalaries.index'));
        }

        $acceptSalaries = $this->acceptSalariesRepository->update($request->all(), $id);

        Flash::success('Accept Salaries updated successfully.');

        return redirect(route('acceptSalaries.index'));
    }

    /**
     * Remove the specified AcceptSalaries from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $acceptSalaries = $this->acceptSalariesRepository->find($id);

        if (empty($acceptSalaries)) {
            Flash::error('Accept Salaries not found');

            return redirect(route('acceptSalaries.index'));
        }

        $this->acceptSalariesRepository->delete($id);

        Flash::success('Accept Salaries deleted successfully.');

        return redirect(route('acceptSalaries.index'));
    }
}
