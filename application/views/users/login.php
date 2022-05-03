<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="MPS">

	<title>Mutualidad M.P.S</title>

	<link rel="canonical" href="https://appstack.bootlab.io/pages-sign-in.html" />
	<link rel="shortcut icon" href="<?php echo $url; ?>images/logop.png">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<link href="<?php echo $url?>css/light.css" rel="stylesheet">


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
									Inicia sesión en tu cuenta para continuar

								</p>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="<?php echo $url; ?>images/logop.png" class="img-fluid rounded-circle" width="200" height="200" />
										</div>
										<?php if($this->session->flashdata('message')) { ?>
								            <div class="alert alert-danger">
								                <?php echo $this->session->flashdata('message')?>
								            </div>
								        <?php } ?>
										<?php echo form_open('Usuarios/login', array('id' => 'loginForm')) ?>
											<div class="mb-3">
												<label class="form-label"><strong>Nombre</strong></label>
												<input class="form-control form-control-lg" type="text" name="user" placeholder="Ingresa tu nombre de usuario" required />
												<?php echo form_error('user', '<div class="error">', '</div>') ?>
											</div>
											<div class="mb-3">
												<label class="form-label"><strong>Password</strong></label>
												<input class="form-control form-control-lg" type="password" name="password" placeholder="Ingresa tu password" required />
												<?php echo form_error('password', '<div class="error">', '</div>') ?>
												<!--<small>
													<a href="pages-reset-password.html">Forgot password?</a>
												</small> -->
											</div>
											
											<div class="text-center mt-3">
												
												<button type="submit" class="btn btn-lg btn-primary">Ingresar</button>
											</div>
										<?php echo form_close(); ?>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

	<script src="<?php echo $url?>js/app.js"></script>

</body>

</html>