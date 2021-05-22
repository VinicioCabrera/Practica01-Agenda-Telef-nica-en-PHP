<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title></title>
 <style type="text/css" rel="stylesheet">
 .error{
 color: red;
 }
 </style>
</head>
<body>
 <?php 
 include '../../config/ConexionBD.php'; 
$sql = if(!NULL==filter_input(INPUT_POST,'ingresar')){ 
    $consulta="SELECT * FROM usuario WHERE usu_correo='$correo'";
    $res=$conecta->query($consulta);
    if($res->num_rows>0){
       while($row = $res->fetch_assoc()){
          echo($row["usu_cedula"].'<br>');
          echo($row["usu_nombres"].'<br>');
          echo($row["usu_apellidos"].'<br>');
          echo($row["usu_direccion"].'<br>');
          $tipo=($row["usu_tipo_persona"]);
          echo($row["usu_correo"].'<br>');
          echo($row["usu_password"].'<br>');
          echo($row["usu_fecha_creacion"].'<br>');
          echo($row["usu_fecha_modificacion"].'<br>');
       }
    }
        if($tipo.equals("Admin")){
            opendir('../vista/Ventana_admin.html');
        }else if($tipo.equals("User")){
            opendir('../vista/Ventana_user.html');
        }else{
            alert("Usuario Anonimo");
        }
$conn->close();
echo "<a href='../vista/Index.html'>Regresar</a>";
?>
</body>
</html>















<!-- if ($conn->query($sql) === TRUE) {
     echo "<p>Inicio de sesion correctamemte!!!</p>"; 
} else {
if($conn->errno == 1062){
    echo "<p class='error'>Usuario no registrada en el sistema </p>"; 
}else{
echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
} 
}

$conn->close();
echo "<a href='../vista/crear_Usuario.html'>Regresar</a>";
?>
</body>
</html>
  -->