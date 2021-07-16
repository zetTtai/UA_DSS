@extends('layouts.inicio')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
    }
.input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
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
.aux i {
    margin-left: -30px;
    cursor: pointer;
}
</style>
<body>
<main class="form-signin">
    <center>
    <img class="mb-4" src="./img/SedTamenNoFondoDark.png" alt="" width="90" height="97">
    </center>
    <h1 class="h1 mb-3 fw-normal">Iniciar sesión</h1>
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
    <label class="h5" for="floatingInput">Correo electrónico</label>
        <div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="nombre@ejemplo.com">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    </br>
    <label class="h5" for="floatingPassword">Contraseña</label>
    <div class="aux">
        <input type="password" name="password" id="password" style="width: 300px;">
        <i class="far fa-eye" id="togglePassword"></i>
        @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
    </div>
    <script src="js/app.js"></script>
   
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuérdame
      </label>
    </div>
    <div class="text-center">
        <button type="submit" class="btn effect01">
            {{ __('Acceder') }}
        </button>
    </div>
    <center>
    </div>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('¿Olvidaste la contraseña?') }}
            </a>
        @endif
    </div>
    </center>
    <p class="mt-5 mb-3 text-muted text-center">© 2017–2021</p>
    </form>
</main>
<!-- <div class="container">
      <h1>光の反射</h1>
      <p>Light reflection</p>
      <a href="" class="btn effect01" target="_blank"><span>Hover</span></a>
  </div> -->
</body>
<form>
@endsection
