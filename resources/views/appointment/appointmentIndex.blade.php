@extends('layouts.inicio')

@section('content')
<body>
<div class="col-md-4 mx-5">
   <div class="card">
   <h5 class="card-header text-white bg-dark">Filtros</h5>
   <div class="card-body bg-light">
   <form method="POST" action="{{ route('appointment.ByAppointment') }}">
      @csrf
      <label><strong>
      Filtrar por sala:
         <input type="text" name="appointment"></strong>
      </label>
      <button class="btn btn-warning mx-3"> Buscar </button>
   </form>
   </br>
   <form method="POST" action="{{ route('appointment.ByPrice') }}">
      @csrf
      <label><strong>
      Filtrar por precio:
         <input type="text" name="price"></strong>
      </label>
      <button class="btn btn-warning mx-3"> Buscar </button>
   </form>
      </br>
      <td><a class="btn btn-danger" href="{{ action('AppointmentController@ShowAll') }}">Eliminar filtros</a></td> <br>
   </div>
   </div>
</div>
</br>
   <!-- @if (Auth::check()) 
         @if (Auth::user()->client != 0)
            <a href="{{ action('AppointmentController@createAppointment') }}">Añadir Cita</a>
         @endif
   @endif -->
   <div class="table-responsive mx-5">
      <table class="table table-hover">
      <thead class="table-dark">
         <tr>
            <th>ID</th>
            <th>Sala</th>
            <th>Precio</th>
            <th>Descripción</th>
            @if (Auth::check()) 
            @if (Auth::user()->client != 1)
               <th></th>
               @endif
            @endif
            @if (Auth::user()->client == 1)
            <div class="container-fluid">
            <div class="row">
               <div class="col align-self-end ml-auto" style="text-align: right">
                  <a type="submit" class="btn btn-success" href="/appointment/createappointment">Añadir nueva cita</a>
               </div>
            </div>
            </div>
            @endif
         </tr>
         </thead>
         <tbody class="table-secondary">
            @foreach($appointments as $appointment)
               <tr>
                  <td>{{ $appointment->id }}</td>
                  <td>{{ $appointment->appointment }}</td>
                  <td>{{ $appointment->price }}</td>
                  <td>{{ $appointment->description }}</td>
                  @if (Auth::check()) 
                     @if (Auth::user()->client != 1)
                     <td><a class="btn btn-warning" role="button" href="{{ action('AppointmentController@editAppointment', ['id' => $appointment->id]) }}">Editar</a></td>
                     @endif
                  @endif
               </tr>
            @endforeach
         </tbody>
      </table>
      {{$appointments->links()}}
   </div>
</body>
</html>
@endsection