@extends('layouts.inicio')

@section('content')
<style>
.btn {
  border-radius: 25px;
}
</style>
<body>
<div class="row justify-content-center">
<div class="col-md-6">
<h5 class="card-header text-white bg-dark">Añade tu mascota a la página web</h5>
<div class="card">
    <form  class="row g-3" method="GET" action="{{ route('pet.storePet') }}"> 
        @csrf
        <center>
        <div class="col-md-12">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" readonly="readonly">
        </div>
        </center>
        <div class="col-md-12">
        <strong>
        Nombre de la mascota</strong>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">



        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        </div>
        <div class="col-md-3">
        <strong>
        Edad</strong>
        <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}">



        @error('age')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="col-md-3">
        <strong>
        Tipo</strong>

        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}" placeholder="Perro, gato, pájaro,...">

        @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        </div>
        <div class="col-md-3">
        <strong>
        Raza</strong>

        <input type="text" name="race" class="form-control @error('race') is-invalid @enderror" value="{{ old('race') }}" placeholder="Bulldog, siamés,...">



        @error('race')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        </div>
        <div class="col-md-12">
        <strong>
        <label class="label" for="#"><strong>Descripción</strong></label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="desc" cols="30" rows="4">{{ old('description') }}</textarea>

        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        </div>
        <div class="col-md-12">
        <strong>
        <label class="label" for="#"><strong>Historial médico</strong></label>
        <textarea name="medical_history" class="form-control @error('medical_history') is-invalid @enderror" id="desc" cols="30" rows="4">{{ old('medical_history') }}</textarea>
        
        @error('medical_history')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        
        </div>
        </br>
        <center>
        <button class="btn btn-success">Crear Mascota</button>
        </center>
        </br>
        </form>
</div>
</div>
</div>
</body>
@endsection

        <!-- <label>
            Nombre de la mascota: <br>
            <input type="text" name="name">
        </label>
        <p></p> 
        <label>
            Tipo: <br>
            <input type="text" name="type">
        </label>
        <p></p> 
        <label>
            Raza: <br>
            <input type="text" name="race">
        </label>
        <p></p> 
        <label>
            Edad: <br>
            <input type="text" name="age">
        </label>
        <p></p> 
        <label>
            Descripción: <br>
            <input type="text" name="description">
        </label>
        <p></p> 
        <label>
            Historial médico:<br>
            <input type="text" name="medical_history">
        </label>
        <p></p> 
        <label>
            ID de cuidador:<br>
            <input type="text" name="user_id" value="{{ Auth::user()->id }}" readonly="readonly">
        </label> 
        <p></p>  -->