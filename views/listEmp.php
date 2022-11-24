<?php
	include_once("../controllers/usuarioController.php");
	$conectar = new usuarioController();
	$res = $conectar->list();

	if ($_GET) {
		$conectar = new usuarioController();
		$id = $_GET['borrar'];
		$res = $conectar->delete($id);
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
							<h2>Listado Empleados</h2>
						</div>
					</div>
				</div>
			</header>
			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>ID</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>DNI</th>
							<th>Fecha Nacimiento</th>
							<th>Género</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
						</tr>
						</thead>
						<tbody>
                        <?php foreach ($res as $resultado) {?>
                            <tr>
                                <td><?php echo $resultado['id']; ?></td>
                                <td><?php echo $resultado['nombres']; ?></td>
                                <td><?php echo $resultado['apellidos']; ?></td>
                                <td><?php echo $resultado['dni']; ?></td>
                                <td><?php echo $resultado['fecha_nac']; ?></td>
                                <td><?php 
                                if ($resultado['genero']==1) {
                                    echo "Masculino";
                                }else {
                                    echo "Femenino";
                                } 
                                ?></td>
                                <td><a class="btn btn-rounded btn-inline btn-primary-outline" href="viewEmp.php?id=<?php echo $resultado['id'] ?>">Editar</a></td>
								<!--<button type="button" class="btn btn-rounded btn-inline btn-primary-outline"></button>-->

                                <td><a class="btn btn-rounded btn-inline btn-danger-outline" href="?borrar=<?php echo $resultado['id'] ?>">Eliminar</a></td>
								<!--<button type="button" class="btn btn-rounded btn-inline btn-danger-outline"></button>-->
                            </tr>
                        <?php } ?>
						</tbody>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<?php include_once("Js.php"); ?>
</body>
</html>