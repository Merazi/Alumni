<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Notas</title>
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
		    <h1>Reporte de notas</h1>
	    </center>
	</header>

	<form class="login100-form validate-form" method="post">
	    <span class="login100-form-logo"></span>

	    <div class="busqueda">
		<input class="input100" type="text" name="identidad" placeholder="Identidad del Estudiante">
		<button class="login100-form-btn">Buscar</button>
	    </div>
	    <div class="limiter">
		<div id="table_notas">
		    <table>
			<tr>
			    <th>Nombre</th>
			    <th>Nota 1</th>
			    <th>Nota 2</th>
			    <th>Nota 3</th>
			    <th>Nota 4</th>
			    <th>Identidad</th>
			</tr>

			<!-- Esto se debería generar desde la base de datos -->
			<tr>
			    <td>Juan</td>
			    <td>89</td>
			    <td>92</td>
			    <td>100</td>
			    <td>86</td>
			    <td>12938102948</td>
			</tr>
			<tr>
			    <td>Pedro</td>
			    <td>89</td>
			    <td>92</td>
			    <td>100</td>
			    <td>86</td>
			    <td>12938102949</td>
			</tr>
		    </table>
		</div> <!-- tabla de notas -->

		<div id="control_notas">
		    <div class="wrap-input100 validate-input" data-validate="notas">
			<label>Actualizar Nota</label>
			<select class="input100" name="notas">
			    <option selected>Seleccione la nota</option>
			    <option value="Nota1" style="color:black">Nota 1</option>
			    <option value="Nota2" style="color:black">Nota 2</option>
			    <option value="Nota3" style="color:black">Nota 3</option>
			    <option value="Nota3" style="color:black">Nota 4</option>
			    <span class="focus-input100" data-placeholder="&#xf207;"></span>
		    </div>

		    <input class="input100" type="text" name="nota" placeholder="Ingresar Nota">
		</div> <!-- control de notas -->
	    </div>
	</form>

	<?php
	include("php/guardar.php");
	?>

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
