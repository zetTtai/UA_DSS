@extends('layouts.inicio')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<style>
/* General button style */
.aux {
border: none;
font-family: 'Lato';
font-size: inherit;
color: inherit;
background: none;
cursor: pointer;
padding: 25px 80px;
display: inline-block;
margin: 15px 30px;
text-transform: uppercase;
letter-spacing: 1px;
font-weight: 700;
outline: none;
position: relative;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
transition: all 0.3s;
}

.aux:after {
content: '';
position: absolute;
z-index: -1;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
transition: all 0.3s;
}

/* Pseudo elements for icons */
.aux:before {
font-family: 'FontAwesome';
speak: none;
font-style: normal;
font-weight: normal;
font-variant: normal;
text-transform: none;
line-height: 1;
position: relative;
-webkit-font-smoothing: antialiased;
}


/* Icon separator */
.aux-sep {
padding: 25px 60px 25px 120px;
}

.aux-sep:before {
background: rgba(0,0,0,0.15);
}

/* Button 2 */
.aux-2 {
background: #2ecc71;
color: #fff;
}

.aux-2:hover {
background: #27ae60;
}

.aux-2:active {
background: #27ae60;
top: 2px;
}

.aux-2:before {
position: absolute;
height: 100%;
left: 0;
top: 0;
line-height: 3;
font-size: 140%;
width: 60px;
}
/* Icons */

.icon-cart:before {
content: "\f07a";
}

.icon-heart:before {
content: "\f55a";
}

.icon-info:before {
content: "\f05a";
}

.icon-send:before {
content: "\f1d8";
}


</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <h5 class="card-header text-white bg-dark">Pedido</h5>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- Agregar detalle carrito --}}
                    <?php $valor= 0 ?>
                    @if(session('cart'))
                        <table class= "table table-hover">
                           <thead class="thead table-dark">
                              <tr>
                                 <th>
                                    Producto
                                 </th>
                                 <th>
                                    Precio Unitario
                                 </th>
                                 <th>
                                    Cantidad
                                 </th>
                                 <th>
                                    Precio Total
                                 </th>
                                 <th></th>
                              </tr>
                           </thead>
                        <tbody class= "tbody table-light">
                        <?php $valor =0 ?>
                        @foreach(session('cart') as $id=> $details)
                           <?php $valor += $details['price'] * $details['quantity'] ?> <!--OJOOO-->
                        <tr>
                           <th>
                              {{ $details['name'] }}
                           </th>
                           <th>
                              {{ $details['price'] }}
                           </th>
                           <th>
                              {{ $details['quantity'] }} <!--OJOOO-->
                           </th>
                           <th>
                              {{ $details['price'] * $details['quantity'] }}€ <!--OJOOO-->
                           </th>
                           
                           
                           
                        @endforeach
                        </tbody>
                        </table>
                     @endif

                     <table aling= "right">
                        <th>
                              <p></p>
                              <p> Valor: {{ $valor }}€ </p>
                              <p> IVA: {{ $valor * 0.21 }}€ </p>
                              <p> Total: {{ $valor + $valor*0.21 }}€ </p>
                        </th>
                     </table>
                     @if (Auth::check() && $valor > 0)
                        <center>
                        <!-- <td><a href="{{ action('OrderController@createOrder') }}" class= "btn btn-primary btn-lg btn-block"
                        role= "button" aria-pressed= "true">Comprar</a></td> -->
                        <td><a href="{{ action('OrderController@createOrder') }}" class=" btn aux aux-2 aux-sep icon-cart btn-lg btn-block btn-outline-success"
                        role= "button" aria-pressed= "true">Comprar</a></td>
                        </center>
                        @if (Auth::check()) 
                              <td><a href="{{ url('remove-from-cart/') }}" class= "btn btn-danger btn-lg btn-block"
                              role= "button" aria-pressed= "true" style="float:right">Cancelar Pedido</a></td>
                        @endif
                     @endif
                     {{-- Agregar detalle carrito --}}
                </div>
                </div>
        </div>
    </div>
</div>

@endsection