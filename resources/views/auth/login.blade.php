@extends('layouts.app')

@section('content')

<div class="container text-center">
    <div class="form-group m-5 bg-light rounded-lg ">
            <h1 class="text-dark p-3">Login</h1>
               
            <form method="POST">
                @csrf
                <div class="form-row p-3 text-center">
                    <div class="form-group col-md-6 ">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                        @error('email')
                            <div id="validationServer04Feedback" class="invalid-feedback">
                                Correo electrónico incorrecto.
                            </div>
                        @enderror
                     </div>
                    <!--input password-->
                    <div class="form-group col-md-6 ">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <div id="validationServer04Feedback" class="invalid-feedback">
                                Contraseña errónea.
                            </div>
                        @enderror
                    </div>
                    <!--Chekbox remember me-->
                    <div class="form-check col-md-4 col-offseet-3">
                        <input class="form-check-input" type="checkbox" value="" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                             {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Acceder</button>
                </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
    </div>
</div>





</body>

@endsection
