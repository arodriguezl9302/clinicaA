<?php

namespace App\Http\Controllers;

use App\Services\AppointmentsService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function __construct(protected AppointmentsService $appointmentsService)
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $appointments = $this->appointmentsService->getAllAppointments();
        return view('pages.appointments.index', compact('appointments'));
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
    public function edit(string $id): View
    {
        $appointment = $this->appointmentsService->getAppointment($id);
        return view('pages.appointments.edit', compact('appointment'));
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
