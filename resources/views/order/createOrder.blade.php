@extends('layouts.inicio')

@section('content')
<style>
.btn {
  border-radius: 40px;
}
</style>
<body>
    <?php $valor =0 ?>
    @foreach(session('cart') as $id=> $details)
        <?php $valor += $details['price'] * $details['quantity'] ?> <!--OJOOO-->
    @endforeach
    <div class="row justify-content-center">
    <div class="col-md-6">
    <form method="GET" action="{{ route('order.storeOrder') }}"> 
        @csrf
        </br></br>
        <div class="text-center">
        <label><strong>
            Fecha </br></strong>
            <input class="text-center" type="datetime" name="date" value="<?php echo date("Y-m-d");?>" readonly="readonly">
        </label>
        <label><strong>
            Usuario <br></strong>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" readonly="readonly">
            <input class="text-center" type="text" name="" value="{{ Auth::user()->name }}" readonly="readonly">
        </label>
        </div>
        </br>
        <div class="text-center">
        <label><strong>
            Precio total <br></strong>
            <input class="text-center" type="text" name="totalprice" value="<?php echo $valor + $valor*0.21;?>" readonly="readonly">
        </label>
        </div>
            <input type="hidden" name="status" value="Enviando" readonly="readonly">
        </br>
        
        <div class="text-center">
            <button class="btn btn-success">
                <h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg>
                Confirmar
                </h1>
            </button>
        </div>
        
    </form>
    </div>
    </div>
</body>
@endsection