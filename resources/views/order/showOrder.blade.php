@extends('layouts.inicio')

@section('content')
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Listado de Clientes</title>
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
<div class="container">
   <table class="table table-striped">
      <thead>
      <tr>
         <th>ID</th>
         <th>Date</th>
         <th>Total Price</th>
         <th>Status</th>
         <th>User Id</th>

      </tr>
      
      </thead>
      <tbody>
         <tr>
               <td>{{ $order->id }}</td>
               <td>{{ $order->date }}</td>
               <td>{{ $order->totalprice }}</td>
               <td>{{ $order->status }}</td>
               <td>{{ $order->user_id }}</td>
               <td><a href="{{ action('OrderController@editOrder', ['id' => $order->id]) }}">Editar</a></td>
               <td><a href="{{ route('order.deleteOrder', $order) }}">Eliminar<a><td>

         </tr>
         <td><a href="{{ route('order.showAll') }}">Volver<a><td>
      </tbody>
   </table>
</div>
</body>
</html>
@endsection