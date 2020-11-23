@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="MainLogin">
        @csrf
        <p class="text-center text-muted lead text-uppercase">login</p>
        <div class="form-group">
            <label>Usuario</label>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label>Contraseña</label>
            <input id="Pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <p class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>        
        </p>

    </form>
@endsection
