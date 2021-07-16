@extends('layouts.inicio')

@section('content')
<body>
   <form method="GET" action="{{ route('order.updateOrder', $order) }}"> 
        @csrf
        <label>
            Date: <br>
            <input type="text" name="date">
        </label>
        <p></p> 
        <label>
            Total Price: <br>
            <input type="text" name="totalprice">
        </label>
        <p></p> 
        <label>
            Status: <br>
            <input type="text" name="status">
        </label>
        <p></p> 

        <button>Editar Order</button>
        <a href="{{ route('order.deleteOrder', $order) }}">Eliminar<a> <br>
        <td><a href="{{ route('order.showAll') }}">Volver<a><td>
   </form>
</body>
</html>
@endsection