<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/vista/Estilos/Estilo_crear_usuario.css">
    <link rel="icon" type="image/png" href="../vista/imagenes/icono.png" sizes="16x16">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Cambiar Contraseña</h1>
    <br>
</header>
<form id="cambiar" method="POST" action="../../controladores/admin/actualizar_contrasena.php">
<?php echo('<input type="Hidden" id="codigo" name="codigo" value='.$_GET["codigo"].'>')?>
<input type="text" id="oldcontrasena" name="oldcontrasena" placeholder="Ingresar contraseña antigua"
        onkeyup="return validarUsuarios(this)" required />
        
        <input type="password" id="contrasena" name="contrasena" placeholder="Ingresar contraseña nueva"
        onkeyup="return validarUsuarios(this)" required />

        <div id="boton" >   
        <input type="submit" id="cambiar" name="cambiar" value="CAMBIAR" >
        <input type="reset" id="cancelar" name="cancelar" value="CANCELAR">
        </div>

    </form>
</body>
</html>