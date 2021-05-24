<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear Nuevo Usuario</title>
 <style type="text/css" rel="stylesheet">
 .error{
 color: red;
 }
 </style>
</head>
<body>
 <?php 

 include '../../../config/ConexionBD.php'; 
 $codigo=$_POST['codigo'];
 $tipotelefono = isset($_POST["tipotelefono"]) ? mb_strtoupper(trim($_POST["tipotelefono"]), 'UTF-8') : null;
 $Operadora = isset($_POST["operadora"]) ? mb_strtoupper(trim($_POST["operadora"]), 'UTF-8') : null;
 $numero = isset($_POST["numero"]) ? mb_strtoupper(trim($_POST["numero"]), 'UTF-8') : null;
 
  $sql = "INSERT INTO telefono VALUES (0, '$tipotelefono', '$Operadora', $numero,$codigo)"; 
  if ($conn->query($sql) === TRUE) {
     echo "<p>Se ha creado los datos personales correctamemte!!!</p>"; 
  }else{
  echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
 } 

 $conn->close();

 ?>
</body>
</html>