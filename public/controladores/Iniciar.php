<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 include '../../config/ConexionBD.php'; 
   
    $correo = isset($_POST["user"]) ? trim($_POST["user"]): null;
    $contrasena = isset($_POST["login"]) ? trim($_POST["login"]) : null;
    $contrasena=MD5($contrasena);
    $consulta="SELECT * FROM usuario WHERE usu_correo='$correo' and usu_password='$contrasena'";
    $res=$conn->query($consulta);
    if($res->num_rows>0){
       while($row = $res->fetch_assoc()){
          echo($row["usu_cedula"].'<br>');
          echo($row["usu_nombres"].'<br>');
          echo($row["usu_apellidos"].'<br>');
          echo($row["usu_direccion"].'<br>');
          $tipo = ($row["usu_tipo_persona"]);
          echo($row["usu_correo"].'<br>');
          echo($row["usu_password"].'<br>');
          echo($row["usu_fecha_creacion"].'<br>');
          echo($row["usu_fecha_modificacion"].'<br>');
       }
    }else {
        $tipo="no";
    }
    $conn->close();
    if($tipo == "ADMIN"){
            header('location: ../vista/Ventana_admin.html');
        }else if($tipo == "USER"){
            header('location: ../vista/Ventana_user.html');
        }else{
           echo("Usuario Anonimo");
        }
?>
</body>
</html>