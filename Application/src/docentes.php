<!DOCTYPE html>
<html lang="en">

    <head>
	<title>Docentes </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/pila-de-libros.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
    </head>

    <body>
	<header class="generic_header">
	    <center>
		<h1><span style="color:darkred">A</span><span style="color:midnightblue">LU</span><span style="color:limegreen">MN<span><span style="color:deeppink">I<span></h1>
		    <h1>Gestión de Docentes</h1>
	    </center>
	</header>


	<main id="main">
	    <div class="tool_bar">
		<div class="search_area">
		    <input class="input100" type="text" name="identidad" placeholder="Identidad del Estudiante">
		</div>
		<div class="container-login100-form-btn">
		    <button class="login100-form-btn">Buscar</button>
		    <button class="login100-form-btn">Cancelar</button>
		    <a href="principal.php">Regresar</a>
		</div>
	    </div>
	    <div id="docentes">
		<table>
		    <tr>
			<th>Nombre</th>
			<th>Asignaturas</th>
			<th>Id Carrera</th>
			<th>Jornada</th>
			<th>Identidad</th>
		    </tr>

		    <!-- esto se debería generar desde la base de datos -->
		    <tr>
			<td>Juan</td>
			<td>Matemáticas</td>
			<td>123</td>
			<td>Matutina</td>
			<td>12501820951820</td>
		    </tr>
		</table>

		<?php
		include("php/guardar.php");
		?>

	    </div>
	</main> <!-- id=main -->

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

    </body>

</html>
