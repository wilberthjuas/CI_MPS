<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Mutualidad MPS admin site">
	<meta name="author" content="MPS">

	<title>Mutualidad MPS</title>

	<link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html" />
	<link rel="shortcut icon" href="<?php echo $url; ?>images/logop.png">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<link href="<?php echo $url?>css/light.css" rel="stylesheet">
	
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="Welcome">
					<picture>
					 
					  <img src="<?php echo $url?>images/logop.png" class="img-fluid rounded-circle mb-2" width="128" height="128" style="background-color: white;">
					</picture>
			</a>

			<ul class="sidebar-nav">
				<li class="sidebar-header">
					Bienvenido 
				</li>
				<?php if( $_SESSION['type'] == "1" or $_SESSION['type'] == "3"  ){ ?>
					<li class="sidebar-item <?= $url.'Poliza' == current_url() ?  (''):('active') ?>">
						<a class="sidebar-link" href="<?= $url ?>Poliza">
							<i class="align-middle" data-feather="file-text"></i> 
							<span class="align-middle">Registrar póliza</span>
						</a>
					</li>
				<?php } ?>
				<?php if($_SESSION['type'] =="5" or $_SESSION['type'] == "7" or $_SESSION['type'] == "8" or $_SESSION['type'] == "9"){ ?>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="modulos/visor/buscar.php">
							<i class="align-middle" data-feather="eye"></i> 
							<span class="align-middle">Visor</span>
						</a>
					</li>
				<?php } ?>
				<?php if( $_SESSION['type'] == "1" or $_SESSION['type'] == "3" ){ ?>
					<li class="sidebar-item <?= $url.'registro' == current_url() ?  (''):('active') ?> ">
						<a class="sidebar-link" href="<?= $url ?>registro">
							<i class="align-middle" data-feather="edit-3"></i> 
							<span class="align-middle">Registrar pago</span>
						</a>
					</li> 
				<?php } ?>
				<?php if( $_SESSION['type'] == "5"){ ?>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="modulos/registro/registrarpago.php">
							<i class="align-middle" data-feather="check-square"></i> 
							<span class="align-middle">Validar pagos</span>
						</a>
					</li>
				<?php } ?>
				<?php if( $_SESSION['type'] == "1" ){ ?>
					<li class="sidebar-item <?= $url.'Poliza/modificar' == current_url() ?  (''):('active') ?>">
						<a class="sidebar-link" href="<?= $url ?>Poliza/modificar">
							<i class="align-middle" data-feather="edit"></i> 
							<span class="align-middle">Modificar</span>
						</a>
					</li> 
				<?php } ?>
				<?php if( $_SESSION['type'] == "1"  or $_SESSION['type'] == "2" or $_SESSION['type'] == "3" or $_SESSION['type'] == "5"){ ?>
				
					<li class="sidebar-item <?= $url.'visor' == current_url() ?  (''):('active') ?>">
						<a class="sidebar-link" href="<?= $url ?>visor">
							<i class="align-middle" data-feather="book-open"></i> 
							<span class="align-middle">Historial</span>
						</a>
					</li>
				<?php } ?>
				<?php if( $_SESSION['type'] == "1" ){ ?>
					<li class="sidebar-item <?= $url.'cancelarreactivarpoliza' == current_url() ?  (''):('active') ?>">
						<a class="sidebar-link" href="<?= $url ?>cancelarreactivarpoliza">
							<i class="align-middle" data-feather="shuffle"></i> 
							<span class="align-middle">Cancelar / Reactivar</span>
						</a>
					</li>
				<?php } ?>
				<?php if( $_SESSION['type'] == "1" or $_SESSION['type'] == "2" or $_SESSION['type'] == "3"){ ?>
					<li class="sidebar-item <?= $url.'tarjeta' == current_url() ?  (''):('active') ?>">
						<a class="sidebar-link" href="<?= $url ?>tarjeta">
							<i class="align-middle" data-feather="credit-card"></i> 
							<span class="align-middle">Tarjeta</span>
						</a>
					</li>
				<?php } ?>
				<?php if( $_SESSION['type'] == "1" or $_SESSION['type'] == "2" or $_SESSION['type'] == "3"){ ?>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="<?= $url ?>Visor/visorimpresion">
							<i class="align-middle" data-feather="printer"></i> 
							<span class="align-middle">Visor/Impresión</span>
						</a>
					</li>
				<?php } ?>
				<?php if( $_SESSION['type'] == "1" or $_SESSION['type'] == "2" or $_SESSION['type'] == "3" or $_SESSION['type'] == "5"){ ?>
					<li class="sidebar-item <?= $url.'gruas' == current_url() ?  (''):('active') ?>">
						<a class="sidebar-link" href="<?= $url ?>gruas">
							<i class="align-middle" data-feather="phone"></i> 
							<span class="align-middle">Grúas</span>
						</a>
					</li>
				<?php } ?>
				<?php  if( $_SESSION['type'] == "1"  or $_SESSION['type'] == "2" or $_SESSION['type'] == "3"){ ?>
					<li class="sidebar-item <?= $url.'Excel' == current_url() ?  (''):('active') ?>">
						<a class="sidebar-link" href="<?= $url ?>Excel">
							<i class="align-middle" data-feather="download"></i> 
							<span class="align-middle">Excel</span>
						</a>
					</li>
				<?php } ?>
				<li class="sidebar-item <?= $url.'plataformaCRUD' == current_url() ?  (''):('active') ?>">
					<a class="sidebar-link" href="<?= $url ?>plataformaCRUD">
						<i class="align-middle" data-feather="download"></i> 
						<span class="align-middle">Plataformas</span>
					</a>
				</li>
				<li class="sidebar-item <?= $url.'vendedorCRUD' == current_url() ?  (''):('active') ?>">
					<a class="sidebar-link" href="<?= $url ?>vendedorCRUD">
						<i class="align-middle" data-feather="download"></i> 
						<span class="align-middle">Vendedores</span>
					</a>
				</li>
				<li class="sidebar-item <?= $url.'cobradorCRUD' == current_url() ?  (''):('active') ?>">
					<a class="sidebar-link" href="<?= $url ?>cobradorCRUD">
						<i class="align-middle" data-feather="download"></i> 
						<span class="align-middle">Cobradores</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg">
			<a class="sidebar-toggle">
				<i class="hamburger align-self-center"></i>
			</a>
			<div><h2><?php echo $title;?></h2></div>
			<div class="navbar-collapse collapse">
				<ul class="navbar-nav navbar-align">
					<li class="nav-item dropdown">
						<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
							<i class="align-middle" data-feather="settings"></i>
						</a>

						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
							<span class="text-dark"><?= $name ?></span>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a class="dropdown-item" href="<?php echo $url; ?>Usuarios/logout">Salir</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<main class="content" data-theme="light">
			<div class="container-fluid p-0">