<?php
include '../../../config/ConexionBD.php';
$codigo=$_POST['codigo'];
$sql="SELECT * FROM usuario where usu_codigo='$codigo' ";
$res=$conn->query($sql);
if($res->num_rows>0){   
    while($row = $res->fetch_assoc()){  
 //echo($row["usu_password"].'<br>');
 $contraold = MD5($_POST['oldcontrasena']);
 $contranueva = MD5($_POST['contrasena']);
 if($contraold==$row["usu_password"]){
 $sql1="UPDATE usuario " .
 "SET usu_password = '$contranueva' WHERE usu_codigo='$codigo' ";
 $conn->query($sql1);
 echo "<p>La contraseña se actualizado correctamente!!! </p>";

 }else{
   echo "<p>La contraseña actual no coincide con nuestros registros!!! </p>"; 
 }
 echo "<a href='../../../public/vista/Index.html'>Regresar</a>";
}
}
$conn->close();
?>