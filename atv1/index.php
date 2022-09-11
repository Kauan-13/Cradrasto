<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Cadastrar Funcionários </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center><h1>Cradastrar Funcionários</h1></center>
	<section>
		<form method="post" action="cad.php">
			<p> Identificador: <input type="number" name="id"></p>
			<p> Nome: <input type="text" name="nome"></p>
			<p> Cargo: <input type="text" name="cargo"></p>
			<p> Salário: <input type="number" name="salario"></p>
			<p> Dependentes: <input type="number" name="depende"></p>
			<div>
				<button type="submit"> Gravar Dados </button>
				<a href='bancoDados.php'><button class="btD" type="button"> Banco de Dados </button></a>
			</div>
		</form>
	</section>
</body>
</html>