function validarCamposObligatorios()
{
 var campo = true

 for(var i = 0; i < document.forms[0].elements.length; i++){
 var elemento = document.forms[0].elements[i]
 if(elemento.value == '' && elemento.type == 'text'){
 if(elemento.id == 'cedula'){
 document.getElementById('mensajeCedula').innerHTML = '<br>La cédula esta vacia'
} 
if (elemento.id == 'nombres') {
    document.getElementById('mensajeNombres').innerHTML = '<br>Los nombres estan vacíos'
} 
if (elemento.id == 'apellidos') {
    document.getElementById('mensajeApellidos').innerHTML = '<br>Los apellidos estan vacíos'
}

if (elemento.id == 'direccion') {
    document.getElementById('mensajeDireccion').innerHTML = '<br>La dirección esta vacía'
} 

if (elemento.id == 'telefono') {
    document.getElementById('mensajeTelefono').innerHTML = '<br>El teléfono está vacío'
}

if (elemento.id == 'correo') {
    document.getElementById('mensajeCorreo').innerHTML = '<br>El correo esta vacío'
} 

if (elemento.id == 'contrasena') {
    document.getElementById('mensajeContrasena').innerHTML = '<br>La contraseña esta vacía'

 }
 elemento.style.border = '1px red solid'
 elemento.className = 'error'
 campo = false
 }
 }

 if(!campo){
 alert('Error: revisar los comentarios')
 }
 return campo
}



function validarnombres(elemento){
    var nombres=document.getElementById("nombres").value;
         a=nombres.split(" ").length
                     if(a>2){
                            elemento.value = elemento.value.substring(0, elemento.value.length-1)
                            document.getElementById('mensajeNombre').innerHTML = '<br>Solo se permite dos Nombres'
                    }
                    if(elemento.value.length > 0){ 
                        var miAscii = elemento.value.charCodeAt(elemento.value.length-1) 
                        console.log(miAscii) 
                        if(miAscii >= 97 && miAscii <= 122 || miAscii>=64 && miAscii<=90 || miAscii ==32){ 
                            return true 
                            
                        }else { 
                            elemento.value = elemento.value.substring(0, elemento.value.length-1)
                            document.getElementById('mensajeNombre').innerHTML = '<br>Solo se permite Letras'
                            return false 
                        } 
                    
                    }else{ 
                        return true 
                        
                    } 

}                    

function validarapellidos(elemento){
    var apellidos=document.getElementById("apellidos").value;
         p=apellidos.split(" ").length
            
            if(p>2){
                elemento.value = elemento.value.substring(0, elemento.value.length-1)
                document.getElementById('mensajeApellido').innerHTML = '<br>Solo se permite dos Apellidos'
            }
                if(elemento.value.length > 0){ 
                    var miAscii = elemento.value.charCodeAt(elemento.value.length-1) 
                    console.log(miAscii) 
                        if(miAscii >= 97 && miAscii <= 122 || miAscii>=64 && miAscii<=90 || miAscii ==32){ 
                            return true 
                            
                        }else { 
                            elemento.value = elemento.value.substring(0, elemento.value.length-1)
                            document.getElementById('mensajeApellido').innerHTML = '<br>Solo se permite Letras'
                            return false 
                        } 
                    
                }else{ 
                        return true 
                        
                } 

} 

function validarTelefono(elemento){
   var telefono=document.getElementById("telefono").value;
   if(telefono.length >=11){
        elemento.value = elemento.value.substring(0, elemento.value.length-1)
        document.getElementById('mensajeTelefono').innerHTML = '<br>Solo se permite 10 Números'
       return false
   }
    if(elemento.value.length > 0){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1)
        console.log(miAscii)

        if (miAscii >= 48 && miAscii <= 57) {
            
            
        } else {
            elemento.value = elemento.value.substring(0, elemento.value.length-1)
            document.getElementById('mensajeTelefono').innerHTML = '<br>Solo se permite Números'
 return false
        }
    }
}