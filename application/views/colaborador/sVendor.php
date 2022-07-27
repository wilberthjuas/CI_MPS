<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="MPS">

	<title>Mutualidad M.P.S</title>

	<link rel="shortcut icon" href="<?php echo $url; ?>images/logop.png">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<link href="<?php echo $url?>css/dark.css" rel="stylesheet">


</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="main d-flex justify-content-center w-100">
		<main class="content d-flex p-0">
			<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							<div class="text-center mt-4">
								<h1 class="h2">Mutualidad M.P.S. </h1>
								<p class="lead">
									Registro de usuario
								</p>
							</div>

							<div class="card">
								<div class="card-body" style="background-color: #FFFFFF;">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="<?php echo $url; ?>images/logop.png" class="img-fluid rounded-circle" width="200" height="200" />
										</div>
										<?php if($this->session->flashdata('message')) { ?>
								            <div class="alert alert-danger">
								                <?php echo $this->session->flashdata('message')?>
								            </div>
								        <?php } ?>
								        <?php if($nombre != "") { ?>
								    	<div class="text-center mt-4">
											<h1 class="h4" style="color: #000000;">
												<?php echo $nombre; ?>
											</h1>
										</div>
										<?php } ?>
								        <form method="post" action="<?php echo base_url('Colaboradores/avtvsbse');?>" id="registerForm">
								        	<div class="mb-3">
												<label class="form-label">
													<strong style="color: #000000;">Correo electrónico</strong>
												</label>
												<input style="background-color: #FFFFFF; color: #000000;" class="form-control form-control-lg" type="email" name="email" autocomplete="off" required placeholder="Ingrese su correo electrónico registrado." id="mail" onkeyup="myFunction();"
												value="<?php echo $correo; ?>" />
												<?php echo form_error('mail', '<div class="error">', '</div>') ?>
											</div>

											<div class="mb-3">
												<label class="form-label">
													<strong style="color: #000000;">Usuario</strong>
												</label>
												<input style="background-color: #FFFFFF; color: #000000;" class="form-control form-control-lg" type="text" name="user" autocomplete="off" required placeholder="Ingrese su usuario" maxlength="20" id="user" onkeyup="myFunction();" />
												<?php echo form_error('user', '<div class="error">', '</div>') ?>
											</div>
											<div class="mb-3">
												<label class="form-label">
													<strong style="color: #000000;">Contraseña</strong>
												</label>
												<input style="background-color: #FFFFFF; color: #000000;" class="form-control form-control-lg" type="password" name="password" id="pwd" placeholder="Ingrese su contraseña" autocomplete="off" onkeyup="myFunction();" maxlength="40" required />
												<?php echo form_error('password', '<div class="error">', '</div>') ?>
											</div>
											<div class="mb-3" id="message" style="text-color: #000000;">
											  <label style="color: #000000;">Su contraseña de incluir:</label>
											  <ul>
											  	<li id="long">De 8 a 40 carácteres.</li>
											  	<li id="mayus">Al menos una letra mayúscula.</li>
											  	<li id="minus">Al menos una letra minúscual.</li>
											  	<li id="digit">Al menos un dígito.</li>
											  	<li id="simbol">Al menos uno de los siguientes $!#&@?_-</li>
											  </ul>
											  
											</div>
											<div class="mb-3">
												<label class="form-label">
													<strong style="color: #000000;">Confirmar Contraseña</strong>
												</label>
												<input style="background-color: #FFFFFF; color: #000000;" class="form-control form-control-lg" type="password" name="confirm" id="pwd2" placeholder="Confirme su contraseña" autocomplete="off" onkeyup="myFunction();" maxlength="40" required />
												<?php echo form_error('confirm', '<div class="error">', '</div>') ?>
											</div>
											<div class="text-center mt-3">
												<button id="btnSub" type="submit" class="btn btn-lg btn-primary" disabled>Registrar</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<script type="text/javascript">
	const myInput = document.getElementById("pwd");
	const letter = document.getElementById("minus");
	const capital = document.getElementById("mayus");
	const number = document.getElementById("digit");
	const length = document.getElementById("long");
	const simbol = document.getElementById("simbol");
	const pw2 = document.getElementById("pwd2");
	const user = document.getElementById("user");
	const mail = document.getElementById("mail");


	function myFunction() {
		var band = true;
		var lowerCaseLetters = /[a-z]/g;
		if(myInput.value.match(lowerCaseLetters)) {
			letter.style.color = "#4bbf73";
		} 
		else {
		    letter.style.color = '#a9acb3';
		    band = false;
		}

		
		var upperCaseLetters = /[A-Z]/g;
		if(myInput.value.match(upperCaseLetters)) {
			capital.style.color = '#4bbf73';
		} 
		else {
		    capital.style.color = '#a9acb3';  
		    band = false; 
		}

		
		var numbers = /[0-9]/g;
		if(myInput.value.match(numbers)) {
		    number.style.color = '#4bbf73';
		} 
		else {
		    number.style.color = '#a9acb3';
		    band = false;
		}

		var simbols = /[$!#&@?_-]/g
		if(myInput.value.match(simbols)){
			simbol.style.color = '#4bbf73';
		}
		else{
			simbol.style.color = '#a9acb3';
			band = false;
		}
		
		if(myInput.value.length > 7 && myInput.value.length < 41) {
		    length.style.color = '#4bbf73';
		} 
		else {
		    length.style.color = '#a9acb3';
		    band = false;
		}

		if(band && myInput.value == pw2.value && user.value.length > 3 && mail.value.length > 3){
			document.getElementById("btnSub").disabled = false;
		}else{
			document.getElementById("btnSub").disabled = true;
		}
	}



	</script>
</body>

</html>