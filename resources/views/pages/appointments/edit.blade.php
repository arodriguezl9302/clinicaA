@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
               Editar cita asociada al paciente {{ $appointment['patient']['name']}}
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-8 col-lg-8">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Escriba los nuevos datos</h3>
                      </div>
                      <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="row">
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floating-password" value="{{ $appointment['type']}}" autocomplete="off">
                                  <label for="floating-password">Nombre</label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-floating mb-3">
                                  <input type="email" class="form-control" id="floating-password" value="{{ $appointment['time']}}" autocomplete="off">
                                  <label for="floating-password">Hora</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="row">
                                <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floating-password" value="{{ $appointment['date']}}" autocomplete="off">
                                  <label for="floating-password">Fecha</label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-floating mb-3">
                                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected="">Selecciona una opción</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                  </select>
                                  <label for="floatingSelect">Estado</label>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="card-footer text-end">
                        <div class="d-flex">
                          <a href="{{ route('appointments.index')}}" class="btn btn-link">Cancelar</a>
                          <button type="submit" class="btn btn-primary ms-auto">Guardar</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="row row-cards">
                        <div class="col-md-12 col-lg-12">
                            <div class="card" style="height: 15rem;">
                                <div class="card-header">
                                  <h3 class="card-title">
                                    Clínica
                                  </h3>
                                  <div class="card-actions">
                                    <a href="#">
                                      Cambiar de clínica<!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path><path d="M16 5l3 3"></path></svg>
                                    </a>
                                  </div>
                                </div>
                                <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                  <dl class="row">
                                    <dt class="col-5">Nombre:</dt>
                                    <dd class="col-7">{{ $appointment['clinic']['name'] }}</dd>
                                    <dt class="col-5">Direccion:</dt>
                                    <dd class="col-7">{{ $appointment['clinic']['address'] }}</dd>
                                  </dl>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="card" style="height: 15rem">
                                <div class="card-header">
                                  <h3 class="card-title">Paciente</h3>
                                </div>
                                <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                    <div class="divide-y">
                                        <div>
                                            <div class="row">
                                              <div class="col-auto">
                                                <span class="avatar">JL</span>
                                              </div>
                                              <div class="col">
                                                <div class="text-truncate">
                                                  <strong>{{ $appointment['patient']['name'] }}</strong>
                                                </div>
                                                <div class="text-muted">23/03/2023</div>
                                              </div>
                                              <div class="col-auto align-self-center">
                                                <div class="badge bg-primary"></div>
                                              </div>
                                            </div>
                                          </div>
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