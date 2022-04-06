<?php

    include 'conexion.php';

    $correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
    //encriptar contrasena
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM login WHERE 
    correo='$correo' AND contrasena='$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0 ){
    header("location: ../principal.php");
    exit;
    }
    else{
        echo ' 
        <script>
        alert("usuario no existe, por favor verifique los datos introducidos");
        window.location = "../index.php";
        </script>   
    ';
    exit;
    }
    
?>







