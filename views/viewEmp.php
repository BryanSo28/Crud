<?php

    include_once("../controllers/usuarioController.php");
    $conectar = new usuarioController();
    $id =$_GET['id'];
    $res = $conectar->show($id);


	if ($_POST) {
		$id = $_POST['id'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$dni = $_POST['dni'];
		$fecha_nac = $_POST['fecha_nac'];
		$genero = $_POST['genero'];
		$conectar->update($id,$nombres,$apellidos,$dni,$fecha_nac,$genero);
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
							<h3>Update Empleados</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="listEmp.php">Empleados</a></li>
								<li class="active">Update Empleados</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
			<div class="box-typical box-typical-padding">
				<form action="" method="POST">
					<input type="hidden" class="form-control" name="id" value="<?= $res[0]?>">
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Nombres</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" name="nombres" value="<?= $res[1]?>"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Apellidos</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" name="apellidos" value="<?= $res[2]?>"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">DNI</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="number" class="form-control" name="dni" value="<?= $res[3]?>"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Fecha Nacimiento</label>
						<div class="col-sm-10">
							<input type="date" class="form-control" value="<?= $res[4]?>" name="fecha_nac">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Género</label>
						<div class="col-sm-10">
							<select name="genero" value="<?= $res[5]?>" class="form-control">
								<option value="1">Masculino</option>
								<option value="2">Femenino</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-inline btn-primary ladda-button" data-style="expand-left"><span class="ladda-label">Actualizar</span></button>
					</div>
				</form>
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<?php include_once("Js.php"); ?>
</body>
</html>