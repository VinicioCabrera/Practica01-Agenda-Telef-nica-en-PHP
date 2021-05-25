<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../vista/Estilos/ventanas.css">
    <script type="text/javascript" src="buscar_anonimo.js"></script>
    <link rel="icon" type="image/png" href="../vista/imagenes/icono.png" sizes="16x16">
    <title>Anonimo</title>
</head>
<body>
    <header>
        <h1>Buscar Persona</h1>
    </header>

<form  onsubmit="return buscarPorCedula()">

        <div id="boton" >   

            <input type="text" id="cedula" name="cedula"placeholder="Ingresar cedula o correo"/>
            <input type="button" id="buscar" name="buscar" value="BUSCAR" onclick="buscarPorCedula()" >
            
         </div>
         <br>
    </form>
    <div id="informacion"> </div>
    <br> 
</body>
</html>
