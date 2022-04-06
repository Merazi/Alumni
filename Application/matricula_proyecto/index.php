<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future</title>
    
    

    <link rel="stylesheet" href="Login.css">
</head>
<body>

        <main>

                <div class="contenedor_trasero">
                    <div class="contenedor_trasero_Inicio_de_sesion">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn_iniciar_sesion">Iniciar Sesión</button>
                    </div>
                    <div class="contenedor_trasero_registrarse">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn_registrarse">Regístrarse</button>
                    </div>
                </div>

                <div class="contenedor_de_Inicio_de_sesion_y_registrarse">
                    <form action="php/login_usuario.php" method="POST" class="formulario_Inicio_de_sesion" >
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                   
				   <form action="php/registro_usuario.php" method="POST" class="formulario_registrarse">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
						<!--<input type="passwordconfirm" placeholder="Confirmar Contraseña">
--><button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="login.js"></script>
</body>
</html>