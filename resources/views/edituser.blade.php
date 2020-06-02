@extends('layouts.app')
<script type="text/javascript" src={{ asset('js/scripts.js') }}></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header navbar">
                Editar el usuario {{ Auth::user()->name }}
            </div>

            <div class="card-body">
            <form action="{{ route('user.update, $user') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('rol') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Rol</label>

                <div class="col-md-6">                                
                    <input id="administrador" type="radio" class="" name="rol" value="administrador" required>
                    <label for="administrador">Administrador</label>
                    <br>
                    <input id="usuario" type="radio" class="" name="rol" value="usuario" required>
                    <label for="usuario">Usuario</label>
                </div>

                <div class="form-group row mb-0 text-right">
                    <div class="col-md-6 offset-md-6">
                        <button type="submit" class="btn btn-outline-dark">
                            {{ __('Actualizar datos') }}
                        </button>
                        <div class="pb-1 btn-space"></div>
                        <button class="btn btn-outline-dark cancelar">
                            <a href="{{ route('home') }}">Cancelar</a>
                        </button>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
