@extends('layouts.inicio')

@section('content')
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<body>

<div class="about-section">
    
  <h1><strong>¿Quiénes somos?</strong></h1>
  <p>Somos un equipo de veterinarios generalistas en donde nuestra primera misión es el desempeño de la medicina preventiva frente a los patógenos frecuentes en nuestra zona.</p>
  <p>Tratamos desde las enfermades víricas más frecuentes hasta realizar cirugías de tejidos blandos, higiene dental, vacunación, ...</p>
  <p>Llevamos desde 2004 realizando este trabajo, pero lo que más nos diferencia es nuestro conocimiento de aves, pequeños mamíferos y reptiles.</p>
</div>

<h2 style="text-align:center"><strong>Nuestro equipo</strong></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="./img/Pepe.jpg" alt="Jose" style="width:100%">
      <div class="container">
        <h2>Emilio José Salgado Segura</h2>
        <p class="title">Veterinario jefe</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>pepe@gmail.com</p>
        <center>
        <p><a class="btn btn-dark btn-lg" href="/contacto">Contacto</a></p>
        </center>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./img/Maria.jpg" alt="Maria" style="width:100%">
      <div class="container">
        <h2>Maria Valle Guirado</h2>
        <p class="title">Auxiliar de veterinario</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mariaguirado@gmail.com</p>
        <center>
        <p><a class="btn btn-dark btn-lg" href="/contacto">Contacto</a></p>
        </center>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./img/Juan.jpg" alt="Juan" style="width:100%">
      <div class="container">
        <h2>Juan Bautista Pinilla</h2>
        <p class="title">Auxiliar de veterinario</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>juanba@gmail.com</p>
        <center>
        <p><a class="btn btn-dark btn-lg" href="/contacto">Contacto</a></p>
        </center>
      </div>
    </div>
  </div>
</div> 
</body>
@endsection