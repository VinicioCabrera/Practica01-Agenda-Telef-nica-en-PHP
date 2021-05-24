<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../vista/Estilos/ventanas.css">
    <script type="text/javascript" src="buscar_cedula.js"></script>
    <link rel="icon" type="image/png" href="../vista/imagenes/icono.png" sizes="16x16">
    <title>USUARIO</title>
</head>
<body>
    <header>
        <h1>FORMULARIO</h1>
    </header>

<form id="tipo">

        <div id="boton" >   

            <!-- <input type="button" id="agregar" name="agregar" value="AGREGAR" onclick="location.href='../../admin/vista/user/Ventana_Agregar_telefono.php';"> -->
             <input type="button" id="listar" name="listar" value="LISTAR TELEFONOS" onclick="location.href='../../admin/vista/user/Listar.php';"> 
         </div>
    </form>
    <div id="informacion"> </div>
    <br>
<table style="width:100% " >
        <tr>
        <th><font color=#FFFFFF>Cedula</th>
        <th><font color=#FFFFFF>Nombres</th>
        <th><font color=#FFFFFF>Apellidos</th>
        <th><font color=#FFFFFF>Dirección</th>
        <th><font color=#FFFFFF>Tipo Persona</th>
        <th><font color=#FFFFFF>Correo</th>
        </tr>
 <?php
 
 include '../../config/ConexionBD.php'; 
 $consulta="SELECT * FROM usuario ";
  $res=$conn->query($consulta);
  if($res->num_rows>0){
     while($row = $res->fetch_assoc()){
         $codigo = ($row["usu_codigo"]);
     }
  }
 
$sql = "SELECT * FROM usuario where usu_codigo='$codigo'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td><font color=#FFFFFF>" . $row["usu_cedula"] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_nombres'] ."</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_apellidos'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_direccion'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_tipo_persona'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_correo'] . "</td>"; 
 echo " <td> <a href='../../admin/vista/user/Ventana_Modificar_User.php?codigo=" . $row['usu_codigo']."'>Actualizar</a> </td>";
 echo " <td> <a href='../../admin/vista/user/Ventana_Eliminar_User.php?codigo=" . $row['usu_codigo'] ."'>Eliminar</a> </td>";
 echo " <td> <a href='../../admin/vista/user/Ventana_Cambiar_Contrasena_User.php?codigo=". $row['usu_codigo'] ."'>Cambiar Contraseña</a> </td>";
 echo "</tr>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='6'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }

 $conn->close(); 
 ?>
</table>   
</body>
</html>