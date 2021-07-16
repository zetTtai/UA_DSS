@extends('layouts.inicio')

@section('content')
<body>
<div class="col-md-4 mx-5">
   <div class="card">
   <h5 class="card-header text-white bg-dark">Filtros</h5>
   <div class="card-body bg-light">
   <form method="POST" action="{{ route('pet.ByName') }}">
      @csrf
      <label><strong>
      Filtrar por nombre:
         <input type="text" name="name"></strong>
      </label>
      <button class="btn btn-warning mx-3"> Buscar </button>
   </form>
   </br>
   <form method="POST" action="{{ route('pet.ByAge') }}">
      @csrf
      <label><strong>
      Filtrar por edad:
         <input type="text" name="age"></strong>
      </label>
      <button class="btn btn-warning mx-3"> Buscar </button>
   </form>
      </br>
      <td><a class="btn btn-danger" href="{{ action('PetController@ShowAll') }}">Eliminar filtros</a></td>
   </div>
   </div>
</div>
   <div class="table-responsive mx-5">
      <table class="table table-hover">
         <thead class="table-dark">
         <form method="GET" action="{{ route('pet.filter') }}">
         @csrf
            <th> <input type="radio" value="1" name="type"> ID </th>
            <th> <input type="radio" value="2" name="type"> Nombre</th>
            <th> <input type="radio" value="3" name="type"> Tipo</th>
            </br>
            <div class="container-fluid">
            <div class="row">
               <div class="col">
                  <button type="submit" class="btn btn-warning">Buscar</button> 
               </div>
               @if (Auth::check()) 
                  @if (Auth::user()->client == 1)
               <div class="col align-self-end ml-auto" style="text-align: right">
                  <a type="submit" class="btn btn-success" href="/pet/createpet">Añadir nueva Mascota</a>
               </div>
                  @endif
               @endif
            </div>
            </div>
            <th>Raza</th>
            <th>Edad</th>
            <th>Descripción</th>
            <th>Historial médico</th>

            @if (Auth::user()->client != 1)
            <th></th>
            @endif
            <!--<th>image</th>-->
         </tr>
         </thead>
         <tbody class="table-secondary">
         @foreach($pets as $pet)
         
            <tr>
               <td>{{ $pet->id }}</td>
               <td>{{ $pet->name }}</td>
               <td>{{ $pet->type }}</td>
               <td>{{ $pet->race }}</td>
               <td>{{ $pet->age }}</td>
               <td>{{ $pet->description }}</td>
               <td>{{ $pet->medical_history }}</td>
               @if (Auth::user()->client != 1)
                  <td><a class="btn btn-warning" role="button" href="{{ action('PetController@editPet', ['id' => $pet->id]) }}">Editar</a></td>
               @endif
            </tr>
         @endforeach
         </tbody>
      </table>
         {{ $pets->links()}}
   </div>
</body>
</html>
@endsection