<?php
	session_start();
	$conexao = mysqli_connect('127.0.0.1',"root","","Pizzaria");
?>
<!DOCTYPE html>
<head>
	<title>Nossos sabores!</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<link rel="shortcut icon" href="https://www.themes.pizza/wp-content/uploads/2018/02/pizza-favicon.png">
</head>
<body>
	<div align="center">
		<div id="logo" align="center">
			<h1 id="nomelogo">PizzaNet</h1>
		</div>
		<br>
		<hr>
		<header class="body1">
			<div class="container" id="div">
				<h2 class="icone">PIZZANET</h2>
					<nav>
						<ul>
							<li><a href="Pizza.php">Início</a></li>
							<li><a href="sabores.php">Pizzas</a></li>
							<li><a href="comprar.php">Comprar</a></li>
							<li><a href="sacola.php">Sacola</a></li>
							<li><a href="login.php">Logar-se</a></li>
							<li><a href="sair.php">Sair</a></li>
						</ul>
					</nav>
			</div>		
		</header>
		<hr>
		
		<h1 id="fonte">Pizzanet</h1>
		<h3 id="fonte"><b>Experimente a melhor pizza do mundo com desconto especial!<br>Peça já a sua!!!</h3>
		<hr>
	</div>
	<div id="loginpage">
	
		<div id="tabela" class="container">
			<?php
			
				 if($_SESSION['userlogin'] == true){
					@$nomeuser = $_SESSION['userlogin'];
					$query = "SELECT cep FROM cliente WHERE nome = '$nomeuser'";
					$result = mysqli_query($conexao,$query);
					$cep = mysqli_fetch_array($result);
					$quantidade = $_SESSION['quantidade'];
					if($quantidade == 1 ||$quantidade == 2 ||$quantidade == 3 ||$quantidade == 4 ||$quantidade == 5){
						echo  "<h1 id=fonte>Obrigado por pedir," . @$nomeuser. "! <br>Entregaremos seu pedido no Cep:".$cep['cep']."</h1>";
					}
					else{
						echo  "<h1 id=fonte>Faça o seu pedido primeiro!</h1>";
						echo "<a href = comprar.php><input type=submit name=entrar value=Comprar id=loginpage></a>";
					}
				}



			?>

    	</div>
	</div>
	<?php
		mysqli_close($conexao);
	?>
</body>
</html>
