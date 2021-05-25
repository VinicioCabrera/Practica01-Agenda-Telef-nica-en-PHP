<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../vista/Estilos/ventanas.css">
    <script type="text/javascript" src="buscar_anonimo.js"></script>
    <link rel="icon" type="image/png" href="../vista/imagenes/icono.png" sizes="16x16">
    <title>CONSULTA</title>
</head>
<body>
    <header>
        <h1>DATOS GENERALES</h1>
    </header>

<form  onsubmit="return buscarPorCedula()">
    <br>
<table style="width:100% " >
        <tr>
        <th><font color=#FFFFFF>Nombres</th>
        <th><font color=#FFFFFF>Apellidos</th>
        <th><font color=#FFFFFF>Correo</th>
        <th><font color=#FFFFFF>Tipo Telefono</th>
        <th><font color=#FFFFFF>Operadora</th>
        <th><font color=#FFFFFF>Telefono</th>
        </tr>
 <?php
 include '../../config/ConexionBD.php'; 
 $consulta = "SELECT * FROM usuario,telefono WHERE  usuario.usu_codigo=telefono.usu_codigo ";
 $result = $conn->query($consulta);
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo " <td><font color=#FFFFFF>" . $row['usu_nombres'] ."</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_apellidos'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_correo'] . "</td>"; 
 echo " <td><font color=#FFFFFF>" . $row["tel_tipo_telefono"] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row["tel_operadora"] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row["tel_numero"] . "</td>";
 echo "</tr>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='6'>No existen usuarios registradas en el sistema</td>";
 echo "</tr>";
 }

 $conn->close(); 
 ?>
</table>   
</body>
</html>