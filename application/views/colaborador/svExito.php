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
									<div class="text-center mt-4">
										<div class="text-center">
											<img src="<?php echo $url; ?>images/logop.png" class="img-fluid rounded-circle" width="200" height="200" />
										</div>
										<p class="lead" style="color: #000000;">
											<form action="<?php echo base_url('Colaboradores/avtvsok');?>">
												<div class="text-center mt-3">
												<button id="btnSub" type="submit" class="btn btn-lg btn-primary" >Registro Exitoso Re dirigir</button>
											</div>
											</form>				
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>

</html>