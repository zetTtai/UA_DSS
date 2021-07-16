@extends('layouts.inicio')

@section('content')
<style>

</style>
<body>
<div class="col-md-4 mx-5">
   <div class="card">
   <h5 class="card-header text-white bg-dark">Filtros</h5>
   <div class="card-body bg-light">
   <form method="POST" action="{{ route('user.ByName') }}">
      @csrf
      <label><strong>
      Filtrar por nombre:
         <input type="text" name="name"></strong>
      </label>
      <button class="btn btn-warning mx-3"> Buscar </button>
   </form>
   </br>
   <form method="POST" action="{{ route('user.ByDNI') }}">
      @csrf
      <label><strong>
      Filtrar por DNI:
         <input type="text" name="dni" placeholder="12345678A">
      </label>
      <button class="btn btn-warning mx-3"> Buscar </button></strong>
   </form>
      </br>
      <td><a class="btn btn-danger" href="{{ action('UserController@ShowAll') }}">Eliminar filtros</a></td> <br>
   </div>
   </div>
</div>
   <div class="table-responsive mx-5">
      <table class="table table-hover">
      <thead class="table-dark">
         <form method="GET" action="{{ route('user.filter') }}">
         @csrf
            <th> <input type="radio" value="1" name="type" > ID </th>
            <th> <input type="radio" value="2" name="type" > Nombre</th>
            <th> <input type="radio" value="3" name="type"> DNI</th>
            </br>
            <div class="container-fluid">
            <div class="row">
               <div class="col">
                  <button type="submit" class="btn btn-warning">Buscar</button> 
               </div>
               <div class="col align-self-end ml-auto" style="text-align: right">
                  <a type="submit" class="btn btn-success" href="/user/createuser">Añadir nuevo Usuario</a>
               </div>
            </div>
            </div>
            <th>Cliente</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Teléfono</th>
            <th>Cuenta</th>
            <th>Salario</th>
            <th>Ocupación</th>
            <th></th>
         </tr>
         </thead>
         <tbody class="table-secondary">
            @foreach($users as $user)
            <tr>
               <td>{{ $user->id }}</td>
               <td>{{ $user->name }}</td>
               <td>{{ $user->dni }}</td>
               <td>{{ $user->client }}</td>
               <td>{{ $user -> email }}</td>
               <td>{{ $user->password }}</td>
               <td>{{ $user->phone }}</td>
               <td>{{ $user->adress }}</td>
               <td>{{ $user->salary }}</td>
               <td>{{ $user->ocuppation }}</td>
               <!-- <td><a href="{{ action('UserController@editUser', ['id' => $user->id]) }}">Editar</a></td> -->
               <td><a class="btn btn-warning" role="button" href="{{ action('UserController@editUser', ['id' => $user->id]) }}">Editar</a></td>
            </tr>
            @endforeach
         </tbody>
         </form> 
      </table>
      {{ $users->appends(['filter' => '$patata'])->links()}}
      </div>
</body>
@endsection
