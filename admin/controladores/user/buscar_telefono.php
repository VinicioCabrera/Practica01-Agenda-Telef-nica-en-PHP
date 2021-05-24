<?php
 //incluir conexión a la base de datos
 include "../../../config/ConexionBD.php";
 $telefono = $_GET['telefono']; 

 //echo "Hola " . $cedula; 
 
 $sql = "SELECT * FROM telefono WHERE tel_numero='$telefono'";

 


//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 
 echo " <table style='width:100%'>
 <tr>
 <th><font color=#FFFFFF>Tipo Teléfono</th>
 <th><font color=#FFFFFF>Operador</th>
 <th><font color=#FFFFFF>Número</th>
  </tr>";
 if ($result->num_rows > 0) { 
 while($row = $result->fetch_assoc()) {
$codigo=$row['tel_codigo'];
$sql1="SELECT * FROM telefono where tel_codigo=$codigo";
$conn->query($sql1);
echo($sql1);
 echo "<tr>"; 
 echo " <td><font color=#FFFFFF>" . $row['tel_tipo_telefono'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['tel_operadora'] ."</td>";
 echo " <td><font color=#FFFFFF>" . $row['tel_numero'] . "</td>";
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