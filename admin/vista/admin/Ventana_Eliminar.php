<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Eliminar Usuarios</title>
 <script type="text/javascript" src="../../../public/vista/Validaciones/validaciones_Usuario.js"></script>
 <link rel="icon" type="image/png" href="../../../public/vista/imagenes/icono.png" sizes="16x16">
 <link rel="stylesheet" href="../../../public/vista/Estilos/Estilo_crear_usuario.css">
 <style type="text/css">
 
 .error {
 color: red;
 font-size: 12px;
 }
 </style>
</head>
<body>

<header>
        <h1>ELIMINAR FORMULARIO</h1>
    </header><br>
 <?php
 
 $codigo = $_GET["codigo"];
 $sql = "SELECT * FROM usuario where usu_codigo=$codigo";
 
 include '../../../config/conexionBD.php'; 
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
 ?>

<form id="formulario" method="POST" action="../../controladores/admin/eliminar.php" >
<input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
 <label for="cedula">Cedula (*)</label>
 <input type="text" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>"
 disabled/>
 <br>
 <label for="nombres">Nombres (*)</label>
 <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombres"]; 
?>" disabled/> <br>
 
 <label for="apellidos">Apelidos (*)</label>
 <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellidos"]; 
?>" disabled/>
 <br>
 <label for="direccion">Dirección (*)</label>
 <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"]; 
?>" disabled/>
 <br>
<label for="tipo">Tipo Persona (*)</label>
 <select  name="tipo" id="tipo" disabled >
     <?php
     if($row["usu_tipo_persona"]=="ADMIN"){
         echo("<option >ADMIN</option> ");
         echo("<option >USER</option> ");
         echo("<option > </option> ");

     }else if($row["usu_tipo_persona"]=="USER"){
        echo("<option >USER</option> "); 
        echo("<option >ADMIN </option> ");
        echo("<option > </option> ");

     }else {
        echo("<option > </option> ");
        echo("<option >USER</option> "); 
        echo("<option >ADMIN </option> ");
     }
     ?>
</select>
 <br>
 <label for="correo">Correo electrónico (*)</label>
 <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>"disabled/>
 <br>
 <div id="boton">
<input type="submit" id="eliminar" name="eliminar" value="Eliminar" />
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
    </div>
 </form> 
 <?php
 }
 } else { 
 echo "<p>Ha ocurrido un error inesperado !</p>";
 echo "<p>" . mysqli_error($conn) . "</p>";
 }
 $conn->close(); 
 ?> 

</body>
</html>