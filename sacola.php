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
	<?php
	
		if($_SESSION['userlogin'] == true){
			$nomeuser = $_SESSION['userlogin'];
			$Ptamanho = $_SESSION['tamanho_pizza'];
			$Psabor1 = $_SESSION['sabor1_pizza'];
			$Psabor2 = $_SESSION['sabor2_pizza'];
			$quantidade = $_SESSION['quantidade'];
		}
		@$valor = 1 * $quantidade;
		if($Ptamanho == 'Pequena'){
			$valor2 = $valor * 25;
		}
		else if($Ptamanho == 'Media'){
			$valor2 = $valor * 30;
		}
		else if($Ptamanho == 'Grande'){
			$valor2 = $valor * 40;
		}
		else if($Ptamanho == 'Gigante'){
			$valor2 = $valor * 50;
		}
	
	
	?>
	<div id="tabela" class="container">
                <h1 id="fonte" align="center">Pedido:</h1>
                <table border="3" width="80%" align="center">
                    <thead>
                    <tr>
                        <th scope="col" id="fonte">Cliente</th>
                        <th scope="col" id="fonte">Tamanho</th>
                        <th scope="col" id="fonte">Sabor 1</th>
						<th scope="col" id="fonte">Sabor 2</th>
						<th scope="col" id="fonte">Quantidade</th>
						<th scope="col" id="fonte">Valor</th>
                    </tr>
                    </thead>
                    <tr>
                        <td><?php echo $nomeuser;?></td>
                        <td><?php echo $Ptamanho;?></td>
						<td><?php echo $Psabor1;?></td>
                        <td><?php echo $Psabor2;?></td>
						<td><?php echo $quantidade;?></td>
						<td><?php echo "R$".@$valor2.",00";?></td>

                    </tr>
                </table>
				<br>
				<div align = "center" id = "tabela2">
				<a href = "finalizar.php"><input type="submit" name="entrar" value="Finalizar Pedido" id="loginpage"></a>
				</div>
            </div>
	</div>
	<?php
		mysqli_close($conexao);
	?>
</body>
</html>
