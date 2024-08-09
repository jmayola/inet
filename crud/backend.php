<?php
include "../database/connection.php";
if($_POST){
		$usuario= $_POST["usuario"];
		$contra = $_POST["contraseña"];
		$contra2 = $_POST["contraseña2"];
		$apellido = $_POST["apellido"];
		$segundonombre = $_POST["segundonombre"];
		$escuela= $_POST["escuela"];
		$curso = $_POST["curso"];
		if($contra == $contra2){
			$query = $connection->prepare("INSERT INTO users (username,password,surname,lastname,school,grade) VALUES(?,?,?,?,?,?)");
			$query->bind_param("sssssi",$usuario,$contra ,$apellido,$segundonombre,$escuela,$curso);
			$query->execute();
		}
		else{
		echo "contraseña incorrecta";
		}
		}
	else{
		echo "Query enviada";
	}
?>

