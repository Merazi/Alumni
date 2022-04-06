
<?php 
	//acceder a nuestra conexion 
	include 'conexion.php';
	
	//tomar los valores del formulario
	$nombre_completo = $_POST['nombre_completo'];
	$correo  = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
    //encriptar contrasena
    $contrasena = hash('sha512', $contrasena);

	//insertar a los alumnos
	$query = "INSERT INTO login(nombre, correo, usuario, contrasena)
	VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT *FROM login WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0 ){
    echo '
        <script>
        alert("Este correo ya esta registrado, intenta con otro diferente");
        window.location = "../index.php";
        </script>
        ';
    exit();
    }

    //verificar que el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT *FROM login WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0 ){
    echo '
        <script>
        alert("Este usuario ya esta registrado, intenta con otro diferente");
        window.location = "../index.php";
        </script>
        ';
    exit();
    }


	$ejecutar = mysqli_query($conexion, $query);
	
	if($ejecutar){
	echo ' 
		<script>
			alert("Usuario almacenado exitosamente");
			window.location = "../index.php";

		</script>
		';
	}
	else{
		echo ' 
		<script>
			alert("intenta nuevamente");
			window.location = "../index.php";

		</script>
		';
	}
		


mysqli_close($conexion);


?>