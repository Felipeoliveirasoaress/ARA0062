<?php
	include_once "banco.php";

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$query = "SELECT * FROM conta WHERE con_email = '$email' AND con_senha = '$senha'";
	$result = mysqli_query($conexao, $query);
	$numRows = mysqli_num_rows($result);

	if($numRows > 0){
		header("location: blog/blog.html");
	}else{
		header("location: index.php?msg");
	}
?>