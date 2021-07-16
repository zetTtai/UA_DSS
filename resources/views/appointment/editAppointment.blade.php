@extends('layouts.inicio')

@section('content')
<style>
.btn {
  border-radius: 25px;
}
</style>
<body>
<form method="GET" action="{{ route('appointment.updateAppointment', $appointment) }}"> 
        @csrf
        <div class="row justify-content-center">
        <div class="col-md-3">
        <h5 class="card-header text-white bg-dark">Editar cita</h5>
        <div class="card bg-light">
            <div class="col-md-12">
            <center>
            <strong>
            <label for="input" class="form-label mx-3">Sala</strong> </br>

            <input type="int" name="appointment" class="form-control @error('appointment') is-invalid @enderror" value="{{ $appointment->appointment }}">



            @error('appointment')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </center>
            </div>
            <div class="col-md-12">
                <!-- <input type="text" name="description" class="form-control" value="{{ $appointment->description }}"> -->
                <label class="label" for="#"><strong>Descripción</strong></label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="desc_id" cols="30" rows="4">{{ $appointment->description }}</textarea>



                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <input type="hidden" name="price" value="{{ $appointment->price }}">
            <input type="hidden" name="idCuidador" value="{{ $appointment->idCuidador }}">
            <input type="hidden" name="pet_id" value="{{ $appointment->pet_id }}">
            <input type="hidden" name="user_id" value="{{ $appointment->user_id }}">
        </div>
        </div>
        <center>
        </br>
        <button class= "btn btn-success"><h4>Editar cita</h4></button>
        </center>
        </br>
    </form>
    
    <center>
    </br></br>
    <a class= "btn btn-danger" href="{{ route('appointment.deleteAppointment', $appointment) }}">Eliminar<a>
    </center>   
    <center>
    <td><a class= "btn btn-warning mx-3" style="float: left;" href="{{ route('appointment.showAll') }}"><h4>Volver al listado</h4><a><td>
    </center>
   <!-- <form method="GET" action="{{ route('appointment.updateAppointment', $appointment) }}"> 
        @csrf
        <label>
            Número de la consulta: <br>
            <input type="int" name="appointment" value="{{ $appointment->appointment }}">
        </label>
        <p></p> 
        <label>
            Precio: <br>
            <input type="int" name="price" value="{{ $appointment->price }}">
        </label>
        <p></p> 
        <label>
            Descripción: <br>
            <input type="text" name="description" value="{{ $appointment->description }}">
        </label>
        <p></p>
        <button>Editar Cita</button>
        <a href="{{ route('appointment.deleteAppointment', $appointment) }}">Eliminar<a>  <br>
        <td><a href="{{ route('appointment.showAll') }}">Volver<a><td>
   </form> -->
</body>
@endsection