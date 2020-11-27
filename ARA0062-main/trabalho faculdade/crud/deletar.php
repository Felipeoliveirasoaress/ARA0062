<?php
	include_once "banco.php";

	$id = $_GET['id'];

	$query = "DELETE FROM conta WHERE con_id = '$id'";
	$result = mysqli_query($conexao, $query);

	header("location: index.php")
?>