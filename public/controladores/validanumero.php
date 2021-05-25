<?php 

include '../../config/ConexionBD.php'; 

		$numero=$_POST['numero'];
		$apellido=$_POST['apellido'];
		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);

		if(buscaRepetido($numero)==1){
			echo 2;
		}else{
			$sql="INSERT into usuarios (nombre,apellido,usuario,password)
				values ('$nombre','$apellido','$usuario','$password')";
			echo $result=mysqli_query($conexion,$sql);
		}

 ?>