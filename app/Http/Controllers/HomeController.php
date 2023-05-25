<?php

namespace App\Http\Controllers;

use App\Services\AppointmentsService;
use App\Services\PatientsService;
use App\Services\TestsService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        protected PatientsService $patientsService,
        protected AppointmentsService $appointmentsService,
        protected TestsService $testsService
    )
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $numPatients = count($this->patientsService->getAllPatients());
        $numAppointments = count($this->appointmentsService->getAllAppointments());
        $numTests = count($this->testsService->getAllTests());

        return view('pages.home.index', compact('numPatients', 'numAppointments', 'numTests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
