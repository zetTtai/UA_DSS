@extends('layouts.inicio')

@section('content')
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Listado de Citas</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
   <style>
      .content {
         text-align: center;
      }

      .content1 {
                text-align: right;
            }

      .links > a {
            text-align: center;
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
      }

      .top-right_links > a{
                text-align: right;
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

   

   </style>
</head>
<body>
 
   <div class="container">
      <table class="table table-striped">
         <thead>
         <tr>
            <th>ID</th>
            <th>Appointment</th>
            <th>Price</th>
            <th>Description</th>
         </tr>
         
         </thead>
         <tbody>
      
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->appointment }}</td>
                <td>{{ $appointment->price }}</td>
                <td>{{ $appointment->description }}</td>
                <td><a href="{{ action('AppointmentController@editAppointment', ['id' => $appointment->id]) }}">Editar</a></td>
                <td><a href="{{ route('appointment.deleteAppointment', $appointment) }}">Eliminar<a><td>
            </tr>
            <td><a href="{{ route('appointment.showAll') }}">Volver<a><td>

         </tbody>
      </table>
   </div>
</body>
</html>
@endsection