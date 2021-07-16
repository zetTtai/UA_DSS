@extends('layouts.inicio')

@section('content')
<body>
   <div class="container">
      <table class="table table-striped">
         <thead>
         <tr>
         <th>ID</th>
            <th>Amount</th>
            <th>ID Order Price</th>
            <th>ID Product</th>

         </tr>
         
         </thead>
         <tbody>
            <tr>
            <td>{{ $lineorder->id }}</td>
                <td>{{ $lineorder->amount }}</td>
                <td>{{ $lineorder->order_id }}</td>
                <td>{{ $lineorder->product_id }}</td>
                <td><a href="{{ action('LineorderController@editLineorder', ['id' => $lineorder->id]) }}">Editar</a></td>
                <td><a href="{{ route('lineorder.deleteLineorder', $lineorder) }}">Eliminar<a><td>  <br>
            </tr>
            <td><a href="{{ route('lineorder.showAll') }}">Volver<a><td>
         </tbody>
      </table>
   </div>
</body>
@endsection