<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Eliminar datos de persona </title>

</head>
<body>
<?php
 //incluir conexión a la base de datos
 include '../../../config/conexionBD.php'; 
 $codigo = $_POST["codigo"]; 
 
 //Si voy a eliminar físicamente el registro de la tabla
 
 date_default_timezone_set("America/Guayaquil");
 $fecha = date('Y-m-d H:i:s', time());
// $sql = "UPDATE usuario SET usu_eliminado = 'S', usu_fecha_modificacion = '$fecha' WHERE
//usu_codigo = $codigo";
$sql = "DELETE FROM telefono WHERE tel_codigo = '$codigo'";
 if ($conn->query($sql) === TRUE) { 
 echo "<p>Se ha eliminado los datos correctamemte!!!</p>"; 
 //header('location:../../../public/vista/Ventana_user.');
 } else { 
 echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>"; 
 }
 
 echo "<a href='../../../public/vista/Index.html'>Regresar</a>";
 $conn->close(); 
?>
</body>
</html>