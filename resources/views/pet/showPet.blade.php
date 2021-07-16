@extends('layouts.inicio')

@section('content')
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Listado de Mascotas</title>
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
            <th>Name</th>
            <th>Type</th>
            <th>Race</th>
            <th>Age</th>
            <th>Description</th>
            <th>Medical History</th>
            
            <!--<th>image</th>-->
         </tr>
         
         </thead>
         <tbody>
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->type }}</td>
                <td>{{ $pet->race }}</td>
                <td>{{ $pet -> age }}</td>
                <td>{{ $pet->description }}</td>
                <td>{{ $pet->medical_history }}</td>
                <td>{{ $pet->image }}</td>
                <td><a href="{{ action('PetController@editPet', ['id' => $pet->id]) }}">Editar</a></td>
                <td><a href="{{ route('pet.deletePet', $pet) }}">Eliminar<a><td>

            </tr>
            <td><a href="{{ route('pet.showAll') }}">Volver<a><td>
         </tbody>
      </table>
   </div>
</body>
</html>
@endsection