<<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Listado de clientes</title>
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
            @foreach($users as $user)
            <tr>
            <td>{{ $lineorder->id }}</td>
                <td>{{ $lineorder->amount }}</td>
                <td>{{ $lineorder->order_id }}</td>
                <td>{{ $lineorder->product_id }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</body>
</html>