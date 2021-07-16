@extends('layouts.inicio')

@section('content')
<body>
<div class="table-responsive mx-5">
   <table class="table table-hover">
      <thead class="table-dark">
      <tr>
         <th>ID</th>
         <th>Fecha</th>
         <th>Precio total</th>
         <th>Estado</th>
         @if (Auth::check()) 
         @if (Auth::user()->client != 1)
         <th></th>
         @endif
         @endif
      </tr>
      </thead>
      <tbody class="table-secondary">
         @foreach($orders as $order)
            @if (Auth::user()->client != 1 )
               <tr>
                     <td>{{ $order->id }}</td>
                     <td>{{ $order->date }}</td>
                     <td>{{ $order->totalprice }}</td>
                     <td>{{ $order->status }}</td>
                     @if (Auth::check()) 
                     @if (Auth::user()->client != 1)
                        <td><a class="btn btn-warning" href="{{ action('OrderController@editOrder', ['id' => $order->id]) }}">Editar</a></td>
                     @endif
                  @endif
               </tr>
            @else
               @if ($order->user_id == Auth::user()->id)
                  <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->date }}</td>
                        <td>{{ $order->totalprice }}</td>
                        <td>{{ $order->status }}</td>
                        @if (Auth::check()) 
                        @if (Auth::user()->client != 1)
                           <td><a href="{{ action('OrderController@editOrder', ['id' => $order->id]) }}">Editar</a></td>
                        @endif
                     @endif
                  </tr>
               @endif
            @endif
         @endforeach
         
      </tbody>
   </table>
   {{$orders->links()}}
</div>
</body>
</html>
@endsection