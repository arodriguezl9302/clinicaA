@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
               Pacientes
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                      <tr>
                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                        <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 15l6 -6l6 6"></path></svg>
                        </th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Direccion</th>
                        <th>Clínica</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></td>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['last_name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['address'] }}</td>
                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#clinic">{{ $user['clinic']['name'] }}</a></td>
                        <td>
                          @if ($user['status'] == true)
                            <span class="badge bg-success me-1"></span> Activo
                          @else
                          <span class="badge bg-danger me-1"></span> Inactivo
                          @endif
                        </td>
                        <td>
                          <a href="{{ route('patients.edit', ['id' => $user['id']])}}" class="btn">
                            Editar
                          </a>
                          <a id="delete-patient" data-name="{{ $user['name'] }}" class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#delete">
                            Eliminar
                          </a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                  <p class="m-0 text-muted">Mostrando del <span>1</span> al <span>8</span> de <span>16</span> registros</p>
                  <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                        prev
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">
                        next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
        </div>
    </div>
    <x-modal id="delete" btnok="Eliminar" btncancel="Cancelar" btnoktype="btn-danger">
      <x-slot name="title">
        Eliminar paciente
      </x-slot>

      Esta seguro?
    </x-modal>

    <x-modal id="clinic" btnok="Ok">
      <x-slot name="title">
        Clinica
      </x-slot>
      <div class="row">
        <div class="col-12 mb-3">
            <strong>Nombre:</strong> SAN LORENZO
        </div>
        <div class="col-12">
            <strong>Dirección:</strong> Calle Gil 8, 23540 MADRID
        </div>
      </div>
      
    </x-modal>
@endsection

{{-- @section('custom_scripts')
  <script>
  // display a modal (small modal)
    $(document).on('click', '#delete-patient', function(event) {
        event.preventDefault();
        let name = $(this).attr('data-name');
        alert(href);
    });
  </script>
@endsection --}}