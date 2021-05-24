<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/vista/Estilos/ventanas.css">
    <script type="text/javascript" src="buscar_telefono.js"></script>
    <link rel="icon" type="image/png" href="../vista/imagenes/icono.png" sizes="16x16">
    <title>USUARIO</title>
</head>
<body> 
<header>
        <h1>LISTA DE TELÉFONOS</h1>
    </header>
    <form  onsubmit="return buscarPorTelefono()()">

    <div id="boton" >   
    <input type="button" id="agregar" name="agregar" value="AGREGAR" onclick="location.href='Ventana_Agregar_telefono.php';">
    <input type="text" id="telefono" name="telefono" >
    <input type="button" id="buscar" name="buscar" value="BUSCAR" onclick="buscarPorTelefono()">
    </div>
    </form>
    <div id="informacion"> </div>
    <br>
    <table style="width:100% " >
    <tr> 
        <th><font color=#FFFFFF>Tipo Teléfono</th>
        <th><font color=#FFFFFF>Operador</th>
        <th><font color=#FFFFFF>Número</th>
    </tr> 

 <?php
 
 include '../../../config/ConexionBD.php'; 
 $consulta="SELECT * FROM usuario ";
  $res=$conn->query($consulta);
  if($res->num_rows>0){
     while($row = $res->fetch_assoc()){
         $codigo = ($row["usu_codigo"]);
     }
  }
 
$sql = "SELECT * FROM telefono where usu_codigo='$codigo'";

 $result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td><font color=#FFFFFF>" . $row['tel_tipo_telefono'] . "</td>";
 echo " <td><font color=#FFFFFF>" . $row['tel_operadora'] ."</td>";
 echo " <td><font color=#FFFFFF>" . $row['tel_numero'] . "</td>";
 echo " <td> <a = href='Ventana_Modificar_telefono.php?codigo=" . $row['tel_codigo']."'>Actualizar</a> </td>";
 echo " <td> <a = href='Ventana_Eliminar_telefono.php?codigo=" . $row['tel_codigo']."'>Eliminar</a> </td>";
 echo "</tr>";
 }
 $conn->close(); 
 ?>
 </table>

</body>
</html>