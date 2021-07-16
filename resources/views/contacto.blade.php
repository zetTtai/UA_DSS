@extends('layouts.inicio')

@section('content')
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .map-responsive{
        overflow:hidden;
        padding-bottom:50%;
        position:relative;
        height:0;
    }
    .map-responsive iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
    }
    .btn:hover {
  text-decoration: none;
}

/*btn_background*/
.effect01 {
  color: #FFF;
  border: 4px solid #000;
  box-shadow:0px 0px 0px 1px #000 inset;
  background-color: #000;
  overflow: hidden;
  position: relative;
  transition: all 0.3s ease-in-out;
}
.effect01:hover {
  border: 4px solid #666;
  background-color: #FFF;
  box-shadow:0px 0px 0px 4px #EEE inset;
}

/*btn_text*/
.effect01 span {
  transition: all 0.2s ease-out;
  z-index: 2;
}
.effect01:hover span{
  letter-spacing: 0.13em;
  color: #333;
}

/*highlight*/
.effect01:after {
  background: #FFF;
  border: 0px solid #000;
  content: "";
  height: 155px;
  left: -75px;
  opacity: .8;
  position: absolute;
  top: -50px;
  -webkit-transform: rotate(35deg);
          transform: rotate(35deg);
  width: 50px;
  transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);/*easeOutCirc*/
  z-index: 1;
}
.effect01:hover:after {
  background: #FFF;
  border: 20px solid #000;
  opacity: 0;
  left: 120%;
  -webkit-transform: rotate(40deg);
          transform: rotate(40deg);
}
</style>
<body>
	<section class="ftco-section">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><strong>¡Contáctanos!</strong></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				      		</div>
									<form method="GET" id="contactForm" name="contactForm" class="contactForm"  action="{{ route('contacto') }}">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Nombre completo</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Nombre Apellido1 Apellido2">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Correo electrónico</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="nombre@ejemplo.com">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Tema</label>
													<input type="text" class="form-control" name="subject" id="subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Mensaje</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4"></textarea>
												</div>
											</div>
											<div class="col-md-12">
                                            </br>
                                                <center>
                                                <div class="text-center">
                                                    <button type="submit" class="btn effect01">
                                                        {{ __('Enviar mensaje') }}
                                                    </button>
                                                </div>
                                                </center>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
                                <div class="container-fluid">
                                <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d782.2625172778595!2d-0.4896077992897672!3d38.34782316565998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd623652bcf92927%3A0xb64745b553495ec7!2sCentro%20Veterinario%20Vetland%20(Alicante)!5e0!3m2!1ses!2ses!4v1621442688716!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
			                    </div>
							</div>
						</div>
                        <center>
						<div class="row text-center">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center h4">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Dirección:</span> Calle Poeta Quintana, 40, 03004 Alicante</p>
				          </div>
			                </div>
							</div>
							<div class="col-md-3 ">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center h4">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Teléfono:</span> <a href="#">+34 656 911 112</a></p>
				          </div>
			                </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center h4">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Correo electrónico:</span> <a href="#">sedtamen@gmail.com</a></p>
				          </div>
                        </div>
                                </center>
                        </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
@endsection