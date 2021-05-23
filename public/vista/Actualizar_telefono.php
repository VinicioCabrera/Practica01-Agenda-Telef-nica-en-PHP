<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form id="formulario" method="POST" action="../../public/controladores/Actualizar_Datos.php" onsubmit="return validarCamposObligatorios()">
 <label for="cedula">Cédula </label>
 <input type="text" id="cedula" name="cedula" value="" placeholder="Ingrese el número de cedula ... " onkeyup="" required />
 <span id="mensajeCedula" class="error"></span>
 <br>

 <label for="nombres">Nombres </label>
 <input type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus dos nombres ..." 
 onkeyup="return validarnombres(this)" required />
 <span id="mensajeNombre" class="error"></span>
 <br>
 
 <label for="apellidos">Apellidos </label>
 <input type="text" id="apellidos" name="apellidos" value="" placeholder="Ingrese sus dos apellidos ..." onkeyup="return validarapellidos(this)"required />
 <span id="mensajeApellido" class="error"></span>
 <br>

 <label for="direccion">Dirección </label>
 <input type="text" id="direccion" name="direccion" value="" placeholder="Ingrese su dirección ..."required />
 <span id="mensajeDireccion" class="error"></span>
 <br>


 <label for="tipo">Tipo Persona </label>
 <select  name="tipo" id="tipo">
     <option> </option>
     <option>ADMIN</option>
     <option>USER</option>
</select>
<span id="mensajeTipo" class="error"></span>
 <br>

 <label for="correo">Correo electrónico </label>
 <input type="email" id="correo" name="correo" value="" placeholder="Ingrese su correo electrónico ..." onkeyup="" required/>
 <span id="mensajeEmail" class="error"></span>
 <br>

 <label for="contrasena">Contraseña </label>
 <input type="password" id="contrasena" name="contrasena" value="" placeholder="Ingrese su contraseña ..."  onkeyup="" required />
 <span id="mensajeContrasena" class="error"></span>
 <br>

<div id="boton">
 <input type="submit" id="crear" name="crear" value="Aceptar" />
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" onclick="limpiar()" />
</div>
</form>
</body>
</html>