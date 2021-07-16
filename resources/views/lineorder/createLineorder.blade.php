@extends('layouts.inicio')

@section('content')
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Crear linea de Pedido</title>
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
</body>
    <form method="GET" action="{{ route('lineorder.storeLineorder') }}"> 
        @csrf
        <label>
            Cantidad: <br>
            <input type="text" name="amount">
        </label>
        <p></p> 
        <button>Crear Line Order</button>
    </form>
</html>
@endsection