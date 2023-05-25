@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <!-- Page pre-title -->
                  <div class="page-pretitle">
                    Descripción general
                  </div>
                  <h2 class="page-title">
                    Home
                  </h2>
                </div>
                <!-- Page title actions -->
              </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div class="subheader">Pacientes</div>
                              <div class="ms-auto lh-1">
                                <div class="dropdown">
                                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Últimos 7 días</a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Últimos 7 días</a>
                                    <a class="dropdown-item" href="#">Últimos 30 días</a>
                                    <a class="dropdown-item" href="#">Últimos 3 meses</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="h1 mb-3">{{ $numPatients }}</div>
                            <div class="d-flex mb-2">
                              <div>Esta semana</div>
                              <div class="ms-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                  7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 17l6 -6l4 4l8 -8"></path><path d="M14 7l7 0l0 7"></path></svg>
                                </span>
                              </div>
                            </div>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                <span class="visually-hidden">75% Completado</span>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div class="subheader">Citas</div>
                              <div class="ms-auto lh-1">
                                <div class="dropdown">
                                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Últimos 7 días</a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Últimos 7 días</a>
                                    <a class="dropdown-item" href="#">Últimos 30 días</a>
                                    <a class="dropdown-item" href="#">Últimos 3 meses</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="h1 mb-3">{{ $numAppointments }}</div>
                            <div class="d-flex mb-2">
                              <div>Esta semana</div>
                              <div class="ms-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                  7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 17l6 -6l4 4l8 -8"></path><path d="M14 7l7 0l0 7"></path></svg>
                                </span>
                              </div>
                            </div>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: 34%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                <span class="visually-hidden">34% Completado</span>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex align-items-center">
                              <div class="subheader">Pruebas</div>
                              <div class="ms-auto lh-1">
                                <div class="dropdown">
                                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Últimos 7 días</a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Últimos 7 días</a>
                                    <a class="dropdown-item" href="#">Últimos 30 días</a>
                                    <a class="dropdown-item" href="#">Últimos 3 meses</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="h1 mb-3">{{ $numTests }}</div>
                            <div class="d-flex mb-2">
                              <div>Esta semana</div>
                              <div class="ms-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                  7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 17l6 -6l4 4l8 -8"></path><path d="M14 7l7 0l0 7"></path></svg>
                                </span>
                              </div>
                            </div>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: 56%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                <span class="visually-hidden">56% Completado</span>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection