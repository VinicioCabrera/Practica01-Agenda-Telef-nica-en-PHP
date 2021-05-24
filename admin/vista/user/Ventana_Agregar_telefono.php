<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../public/vista/Estilos/Estilo_crear_usuario.css">
    <link rel="icon" type="image/png" href="../../public/vista/imagenes/icono.png" sizes="16x16">
    <title>AGREGAR TELEFONO</title>
</head>
<body>
    <header>
        <h1>AGREGAR TELEFONO</h1>
    </header><br>

<?php
 $codigo = $_POST["codigo"];
 
?>
<form id="formulario" method="POST" action="../../controladores/user/agregar_telefono.php" >
 <?php echo'<input type="hidden" id="codigo" name="codigo" value="'.$codigo.'">'?> 

 <label for="tipotelefono">Tipo telefono </label>
 <select  name="tipotelefono" id="tipotelefono">
    <option > </option> 
    <option >CELULAR</option> 
    <option >CONVENCIONAL</option>
</select>
<span id="mensajeTipo" class="error"></span>
 <br>
 <label for="operadora">Operadora</label>
 <input type="text" id="operadora" name="operadora" value="" placeholder="Ingrese operadora ..."required />
 <span id="mensajeDireccion" class="error"></span>
 <br>
 <label for="numero">Numero</label>
 <input type="text" id="numero" name="numero" value="" placeholder="Ingrese numero telefonico ..."required />
 <span id="mensajeDireccion" class="error"></span>
 <br>
 <div id="boton">
 <input type="submit" id="agregar" name="agregar" value="Agregar"  />
 <!-- <input type="button" id="modificar" name="modificar" value="Modificar" onclick="location.href='../../controladores/user/modificar_telefono.php';" /> -->
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" onclick="location.href='../../../public/vista/Ventana_user.php';"/>
 </div>
</form>

</body>
</html>