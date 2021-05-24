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
 $tipotelefono = isset($_POST["tipotelefono"]) ? mb_strtoupper(trim($_POST["tipotelefono"]), 'UTF-8') : null;
 $operadora = isset($_POST["operadora"]) ? mb_strtoupper(trim($_POST["operadora"]), 'UTF-8') : null;
 $numero = isset($_POST["numero"]) ? mb_strtoupper(trim($_POST["numero"]), 'UTF-8') : null;


    $sql="UPDATE telefono " .
    "SET tel_tipo_telefono = '$tipotelefono', " .
    "tel_operadora = '$operadora', " .
    "tel_numero = '$numero' " .
    "WHERE tel_codigo = $codigo ";
    echo($sql);
    if ($conn->query($sql) === TRUE) {    
   echo "Se ha actualizado los datos telefonicos correctamemte!!!<br>"; 
   } else { 
   echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>"; 
   
   }

     /*echo "Se ha actualizado los datos personales correctamemte!!!<br>"; 
 } else { 
 echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>"; 
 }*/
 echo "<a href='../../../public/vista/Ventana_user.php'>Regresar</a>";

 $conn->close();
?>

</body>
</html>