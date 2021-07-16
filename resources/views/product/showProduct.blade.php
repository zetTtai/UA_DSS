@extends('layouts.inicio')

@section('content')
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Listado de Productos</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />


   <style>
      .content {
         text-align: center;
      }

      .content1 {
                text-align: right;
            }

      .links > a {
            text-align: center;
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
      }

      .top-right_links > a{
                text-align: right;
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

   

   </style>
</head>
<body>

<div class="content1">   
    <div class="top-right_links">
    <a href="http://localhost:8000/">Home</a> 
    
   @if (Auth::check() == false)  
                <a href="http://localhost:8000/login">Login</a>
                <a href="http://localhost:8000/register">Register</a>
                
   @endif
   @if (Auth::check())

   <a class="dropdown-item" href="{{ action('UserController@showUser', [Auth::user()]) }}">
            {{Auth::user()->name}}
      </a>
   



   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
      </form>
   </div>


   @endif
    </div> 
    
</div>  



<div class="content">   
      <div class="links">
      @if (Auth::check()) 
        @if (Auth::user()->client != 1) 
            <a href="{{ route('user.showAll') }}">Usuarios</a>
        @endif
            <a href="{{ route('pet.showAll') }}">Mascotas</a>
            <a href="{{ route('appointment.showAll') }}">Citas</a>
            <a href="{{ route('product.showAll') }}">Productos</a>
            <a href="{{ route('order.showAll') }}">Pedido</a>
      @endif

      @if (Auth::check() == false) 
            <a href="{{ route('product.showAll') }}">Productos</a>
            <a href="{{ route('order.showAll') }}">Pedido</a>
      @endif

      </div>
</div>  

    <div class= "container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Type</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <!--<th>image</th>-->
            </tr>
            
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock}}</td>
                    <!--<td>{{ $product->image }}</td>-->
                    <td><a href="{{ action('ProductController@editProduct', ['id' => $product->id]) }}">Editar</a></td>
                    <td><a href="{{ route('product.deleteProduct', $product) }}">Eliminar<a><td>
                </tr>
                <td><a href="{{ route('product.showAll', $product) }}">Volver<a><td>
            </tbody>
        </table>
   </div>
</body>
</html>
@endsection