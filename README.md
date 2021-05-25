
**PRÁCTICA DE LABORATORIO**
 
 
**CARRERA: COMPUTACION**

**ASIGNATURA: HIPERMEDIAL**

**NRO. PRÁCTICA: 	2**

**TÍTULO PRÁCTICA: Resolución de problemas sobre PHP y MySQL** 
 
**OBJETIVO:**  
•	Diseñar adecuadamente elementos gráficos en sitios web en Internet. 

•	Crear sitios web aplicando estándares actuales. 

•	Desarrollar aplicaciones web interactivas y amigables al usuario. 

***INSTRUCCIONES***  
                                                                              
                                                                              
Se pide desarrollar una aplicación PHP que permita implementar una agenda telefónica en donde un usuario de la aplicación podrá gestionar su información y la misma estará disponible para el público. Es decir, cada uno de estos usuarios podrá tener asignado uno o más teléfonos de contacto de diferente tipo y operador, por ejemplo: 

•	El usuario “Juanito” tiene los teléfonos 0998121212 de tipo celular y operadora Movistar; así como también tiene asignado el teléfono 0728222111 de tipo convencional y operador CNT. 
Por lo cual, con base al archivo PHP (Apuntes y ejercicios) se pide realizar los siguientes ajustes: 

![1](https://user-images.githubusercontent.com/49033767/119548275-a7cf8200-bd5b-11eb-858d-aa1a9db7dc4f.png)

• Agregar roles a la tabla usuario. Un usuario puede tener un rol de “admin” o “user”

 ![2](https://user-images.githubusercontent.com/49033767/119548379-c9c90480-bd5b-11eb-890e-660d848a164b.png)

•	Crear una tabla para almacenar los teléfonos de los usuarios 

 ![3](https://user-images.githubusercontent.com/49033767/119548380-ca619b00-bd5b-11eb-87e0-86ac16378116.png)
 
Además, los requerimientos funcionales del sistema son: 
•	Los usuarios “anónimos” pueden registrarse en la aplicación a través de un formulario de creación de cuentas. 

 ![4](https://user-images.githubusercontent.com/49033767/119548382-ca619b00-bd5b-11eb-9075-769c95701842.png)

•	Los usuarios “anónimos”  pueden listar los números de teléfono de un usuario usando su número de cédula o correo electrónico 
 ![5](https://user-images.githubusercontent.com/49033767/119548384-cafa3180-bd5b-11eb-94f7-5ce78c01c45d.png)
![6](https://user-images.githubusercontent.com/49033767/119548386-cafa3180-bd5b-11eb-9f31-1e7da7449704.png)
![7](https://user-images.githubusercontent.com/49033767/119548388-cb92c800-bd5b-11eb-95af-cb2b959257c2.png)
![8](https://user-images.githubusercontent.com/49033767/119548390-cb92c800-bd5b-11eb-842c-3e2e32807941.png)
![9](https://user-images.githubusercontent.com/49033767/119548393-cc2b5e80-bd5b-11eb-9a37-d02f2dab4c95.png)
 
•	Los usuarios “anónimos” podrán llamar por teléfono o enviar un correo electrónico desde el sistema usando enlaces de HTML. 
 
 ![10](https://user-images.githubusercontent.com/49033767/119548396-ccc3f500-bd5b-11eb-8993-78419c15f1e1.png)
![11](https://user-images.githubusercontent.com/49033767/119548398-ccc3f500-bd5b-11eb-83ea-7c47c9ba1fd5.png)
 
•	Un usuario puede iniciar sesión usando su correo y contraseña y podrá: 
a.	Los usuarios con rol de “admin” pueden: agregar, modificar, eliminar, buscar, listar  y cambiar la contraseña de cualquier usuario de la base de datos. 

Lista de usuarios

 ![12](https://user-images.githubusercontent.com/49033767/119548400-cd5c8b80-bd5b-11eb-9643-47db793de9be.png)


1.-Agrega Usuario

 ![13](https://user-images.githubusercontent.com/49033767/119548402-cdf52200-bd5b-11eb-9c5b-1caaaba4d05f.png)
 
2.-Actualiza los datos
 
 ![14](https://user-images.githubusercontent.com/49033767/119548409-cdf52200-bd5b-11eb-8ede-8b145a0cb271.png)
![15](https://user-images.githubusercontent.com/49033767/119548410-ce8db880-bd5b-11eb-8190-0354521153e3.png)
![16](https://user-images.githubusercontent.com/49033767/119548412-ce8db880-bd5b-11eb-9da2-be1665ba38dd.png)
 
3.-Cambiar Contraseña

 ![17](https://user-images.githubusercontent.com/49033767/119548414-cf264f00-bd5b-11eb-9bd0-0df8edcdad02.png)
![18](https://user-images.githubusercontent.com/49033767/119548419-cf264f00-bd5b-11eb-98bf-b99e556f7b16.png)
 
4.-Eliminar Usuario
 
 ![19](https://user-images.githubusercontent.com/49033767/119548420-cf264f00-bd5b-11eb-9a53-549be3111d1a.png)
![20](https://user-images.githubusercontent.com/49033767/119548422-cfbee580-bd5b-11eb-8cc1-d08958f5d7f8.png)
![21](https://user-images.githubusercontent.com/49033767/119548425-cfbee580-bd5b-11eb-9371-6dfcac831e36.png)
 
 
b.	Los usuarios con rol de “user” pueden modificar, eliminar y cambiar la contraseña de su usuario

  ![22](https://user-images.githubusercontent.com/49033767/119548426-d0577c00-bd5b-11eb-8322-3a531c76b8ff.png)

1.-Se procede actualizar la dirección del usuario en este caso por Av. Las Americas
 
 ![23](https://user-images.githubusercontent.com/49033767/119548427-d0577c00-bd5b-11eb-9b45-0bf8fe6f41ae.png)
![24](https://user-images.githubusercontent.com/49033767/119548429-d0f01280-bd5b-11eb-8334-f49c94ba238f.png)
![25](https://user-images.githubusercontent.com/49033767/119548431-d0f01280-bd5b-11eb-8d40-4143a6ad1f46.png)
 

2.- Cambiar la contraseña del usuario

![26](https://user-images.githubusercontent.com/49033767/119548494-e2d1b580-bd5b-11eb-8a3f-3ad00d9c4ecc.png)
 
![27](https://user-images.githubusercontent.com/49033767/119548496-e36a4c00-bd5b-11eb-9c59-230db9875fa7.png)

![28](https://user-images.githubusercontent.com/49033767/119548497-e402e280-bd5b-11eb-8627-b494794ea821.png)

 
 
c.	Los usuarios con rol de “user” pueden agregar, modificar, eliminar, buscar y listar sus teléfonos. 

 ![29](https://user-images.githubusercontent.com/49033767/119548498-e402e280-bd5b-11eb-92d2-f9d13df3a3b8.png)

2.- Agregar teléfonos
 
 ![30](https://user-images.githubusercontent.com/49033767/119548501-e49b7900-bd5b-11eb-8412-44f9760cb34d.png)
![31](https://user-images.githubusercontent.com/49033767/119548505-e5340f80-bd5b-11eb-9059-8f7056663680.png)
![32](https://user-images.githubusercontent.com/49033767/119548507-e5340f80-bd5b-11eb-82bf-1a71973b106e.png)

 
 
 
3.-Actualizamos el numero 1 y cambiamos su operadora a Movistar
 ![33](https://user-images.githubusercontent.com/49033767/119548509-e5cca600-bd5b-11eb-8c4c-62483bcbeff6.png)
 ![34](https://user-images.githubusercontent.com/49033767/119548510-e5cca600-bd5b-11eb-959a-239f4a2946e8.png)
![35](https://user-images.githubusercontent.com/49033767/119548513-e6653c80-bd5b-11eb-8a02-f8475138d4f4.png)

  
3.- Eliminamos el numero uno
 ![36](https://user-images.githubusercontent.com/49033767/119548514-e6653c80-bd5b-11eb-9b6a-c99fc2d9ff73.png)
 ![37](https://user-images.githubusercontent.com/49033767/119548515-e6fdd300-bd5b-11eb-82fe-07c47978790c.png)
![38](https://user-images.githubusercontent.com/49033767/119548517-e6fdd300-bd5b-11eb-9e40-1d1e353cded8.png)

 
 
•	Los datos siempre deberán ser validados cuando se trabaje a través de formularios. 
 
![39](https://user-images.githubusercontent.com/49033767/119548519-e6fdd300-bd5b-11eb-81ae-2817987b0eff.png)
 
	De igual manera, se pide manejar sesiones para que existe seguridad en el sistema de agenda telefónica. Por lo qué, debe existir una parte pública y una privada.  Para lo cuál, se debe tener en cuenta: 
•	Un usuario “anónimo”, es decir, un usuario que no ha iniciado sesión puede acceder únicamente a los archivos de la carpeta pública. 
•	Un usuario con rol de “admin” puede acceder únicamente a los archivos de la carpeta admin ® vista ® admin; y admin ® controladores ® admin  
•	Un usuario con rol de “user” puede acceder únicamente a los archivos de la carpeta admin ® vista ® user; y admin ® controladores ® user 
La parte pública (usuario anónimos) y privada (usuario registrado) ha sido descrita en los requisitos antes planteados. Se debe generar una página con la experiencia e interfaz de usuario apropiada, como la que se muestra a continuación: 
Fig 1. Pagina pública index.html propuesta para el sistema de agenda telefónica  	

                                                                                ACTIVIDADES POR DESARROLLAR  

1. 	Generar el diagrama E-R para la solución de la práctica 

 ![40](https://user-images.githubusercontent.com/49033767/119548520-e7966980-bd5b-11eb-9802-36e3a81df608.png)


2. Crear un repositorio en GitHub con el nombre “Practica01 – Agenda Telefónica en PHP” 

![41](https://user-images.githubusercontent.com/49033767/119548521-e7966980-bd5b-11eb-9179-4169bb1b1f41.png)
![42](https://user-images.githubusercontent.com/49033767/119548522-e7966980-bd5b-11eb-9aed-25795f78f793.png)

 
 
3. Realizar un commit y push por cada requerimiento de los puntos antes descritos. 
 
![43](https://user-images.githubusercontent.com/49033767/119548523-e82f0000-bd5b-11eb-8c96-a76a97f79f09.png)

4. Luego, se debe crear el archivo README del repositorio de GitHub. 

5. Generar informe de los resultados en el formato de prácticas. Debe incluir: 
a.	El diagrama E-R de la solución propuesta. 
b.	Nombre de la base de datos 

 ![44](https://user-images.githubusercontent.com/49033767/119548524-e82f0000-bd5b-11eb-85b3-bea6f84ff69a.png)

c.	Sentencias SQL de la estructura de la base de datos 

d.	El desarrollo de cada uno de los requerimientos antes descritos.  

e.	La evidencia del correcto diseño de las páginas HTML usando CSS. Para lo cuál, se puede generar fotografías instantáneas (pantallazos).  

f.	La evidencia del correcto funcionamiento de cada uno de los puntos requeridos. 

g.	El informe debe incluir conclusiones apropiadas.  

h.	En el informe se debe incluir la información de GitHub (usuario y URL del repositorio de la práctica)  i. 	En el informe se debe incluir la firma digital del estudiante.

  **https://github.com/VinicioCabrera/Practica01-Agenda-Telef-nica-en-PHP**
  
  **VinicioCabrera**
  
6. En el archivo README del repositorio debe constar la misma información del informe de resultados de la práctica que se indica en el punto anterior. 
 
**RESULTADO(S) OBTENIDO(S):** 

• 	Tener el conocimiento suficiente para que el estudiante pueda entender y organizar de una mejor manera los sitios de web y de negocios en Internet 
 
**CONCLUSIONES:**  
• 	En conclusión se puede decir que con la práctica realizada pusimos mejorar nuestro conocimiento y poner en práctica todo lo visto en las clases, como el manejo de sesiones, validaciones con java script, php, aplicación de estilos css para mejorar el entorno de nuestra página web.
 
**RECOMENDACIONES:**  
	• 	Probar la solución de la práctica en al menos tres navegadores web; Google Chrome, Firefox y Safari
 
**REALIZADO POR:**  CARMEN BRAVO Y VINICIO CAMPORVERDE

**FIRMA:**

 ![45](https://user-images.githubusercontent.com/49033767/119548528-e82f0000-bd5b-11eb-9d7b-8d03078c04a3.png)
 
