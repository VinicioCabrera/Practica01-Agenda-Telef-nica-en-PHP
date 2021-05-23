<?php
 //incluir conexión a la base de datos
 include "../../../config/ConexionBD.php";
 $cedula = $_GET['cedula']; 

 //echo "Hola " . $cedula; 
 
 $sql = "SELECT * FROM usuario WHERE usu_cedula='$cedula'";

 


//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 
 echo " <table style='width:100%'>
 <tr>
 <th>Cedula</th>
 <th>Nombres</th> 
 <th>Apellidos</th>
 <th>Dirección</th>
 <th>Tipo Persona</th> 
 <th>Correo</th> 
 <th>Tipo telefono</th>
 <th>Operadora</th>
  <th>Numero</th> 
  </tr>";
 if ($result->num_rows > 0) { 
 while($row = $result->fetch_assoc()) {
$codigo=$row['usu_codigo'] . "</td>";
$sql1="SELECT * FROM usuario,telefono where usuario.usu_codigo=$codigo and telefono.usu_codigo=$codigo";
$conn->query($sql1);
echo($sql1);
 echo "<tr>"; 
 echo " <td>" . $row['usu_cedula'] . "</td>";
 echo " <td>" . $row['usu_nombres'] ."</td>";
 echo " <td>" . $row['usu_apellidos'] . "</td>";
 echo " <td>" . $row['usu_direccion'] . "</td>";
 echo " <td>" . $row['usu_tipo_persona'] . "</td>"; 
 echo " <td>" . $row['usu_correo'] . "</td>"; 
 echo " <td>" . $row['tel_tipo_telefono'] . "</td>"; 
 echo " <td>" . $row['tel_operadora'] . "</td>"; 
 echo " <td>" . $row['tel_numero'] . "</td>"; 
 echo "</tr>";  
 
} 
 } else { 
 echo "<tr>";
 echo " <td colspan='9'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>"; 
 }
 echo "</table>";
 $conn->close(); 
 
?>