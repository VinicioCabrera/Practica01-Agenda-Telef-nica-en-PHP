<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../vista/Estilos/Disenio.css">
    <link rel="icon" type="image/png" href="../vista/imagenes/icono.png" sizes="16x16">
    <title>Agenda Telefónica</title>

</head>

<body>
    <header>  
        <h1>AGENDA TELEFONICA</h1>
    </header>
    <?php
    if($_GET["m"]==1){
        echo "<script type='text/javascript'>alert('usuario creado');</script>";  
    }
    ?>
    <form id="Agenda" method="POST" action="../controladores/Iniciar.php">
        <input type="text" id="user" name="user" placeholder="Ingresar usuario"
        onkeyup="return validarUsuarios(this)" required />
        <input type="password" id="login" name="login" placeholder="Ingresar contraseña">

        <div id="boton" >   
        <input type="submit" id="ingresar" name="ingresar" value="INICIAR"  >
        <input type="button" id="registrar" name="registrar" value="REGISTRAR" onclick="location.href='crear_usuario.html';">
        </div>

    </form>
</body>  
</html>