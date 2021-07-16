@extends('layouts.inicio')

@section('content')
<style>
.btn {
  border-radius: 25px;
}
</style>
<body>
    <form method="GET" action="{{ route('appointment.storeAppointment') }}"> 
        @csrf
        <div class="row justify-content-center">
        <div class="col-md-3">
        <div class="card bg-light">
        <div class="col-md-12">
        <center>
        <strong>
        <label for="input" class="form-label mx-3">Sala</strong> </br>
        <input type="int" class= "mx-3" name="appointment" value="{{ rand(1, 8) }}" readonly="readonly" style="text-align:center"> </label>
        </center>
        </div>
        <div class="col-md-12">
        <center>
        <strong>
        <label for="input" class="form-label mx-3">Precio</strong> </br>
        <input type="int" class= "mx-3" name="price" value="50"  readonly="readonly" style="text-align:center"> </label>
        </center>
        </div>
        <div class="col-md-12">
        <center>
        <strong>
        <label for="input" class="form-label mx-3">Cliente</strong> </br>
        <input type="hidden" class= "mx-3" name="idCuidador" value="{{Auth::user()->id}}"  readonly="readonly" style="text-align:center"> </label>
        <input type="int" class= "mx-3" name="" value="{{Auth::user()->name}}"  readonly="readonly" style="text-align:center"> </label>
        </center>
        </div>
        <div class="col-md-12">
        <center>
        <strong>
        <label for="input" class="form-label mx-3">Veterinario</strong> </br>
        @php ($ides = [])
        @php ($names = [])
        @foreach($users as $user)
            @if ($user->client == 0)
                
                @php ($ides[] = $user->id)
                @php ($names[] = $user->name)
            @endif
        @endforeach

        @php ($pos = array_rand($ides, 1))


        <input class= "mx-3" name="user_id" type="hidden" value="{{$ides[$pos]}}" readonly="readonly" style="text-align:center"> </label>
        <input type="text" class= "mx-3" name="" value="{{$names[$pos]}}" readonly="readonly" style="text-align:center"> </label>
        </center>
        </div>
        </br>
        </div>
        </div>
        </div>
        </br>
        </br>
        <div class="row justify-content-center">
        <div class="col-md-6">
        <h5 class="card-header text-white bg-dark">Información</h5>
        <div class="card bg-light">
        </br>
            <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Elige una mascota</label>
            <select name="pet_id" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" style="cursor: pointer;">
                <option selected>...</option>
                @foreach($pets as $pet)
                    @if ($pet->user_id == Auth::user()->id)
                        <option name="pet_id" value="{{$pet->id}}">{{$pet->name}}</option>
                    @endif
                @endforeach
            </select>
            <a class="btn btn-outline-success" type="button" href= "/pet/createpet" title="Añadir una nueva mascota">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
            </a>
            </div>
        </br>
        <div class="col-md-12">
        <div class="form-group">
        </br>
            <label class="label" for="#"><strong>Descripción</strong></label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="desc_id" cols="30" rows="4"></textarea>



                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        </div>
        </div>
        </div>
        </div>
        </br>
        <center>
        <button class= "btn btn-success">Crear Cita</button>
        </center>
        </br>
    </form>
</body>
@endsection