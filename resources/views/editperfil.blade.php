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
</style>
<body>
<hr>
<div class="container container-fluid bootstrap snippet">
<div class="row">
    <div class="col-sm-10"><h1 class="mx-5"><strong> Perfil </strong></h1></div>
    <div class="col-sm-2"><a class="pull-right"><img title="profile image" class="img-fluid" src="/img/SedTamenNoFondoDark.png" width="90" height="97"></a></div>
</div>
<div class="row">
    <div class="col-sm-3"><!--left col-->
    <div class="text-center">
    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-fluid" alt="avatar">
    <!-- <input type="file" class="text-center center-block file-upload"> -->
    </div></hr><br> 
        <div class="panel panel-default">
        </div>
    </div><!--/col-3-->
    <div class="col-sm-9">
        <div class="tab-content">
        <div class="tab-pane active" id="home">
            <hr>
            <form class="row g-3" method="GET" action="{{ route('user.editProfile', Auth::user()) }}">
            @csrf
            <div class="col-md-6">
                <strong>
                <label for="inputEmail4" class="form-label">Nombre completo</label></strong>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <strong>
                <label for="inputPassword4" class="form-label">Correo electrónico</label></strong>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <strong>
                <label for="inputPassword4" class="form-label">Cuenta bancaria</label></strong>
                <input id="account" type="text" class="form-control @error('account') is-invalid @enderror" name="account" value="{{ Auth::user()->account }}">
                @error('account')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <strong>
                <label for="inputEmail4" class="form-label">Dirección</label></strong>
                @if (Auth::check())
                @if (Auth::user()->client != 'null')
                <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ Auth::user()->adress }}">
                @else
                <input id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="" disabled>
                @endif
                @endif
                @error('adress')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <strong>
                <label for="inputPassword4" class="form-label">Contraseña</label></strong>
                <div class="aux">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
                <i class="far fa-eye" id="togglePassword"></i>   
                </div>
            </div>
            <div class="col-md-3">
                <strong>
                <label for="inputEmail4" class="form-label">DNI</label></strong>
                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ Auth::user()->dni }}">
                @error('dni')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror     
                </div>
            <div class="col-md-3">
                <strong>
                <label for="inputPassword4" class="form-label">Teléfono</label></strong>
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ Auth::user()->phone }}">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
            </div>
            <div class="col-md-6">
                <strong>
                <div class= "aux">
                <label for="inputPassword4" class="form-label">Confirmar contraseña</label></strong>
                <input id="password_confirm" type="password" class="form-control" name="password_confirmation">
                <i class="far fa-eye" id="togglePassword"></i>  
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <br>
                    <button class="btn btn-lg btn-success pull-right mx-3" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar cambios </button>
                    <button class="btn btn-lg btn-secondary" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reiniciar</button>
                </div>
            </div>
            </form>
            <hr>
            <a class="btn btn-danger mx-3" type="button" href="/perfil"><i class="glyphicon glyphicon-repeat"></i> Cancelar</a>
            <script src="js/app.js"></script>
            </div><!--/tab-pane-->
        </div><!--/tab-content-->
    </div><!--/col-9-->
</div><!--/row-->
</body>
@endsection