<?php
include_once '../config/dbconfig.php';

if(isset($_POST['btn-crear']))
{
 
 $nombre = $_POST['nam'];
 $editorial = $_POST['edi'];
 $autor = $_POST['aut'];
 $genero = $_POST['gen'];
 $num_pags = $_POST['pag'];
 $fecha_edicion = $_POST['fec'];
 $precio = $_POST['pre'];

 $query = "INSERT INTO `tbl_libros` (`nombre_libro`, `editorial`, `autor`, `genero`, `num_pags`, `fecha_edicion`, `precio`) VALUES ('$nombre','$editorial','$autor', '$genero', '$num_pags', '$fecha_edicion', '$precio');";
 
  if(mysql_query($query))
 {
  ?>
  <script type="text/javascript">
  alert('Libro registrado satisfactoriamente');
  //window.location.href='../index.html';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Error al intentar registrar el libro');
  </script>
  <?php
 }
 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Registrar</title>
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
	<link rel="stylesheet" href="../assets/css/foundation.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/fa/css/font-awesome.css">
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
			<form method="POST">
				<div class="row">
					<div class="medium-12 columns">
						<label>Nombre del Libro
							<input required name="nam" type="text" placeholder="Ingrese el nombre del libro">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="medium-6 columns">
						<label>Nombre del Autor
							<input name="aut" type="text" placeholder="Ingrese el nombre del autor">
						</label>
					</div>
					<div class="medium-6 columns">
						<label>Editorial
							<input name="edi" type="text" placeholder="Ingrese la editorial">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="medium-6 columns">
						<label>Género
							<input name="gen" type="text" placeholder="Ingrese el genero">
						</label>
					</div>
					<div class="medium-6 columns">
						<label>Fecha de Edición
							<input name="fec" type="date" placeholder="Ingrese la fecha de edicion">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="medium-6 columns">
						<label>Núm. de páginas
							<input required name="pag" type="number" placeholder="Ingrese el numero de paginas">
						</label>
					</div>
					<div class="medium-6 columns">
						<label>Precio
							<input name="pre" type="number" placeholder="Ingrese el precio">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="medium-12 columns">
						<!-- <button  class="success button" type="submit">Registrar Libro</button> -->
						<input name="btn-crear" class="success button" type="submit" value="Registrar Libro">
					</div>
				</div>
			</form>
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