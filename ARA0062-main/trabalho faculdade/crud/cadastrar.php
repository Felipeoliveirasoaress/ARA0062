<?php
	include_once "banco.php";

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$query = "SELECT * FROM conta WHERE con_email = '$email'";
	$result = mysqli_query($conexao, $query);
	$numRows = mysqli_num_rows($result);

	if($numRows > 0){
		header("location: index.php?msg2");
	}else{
		$query2 = "INSERT INTO conta (con_email, con_senha) VALUES ('$email', '$senha')";
		$result2 = mysqli_query($conexao, $query2);

		header("location: index.php");
	}

?>