@extends('layouts.inicio')

@section('content')
</head>
<body>
   <div class="container">
      <table class="table table-striped">
         <thead>
         <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Contrasena</th>
            <th>Telefono</th>
            <th>Cuenta</th>
            <th>Salario</th>
            <th>Ocupacion</th>
         </tr>
         
         </thead>
         <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->client }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->dni }}</td>
                <td>{{ $user-> email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->adress }}</td>
                <td>{{ $user->salary }}</td>
                <td>{{ $user->ocuppation }}</td>
                <td><a href="{{ action('UserController@editUser', ['id' => $user->id]) }}">Editar</a></td>
                <td><a href="{{ route('user.deleteUser', $user) }}">Eliminar<a><td>

            </tr>
         </tbody>
      </table>
   </div>
</body>
@endsection