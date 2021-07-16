@extends('layouts.inicio')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-header">Patata</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>


                @if (session('status') == false ) <!--Suponemos que si estas logeado esto no lo ves-->
                <div class="content">   
                    <div class="links">
                        <a href="{{ route('user.showAll') }}">Usuarios</a>
                        <a href="{{ route('pet.showAll') }}">Mascotas</a>
                        <a href="{{ route('appointment.showAll') }}">Citas</a>
                        <a href="{{ route('product.showAll') }}">Productos</a>
                        <a href="{{ route('order.showAll') }}">Pedido</a>

                    </div>
                </div>  
                @endif



            </div>
        </div>
    </div>
</div>
@endsection
