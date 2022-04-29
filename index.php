<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Mutualidad M.P.S</title>

	<link rel="canonical" href="https://appstack.bootlab.io/pages-sign-in.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<link href="css/light.css" rel="stylesheet">
	<!-- <link href="css/dark.css" rel="stylesheet"> --> 


</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

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
									Inicia sesión en tu cuenta para continuar

								</p>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="logop.png" alt="Chris Wood" class="img-fluid rounded-circle" width="200" height="200" />
										</div>
										<form method="post" action="usuarios/login/login.php">
											<div class="mb-3">
												<label class="form-label"><strong>Nombre</strong></label>
												<input class="form-control form-control-lg" type="text" name="nombre" placeholder="Ingresa tu nombre de usuario" required />
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>Password</strong></label>
												<input class="form-control form-control-lg" type="password" name="password" placeholder="Ingresa tu password" required />
												<small>
           <!-- <a href="pages-reset-password.html">Forgot password?</a> -->
          </small>
											</div>
											
											<div class="text-center mt-3">
												
												 <button type="submit" class="btn btn-lg btn-primary">Ingresar</button>
												 
												  
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

	<script src="js/app.js"></script>

</body>

</html>

