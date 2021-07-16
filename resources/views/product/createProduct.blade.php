@extends('layouts.inicio')

@section('content')
<style>
.btn {
  border-radius: 25px;
}
</style>
<body>
<div class="row justify-content-center">
<div class="col-md-4">
<h5 class="card-header text-white bg-dark">Producto</h5>
<div class="card">
    <form class= "row g-3" method="GET" action="{{ route('product.storeProduct') }}"> 
        @csrf
        <div class="col-md-12">
        <strong>
        Nombre</strong></br>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="col-md-6">
        <strong>
        Tipo</strong></br>
        <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}"  placeholder="Paseo, comida,...">
        @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="col-md-6">
        <strong>
        Marca</strong></br>
        <input id="brand" type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ old('brand') }}" >
        @error('brand')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="col-md-6">
        <strong>
        Precio</strong></br>
        <input id="price" type="integer" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="En euros">
        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="col-md-6">
        <strong>
        Stock</strong></br>
        <input id="stock" type="integer" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}">
        @error('stock')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="col-md-12">
        <label class="label" for="#"><strong>Descripción</strong></label>
        <textarea name="description" class="form-control form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="4">{{ old('description') }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <center>
        </br>
        <button class="btn btn-success">Crear Producto</button>
        </center>
        </br>
        <!-- <label>
            Nombre del Producto: <br>
            <input type="text" name="name">
        </label>
        <label>
            Marca: <br>
            <input type="text" name="brand">
        </label>
        <label>
            Tipo: <br>
            <input type="text" name="type">
        </label>
        <label>
            Descripción: <br>
            <input type="text" name="description">
        </label>
        <label>
            Precio: <br>
            <input type="text" name="price">
        </label>
        <label>
            Stock:<br>
            <input type="text" name="stock">
        </label> -->
        <!--<p></p> 
        <label>
            Imagen:<br>
            <input type="text" name="imageProd">
        </label>
        <p></p>-->
        
    </form>
</div>
</div>
</div>
<center>
        <td><a class= "btn btn-warning mx-3" style="float: left;" href="{{ route('product.showAll') }}"><h4>Volver al listado</h4><a><td>
        </center>
</body>
@endsection