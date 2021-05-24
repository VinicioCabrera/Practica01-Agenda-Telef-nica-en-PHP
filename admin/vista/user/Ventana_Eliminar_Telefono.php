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
 $sql = "SELECT * FROM telefono where tel_codigo=$codigo";
 
 include '../../../config/conexionBD.php'; 
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
 ?>

<form id="formulario" method="POST" action="../../controladores/user/eliminar_telefono.php" >
<input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />  

 <label for="tipotelefono">Tipo telefono </label>
 <select  name="tipotelefono" id="tipotelefono" disabled>
 <?php
     if($row["tel_tipo_telefono"]=="CELULAR"){
         echo("<option >CELULAR</option> ");
         echo("<option >CONVENCIONAL</option> ");
     }else if($row["tel_tipo_telefono"]=="CONVENCIONAL"){
        echo("<option >CONVENCIONAL</option> "); 
        echo("<option >CELULAR</option> ");
     }
?>
</select>
<span id="mensajeTipo" class="error"></span>
 <br>
 <label for="operadora">Operadora</label>
 <input type="text" id="operadora" name="operadora" value="<?php echo $row["tel_operadora"]; 
?>"disabled/>
 <span id="mensajeDireccion" class="error"></span>
 <br>
 <label for="numero">Numero</label>
 <input type="text" id="numero" name="numero" value="<?php echo $row["tel_numero"]; 
?>" disabled/>
 <span id="mensajeDireccion" class="error"></span>
 <br>
 
 <div id="boton">
<input type="submit" id="eliminar" name="eliminar" value="Eliminar" />
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" onclick="location.href='Listar.php';" />
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