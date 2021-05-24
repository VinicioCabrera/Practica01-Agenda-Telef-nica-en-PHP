<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/vista/Estilos/ventanas.css">
    <script type="text/javascript" src="buscar_cedula.js"></script>
    <link rel="icon" type="image/png" href="../vista/imagenes/icono.png" sizes="16x16">
    <title>USUARIO</title>
</head>
<body> 
<header>
        <h1>LISTA DE TELÉFONOS</h1>
    </header>
    <form id="mandar" method="POST" action="Ventana_Agregar_telefono.php">
    <?php echo'<input type="hidden" id="codigo" name="codigo" value="'.$_POST['codigo'].'">' ?> 
    <input type="submit" id="agregar" name="agregar" value="AGREGAR" >
    
    <table style="width:100% " >
    <tr> 
        <th><font color=#FFFFFF>Tipo Teléfono</th>
        <th><font color=#FFFFFF>Operador</th>
        <th><font color=#FFFFFF>Número</th>
    </tr> 

 <?php
 $codigo=$_POST['codigo'];
 include '../../../config/ConexionBD.php'; 
 
$sql = "SELECT * FROM telefono where usu_codigo='$codigo'";

 $result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {
 
 echo "<tr>";
 echo " <td><font color=#FFFFFF>" . $row['tel_tipo_telefono'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['tel_operadora'] ."</td>";
 echo " <td><font color=#FFFFFF>" . $row['tel_numero'] . "</td>";
 echo " <td> <a = href='Ventana_Modificar_telefono.php?codigo=" . $row['usu_codigo']."&codigo1=".$row['tel_codigo']."'>Actualizar</a> </td>";
 
 echo "</tr>";
 }
 $conn->close(); 
 ?>
 </table>

</body>
</html>