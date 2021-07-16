@extends('layouts.inicio')
<!-- {{(Auth::user()->name)}} -->
@section('content')
<body>
<hr>
<div class="container container-fluid bootstrap snippet">
<div class="row">
    <div class="col-sm-10"><h1 class="mx-5"><strong> Perfil </strong></h1></div>
    <div class="col-sm-2"><a class="pull-right"><img title="profile image" class="img-circle img-responsive" src="./img/SedTamenNoFondoDark.png" width="90" height="97"></a></div>
</div>
<div class="row">
    <div class="col-sm-3"><!--left col-->
    <div class="text-center">
    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
    <!-- <input type="file" class="text-center center-block file-upload"> -->
    </div></hr><br> 
        <div class="panel panel-default">
        </div>
    </div><!--/col-3-->
    <div class="col-sm-9">
        <div class="tab-content">
        <div class="tab-pane active" id="home">
            <hr>
            <form class="row g-3" method="GET" action="{{ route('editperfil') }}">
            @csrf
            <div class="col-md-6">
                <strong>
                <label for="inputEmail4" class="form-label">Nombre completo</label></strong>
                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" disabled>
                </div>
            <div class="col-md-6">
                <strong>
                <label for="inputPassword4" class="form-label">Correo electrónico</label></strong>
                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" disabled>
            </div>
            <div class="col-md-6">
                <strong>
                <label for="inputPassword4" class="form-label">Cuenta bancaria</label></strong>
                <input id="email" type="text" class="form-control" name="text" value="{{ Auth::user()->account }}" disabled>
            </div>
            <div class="col-md-6">
                <strong>
                <label for="inputEmail4" class="form-label">Dirección</label></strong>
                @if (Auth::check())
                @if (Auth::user()->client != 'null')
                <input id="adress" type="text" class="form-control" name="adress" value="{{ Auth::user()->adress }}" disabled>
                @else
                <input id="adress" type="text" class="form-control" name="adress" value="" disabled>
                @endif
                @endif
            </div>
            <div class="col-md-3">
                <strong>
                <label for="inputEmail4" class="form-label">DNI</label></strong>
                <input id="dni" type="text" class="form-control" name="dni" value="{{ Auth::user()->dni }}" disabled>
                </div>
            <div class="col-md-3">
                <strong>
                <label for="inputPassword4" class="form-label">Teléfono</label></strong>
                <input id="phone" type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" disabled>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <br>
                    <button class="btn btn-lg btn-success" type="submit"z><i class="glyphicon glyphicon-ok-sign"></i> Editar</button>
                </div>
            </div>
            </form> 
            <!-- <div class="form-group">
                <div class="col-xs-6">
                    <label for="mobile"><h4>Mobile</h4></label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">-->
            <hr>
            
            </div><!--/tab-pane-->
        </div><!--/tab-content-->
    </div><!--/col-9-->
</div><!--/row-->
                                                      
</body>
@endsection