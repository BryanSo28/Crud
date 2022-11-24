<?php
	include_once("../controllers/usuarioController.php");

	if ($_POST) {
		$nombres = (isset($_POST["nombres"]))?$_POST["nombres"]:"";
		$apellidos = (isset($_POST["apellidos"]))?$_POST["apellidos"]:"";
		$dni = (isset($_POST["dni"]))?$_POST["dni"]:"";
		$fecha_nac = (isset($_POST["fecha_nac"]))?$_POST["fecha_nac"]:"";
		$genero = (isset($_POST["genero"]))?$_POST["genero"]:"";

		$conectar = new usuarioController();
		$conectar->insert($nombres,$apellidos,$dni,$fecha_nac,$genero);
	}else {
		echo "No enviaste nada";
	}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("Head.php"); ?>
</head>
<body class="with-side-menu">

	<header class="site-header">
        <?php include_once("Header.php"); ?>
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
        <?php include_once("Nav.php"); ?>
	</nav><!--.side-menu-->

	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Registro Empleados</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="listEmp.php">Empleados</a></li>
								<li class="active">Registro Empleados</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
			<div class="box-typical box-typical-padding">
				<form action="" method="POST">
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Nombres</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" require name="nombres" placeholder="Nombres..."></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Apellidos</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" require name="apellidos" placeholder="Apellidos..."></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">DNI</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="number" class="form-control" require name="dni" placeholder="DNI..."></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Fecha Nacimiento</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" require name="fecha_nac">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Género</label>
						<div class="col-sm-10">
							<select name="genero" require class="form-control">
								<option value="1">Masculino</option>
								<option value="2">Femenino</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-inline btn-primary ladda-button" data-style="expand-left"><span class="ladda-label">Registrar</span></button>
					</div>
				</form>
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<?php include_once("Js.php"); ?>
</body>
</html>