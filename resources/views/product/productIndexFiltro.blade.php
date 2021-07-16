@extends('layouts.inicio')

@section('content')
<style>
   @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

   :root {
      --font1: 'Heebo', sans-serif;
      --font2: 'Fira Sans Extra Condensed', sans-serif;
      --font3: 'Roboto', sans-serif
   }

   .card2 {
      background: #fff;
      box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
      transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
      border: 0;
      border-radius: 1rem
   }

   .card2-img,
   .card2-img-top {
      border-top-left-radius: calc(1rem - 1px);
      border-top-right-radius: calc(1rem - 1px)
   }

   .card2 h5 {
      overflow: hidden;
      height: 56px;
      font-weight: 900;
      font-size: 1rem
   }

   .card2-img-top {
      width: 100%;
      max-height: 180px;
      object-fit: contain;
      padding: 30px
   }

   .card2 h2 {
      font-size: 1rem
   }

   .card2:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
   }

   .label-top {
      /* position: absolute; */
      background-color: #8bc34a;
      color: #fff;
      /* top: 8px;
      right: 8px; */
      padding: 5px 10px 5px 10px;
      font-size: .7rem;
      font-weight: 600;
      border-radius: 3px;
      text-transform: uppercase
   }

   .top-right {
      position: absolute;
      top: 24px;
      left: 24px;
      width: 90px;
      height: 90px;
      border-radius: 50%;
      font-size: 1rem;
      font-weight: 900;
      background: #ff5722;
      line-height: 90px;
      text-align: center;
      color: white
   }

   .top-right span {
      display: inline-block;
      vertical-align: middle
   }

   @media (max-width: 768px) {
      .card2-img-top {
         max-height: 250px
      }
   }

   .over-bg {
      background: rgba(53, 53, 53, 0.85);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(0.0px);
      -webkit-backdrop-filter: blur(0.0px);
      border-radius: 10px
   }

   .btn2 {
      font-size: 1rem;
      font-weight: 500;
      text-transform: uppercase;
      padding: 5px 50px 5px 50px
   }

   .box .btn2 {
      font-size: 1.5rem
   }

   @media (max-width: 1025px) {
      .btn2 {
         padding: 5px 40px 5px 40px
      }
   }

   @media (max-width: 250px) {
      .btn {
         padding: 5px 30px 5px 30px
      }
   }

   .btn2-warning {
      background: none #188753;
      color: #ffffff;
      fill: #ffffff;
      border: none;
      text-decoration: none;
      outline: 0;
      box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
      border-radius: 100px
   }

   .btn2-warning:hover {
      background: none #188753;
      color: #ffffff;
      box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
   }

   .bg-warning {
      font-size: 1rem;
      background-color: #ffc106 !important;
      color:#000000
   }

   .bg-danger {
      font-size: 1rem
   }

   .price-hp {
      font-size: 1rem;
      font-weight: 600;
      color: darkgray
   }

   .amz-hp {
      font-size: .7rem;
      font-weight: 600;
      color: darkgray
   }

   .fa-question-circle:before {
      color: darkgray
   }

   .fa-plus:before {
      color: darkgray
   }

   .box {
      border-radius: 1rem;
      background: #fff;
      box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
      transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
   }

   .box-img {
      max-width: 300px
   }

   .thumb-sec {
      max-width: 300px
   }

   @media (max-width: 576px) {
      .box-img {
         max-width: 200px
      }

      .thumb-sec {
         max-width: 200px
      }
   }

   .inner-gallery {
      width: 60px;
      height: 60px;
      border: 1px solid #ddd;
      border-radius: 3px;
      margin: 1px;
      display: inline-block;
      overflow: hidden;
      -o-object-fit: cover;
      object-fit: cover
   }

   @media (max-width: 370px) {
      .box .btn2 {
         padding: 5px 40px 5px 40px;
         font-size: 1rem
      }
   }

   .disclaimer {
      font-size: .9rem;
      color: darkgray
   }

   .related h3 {
      font-weight: 900
   }

   footer {
      background: #212529;
      height: 80px;
      color: #fff
   }
</style>
<body>
<div class="col-md-4 mx-5">
   <div class="card">
   <h5 class="card-header text-white bg-dark">Filtros</h5>
   <div class="card-body bg-light">
   <form method="POST" action="{{ route('product.ByType') }}">
   @csrf
   <label><strong>
   Filtrar por tipo:
      <input type="text" name="type" placeholder="Comida, paseo,...">
   </label></strong>
   <button class="btn btn-warning mx-3"> Buscar </button>
   </form>
   </br>
   <form method="POST" action="{{ route('product.ByBrand') }}">
   @csrf
   <label><strong>
   Filtrar por marca:
      <input type="text" name="brand">
   </label></strong>
   <button class="btn btn-warning mx-3"> Buscar </button>
   </form>
      </br>
      <td><a class="btn btn-danger" href="{{ action('ProductController@ShowAll') }}">Eliminar filtros</a></td> <br>
   </div>
   </div>
</div>
@if(Auth::check())
@if (Auth::user()->client != 1)
</br>
<div class="table-responsive mx-5">
   <table class="table table-hover">
      <thead class="table-dark">
      <tr>
         @if (Auth::check()) 
         @if (Auth::user()->client != 1)
            <div class="container-fluid">
               <div class="row">
                  
                  <div class="col align-self-end ml-auto" style="text-align: right">
                     <a type="submit" class="btn btn-success" href="/product/createproduct">Añadir nuevo Producto</a>
                  </div>
               </div>
            </div>
         @endif
         @endif
         <th>ID</th>
         <th>Nombre</th>
         <th>Marca</th>
         <th>Tipo</th>
         <th>Descripción</th>
         <th>Precio</th>
         <th>Stock</th>
         @if (Auth::check()) 
         @if (Auth::user()->client != 1)
         <th></th>
         @endif
         @endif
         <!--<th>image</th>-->
      </tr>
      </thead>
      <tbody class="table-secondary">
         @foreach($products as $product)
         <tr>
               <td>{{ $product->id }}</td>
               <td>{{ $product->name }}</td>
               <td>{{ $product->brand }}</td>
               <td>{{ $product->type }}</td>
               <td>{{ $product->description }}</td>
               <td>{{ $product->price }}</td>
               <td>{{ $product->stock }}</td>
               <!--<td>{{ $product->image }}</td>-->
               @if (Auth::check()) 
               @if (Auth::user()->client != 1)
                  <td><a class="btn btn-warning" role="button" href="{{ action('ProductController@editProduct', ['id' => $product->id]) }}">Editar</a></td>
               @endif
               @endif
               @if (Auth::check())
               @if (Auth::user()->client != 0)
                  <td><a href="{{ url('add-to-cart/' .$product->id) }}" class= "btn btn-success"
                  role= "button" aria-pressed= "true">Añadir Carrito</a></td>
               @endif
               @endif
         </tr>
         @endforeach
      </tbody>
   </table>
   
</div>
</body>
@else
<main class="mx-3 " style=" position: relative; left: 250px;">
    <div class="container-fluid bg-trasparent my-4 p-3">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        @foreach($products as $product)
            
            <div class="col">
                <div class="card2 h-100 shadow-sm mx-3"> <img src="https://nayemdevs.com/wp-content/uploads/2020/03/default-product-image.png" class="card2-img-top" alt="...">
                    <!-- <div class="label-top shadow-sm">Asus Rog</div> -->
                    <div class="card2-body">
                        <div class="clearfix mb-3"> 
                        <span class="float-start badge rounded-pill bg-warning">{{ $product->price }}€</span> 
                        <span class="float-start badge rounded-pill bg-danger mx-3">Stock: {{ $product->stock }}</span>
                        <span class="label-top float-end " >{{$product->brand}}</span> </div>
                        <div class="card2-title"><strong>{{ $product->name }}</strong></div>
                        <div>{{ $product->description }}</div>
                        <span class="float-start badge rounded-pill bg-secondary">{{ $product->type }}</span>
                        <div class="text-center my-4"> <a href="{{ url('add-to-cart/' .$product->id) }}" class="btn2 btn2-warning" title="Añadir al carro">
                           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                           <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                           </svg>
                        </a> </div>
                        <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div>
                    </div>
                </div>
            </div>
         @endforeach
        </div>
    </div>
</main>
@endif
@else
<main class="mx-3 " style=" position: relative; left: 250px;">
    <div class="container-fluid bg-trasparent my-4 p-3">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        @foreach($products as $product)
            
            <div class="col">
                <div class="card2 h-100 shadow-sm mx-3"> <img src="https://nayemdevs.com/wp-content/uploads/2020/03/default-product-image.png" class="card2-img-top" alt="...">
                    <!-- <div class="label-top shadow-sm">Asus Rog</div> -->
                    <div class="card2-body">
                        <div class="clearfix mb-3"> 
                        <span class="float-start badge rounded-pill bg-warning">{{ $product->price }}€</span> 
                        <span class="float-start badge rounded-pill bg-danger mx-3">Stock: {{ $product->stock }}</span>
                        <span class="label-top float-end " >{{$product->brand}}</span> </div>
                        <div class="card2-title"><strong>{{ $product->name }}</strong></div>
                        <div>{{ $product->description }}</div>
                        <span class="float-start badge rounded-pill bg-secondary">{{ $product->type }}</span>
                        <div class="text-center my-4"> <button href="#" class="btn2 btn2-warning" title="Necesitas iniciar sesión" disabled>
                           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                           <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                           </svg>
                        </button> </div>
                        <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div>
                    </div>
                </div>
            </div>
         @endforeach
        </div>
    </div>
</main>
@endif
@endsection