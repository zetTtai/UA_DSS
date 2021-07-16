@extends('layouts.inicio')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
.aux i {
    cursor: pointer;
}
.btn:hover {
  text-decoration: none;
}

/*btn_background*/
.effect01 {
  color: #FFF;
  border: 4px solid #000;
  box-shadow:0px 0px 0px 1px #000 inset;
  background-color: #000;
  overflow: hidden;
  position: relative;
  transition: all 0.3s ease-in-out;
}
.effect01:hover {
  border: 4px solid #666;
  background-color: #FFF;
  box-shadow:0px 0px 0px 4px #EEE inset;
}

/*btn_text*/
.effect01 span {
  transition: all 0.2s ease-out;
  z-index: 2;
}
.effect01:hover span{
  letter-spacing: 0.13em;
  color: #333;
}

/*highlight*/
.effect01:after {
  background: #FFF;
  border: 0px solid #000;
  content: "";
  height: 155px;
  left: -75px;
  opacity: .8;
  position: absolute;
  top: -50px;
  -webkit-transform: rotate(35deg);
          transform: rotate(35deg);
  width: 50px;
  transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);/*easeOutCirc*/
  z-index: 1;
}
.effect01:hover:after {
  background: #FFF;
  border: 20px solid #000;
  opacity: 0;
  left: 120%;
  -webkit-transform: rotate(40deg);
          transform: rotate(40deg);
}
</style>
<body>
<div class="row justify-content-center">
<div class="col-md-6">
<h5 class="card-header text-white bg-dark">¡Regístrate!</h5>
<div class="card">
    <form class="row g-3" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="col-md-6">
        <strong>
        <label for="inputEmail4" class="form-label">Nombre completo</label></strong>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre Apellido1 Apellido2">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputPassword4" class="form-label">Correo electrónico</label></strong>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="nombre@ejemplo.com">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputEmail4" class="form-label">Contraseña</label></strong>
        <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror -->
        <div class="aux">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        <i class="far fa-eye" id="togglePassword"></i>
        @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>
    </div>
    <!-- <script src="js/app.js"></script> -->
    <div class="col-md-6">
        <strong>
        <label for="inputAccount" class="form-label">Cuenta bancaria</label></strong>
        <input id="account" type="text" class="form-control @error('account') is-invalid @enderror" name="account" value="{{ old('account') }}" required autocomplete="account" autofocus placeholder="ES 12 1234 1234 12 1234567890">
        @error('account')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputEmail4" class="form-label">Confirmar contraseña</label></strong>
        <div class="aux">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <i class="far fa-eye" id="togglePassword2"></i>
        </div>
    </div>
    <script src="js/app.js"></script>
    <div class="col-md-3">
        <strong>
        <label for="inputPassword4" class="form-label">DNI</label></strong>
        <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus placeholder="12345678A">
        @error('dni')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-3">
        <strong>
        <label for="inputPassword4" class="form-label">Teléfono</label></strong>
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="111222333">
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputAdress" class="form-label">Dirección</label></strong>
        <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" autofocus  placeholder="Calle nombre, número, codigo postal, localidad, provincia">
        @error('adress')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="text-center">
        <button type="submit" class="btn effect01">
            {{ __('Registrarse') }}
        </button>
    </div>
    </form>
</div>
</div>
</div>
</br>

<p class="mt-5 mb-3 text-muted h6">Tus datos personales se utilizarán para procesar tu pedido, mejorar tu experiencia en esta página web, gestionar el acceso a tu cuenta y propositos descritos en nuestra
<a href="https://i.pinimg.com/originals/1d/71/17/1d71179d0845c32f86ca7d9cf428a34f.png">politica de privacidad</a>
</p>
</body>
@endsection
