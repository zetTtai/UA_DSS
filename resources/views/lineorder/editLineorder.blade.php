<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Listado de Clietes</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
   <form method="GET" action="{{ route('lineorder.updateLineorder', $lineorder) }}"> 
        @csrf
        <label>
            Amount: <br>
            <input type="text" name="amount">
        </label>
        <p></p>

        <button>Editar Line order</button>
        <a href="{{ route('lineorder.deleteLineorder', $lineorder) }}">Eliminar<a>  <br>
        <td><a href="{{ route('lineorder.showAll') }}">Volver<a><td>
   </form>
</body>
</html>