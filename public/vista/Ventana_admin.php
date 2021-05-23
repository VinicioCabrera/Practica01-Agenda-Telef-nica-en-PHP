<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../vista/Estilos/ventanas.css">
    <link rel="icon" type="image/png" href="../vista/imagenes/icono.png" sizes="16x16">
    <title>ADMINISTRADOR</title>
</head>
<body>
    <header>
        <h1>FORMULARIO</h1>
    </header>

<form id="admin" method="POST" >

        <div id="boton" >   
         
            <input type="text" id="txtbuscar" name="txtbuscar" >
            <input type="button" id="buscar" name="buscar" value="BUSCAR">
           

        </div>
    </form>
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
 $result = $conn->query($consulta);
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo " <td><font color=#FFFFFF>" . $row["usu_cedula"] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_nombres'] ."</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_apellidos'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_direccion'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_tipo_persona'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_correo'] . "</td>"; 
 echo " <td> <a href='agregar.php?codigo=" . $row['usu_codigo'] ."'>Agregar</a> </td>";
 echo " <td> <a href='../../admin/vista/Ventana_Modificar.php?codigo=" . $row['usu_codigo']."'>Actualizar</a> </td>";
 echo " <td> <a href='eliminar.php?codigo=" . $row['usu_codigo'] ."'>Eliminar</a> </td>";
 echo " <td> <a href='cambiar_contrasena.php?codigo=". $row['usu_codigo'] ."'>Cambiar Contraseña</a> </td>";
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

