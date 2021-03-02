<!DOCTYPE html>
<html>
<head>
	<title> Registro!</title>
	<meta charset="utf-8">
</head>
<link href="style.css" type="text/css" rel="stylesheet">
<link rel="shortcut icon" href="https://www.themes.pizza/wp-content/uploads/2018/02/pizza-favicon.png">
<body>
	<div align="center">
		<div id="logo" align="center">
			<h1 id="nomelogo">PizzaNet</h1>
		</div>
		<br>
		<hr>
		<h1>Pizzanet</h1>
		<hr>
	</div>
		<div id="loginpage">
		<h1 id="fonte">Registre-se:</h1>
		<form action="registro.php" method="post">
			<fieldset>
				<legend><b>Usuario</b></legend>
						<input type="text" name="user" maxlength="120" size="30" placeholder="Usuário" class="form-control" id="loginpage"></p>
			</fieldset>
			<fieldset>
				<legend><b>Cep</b></legend>
						<input type="text" name="cep" maxlength="9" size="30" placeholder="Cep" class="form-control" id="loginpage"></p>
			</fieldset>
			<fieldset>
				<legend><b>Senha</b></legend>
						<input type="Password" name="senha" maxlength="20" size="30" placeholder="Senha" class="form-control" id="loginpage"></p>
			</fieldset>
						<br><input type="submit" id="loginpage">
		</form>
		
	<p>
	<?php
		$conexao = mysqli_connect('127.0.0.1',"root","","Pizzaria");
		$user;
		$cep;
		$senha;
		$regex1;
		$regex2;
		$regex4;
		
		
		if(isset($_POST['user']) && isset($_POST['cep']) && isset($_POST['senha'])){
			$user = $_POST['user'];
			$cep = $_POST['cep'];
			$senha = $_POST['senha'];
			$regex1 = preg_match("/^[a-zA-Z- ']*$/", $user);
			$regex2 = preg_match('/^[0-9]{5}([- ]?[0-9]{3})?$/', $cep);
			$regex4 = strlen($senha);
			if (($regex1 && $regex2) && ($senha != NULL && ($regex4 > 7 && $regex4 <= 20))){
				
				$sql = "INSERT INTO cliente VALUES ('$user','$cep','$senha')";
				mysqli_query($conexao,$sql);
				mysqli_close($conexao);

				header('location: login.php');	
			}
			else{
					echo "<h4 id=fonte1> Cadastro inválido!<br>Nome apenas com letras e espaços, e senha deve ter 8 caracteres e no máximo 20 </h4>";
			}
		}
	?>
	</p>
	</div>
</body>

</html>
