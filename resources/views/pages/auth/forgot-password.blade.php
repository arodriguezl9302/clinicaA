@extends('layouts.guest')

@section('content')
    <div class="page-body">
        <div class="container-xl">

            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Verifique su dirección de correo electrónico
                    </div>
                </div>
                <div class="card-body">
                    <p>Se ha enviado un enlace a tu dirección de  correo.</p>
                    

                    {{-- <div class="row">
                        <form class="d-inline" method="POST" action="#">
                            @csrf
    
                            <button type="submit" class="btn btn-primary">Enviar de nuevo</button>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="text-center text-muted mt-3">
            Regresar al <a href="{{ route('auth.showLogin') }}">login</a>
        </div>
    </div>
@endsection
