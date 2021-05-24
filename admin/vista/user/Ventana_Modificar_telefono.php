<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/vista/Estilos/Estilo_crear_usuario.css">
    <link rel="icon" type="image/png" href="../../public/vista/imagenes/icono.png" sizes="16x16">
    <title>AGREGAR TELEFONO</title>
</head>
<body>
    <header>
        <h1>AGREGAR TELEFONO</h1>
    </header><br>

<?php
include '../../../config/ConexionBD.php'; 
$consulta="SELECT * FROM telefono "; 
$res=$conn->query($consulta);
if($res->num_rows>0){
   while($row = $res->fetch_assoc()){
       $codigo = ($row["tel_codigo"]);
   }
}

 //$codigo = $_GET["codigo"];
 $sql = "SELECT * FROM telefono where tel_codigo=$codigo";
 echo($sql);
 
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
?>

<form id="formulario" method="POST" action="../../controladores/user/modificar_telefono.php" >
<input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />  

 <label for="tipotelefono">Tipo telefono </label>
 <select  name="tipotelefono" id="tipotelefono">
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
?>" placeholder="Ingrese operadora ..."required />
 <span id="mensajeDireccion" class="error"></span>
 <br>
 <label for="numero">Numero</label>
 <input type="text" id="numero" name="numero" value="<?php echo $row["tel_numero"]; 
?>" placeholder="Ingrese numero telefonico ..."required />
 <span id="mensajeDireccion" class="error"></span>
 <br>


 <div id="boton">
 <input type="submit" id="modificar" name="modificar" value="Actualizar"  />
 <!-- <input type="button" id="modificar" name="modificar" value="Modificar" onclick="location.href='../../controladores/user/modificar_telefono.php';" /> -->
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" onclick="location.href='../../../public/vista/Ventana_user.php';"/>
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