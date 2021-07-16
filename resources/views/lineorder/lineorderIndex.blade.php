<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Listado de Line order</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
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
            @foreach($lineorders as $lineorder)
            <tr>
                <td>{{ $lineorder->id }}</td>
                <td>{{ $lineorder->amount }}</td>
                <td>{{ $lineorder->order_id }}</td>
                <td>{{ $lineorder->product_id }}</td>
                <td><a href="{{ action('LineorderController@editLineorder', ['id' => $lineorder->id]) }}">Editar</a></td>
            </tr>
            @endforeach
         </tbody>
      </table>
      {{$lineorders->links()}}
   </div>
</body>
</html>