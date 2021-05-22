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

 include '../../config/ConexionBD.php'; 
 $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
 $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
 $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null;
 $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
 $tipoPersona = $_POST["tipo"] ? mb_strtoupper(trim($_POST["tipo"]), 'UTF-8') : null;
 $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
 $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;

  $sql = "INSERT INTO usuario VALUES (0, '$cedula', '$nombres', '$apellidos', '$direccion', '$tipoPersona', 
  '$correo', MD5('$contrasena'), 'N', null, null)"; 

  if ($conn->query($sql) === TRUE) {
  echo "<p>Se ha creado los datos personales correctamemte!!!</p>"; 
  header("location: ../vista/Index.php?m=1");

  } else if($conn->error == 1062){
  echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>"; 
  }else{
  echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
 } 
  $conn->close();

 ?>
</body>
</html>