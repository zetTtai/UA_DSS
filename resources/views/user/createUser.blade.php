@extends('layouts.inicio')

@section('content')
<style>
.btn {
  border-radius: 25px;
}
.aux i {
    cursor: pointer;
}
.btn:hover {
  text-decoration: none;
}
</style>

<body>
<div class="row justify-content-center">
<div class="col-md-6">
<h5 class="card-header text-white bg-dark">Información del usuario</h5>
<div class="card">
    <form class="row g-3" method="GET" action="{{ route('user.storeUser') }}">
    @csrf
    <div class="col-md-6">
        <strong>
        <label for="inputEmail4" class="form-label">Nombre completo</label></strong>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autofocus placeholder="Nombre Apellido1 Apellido2">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputPassword4" class="form-label">Correo electrónico</label></strong>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('mail') }}"  placeholder="nombre@ejemplo.com">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputEmail4" class="form-label">Contraseña</label></strong>
        <div class="aux">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
        <i class="far fa-eye" id="togglePassword"></i>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="col-md-3">
        <strong>
        <label for="inputPassword4" class="form-label">DNI</label></strong>
        <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" autofocus placeholder="12345678A">
        @error('dni')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-3">
        <strong>
        <label for="inputPassword4" class="form-label">Teléfono</label></strong>
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autofocus placeholder="111222333">
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputEmail4" class="form-label">Confirmar contraseña</label></strong>
        <div class="aux">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
        <i class="far fa-eye" id="togglePassword2"></i>
        @error('password-confirm')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <script src="js/app.js"></script>
    <div class="text-center">
        <div class="text-center">
            <th> <input type="radio" value="1" name="client" id="client" class=" @error('client') is-invalid @enderror"> Cliente </th>
            <th> <input type="radio" value="0" name="client" id="client" class=" @error('client') is-invalid @enderror"> Veterinario</th>
            @error('client')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputAccount" class="form-label">Cuenta bancaria</label></strong>
        <input id="account" type="text" class="form-control @error('account') is-invalid @enderror" name="account" value="{{ old('account') }}"  autofocus placeholder="ES 12 1234 1234 12 1234567890">
        @error('account')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputSalary" class="form-label">Salario</label></strong>
        <input id="salary" type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ old('salary') }}"  autofocus>
        @error('salary')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputAdress" class="form-label">Dirección</label></strong>
        <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}"  autofocus  placeholder="Calle nombre, número, codigo postal, localidad, provincia">
        @error('adress')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputOcuppation" class="form-label">Ocupación</label></strong>
        <input id="ocuppation" type="text" class="form-control @error('ocuppation') is-invalid @enderror" name="ocuppation" value="{{ old('ocuppation') }}"  autofocus>
        @error('ocuppation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">
            {{ __('Crear usuario') }}
        </button>
    </div>
    </br>
    </form>
</div>
</div>
</div>
<center>
        <td><a class= "btn btn-warning mx-3" style="float: left;" href="{{ route('user.showAll') }}"><h4>Volver al listado</h4><a><td>
</center>
</body>
@endsection