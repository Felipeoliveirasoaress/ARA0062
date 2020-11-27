<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php
			if(isset($_GET['msg'])){
				echo "
					<div class='row'>
						<div class='col-12 border border-danger mt-2'>
							<h2 class='text-center text-danger'>E-mail e/ou Senha inválido</h2>
						</div>
					</div>
				";
			}
			if(isset($_GET['msg2'])){
				echo "
					<div class='row'>
						<div class='col-12 border border-danger mt-2'>
							<h2 class='text-center text-danger'>Esse e-mail já foi cadastrado</h2>
						</div>
					</div>
				";
			}
		?>
		<div class="row text-light">
			<div class="col-5 mt-3 border bg-primary">
				<form method="POST" action="cadastrar.php">
					<h1 class="text-center mt-3">Cadastro</h1>
					<input type="email" class="form-control mb-5 mt-5" name="email" placeholder="E-mail">
					<input type="password" class="form-control mb-5" name="senha" placeholder="Senha">
					<button type="submit" class="form-control mb-3">Cadastrar</button>
				</form>
			</div>
			<div class="col-2"></div>
			<div class="col-5 mt-3 border bg-success">
				<form method="POST" action="logar.php">
					<h1 class="text-center mt-3">Login</h1>
					<input type="email" class="form-control mb-5 mt-5" name="email" placeholder="E-mail">
					<input type="password" class="form-control mb-5" name="senha" placeholder="Senha">
					<button type="submit" class="form-control mb-3">Logar</button>
				</form>
			</div>
		</div>
		<div class="row">
			<table class="table table-hover text-center mt-5">
				<thead>
					<tr>
						<th class="col-5">E-mail</th>
						<th class="col-5">Senha</th>
						<th class="col-2"></th>
					</tr>
				</thead>
				<tbody>
					<?php include_once "listar.php"; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>