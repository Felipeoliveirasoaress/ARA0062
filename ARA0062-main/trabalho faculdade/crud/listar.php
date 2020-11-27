<?php
	include_once "banco.php";

	$query = "SELECT * FROM conta";
	$result = mysqli_query($conexao, $query);

	while ($row = mysqli_fetch_array($result)) {
		echo "
			<tr>
				<td>".$row['con_email']."</td>
				<td>".$row['con_senha']."</td>
				<td><a style='text-decoration: none' class='text-danger' href='deletar.php?id=".$row['con_id']."'>x</a></td>
			</tr>
		";
	}
?>