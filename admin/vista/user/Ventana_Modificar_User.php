<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="validaciones_Usuario.js"></script>
    <link rel="stylesheet" href="../../../public/vista/Estilos/Estilo_crear_usuario.css">
    <link rel="icon" type="image/png" href="../../public/vista/imagenes/icono.png" sizes="16x16">
    <title>MODIFICAR</title>
</head>
<body>
    <header>
        <h1>MODIFICAR FORMULARIO</h1>
    </header><br>

<?php
 $codigo = $_GET["codigo"];
 $sql = "SELECT * FROM usuario,telefono where usuario.usu_codigo=$codigo and telefono.usu_codigo=$codigo";
 
 include '../../../config/ConexionBD.php'; 
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
?>

<form id="formulario" method="POST" action="../../controladores/user/modificar_user.php" >
<input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
 <label for="cedula">Cedula (*)</label>
 <input type="text" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>"onkeyup="return validar(this)"
required placeholder="Ingrese la cedula ..."/>
<span id="mensajeCedula" class="error"></span>
 <br>
 
 <label for="nombres">Nombres (*)</label>
 <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombres"]; 
?>" onkeyup="return validarnombres(this)" required placeholder="Ingrese los dos nombres ..."/> 
<span id="mensajeNombres" class="error"></span>
<br>

 <label for="apellidos">Apelidos (*)</label>
 <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellidos"]; 
?>"onkeyup="return validarapellidos(this)" required placeholder="Ingrese los dos apellidos ..."/>
<span id="mensajeApellidos" class="error"></span>
 <br>
 <label for="direccion">Dirección (*)</label>
 <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"]; 
?>" required placeholder="Ingrese la dirección ..."/>
<span id="mensajeDireccion" class="error"></span>
 <br>

 <label for="tipotelefono">Tipo telefono </label>
 <select  name="tipotelefono" id="tipotelefono">
 <?php
     if($row["tel_tipo_telefono"]=="CELULAR"){
         echo("<option >CELULAR</option> ");
         echo("<option >CONVENCIONAL</option> ");
     }else if($row["tel_tipo_telefono"]=="CONVENCIONAL"){
        echo("<option >CONVENCIONAL</option> "); 
        echo("<option >CELULAR</option> ");
     }else {
        echo("<option > </option> "); 
        echo("<option >CELULAR</option> ");
        echo("<option >CONVENCIONAL</option> "); 
        
     }
?>
</select>
<span id="mensajeTipo" class="error"></span>
 <br>
 <label for="operadora">Operadora</label>
 <input type="text" id="operadora" name="operadora" value="<?php echo $row["tel_operadora"]; 
?>" placeholder="Ingrese operadora ..."required />
 <span id="mensajeOperador" class="error"></span>
 <br>
 <label for="numero">Numero</label>
 <input type="text" id="numero" name="numero" value="<?php echo $row["tel_numero"]; 
?>"onkeyup="return validartelefono(this)" placeholder="Ingrese numero telefonico ..."required />
 <span id="mensajeNumero" class="error"></span>
 <br>

<label for="tipo">Tipo Persona (*)</label>
 <select  name="tipo" id="tipo"  >
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
 <input type="email" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>" onkeyup="return validarEmail(this)"
required placeholder="Ingrese el correo electrónico ..."/>
<span id="mensajeCorreo" class="error"></span>
 <br>
 <div id="boton">
 <input type="submit" id="modificar" name="modificar" value="Modificar" />
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" onclick="location.href='../../../public/vista/Index.html';"/>
 </div>
</form>

<?php
 }
 } else { 
 echo "<p>Ha ocurrido un error inesperado !</p>";
 echo($sql);
 echo "<p>" . mysqli_error($conn) . "</p>";
 }

 $conn->close(); 
 ?>

</body>
</html>