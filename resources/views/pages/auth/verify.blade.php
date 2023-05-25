@extends('layouts.guest')

@section('content')
    <div class="text-center mb-4 h2">
        {{ config('app.name', 'ClinicasApp') }}
    </div>
    <form class="card card-md" action="{{ route('auth.verify') }}" method="post" autocomplete="off">
        @csrf
        @method('PUT')

        <div class="card-body">
            <h2 class="card-title text-center mb-4">Introduzca una contraseña para crear su cuenta</h2>
            <input type="hidden" name="id" value="{{ $user->id }}" />
            <div class="mb-3">
                <label class="form-label">Nueva contraseña</label>
                <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Enter password') }}" required autofocus tabindex="1">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Repita su contraseña                    
                </label>
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="{{ __('Repeat password') }}" required tabindex="2">
                @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100" tabindex="4">Enviar</button>
            </div>
        </div>
    </form>

@endsection
