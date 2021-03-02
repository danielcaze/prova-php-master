<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
</head>
<link href="style.css" type="text/css" rel="stylesheet">
<link rel="shortcut icon" href="https://www.themes.pizza/wp-content/uploads/2018/02/pizza-favicon.png"><body>
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
		<h1 id="fonte">Login</h1>
		<form action="login.php" method="POST"> 
			<p><input type="text" name="userlogin" maxlength="20" size="30" placeholder="Usuário" class="form-control" id="loginpage"></p>
			<p><input type="Password" name="senhalogin" maxlength="15" size="30" placeholder="Senha" id="loginpage"></p>		
			<input type="submit" name="entrar" value="Entrar" id="loginpage">
		</form>
		
	
	<?php
	session_start();
	$conexao = mysqli_connect('127.0.0.1',"root","","Pizzaria");
	
	@$usuario = $_POST['userlogin'];
	@$senha = $_POST['senhalogin'];

	$query = "SELECT nome, senha FROM cliente WHERE nome = '$usuario' AND senha = '$senha'";
	$result = mysqli_query($conexao,$query);
	$linhas = mysqli_num_rows($result);
	@$sessaoerror = $_SESSION['naologado'];
	if($sessaoerror == true){
		echo " <h4 id = fonte1> Usuário ou senha invalidos.</h4>";
	}
	if($linhas == 1){
		header('location: pizza.php');
		$_SESSION['userlogin'] = $usuario;
	}
	else{
		$_SESSION['naologado'] = true;
		
	}
	mysqli_close($conexao);

	?>
	<b><h4 id="fonte">Caso não tenha uma conta:</h4></b>
	<a href="registro.php"><input type="submit" name="entrar" value="Registrar" id="loginpage"></a>
</div>
</body>
</html>
