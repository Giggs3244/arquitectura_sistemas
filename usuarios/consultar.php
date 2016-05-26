<?php
include_once '../config/dbconfig.php';

if(isset($_GET['delete_id']))
{
 $query="DELETE FROM `tbl_usuarios` WHERE `id_usuario`=".$_GET['delete_id'];
 mysql_query($query);
 header("Location: $_SERVER[PHP_SELF]");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Consultar</title>
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
	<link rel="stylesheet" href="../assets/css/foundation.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/fa/css/font-awesome.css">
    <script type="text/javascript">
function edit_id(id)
{
 if(confirm('¿Seguro que deseas editar este registro?'))
 {
  window.location.href='actualizar.php?id='+id;
 }
}
function delete_id(id)
{
 if(confirm('¿Seguro que deseas eliminar este registro?'))
 {
  window.location.href='consultar.php?delete_id='+id;
 }
}
</script>
</head>
<body>
	<header>		
		<div class="top-bar">
			<div class="top-bar-right">
				<ul class="menu">
					<li><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
				</ul>
			</div>
		</div>	
		<div class="row">
			<div class="medium-4 columns">
				<img src="../assets/img/biblioteca2.jpg" alt="Título biblioteca">
			</div>
			<div class="medium-8 columns">
				<img src="../assets/img/biblioteca1.jpg" alt="Estantería con libros">
			</div>
		</div>
		<br>
		<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
			<button class="menu-icon" type="button" data-toggle></button>
			<div class="title-bar-title">Menú</div>
		</div>
		<div class="top-bar" id="main-menu">
			<ul class="menu vertical medium-horizontal expanded medium-text-center" data-responsive-menu="drilldown medium-dropdown">
				<li class="has-submenu"><a href="#"><i class="fa fa-book" aria-hidden="true"></i>Gestionar Libros</a>
					<ul class="submenu menu vertical" data-submenu>
						<li><a href="crear.php"><i class="fa fa-plus-square" aria-hidden="true"></i>Registrar</a></li>
						<li><a href="consultar.php"><i class="fa fa-bars" aria-hidden="true"></i>Consultar</a>
					</ul>
				</li>
				<li class="has-submenu"><a href="#"><i class="fa fa-users" aria-hidden="true"></i>Gestionar Usuarios</a>
					<ul class="submenu menu vertical" data-submenu>
						<li><a href="../usuarios/crear.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Registrar</a></li>
						<li><a href="../usuarios/consultar.php"><i class="fa fa-users" aria-hidden="true"></i>Consultar</a></li>
					</ul>
				</li>
				<li class="has-submenu"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Gestionar Préstamos</a>
					<ul class="submenu menu vertical" data-submenu>
						<li><a href="../prestamos/crear.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>Registrar</a></li>
						<li><a href="../prestamos/consultar.php"><i class="fa fa-calendar-o" aria-hidden="true"></i>Consultar</a></li>
					</ul>
				</li>				
			</ul>
		</div>
	</header>
	<br>

	<div class="row">
		<div class="large-12 columns">
			<table class="hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>DNI</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Dirección</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody>
			<?php
			$sql_query="SELECT * FROM `tbl_usuarios`";
			$result_set=mysql_query($sql_query);
			while($row=mysql_fetch_row($result_set))
			{
			?>
					<tr>
						<td><?php echo $row[0]; ?></td>
						<td><?php echo $row[3]; ?></td>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
						<td><?php echo $row[4]; ?></td>
						<td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
						<td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><i class="fa fa-times" aria-hidden="true"></i></a></td>
					</tr>
				</tbody>
			<?php
			}
			?>
			</table>
		</div>
	</div>
	<footer>
		<div class="row expanded">
			<div class="medium-6 columns">
				<ul class="menu">
					<li><a href="http://www.bibliotecapiloto.gov.co/">Biblioteca Pública Piloto</a></li>
					<li><a href="http://www.reddebibliotecas.org.co/">Red de Bibliotecas</a></li>
				</ul>
			</div>
			<div class="medium-6 columns">
				<ul class="menu align-right">
					<li class="menu-text">Copyright © Bibliociel</li>
				</ul>
			</div>
		</div>
	</footer>
	<script src="../assets/js/vendor/jquery.js"></script>
    <script src="../assets/js/vendor/what-input.js"></script>
    <script src="../assets/js/vendor/foundation.js"></script>
    <script src="../assets/js/app.js"></script>
</body>
</html>