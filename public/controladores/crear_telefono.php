<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear Nuevo dato telefónico</title>
 <style type="text/css" rel="stylesheet">
 .error{
 color: red;
 }
 </style>
</head>
<body>
 <?php 
 //incluir conexión a la base de datos
 include '../../config/ConexionBD.php'; 
 $tipoTelefono = $_POST["tipo"];
 $operador = isset($_POST["operador"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
 $numero = isset($_POST["numero"]) ? trim($_POST["numero"]): null;
 $sql = "INSERT INTO telefono VALUES (0, '$tipoTelefono', '$operador', '$numero',null)"; 
 if ($conn->query($sql) === TRUE) {
 echo "<p>Se ha creado los datos telefónicos correctamemte!!!</p>"; 
 } else {
 if($conn->errno == 1062){
 echo "<p class='error'>El numero de telefóno $numero ya esta registrada en el sistema </p>"; 
 }else{
 echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
 } 
 }
 
 //cerrar la base de datos
 $conn->close();
 echo "<a href='../vista/crear_Telefono.html'>Regresar</a>";
 ?>
</body>
</html>