@extends('layouts.guest')

@section('content')
    <div class="text-center mb-4 h2">
        {{ config('app.name', 'ClinicasApp') }}
    </div>
    <form class="card card-md" action="{{ route('auth.postLogin') }}" method="post" autocomplete="off">
        @csrf

        <div class="card-body">
            <h2 class="card-title text-center mb-4">Iniciar sesión en su cuenta</h2>

            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Enter password') }}" required autofocus tabindex="1">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- <div class="mb-3">
                <label class="form-label">
                    Contraseña
                    
                    <span class="form-label-description">
                        <a href="{{ route('auth.showForgotPassword') }}" tabindex="5">Olvidaste la contraseña?</a>
                    </span>
                    
                </label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required tabindex="2">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="form-check">
                    <input type="checkbox" class="form-check-input" tabindex="3" name="remember" />
                    <span class="form-check-label">Recordarme</span>
                </label>
            </div> --}}

            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100" tabindex="4">Entrar</button>
            </div>
        </div>
    </form>
    <form method="POST" action="{{ route('auth.forgotPassword') }}">
        @csrf
        <span class="form-label-description mt-2">
            <button type="submit" class="btn btn-ghost-info" tabindex="5">Olvidaste la contraseña?</button>
        </span>
    </form>

@endsection
