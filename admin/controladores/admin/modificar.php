<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
 //incluir conexión a la base de datos
 include '../../../config/ConexionBD.php'; 
 $codigo = $_POST["codigo"];
 $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
 $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
 $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null;
 $tipotelefono = isset($_POST["tipotelefono"]) ? mb_strtoupper(trim($_POST["tipotelefono"]), 'UTF-8') : null;
 $operadora = isset($_POST["operadora"]) ? mb_strtoupper(trim($_POST["operadora"]), 'UTF-8') : null;
 $numero = isset($_POST["numero"]) ? mb_strtoupper(trim($_POST["numero"]), 'UTF-8') : null;
 $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
 $tipoPersona = isset($_POST["tipo"]) ? mb_strtoupper(trim($_POST["tipo"]), 'UTF-8') : null;
 $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
 date_default_timezone_set("America/Guayaquil");
 $fecha = date('Y-m-d H:i:s', time());
 $sql = "UPDATE usuario " .
 "SET usu_cedula = '$cedula', " .
 "usu_nombres = '$nombres', " .
 "usu_apellidos = '$apellidos', " . 
 "usu_direccion = '$direccion', " . 
 "usu_tipo_persona = '$tipoPersona', " .
 "usu_correo = '$correo', " .
 "usu_fecha_modificacion = '$fecha' " .
 "WHERE usu_codigo = '$codigo'";
 if ($conn->query($sql) === TRUE) {
     $sql="UPDATE telefono " .
     "SET tel_tipo_telefono = '$tipotelefono', " .
     "tel_operadora = '$operadora', " .
     "tel_numero = '$numero' " .
     "WHERE usu_codigo = $codigo ";
     if ($conn->query($sql) === TRUE) {    
    echo "Se ha actualizado los datos telefonicos correctamemte!!!<br>"; 
    } else { 
    echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>"; 
    }
     echo "Se ha actualizado los datos personales correctamemte!!!<br>"; 
 } else { 
 echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>"; 
 }
 echo "<a href='../../../public/vista/Ventana_admin.php'>Regresar</a>";

 $conn->close();
?>

</body>
</html>