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
 <th><font color=#FFFF>CEDULA</th>
 <th><font color=#FFFF>NOMBRES</th> 
 <th><font color=#FFFF>APELLIDOS</th>
 <th><font color=#FFFF>DIRECCION</th>
 <th><font color=#FFFF>TIPO PERSONA</th> 
 <th><font color=#FFFF>CORREO</th> 
 <th><font color=#FFFF>TIPO TELEFONO</th>
 <th><font color=#FFFF>OPERADORA</th>
 <th><font color=#FFFF>NUMERO</th> 
  </tr>";
 if ($result->num_rows > 0) { 
 while($row = $result->fetch_assoc()) {
$codigo=$row['usu_codigo'];
$sql1="SELECT * FROM usuario,telefono where usuario.usu_codigo=$codigo and telefono.usu_codigo=$codigo";
$conn->query($sql1);
echo($sql1);
 echo "<tr>"; 
 echo " <td><font color=#FFFFFF>" . $row['usu_cedula'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_nombres'] ."</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_apellidos'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_direccion'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['usu_tipo_persona'] . "</td>"; 
 echo " <td><font color=#FFFFFF>" . $row['usu_correo'] . "</td>"; 
 echo " <td><font color=#FFFFFF>" . $row['tel_tipo_telefono'] . "</td>"; 
 echo " <td><font color=#FFFFFF>" . $row['tel_operadora'] . "</td>"; 
 echo " <td><font color=#FFFFFF>" . $row['tel_numero'] . "</td>"; 
 echo "</tr>";  
 
} 
 } else { 
 echo "<tr>";
 echo " <td colspan='9'><font color=#FFFFFF> No existen usuarios registradas en el sistema </td>";
 echo "</tr>"; 
 }
 echo "</table>";
 $conn->close(); 
 
?>