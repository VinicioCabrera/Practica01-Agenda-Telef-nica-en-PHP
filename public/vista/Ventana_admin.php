<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../vista/Estilos/ventanas.css">
    <script type="text/javascript" src="buscar_cedula.js"></script>
    <link rel="icon" type="image/png" href="../vista/imagenes/icono.png" sizes="16x16">
    <title>ADMINISTRADOR</title>
</head>
<body>
    <header>
        <h1>FORMULARIO</h1>
    </header>

<form  onsubmit="return buscarPorCedula()">

        <div id="boton" >   

            <input type="text" id="cedula" name="cedula" >
            <input type="button" id="buscar" name="buscar" value="BUSCAR" onclick="buscarPorCedula()">
            <input type="button" id="agregar" name="agregar" value="AGREGAR"onclick="location.href='crear_Usuario.html';">

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
 echo " <td> <a href='../../admin/vista/admin/Ventana_Modificar.php?codigo=" . $row['usu_codigo']."'>Actualizar</a> </td>";
 echo " <td> <a href='../../admin/vista/admin/Ventana_Eliminar.php?codigo=" . $row['usu_codigo'] ."'>Eliminar</a> </td>";
 echo " <td> <a href='../../admin/vista/admin/cambiar_contrasena.php?codigo=". $row['usu_codigo'] ."'>Cambiar Contraseña</a> </td>";
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

