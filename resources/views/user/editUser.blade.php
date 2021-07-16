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
.btn2:hover {
  text-decoration: none;
}
</style>
<body>
<div class="row justify-content-center">
<div class="col-md-6">
<h5 class="card-header text-white bg-dark">Información del usuario</h5>
<div class="card">
    <form class="row g-3" method="GET" action="{{ route('user.updateUser', $user) }}">
    @csrf
    <div class="col-md-6">
        <strong>
        <label for="inputEmail4" class="form-label">Nombre completo</label></strong>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}"  autofocus placeholder="Nombre Apellido1 Apellido2">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputPassword4" class="form-label">Correo electrónico</label></strong>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" placeholder="nombre@ejemplo.com">
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
        <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ $user->dni }}" autofocus placeholder="12345678A">
        @error('dni')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-3">
        <strong>
        <label for="inputPassword4" class="form-label">Teléfono</label></strong>
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}"  autofocus placeholder="111222333">
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
        @if($user->client == 1) 
        <th> <input type="radio" value="1" name="client" id="client" class=" @error('client') is-invalid @enderror" checked> Cliente </th>
        @else
        <th> <input type="radio" value="1" name="client" id="client" class=" @error('client') is-invalid @enderror" > Cliente </th>
        @endif
        @if($user->client == 0) 
        <th> <input type="radio"  value="0" name="client" id="client" class=" @error('client') is-invalid @enderror" checked> Veterinario</th>
        @else
        <th> <input type="radio"  value="0" name="client" id="client" class=" @error('client') is-invalid @enderror" > Veterinario</th>
        @endif
        @error('client')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputAccount" class="form-label">Cuenta bancaria</label></strong>
        <input id="account" type="text" class="form-control @error('account') is-invalid @enderror" name="account" value="{{ $user->account }}" autofocus placeholder="ES 12 1234 1234 12 1234567890">
        @error('account')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputSalary" class="form-label">Salario</label></strong>
        <input id="salary" type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ $user->salary }}" autofocus>
        @error('salary')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputAdress" class="form-label">Dirección</label></strong>
        <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ $user->adress }}" autofocus  placeholder="Calle nombre, número, codigo postal, localidad, provincia">
        @error('adress')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <strong>
        <label for="inputOcuppation" class="form-label">Ocupación</label></strong>
        <input id="ocuppation" type="text" class="form-control @error('ocuppation') is-invalid @enderror" name="ocuppation" value="{{ $user->ocuppation }}" autofocus>
        @error('ocuppation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success" style="border-radius: 25px;">
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
<!-- <body>
   <form method="GET"  action="{{ route('user.updateUser', $user) }}"> 
        @csrf
        <label>
            Cliente: <br>
            <input type="text" name="client" value="{{ $user->client }}">
        </label>
        <p></p> 
        <label>
            Nombre del usuario: <br>
            <input type="text" name="name" value="{{ $user->name }}">
        </label>
        <p></p> 
        <label>
            DNI: <br>
            <input type="text" name="dni" value="{{ $user->dni }}">
        </label>
        <p></p> 
        <label>
            Email: <br>
            <input type="text" name="email" value="{{ $user->email }}">
        </label>
        <p></p> 
        <label>
            Password: <br>
            <input type="text" name="password" value="{{ $user->password }}">
        </label>
        <p></p> 
        <label>
            Phone: <br>
            <input type="text" name="phone" value="{{ $user->phone }}">
        </label>
        <p></p> 
        <label>
            Account:<br>
            <input type="text" name="account" value="{{ $user->account }}">
        </label>
        <p></p>
        <label>
            Adress:<br>
            <input type="text" name="adress" value="{{ $user->adress }}">
        </label>
        <p></p> 
        <label>
            Salary:<br>
            <input type="text" name="salary" value="{{ $user->salary }}">
        </label>
        <p></p> 
        <label>
            Ocuppation:<br>
            <input type="text" name="ocuppation" value="{{ $user->ocuppation }}">
        </label>
        <p></p> 

        <button>Editar User</button>
        <a href="{{ route('user.deleteUser', $user) }}">Eliminar<a>  <br>

    
        
        <td><a href="{{ route('user.showAll') }}">Volver<a><td>
        
   </form>
</body>
</html>