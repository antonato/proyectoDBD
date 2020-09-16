@extends('layouts.app')
@section('content')

<body id="login">
    <div class="flex-column">
        @if($notLogged ?? '' != NULL)
            <div class="alert alert-danger pt-2" role="alert">
                   El usuario o la contraseña son incorrectos
            </div>
        @endif

        <div class="d-flex justify-content-center">
            <svg id="Capa_1" data-name="Capa 1" width="90px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 90">
                <title>circles</title>
                <circle cx="37" cy="48" r="13" fill="#095d6a" />
                <circle cx="81" cy="48" r="13" fill="#f57b51" />
                <circle cx="124" cy="48" r="13" fill="#fbbc58" />
            </svg>
        </div>
        
        <div class="d-flex justify-content-center">
            <div class="card loginback w-25">

                <div class="d-flex justify-content-center mt-1 mb-2 card-header"><h5>{{ __('Ingresa con tu cuenta') }}</h5></div>
        
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group d-flex flex-column">
                                <input id="email" type="email" class="form-input mt-2 mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico" alt ="ingresar correo electrónico">
                                <!--@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       -->
        
                                <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" alt="Ingresar contraseña" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
        
                        <div class="form-group d-flex">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} alt="checkbox recuérdame">
        
                                    <label class="form-check-label mt-1 p-0" for="remember" style="color: aliceblue; font-size: 10px">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                        </div>
        
                        <div class="form-group mb-0">
                            <div class="d-flex flex-column w-100">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>
        
                                @if (Route::has('password.request'))
                                    <a class="mt-2" style="font-size: 10px" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu Contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>    
</body>
@endsection