function validarCamposObligatorios(){
 var campo = true

 for(var i = 0; i < document.forms[0].elements.length; i++){
 var elemento = document.forms[0].elements[i]
 if(elemento.value == '' && elemento.type == 'text'){
 if(elemento.id == 'cedula'){
 document.getElementById('mensajeCedula').innerHTML = '<br>La cédula esta vacia'
} 
if (elemento.id == 'nombres') {
    document.getElementById('mensajeNombre').innerHTML = '<br>Los nombres estan vacíos'
} 
if (elemento.id == 'apellidos') {
    document.getElementById('mensajeApellidos').innerHTML = '<br>Los apellidos estan vacíos'
}

if (elemento.id == 'direccion') {
    document.getElementById('mensajeDireccion').innerHTML = '<br>La dirección esta vacía'
} 

if (elemento.id == 'tipo') {
    document.getElementById('mensajeTipo').innerHTML = '<br>El campo tipo persona esta vacío'
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
                        if((miAscii >= 97 && miAscii <= 122 )|| (miAscii>=64 && miAscii<=90) ||miAscii ==32 ){ 
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
                        if((miAscii >= 97 && miAscii <= 122 )|| (miAscii>=64 && miAscii<=90) ||miAscii ==32 ){ 
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
function limpiar() {
    location.reload();
}
function validar(elemento) {
    var cad = document.getElementById("cedula").value.trim();
    var total = 0;
    var longitud = cad.length;
    var longcheck = longitud - 1;

    if(elemento.value.length > 0){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1)
        console.log(miAscii)

        if (miAscii >= 48 && miAscii <= 57) {
            
            
        } else {
            elemento.value = elemento.value.substring(0, elemento.value.length-1)
            document.getElementById('mensajeCedula').innerHTML = '<br>Solo se permite Números'
 return false
        }
    }
    
    if (cad !== "" && longitud === 10){
      for(i = 0; i < longcheck; i++){
        if (i%2 === 0) {
          var aux = cad.charAt(i) * 2;
          if (aux > 9) aux -= 9;
          total += aux;
        } else {
          total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
        }
      }

      total = total % 10 ? 10 - total % 10 : 0;

      if (cad.charAt(longitud-1) == total) {
        document.getElementById("mensajeCedula").innerHTML = ("Cedula Válida");
      }else{
        document.getElementById("mensajeCedula").innerHTML = ("Cedula Inválida");
      }
    }
  }
  function validarEmail(elemento){

    var texto = document.getElementById(elemento.id).value;
    var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    
    if (!regex.test(texto)) {
        document.getElementById("mensajeEmail").innerHTML = "Correo invalido";
    } else {
      document.getElementById("mensajeEmail").innerHTML = "";
    }
  
  }

  function validar_clave(contrasena)
  {
    var contrasena = document.getElementById("contrasena").value;
      if(contrasena.length >= 8)
      {		
          var mayuscula = false;
          var minuscula = false;
          var numero = false;
          var caracter_raro = false;
          
          for(var i = 0;i<contrasena.length;i++)
          {
              if(contrasena.charCodeAt(i) >= 65 && contrasena.charCodeAt(i) <= 90)
              {
                  mayuscula = true;
              }
              else if(contrasena.charCodeAt(i) >= 97 && contrasena.charCodeAt(i) <= 122)
              {
                  minuscula = true;
              }
              else if(contrasena.charCodeAt(i) >= 48 && contrasena.charCodeAt(i) <= 57)
              {
                  numero = true;
              }
              else 
              {
                  caracter_raro = true;
              }
          }
          if(mayuscula == true && minuscula == true && caracter_raro == true && numero == true)
          {
            document.getElementById("mensajeContrasena").innerHTML = "Contraseña Segura";
              return true;
          }
      }
      document.getElementById("mensajeContrasena").innerHTML = "Contraseña poco Segura";
      return false;
      
  }

   
