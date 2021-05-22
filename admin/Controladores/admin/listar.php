<!DOCTYPE html>
<html>
<head> 
 <meta charset="UTF-8">
 <title>Listar usuarios</title>
 
</head>
<body>
 
 <table style="width:100% " >
 <tr>
 <th>Cedula</th>
 <th>Nombres</th>
 <th>Apellidos</th>
 <th>Dirección</th>
 <th>Tipo Persona</th>
 <th>Correo</th>
 </tr>
 <?php
 
 include '../../../config/ConexionBD.php'; 
 $sql = "SELECT * FROM usuario";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo " <td>" . $row["usu_cedula"] . "</td>";
 echo " <td>" . $row['usu_nombres'] ."</td>";
 echo " <td>" . $row['usu_apellidos'] . "</td>";
 echo " <td>" . $row['usu_direccion'] . "</td>";
 echo " <td>" . $row['usu_tipo_persona'] . "</td>";
 echo " <td>" . $row['usu_correo'] . "</td>"; 
 
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