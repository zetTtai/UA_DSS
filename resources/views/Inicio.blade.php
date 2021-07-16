@extends('layouts.inicio')

@section('content')
<style>
.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}
.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}
.carousel .img-responsive {
  width:100%;
}
</style>
<body>
<div>
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item" data-bs-interval="5000">
        <img class="img-fluid" src= "./img/first-slide.jpg" width="2000" height="700">
      <div class="carousel-caption d-none d-md-block">
        <p class="h3" style="color:black">Se merece los mejores cuidados.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
    <img class="img-fluid" src= "./img/second-slide.jpg" width="2000" height="700">
      <div class="carousel-caption d-none d-md-block">
        <p class="h3" style="color:white">Profesionales de confianza.</p>
      </div>
    </div>
    <div class="carousel-item active" data-bs-interval="5000">
    <img class="img-fluid" src= "./img/third-slide.jpg" width="2000" height="700">
      <div class="carousel-caption d-none d-md-block">
        <p class="h3" style="color:black">Podemos hacernos cargo de una amplia variedad de animales.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5" style="margin: 10px">
  <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
    </svg>
    <div>
      <h4 class="fw-bold mb-0 mx-3">Covid Free</h4>
      <p>Nuestras instalaciones cumplen todas las medidas contra el Coronavirus.</p>
    </div>
  </div>
  <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
        <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
        <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
    </svg>
    <div>
      <h4 class="fw-bold mb-0 mx-3">Sin Espera</h4>
      <p>Servicio 24h para cualquier emergencia o duda respecto a tus mascotas.</p>
    </div>
  </div>
  <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
        <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
    </svg>
    <div>
      <h4 class="fw-bold mb-0 mx-3">Eficientes</h4>
      <p>Nuestro equipo se cordina de tal forma que nos permite solventar cualquier emergencia de forma eficiente.</p>
    </div>
  </div>
  <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em"fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
        <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
    </svg>
    <div>
      <h4 class="fw-bold mb-0 mx-3">Especialistas</h4>
      <p>Contamos con una amplia variedad de profesionales y muy competentes.</p>
    </div>
  </div>
</div>
</body>
@endsection